<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Foundation\Auth\Editoriaal as Authenticatable;

class Editoriaal extends model{	

//protected $table = "editoriaals";
	protected $fillable =['id','user_id','nombre','rfc']; 
    public function librooos(){
    	return $this->belongsToMany('App\Librooo');
    }
    /**
    * return HasOne
    */
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
