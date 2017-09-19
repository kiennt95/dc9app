<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\users;

class usersController extends Controller
{
    public function index(){
        $user = Users::find(1);
        var_dump($user);die;
        return view('web/users/index', ['name' => 'Samantha']);
    }
}
