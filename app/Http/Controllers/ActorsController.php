<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index()
    {
        return view('Actors.index');
    }
    public function show()
    {
       // return view('Actors.index');
    }

}
