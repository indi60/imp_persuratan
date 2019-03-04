<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat1 extends Model
{
    protected $table= 'surat';
    protected $primaryKey='id';
    protected $fillable= ['tujuan','penerima','perihal','nomor_surat','kategori_surat_id','tanggal_surat','upload'];
    protected $guarded =[
    	'created_at','upadate_at',
    ];

	 public function surat()
    {
    	return $this->belongsTo('App\Surat', 'kategori_surat_id');
    }
}