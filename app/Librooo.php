<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
//use App\Editoriaal;

class Librooo extends Model
{
	protected $table = "librooos";
	protected $fillable =['titulo','autor','image','genero','precio','reseña'];
   public function editoriaals()
    {
    	return $this->belongsToMany('App\Editoriaal');
    }
}
