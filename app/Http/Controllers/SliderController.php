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


    public function hapusSlider($id)
    {
        // Hapus data dari tabel berdasarkan id_link
        DB::table('tb_slider')->where('id_slider', $id)->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Slider Berhasil dihapus');
    }

    public function ubahS($id)
    {
        // Ambil data slider berdasarkan ID
        $slider = Slider::find($id);

        return view('ubah-slider', ['slider' => $slider]);
    }



    public function ubah($id)
    {
        return view('admin.App.content.sliderubah',[
            'tb_slider'=>DB::table('tb_slider')->where('id_slider',$id)->first(),

        ]);
    }

    public function ubahTes()
    {
        return view('admin.App.content.sliderubah');
    }

    public function update(Request $request, $id)
    {
        // Validasi request sesuai kebutuhan
        $request->validate([
            'gambar_slider' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Sesuaikan dengan jenis gambar yang diizinkan
        ]);

        // Cek apakah data slider dengan ID tersebut ada
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found');
        }

        // Proses perubahan data
        if ($request->hasFile('gambar_slider')) {
            // Jika ada file gambar yang diunggah, simpan gambar baru
            $gambarSlider = $request->file('gambar_slider');
            $gambarPath = $gambarSlider->storeAs('images/slider', 'gambar_' . $id . '.' . $gambarSlider->getClientOriginalExtension(), 'public');

            // Update path gambar di database
            $slider->gambar_slider = $gambarPath;
        }
        $slider->save();

        return redirect()->back()->with('success', 'Slider updated successfully');
    }

}



