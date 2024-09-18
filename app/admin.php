<?php

namespace App;

use App\jabatan;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\AdminRequest;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	use Notifiable;

    protected $table='admins';

    public function notulen(){
        return $this->belongsToMany('App\notulen');
    }
    public function laporan(){
    	return $this->belongsTo('App\laporan');
    }
    public function jabatan(){
    	return $this->belongsTo('App\jabatan');
    }

    protected $fillable = [
        'KdAdmin', 'NamaAdmin', 'Email', 'NoTlp', 'Jabatan',
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];
}
