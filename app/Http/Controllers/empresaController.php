<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librooo;
use App\subioo;
use App\Editoriaal;
use File;
use Carbon\Carbon;
use Auth;
use App\editoriaal_librooo;

class empresaController extends Controller
{
   	public function index() {
    $id=Auth::user()->id;
    $iddd= \DB::table('editoriaals')->where('user_id',$id)
		->select('editoriaals.id')
         ->get();
	$res=\DB::table('editoriaal_librooos')
	->join('librooos','librooo_id','=','librooos.id')
	->join('Editoriaals','editoriaal_id','=','editoriaals.id')
	->select('librooos.*')
	->where('editoriaals.user_id',$id)
	->get();
//return dd($res);
	//where('fk_libro',$libro->id_libro)->first();
	//$res[0];
	//\Session::put('cart',$cart);
		# code...
	
	//dd($carr);
//	return redirect()->route('inicio',compact($res));

    return view('store.editorial.tabla',compact('res'));
    }
    public function delete($id){
 \DB::table('Librooos')->where('id',$id)->delete();
    //$libro->destroy();
    return redirect()->route('inicio-edi');
/*	$cart =\Session::get('cart');
	unset($cart[$libro->id]);
	\Session::put('cart',$cart);
	return redirect()->route('cart-show');
*/}
	public function showform(){
		return view('store.editorial.formulario');
	}
	public function agregar(Request $request){
     $user=Auth::user()->id;
        $date=Carbon::now()->day.Carbon::now()->month.Carbon::now()->year.Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second;
            $name=$request['image'];
            $file=$name;
            $name=$name->GetClientOriginalName();
            $extension =pathinfo($name, PATHINFO_EXTENSION);
            $fileName=$user."_".$date.".".$extension;
            \Storage::disk('local')->put($fileName, \File::get($file));
            $host= $_SERVER["HTTP_HOST"];
            $url="img/".$fileName;

$namee=$request['archivo'];
$filee=$namee;
$namee=$namee->GetClientOriginalName();
$extensionn = pathinfo($namee,PATHINFO_EXTENSION);
$fileNamee=$user."_".$date.".".$extensionn;
\Storage::disk('local')->put($fileNamee,\File::get($file));
$hostt=$_SERVER["HTTP_HOST"];
$urll="img/".$fileNamee;

         Librooo::create([
            'titulo'=> $request['titulo'],
            'autor'=> $request['autor'],
            'image'=> $url,
            'genero'=> $request['genero'],
            'precio'=> $request['precio'],
            'reseña'=> $request['reseña'],
            //'archivo'=>$urll,
            
        ]);
         $idd = \DB::table('librooos')->where('image',$url)
		->select('librooos.id')
         ->get();
//return $dd($idd[0]->id);
    $iddd= \DB::table('editoriaals')->where('user_id',$user)
        ->select('editoriaals.id')
         ->get();
         editoriaal_librooo::create([
         	'editoriaal_id'=>$iddd[0]->id,
         	'librooo_id'=>$idd[0]->id,
         	]);
         return redirect()->route('inicio-edi');
    }
  /*  //Se ejecutara el metodo show para mostrar en otra pagina el libro seleccionado
    public function show($id){
        $resultado=librooo::where('id',$id)->first();
        //dd($resultado);
            $cart=\Session::get('cart');
    $cantidad=0;
    foreach ($cart as $item) {
        $cantidad ++;
    }
    return view('store.show',compact('resultado','cantidad'));
    }
*/
}
