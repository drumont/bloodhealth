<?php

namespace App\Http\Controllers;

use App\Center;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile($name){
        $user = User::whereName($name) -> first();
        $center = Center::whereId($user->center_id) ->first();
        return view('user.profile' , compact('user', 'center')) ;
    }
}
