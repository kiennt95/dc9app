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
        $login = [];
        if($request->password)
            $login['password'] = $request->password;

        if($request->email)
            $login['email'] = $request->email;

        if($request->username)
            $login['username'] = $request->username;

        if($request->phone)
            $login['phone'] = $request->phone;

        if (count($login)>1 && Auth::attempt($login)) {
            // The user is being remembered...
            return response()->json([
                'code'      => 200,
                'mesenger'  =>'LOGIN_SUCCESS',
                'data'      =>[
                    'token_name'    => Auth::user()->getRememberTokenName(),
                    'token'         => Auth::user()->getRememberToken(),
                    'username'      => Auth::user()->username,
                    'first_name'    => Auth::user()->first_name,
                    'last_name'     => Auth::user()->last_name,
                    'phone'         => Auth::user()->phone,
                    'birthday'      => Auth::user()->birthday,
                    'gender'        => Auth::user()->gender,
                    'status'        => Auth::user()->status,
                    'avatar'        => Auth::user()->avatar,
                    'group_id'      => Auth::user()->group->id,
                    'group_name'    => Auth::user()->group->name
                ]
            ]);

        }else{
            return response()->json([
                'code'      => 401,
                'mesenger'  =>'LOGIN_FAIL',
                'data'      =>[
                ]
            ]);

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
