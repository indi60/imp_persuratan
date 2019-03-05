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
									<h3 class="panel-title">Input Data Surat </h3>
								</div>
								<div class="panel-body">
									 <form action="{{route('surat1.create')}}" method="POST" enctype="multipart/form-data">
        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tujuan</label>
				    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan">
				    @if ($errors->has('tujuan'))
				    <span style=color:red>{{$errors->first('tujuan')}}</span>
				    @endif
				    </div>
				    <div class="form-group">
				    <label for="exampleInputEmail1">Penerima</label>
				    <input name="penerima" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penerima">
				     @if ($errors->has('penerima'))
				    <span style=color:red>{{$errors->first('penerima')}}</span>
				    @endif
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Perihal</label>
				    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal">
				     @if ($errors->has('perihal'))
				    <span style=color:red>{{$errors->first('perihal')}}</span>
				    @endif
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">No Surat</label>
				    <input name="nomor_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Surat">
				     @if ($errors->has('nomor_surat'))
				    <span style=color:red>{{$errors->first('nomor_surat')}}</span>
				    @endif
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Kategori Surat</label>
				    <select  id="kategori_surat_id" name="kategori_surat_id" class="form-control" 
				     type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Surat">

				    	@foreach ($kategori_surat as $kategori_surat)
                       <option value="{{$kategori_surat->id}}">{{$kategori_surat->nama_kategori}}</option>
                       @endforeach
                   </select>
                    @if ($errors->has('kategori_surat_id'))
				    <span style=color:red>{{$errors->first('kategori_surat_id')}}</span>
				    @endif
						</div>
								    
								    <div class="form-group">
				    <label for="exampleInputEmail1">Tanggal Surat</label>
				    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Surat">
				     @if ($errors->has('tanggal_surat'))
				    <span style=color:red>{{$errors->first('tanggal_surat')}}</span>
				    @endif
								    </div>
								    <div class="form-group">
				    <label for="exampleInputEmail1">Upload</label>
				    <input name="upload" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload">
				     @if ($errors->has('upload'))
				    <span style=color:red>{{$errors->first('upload')}}</span>
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

