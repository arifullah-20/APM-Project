<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaqController extends Controller
{
    public function index(){
        $data ['tb_pertanyaan']= DB::table('tb_pertanyaan')->get();
        return view ('admin.App.content.faq', $data);
       }

}
