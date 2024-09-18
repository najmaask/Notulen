<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table='statuss';

    public function anggota(){
    	return $this->hasMany('App\anggota');
    }
}
