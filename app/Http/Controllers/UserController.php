<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;


class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function create(Request $request) {
        $user = new User;

        $user->firstname = $request->input('firstname');
        $user->username = $request->input('username');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return $user;
    }

    public function me() {
        $user = JWTAuth::parseToken()->authenticate();

        return $user;
    }

}
