<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(){
        $data ['navbarset']= DB::table('navbarset')->get();
        return view ('layer.index', $data);
    }

    public function home(){

        $data['tb_medsos'] =DB::table('tb_medsos')->get();
        $data['tb_linkmedsos'] = DB::table('tb_linkmedsos')
        ->join('tb_medsos','tb_linkmedsos.id_medsos', '=' ,'tb_medsos.id_medsos')
        ->get();

        $data ['tb_kontak']= DB::table('tb_kontak')->get();
        $data ['tb_kontakvalue']= DB::table('tb_kontakvalue')
        ->join('tb_kontak','tb_kontakvalue.id_kontak', '=' ,'tb_kontak.id_kontak')
        ->get();

        $data ['tb_partner']= DB::table('tb_partner')->get();
        $data ['navbarset']= DB::table('navbarset')->get();
        $data ['tb_slider']= DB::table('tb_slider')->get();
        $data ['tb_quotes']= DB::table('tb_quotes')->get();
        return view ('App.home', $data);
    }
    public function jasa(){
        return view ('App.detailjasa');
    }
}
