<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function form_kategori() {
        return view('kategori.form_kategori');
    }

    public function kategori_simpan(Request  $request){
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->get("nama_pengirim");
        $kategori->save();
        return redirect(route("table_kategori"));
    }

    public function table_kategori() {
        $data_kategori = Kategori::all();
        return view("kategori.table_kategori") -> with("data_kategori", $data_kategori);
    }

    public function form_edit_kategori($id) {
        return view('kategori.form_update_kategori')->with("id",$id);
    }

    public function update_kategori(Request $request, $id){
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->get("nama_kategori");
        $kategori->save();
        return redirect(route("table_kategori"));
    }

    public function hapus_kategori($id){
        Kategori::destroy($id);
        return redirect(route("table_paket"));
    }

    public function show_kategori($id){
        $data_kategori = Kategori::find($id);
        return view("kategori.show_kategori")->with("data_kategori", $data_kategori);
    }
}
