<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'inicio';
protected $redirectPath = 'inicio';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
            $this->middleware('guest', ['except' => 'logout']);
    }
        public function showLoginForm()
    {
        return view('auth.login');
    }

  /*  public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('inicio');
    }
*/
  /*  public function login(Request $request)
    {
        
           
               $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
$userdata = array(
'email'=>$request->email,
'password'=>$request->password
    );
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
   $credentials = $request->only('email', 'password');
          
        if (\Auth::attempt($userdata,true)) {
            // Authentication passed...
            return Redirect::to('inicio');
        
            //return view('home');
        }
        return view('auth.login')->with('mesaje');

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
    }*//*
        public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('home');
    }*/

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
    */
    protected function authenticated(Request $request, $user)
    {
        if ($request['editorial']) {
return Redirect()->route('inicio-edi');
        }
        else{
            return Redirect()->route('inicio');
        }
    }
     

}
