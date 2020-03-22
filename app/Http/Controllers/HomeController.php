<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sabores;

class HomeController extends Controller
{

    public function index(){
        $sabores = sabores::all();
    
        return view('layouts.master')->with('sabores', $sabores);
    }
}


