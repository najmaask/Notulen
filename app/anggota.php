<?php

namespace App;

use App\status;
use App\Http\Requests\AnggotaRequest;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table='anggotas';

    protected $fillable =
     	[
    		'KdAnggota',
            'NamaAnggota',
            'Status',
        ];

     public function notulen()
    {
        return $this->belongsToMany('App\notulen');
    }
     public function laporan()
    {
        return $this->belongsToMany('App\laporan');
    }
    public function status(){
    	return $this->belongsTo('App\status');
    }
}
