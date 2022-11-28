<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Tracking;
use App\Http\Requests\KurirRequest;
// use App\Http\Controllers\TrackingController;

class PaketController extends Controller
{
    // public function form_paket() {
    //     return view('paket.form_paket');
    // }

    public function form_paket(Request $request, $id) {
        $kategori = Kategori::all();
        $user = User::find($id);
        return view('paket.form_paket')->with('kategoris', $kategori)->with("user", $user);
    }

    public function paket_simpan(Request  $request){
        $paket = new Paket();
        $paket->id_user = $request->get("id_user");
        $paket->nama_penerima = $request->get("nama_penerima");
        $paket->nama_barang = $request->get("nama_barang");
        $paket->id_kategori = $request->get("kategori");
        $paket->alamat = $request->get("alamat");
        $paket->posisi_barang = $request->get("posisi_barang");
        $paket->tanggal_pengiriman = $request->get("tanggal_pengiriman");
        $paket->tanggal_diterima = $request->get("tanggal_diterima");
        $paket->save();
        
        $tracking = new Tracking();
        $tracking->posisi_barang = $request->get("posisi_barang");
        $tracking->id_paket = $paket->id;
        $tracking->tanggal = $request->get("tanggal_pengiriman");
        $tracking->save();    
        return redirect(route("table_paket"));
    }

    public function table_paket() {
        $data_paket = Paket::all();
        return view("paket.table_paket") -> with("data_paket", $data_paket);
    }

    public function form_edit_paket($id) {
        return view('paket.form_update_paket')->with("id",$id);
    }

    // public function user($id){
    //     $user = User::find($id);
    //     return view("paket.form_paket")->with("user", $user);
    // }

    public function update_paket(Request $request, $id){
        $kurir = Kurir::find($id);
        $paket->nama_pengirim = $request->get("nama_pengirim");
        $paket->nama_penerima = $request->get("nama_penerima");
        $paket->nama_barang = $request->get("nama_barang");
        $paket->alamat = $request->get("alamat");
        $paket->posisi_barang = $request->get("posisi_barang");
        $paket->tanggal_pengiriman = $request->get("tanggal_pengiriman");
        $paket->tanggal_diterima = $request->get("tanggal_diterima");
        $paket->save();
        return redirect(route("table_paket"));
    }

    public function hapus_paket($id){
        Paket::destroy($id);
        return redirect(route("table_paket"));
    }

    public function show_paket($id){
        $data_paket = Paket::find($id);
        return view("paket.show_paket")->with("data_paket", $data_paket);
    }
}
