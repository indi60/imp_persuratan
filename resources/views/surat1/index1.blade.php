@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Surat</h3>
									<div class="right">
	
											<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-pencil"></i></button>
									</div>
											
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												
												<th>Tujuan</th>
												<th>Penerima</th>
												<th>Perihal</th>
												<th>No Surat</th>
												<th>Kategori Surat</th>
												<th>Tanggal Surat</th>
												<th>Upload</th>
												<th>Aksi</th>

											</tr>
										</thead>
										@foreach($data_surat as $surat)
								<tr>
									
									<td>{{$surat->tujuan}}</td>
									<td>{{$surat->penerima}}</td>
									<td>{{$surat->perihal}}</td>
									<td>{{$surat->nomor_surat}}</td>
									<td>{{$surat->surat->nama_kategori}}</td>
									<td>{{$surat->tanggal_surat}}</td>
									<td>{{$surat->upload}}</td>
									<td><a href="/surat1/{{$surat->id}}/edit1" class="btn btn-warning btn-sm">Edit</a>
									<a href="/surat1/{{$surat->id}}/delete" class="btn btn-danger btn-sm" 
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
        <form action="/surat1/create" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tujuan</label>
				    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan">
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Penerima</label>
				    <input name="penerima" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penerima">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Perihal</label>
				    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">No Surat</label>
				    <input name="nomor_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Surat">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Kategori Surat</label>
				    <select  id="kategori_surat_id" name="kategori_surat_id" class="form-control" 
				     type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Surat">
				    	@foreach ($kategori_surat as $kategori_surat)
                       <option value="{{$kategori_surat->id}}">{{$kategori_surat->nama_kategori}}</option>
                       @endforeach
                   </select>
						</div>
								    
								    <div class="form-group">
				    <label for="exampleInputEmail1">Tanggal Surat</label>
				    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Surat">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Upload</label>
				    <input name="upload" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload">
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

