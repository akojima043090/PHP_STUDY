<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
//    protected $redirectTo = '/home';
    protected $redirectTo = '/tasks';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * ログイン
     */
    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            //認証成功処理
            return redirect('/tasks');
        } else {
            return redirect('/');
        }
    }
    /**
     * ログアウト
     *
     * @param Request $request
     * @return Response
     */
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
