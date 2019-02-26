<?php

namespace App\Http\Controllers;
use App\Surat;
use Illuminate\Http\Request;

class Surat1Controller extends Controller
{
     public function index1(Request $request)
    {
        if($request->has('cari')){
            $data_surat= \App\Surat1::where('id','LIKE',
                '%'.$request->cari.'%')->get();
        }else{
          $data_surat = \App\Surat1::all();  
        }

        $kategori_surat=Surat::all();
    	
    	return view('surat1.index1',compact('kategori_surat', 'data_surat'));
    }
      public function create(Request $request)
    {
    	\App\Surat1::create($request->all());
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

