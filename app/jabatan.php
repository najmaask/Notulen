<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table="jabatans";

    public function admin(){
    	return $this->hasMany('App\admin');
    }
}
