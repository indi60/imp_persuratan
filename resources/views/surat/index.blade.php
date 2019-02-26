@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Kategori Surat</h3>
									<div class="right">
	
											<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-pencil"></i></button>
									</div>
											
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Nama Kategori</th>
												<th>Singkatan Kategori</th>
												<th>Aksi</th>
											</tr>
										</thead>
										@foreach($data_kategori_surat as $kategori_surat)
								<tr>
									<td>{{$kategori_surat->nama_kategori}}</td>
									<td>{{$kategori_surat->singkatan_kategori}}</td>
									<td><a href="/surat/{{$kategori_surat->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
									<a href="/surat/{{$kategori_surat->id}}/delete" class="btn btn-danger btn-sm" 
										onclick="return confirm('Yakin Mau Dihapus')">Delete</a>
									</td>	
								</tr>
								@endforeach
										</tbody>
									</table>
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/surat/create" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Kategori</label>
				    <input name="nama_kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori">
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Singkatan Kategori</label>
				    <input name="singkatan_kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Singkatan Kategori">
								    </div>
								     <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>

    
    </div>
  </div>
</div>
@stop

