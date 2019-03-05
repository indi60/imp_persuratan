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
									<form action="/surat/create" method="POST">
        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Kategori</label>
				    <input name="nama_kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori">
				     @if ($errors->has('nama_kategori'))
				    <span style=color:red>{{$errors->first('nama_kategori')}}</span>
				    @endif
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Singkatan Kategori</label>
				    <input name="singkatan_kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Singkatan Kategori">
				     @if ($errors->has('singkatan_kategori'))
				    <span style=color:red>{{$errors->first('singkatan_kategori')}}</span>
				    @endif
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
				</div>
			</div>
		</div>
@stop

