<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function index(){


        $data ['navbarset']= DB::table('navbarset')->get();

        return view('admin.App.layout.navbar.setnav',$data);

     }


     public function simpan(Request $request){

        // Validasi form jika diperlukan
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Jika file gambar diunggah
        if ($request->hasFile('logo')) {
            // Simpan gambar baru
            $namafile = $request->logo->getClientOriginalName();
            $request->logo->move(public_path('images/logo/'), $namafile);

            // Update atau insert data ke dalam tabel navbarset
            DB::table('navbarset')->updateOrInsert(
                [],
                ['logo' => $namafile]
            );
        }

        return redirect()->route('data.navbar')->with('success', 'Logo berhasil diperbarui.');
    }
}
