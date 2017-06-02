<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Editoriaal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'incio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'code' => 'string|required',
            'ap_paterno'=>'string|required',
            'ap_materno'=>'string|required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function showRegistrationForm(){
            return view('auth.register');
    }

    protected function register(Request $data)
    {
        if ($data['isEditorial']){
            
             User::create([
            'email'=>$data['code'],
            'password'=>bcrypt($data['password']),
            ]);
             $id= \DB::table('Users')->where('email',$data['code'])
        ->select('Users.id')
         ->get();
            return Editoriaal::create([
                'nombre'=>$data['name'],
                'rfc'=>$data['rfc'],
                'users_id'=>$id[0]->id,
                ]);
        }else{
         User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            ]);
        $id=\DB::table('Users')->where('email',$data['email'])
        ->select('Users.id')
         ->get();

return usuario::create([
    'nombre'=>$data['nombre'],
    'user_id='=>$id[0]->id,
'ap_paterno'=>$data['ap_paterno'],
'ap_materno'=>$data['ap_materno'],
    ]);
        }
    }
}
