<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SliderController extends Controller
{
   public function index(){
    $data ['tb_slider']= DB::table('tb_slider')->get();
    return view ('admin.App.content.slider', $data);
   }

   public function simpan(Request $request){

    $namafile=$request->gambar_slider->getClientOriginalName();
     $request -> gambar_slider->move(public_path('images/slider/'),$namafile);


     DB::table('tb_slider')->insert([
        'id_slider' => $request->id_slider,
        'gambar_slider' => $namafile

     ]);
     return redirect()->route('data.slider')->with('success', 'berhasil disimpan.');
    }
}



