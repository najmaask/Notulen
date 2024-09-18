<?php

namespace App;

use App\anggota;
use App\admin;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table='laporans';

    protected $fillable =
        [
            'KdLaporan',
            'TglLaporan',
            'KdAnggota',
            'done',
            'problem',
            'todo',
            'KdAdmin' 
        ];

    public function posts(){
        return $this->belongsToMany('App\anggota','App\admin');
    }
     public function anggota()
    {
        return $this->belongsToMany('App\anggota');
    }
}
