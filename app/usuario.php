<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{

	protected $fillable =['nombre','ap_paterno','ap_materno'];
        public function user(){
    	return $this->belongsTo('App\User');
    }
}
