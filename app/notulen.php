<?php

namespace App;

use App\admin;
use App\anggota;
use App\Http\Requests\ContohRequet;
use Illuminate\Database\Eloquent\Model;

class notulen extends Model
{
    protected $table='notulens';

    protected $fillable =
     	[
    		'KdNotulen',
            'JudulNotulen',
            'TglNotulen',
            'KdAnggota',
            'IsiNotulen',
            'KdAdmin' 
        ];

    public function posts(){
    	return $this->belongsToMany('App\admin','App\anggota');
    }
     public function anggota()
    {
        return $this->belongsToMany('App\anggota');
    }
}
