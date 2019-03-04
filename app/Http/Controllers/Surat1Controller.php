<?php

namespace App\Http\Controllers;
use App\Surat1;
use App\Surat;
use Illuminate\Http\Request;

class Surat1Controller extends Controller
{
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
    	
        // $surat = "N";
        if($request->hasFile('upload'))
        {
            $destination = "upload";
            $upload = $request->file('upload');
            $upload->move($destination,$upload->getClientOriginalName());
            // $upload= "Y";
        }

        // if($surat=="Y"){
        $surat = new Surat1();
        $surat->tujuan = $request->tujuan;
        $surat->penerima = $request->penerima;
        $surat->perihal = $request->perihal;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->kategori_surat_id = $request->kategori_surat_id;
        $surat->tanggal_surat = $request->tanggal_surat;
        $surat->upload = $upload->getClientOriginalName();
        $surat->save();


        // \App\Surat1::create($request->all());
    // }
        return redirect('/surat1')->with('sukses','Data Berhasil DiInput');
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
   
}

