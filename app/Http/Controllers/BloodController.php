<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood;
use Auth;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;

class BloodController extends Controller
{
    public function index()
    {
        $bloods = Blood::whereCenter_id(Auth::user()->center_id);
        return view('blood.index', compact('bloods'));
    }

    public function create()
    {
        return view('blood.create');
    }

    public function edit()
    {

    }

    public function destroy()
    {

    }


    public function store(Request $request)
    {

        for ($i=0; $i < $request->number; $i++) {


            $blood = new Blood;

            $blood->user_id = Auth::user()->id;
            $blood->center_id = Auth::user()->id;
            $blood->quantity = $request->quantity;
            $blood->rhesus = $request->rhesus;
            $blood->blood_group = $request->blood_group;
            $blood->remember_token =$request->_token;


            $blood->save();

            //Blood::create($request->all());
        }


        $bloods = Blood::whereCenter_id(Auth::user()->center_id);
        return view('blood.index', compact('bloods'));
    }

}
