<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Surat;

class SuratController extends Controller
{

    public function input(Request $request)
    {
        if($request->has('cari')){
            $data_kategori_surat= \App\Surat::where('nama_kategori','LIKE',
                '%'.$request->cari.'%')->get();
        }else{
          $data_kategori_surat = \App\Surat::all();  
        }
        
        return view('surat.input',['data_kategori_surat' => $data_kategori_surat]);
    }
     public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kategori_surat= \App\Surat::where('nama_kategori','LIKE',
                '%'.$request->cari.'%')->get();
        }else{
          $data_kategori_surat = \App\Surat::all();  
        }
    	
    	return view('surat.index',['data_kategori_surat' => $data_kategori_surat]);
    }
      public function create(Request $request)
    {
         $messages = [
    'required' => ':attribute wajib diisi',
];
          $validation = $request->validate([
        'nama_kategori' => 'required',
        'singkatan_kategori' => 'required'
        
        // for multiple file uploads
        // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
    ],$messages);
    	\App\Surat::create($request->all());
    	return redirect('/surat')->with('sukses','Data Berhasil DiInput');
    }
    public function edit($id)
    {
    	$kategori_surat = \App\Surat::find($id);
    	return view('surat/edit',['kategori_surat' => $kategori_surat]);
    }
    public function update(Request $request,$id)
    {
    	$kategori_surat= \App\Surat::find($id);
    	$kategori_surat->update($request->all());
    	return redirect('/surat')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
    $kategori_surat = \App\Surat::find($id);
    $kategori_surat->delete($kategori_surat);
    return redirect('/surat')->with('sukses','Data Berhasil DiHapus');
    }
}
