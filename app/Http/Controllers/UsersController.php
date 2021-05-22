<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
    public function index(){
        $users = [
            'O' => [
                'first_name' => 'Renato',
                'last_name' => 'Heguel',
                'location' => 'Pensylvania'
            ],
            '1' => [
                'first_name' => 'Elen',
                'last_name' => 'Boguen',
                'location' => 'Paris'
            ],
        ];
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        User::create($request ->all());
        return 'success';
        //return $request ->all();
    }
     */
}
