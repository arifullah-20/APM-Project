<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $data ['navbarset']= DB::table('navbarset')->get();

        return view('admin.layout',$data);
    }
     public function navbar(){
        return view('admin.App.setnav');
    }
    public function footer(){
        return view('admin.App.layout.footer');
    }

}
