<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        return view ('layer.index');
    }

    public function home(){
        return view ('App.home');
    }
    public function jasa(){
        return view ('App.detailjasa');
    }
}
