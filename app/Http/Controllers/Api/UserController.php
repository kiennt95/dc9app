<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\requestUser;
use App\model\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    //use RegistersUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
      // login here
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            die('fghfh');
            // The user is being remembered...
        }else{
            die('1');
        }
    }


    public function register(requestUser $request)
    {
        // register here
        $user = Users::create([
            'name'              => isset($request->name)?$request->name:'mản',
            'email'             => $request->email,
            'password'          => bcrypt($request->password)
        ]);
        return $user;
    }

}
