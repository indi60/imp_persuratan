<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
     protected $table= 'kategori_surat';
      protected $primaryKey='id';
    protected $fillable= ['nama_kategori','singkatan_kategori'];

    public function kategori_surat()
    {
    	return $this->hasOne('App\Surat1', 'kategori_surat_id');
    }
}
