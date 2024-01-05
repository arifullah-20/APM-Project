<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaqController extends Controller
{
    public function index(){
        $data ['tb_faq']= DB::table('tb_faq')
        ->join('tb_pertanyaan','tb_faq.id_pertanyaan','=','tb_pertanyaan.id_pertanyaan')
        ->get();

        $data ['tb_pertanyaan']= DB::table('tb_pertanyaan')->get();
        return view ('admin.App.content.faq', $data);
       }

       public function simpanPertanyaan(Request $request)
       {


           DB::table('tb_pertanyaan')->insert([
               'pertanyaan' =>$request->pertanyaan

           ]);

           return redirect()->route('data.faq')->with('success', 'berhasil disimpan.');
       }
       public function jawabFaq(){

       }

       public function simpanJawaban(Request $request)
       {
           DB::table('tb_faq')->insert([
               'id_pertanyaan' => $request->id_pertanyaan,
               'jawaban' => $request->jawaban
           ]);

           return redirect()->route('data.faq')->with('success', 'Berhasil disimpan.');
       }




}
