@extends('layouts.master')
@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Kategori Surat </h3>
								</div>
								<div class="panel-body">
									 <form action="/surat/{{$kategori_surat->id}}/update" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				  	<h1>Edit Kategori Surat</h1>
				    <label for="exampleInputEmail1">Nama Kategori</label>
				    <input name="nama_kategori" type="text" class="form-control" id="kategori_surat" aria-describedby="emailHelp" placeholder="Nama Kategori"
				     value="{{$kategori_surat->nama_kategori}}">
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Singatan Kategori</label>
				    <input name="singkatan_kategori" type="text" class="form-control" id="kategori_surat" aria-describedby="emailHelp" placeholder="Singkatan Kategori" value="{{$kategori_surat->singkatan_kategori}}">
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
		 <form action="/surat/{{$kategori_surat->id}}/update" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				  	<h1>Edit Kategori Surat</h1>
				    <label for="exampleInputEmail1">Nama Kategori</label>
				    <input name="nama_kategori" type="text" class="form-control" id="kategori_surat" aria-describedby="emailHelp" placeholder="Nama Kategori"
				     value="{{$kategori_surat->nama_kategori}}">
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Singatan Kategori</label>
				    <input name="singkatan_kategori" type="text" class="form-control" id="kategori_surat" aria-describedby="emailHelp" placeholder="Singkatan Kategori" value="{{$kategori_surat->singkatan_kategori}}">
								    </div>
								<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>		 
      </div>	
	</div>


				</div>
    
    </div>
  @endsection
