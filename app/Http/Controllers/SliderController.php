<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\slider;


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
        // Validasi request jika diperlukan


        $namafile =null ;
        if($request->gambar_slider){
            $namafile =$request->gambar_slider->getClientOriginalName();
            $request->file('gambar_slider')->move('images/slider/',$request->gambar_slider->getgetClientOriginalName());
        }
        $data = DB::table('tb_slider')->insert([
            'gambar_slider'=>$namafile
        ]);

    }


    public function edit(Request $request, $id)
    {
        // Validasi form jika diperlukan
        $request->validate([
            'gambar_slider' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Cari data slider berdasarkan ID menggunakan Eloquent
        $slider = Slider::find($id);

        if (!$slider) {
            // Handle jika ID tidak ditemukan
            return redirect()->route('data.slider')->with('error', 'Slider tidak ditemukan.');
        }

        // Jika file gambar diunggah
        if ($request->hasFile('gambar_slider')) {
            // Simpan gambar baru
            $namafile = $request->gambar_slider->getClientOriginalName();
            $request->gambar_slider->move(public_path('images/slider/'), $namafile);

            if ($slider->gambar) {
                Storage::delete($slider->gambar);
            }

            // Update data ke dalam tabel tb_slider sesuai ID
            $slider->update(['gambar_slider' => $namafile]);
        }

        return redirect()->route('data.slider')->with('success', 'Slider berhasil diperbarui.');
    }



}



