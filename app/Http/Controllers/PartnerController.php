<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index(){
        $data ['tb_partner']= DB::table('tb_partner')->get();
        return view ('admin.App.content.partner', $data);
       }

       public function simpan(Request $request){

        $namafile=$request->logo_partner->getClientOriginalName();
         $request -> logo_partner->move(public_path('images/partner/'),$namafile);


         DB::table('tb_partner')->insert([
            'id_partner' => $request->id_partner,
            'logo_partner' => $namafile

         ]);
         return redirect()->route('data.partner')->with('success', 'berhasil disimpan.');
        }
}
