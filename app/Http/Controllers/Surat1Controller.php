<?php

namespace App\Http\Controllers;
use App\Surat1;
use App\Surat;
use Storage;
use Illuminate\Http\Request;

class Surat1Controller extends Controller
{
     public function input1(Request $request)
    {
        if($request->has('cari')){
            $data_surat= \App\Surat1::where('penerima','LIKE',
                '%'.$request->cari.'%')->get();
        }else{
          $data_surat = \App\Surat1::all();  
        }

        $kategori_surat=Surat::all();
        
        return view('surat1.input1',compact('kategori_surat', 'data_surat'));
    }

     public function index1(Request $request)
    {
        if($request->has('cari')){
            $data_surat= \App\Surat1::where('penerima','LIKE',
                '%'.$request->cari.'%')->get();
        }else{
          $data_surat = \App\Surat1::all();  
        }

        $kategori_surat=Surat::all();
    	
    	return view('surat1.index1',compact('kategori_surat', 'data_surat'));
    }
     
      public function create(Request $request)
    {
        $messages = [
    'required' => ':attribute wajib diisi',
];
         $validation = $request->validate([
        'tujuan' => 'required',
        'penerima' => 'required',
        'perihal' => 'required',
        'nomor_surat' => 'required',
        'kategori_surat_id' => 'required',
        'tanggal_surat' => 'required',
        'upload' => 'required|file|mimes:docx,pdf|max:2048'
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
    ],$messages);
    	
           $file = $request->file('upload');

    // generate a new filename. getClientOriginalExtension() for the file extension
    $filename = 'surat-upload-' . time() . '.' . $file->getClientOriginalExtension();

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('public/upload/', $filename);


        // if($surat=="Y"){
        $surat = new Surat1();
        $surat->tujuan = $request->tujuan;
        $surat->penerima = $request->penerima;
        $surat->perihal = $request->perihal;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->kategori_surat_id = $request->kategori_surat_id;
        $surat->tanggal_surat = $request->tanggal_surat;
        $surat->upload = $filename;
        $surat->save();


        return redirect()->route('surat1.index')->with('sukses','Data Berhasil Diinput');

        // \App\Surat1::create($request->all());
    // }
        // Session::flash('masukan file','mohon lengkapi')
          
    }
     public function edit($id)
    {
        $surat = \App\Surat1::find($id);
        $kategori_surat=Surat::all();
        return view('surat1/edit1',compact('kategori_surat','surat'));
    }
    public function update(Request $request,$id)
    {
        $surat= \App\Surat1::find($id);
        $surat->update($request->all());
        return redirect('/surat1')->with('sukses','Data Berhasil Diedit');
    }
     public function delete($id)
    {
    $surat = \App\Surat1::find($id);
    $surat->delete($surat);
    return redirect('/surat1')->with('sukses','Data Berhasil DiHapus');
    }
    public function response(File $file)
    {
        return Storage::response($file->filename);
    }

    /**
     * Download file directly.
     *
     * @param File $file
     * @return void
     */
    public function download(File $file)
    {
        return Storage::download($file->filename, $file->title);
    }

   
}

