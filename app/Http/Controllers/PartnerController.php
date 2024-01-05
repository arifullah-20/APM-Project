<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\partner;

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

        public function hapusPartner($id)
        {
            // Hapus data dari tabel berdasarkan id_link
            DB::table('tb_partner')->where('id_partner', $id)->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return back()->with('success', 'Kontak berhasil dihapus');
        }
        public function ubah($id)
        {

            return view('admin.App.content.partnerubah',[
                'tb_partner'=>DB::table('tb_partner')->where('id_partner',$id)->first(),

            ]);
        }


    public function edit(Request $request, $id){

        // Validasi form jika diperlukan
        $request->validate([
            'logo_partner' => 'image|mimes:jpeg,png', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Cari data slider berdasarkan ID menggunakan Eloquent
        $partner = Partner::find($id);

        if (!$partner) {
            // Handle jika ID tidak ditemukan
            return redirect()->route('data.partner')->with('error', 'Logo tidak ditemukan.');
        }

        // Jika file gambar diunggah
        if ($request->hasFile('logo_partner')) {
            // Simpan gambar baru
            $namafile = $request->logo_partner->getClientOriginalName();
            $request->logo_partner->move(public_path('images/partner/'), $namafile);

            if ($partner->gambar) {
                Storage::delete($partner->gambar);
            }

            // Update data ke dalam tabel tb_slider sesuai ID
            $partner->update(['logo_partner' => $namafile]);
        }

        return redirect()->route('data.partner')->with('success', 'Logo berhasil diperbarui.');
    }
}
