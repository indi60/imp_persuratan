@extends('layouts.master')
@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				@if(session('sukses'))
				<div class="alert alert-warning" role="alert">
				  {{session('sukses')}}
				</div>
				@endif
				<div class="row">
					<div class="col-md12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Surat </h3>
								</div>
								<div class="panel-body">
									 <form action="/surat1/{{$surat->id}}/update" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tujuan</label>
				    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan" value="{{$surat->tujuan}}">
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Penerima</label>
				    <input name="penerima" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penerima" value="{{$surat->penerima}}">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Perihal</label>
				    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal" value="{{$surat->perihal}}">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">No Surat</label>
				    <input name="nomor_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Surat" value="{{$surat->nomor_surat}}">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Kategori Surat</label>
				    <select  id="kategori_surat_id" name="kategori_surat_id" class="form-control" 
				     type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Surat" value="{{$surat->kategori_surat_id}}">
				    	@foreach ($kategori_surat as $kategori_surat)
                       <option value="{{$kategori_surat->id}}">{{$kategori_surat->nama_kategori}}</option>
                       @endforeach
                   </select>

								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Tanggal Surat</label>
				    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Surat" value="{{$surat->tanggal_surat}}">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Upload</label>
				    <input name="upload" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload" value="{{$surat->upload}}">
								    </div>
								<button type="submit" class="btn btn-warning">Update</button>
				</form>

									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop

@section('content1')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
		@endif
		<div class="row">
			<div class="col-lg-8"	>
		 <form action="/surat1/{{$surat->id}}/update" method="POST">
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
				    <input name="kategori_surat_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Surat">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Tanggal Surat</label>
				    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Surat">
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Upload</label>
				    <input name="upload" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload">
								    </div>
								<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>		 
      </div>	
	</div>


				</div>
    
    </div>
  @endsection
