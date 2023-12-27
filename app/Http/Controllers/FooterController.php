<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function footer(){
        $data ['tb_kontak']= DB::table('tb_kontak')->get();

        $data ['tb_kontakvalue']= DB::table('tb_kontakvalue')
        ->join('tb_kontak','tb_kontakvalue.id_kontak', '=' ,'tb_kontak.id_kontak')
        ->get();

        $data ['navbarset']= DB::table('navbarset')->get();
        $data['tb_quotes'] =DB::table('tb_quotes')->get();
        $data['tb_medsos'] =DB::table('tb_medsos')->get();
        $data['tb_linkmedsos'] = DB::table('tb_linkmedsos')
        ->join('tb_medsos','tb_linkmedsos.id_medsos', '=' ,'tb_medsos.id_medsos')
        ->get();

        return view('admin.App.layout.footer.footer', $data);
    }

    public function simpan(Request $request)
    {
        // Simpan data ke dalam tabel tb_linkmedsos
        DB::table('tb_linkmedsos')->insert([
            'id_medsos' => $request->id_medsos,
            'link_medsos' => $request->link_medsos,
        ]);

        return redirect()->route('data.footer')->with('success', 'berhasil disimpan.');
    }

    public function simpanKontak(Request $request)
    {
        // Simpan data ke dalam tabel tb_kontakvalue
        DB::table('tb_kontakvalue')->insert([
            'id_kontak' => $request->id_kontak,
            'kontak_value' => $request->kontak_value,
        ]);

        return redirect()->route('data.footer')->with('success', 'berhasil disimpan.');
    }


    public function simpanQuotes(Request $request)
    {
        // Validasi data yang masuk, sesuaikan sesuai kebutuhan
        $request->validate([
            'quotes' => 'required',
        ]);

        // Ambil nilai quotes dari formulir
        $quotesText = $request->input('quotes');

        // Simpan nilai quotes ke dalam tabel tb_quotes
        DB::table('tb_quotes')->updateOrInsert(
            [], // Kriteria pencarian, kosongkan agar mengambil data pertama
            ['quotes' => $quotesText] // Data yang ingin disimpan
        );

        return redirect()->route('data.footer')->with('success', 'Quotes berhasil disimpan.');
    }

}

