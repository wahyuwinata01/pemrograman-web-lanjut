<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurir;
use App\Models\User;
use App\Http\Requests\KurirRequest;

class KurirController extends Controller
{
    public function form_kurir() {
        $user = User::all();
        return view('kurir.form_kurir')->with('users', $user);
    }

    public function kurir_simpan(KurirRequest  $request){
        $kurir = new Kurir();
        $kurir->nama_kurir = $request->get("nama");
        $kurir->nik = $request->get("nik");
        $kurir->alamat = $request->get("alamat");
        $kurir->jenis_kelamin = $request->get("jenis_kelamin");
        $kurir->id_user = $request->get('user');
        $kurir->save();
        return redirect(route("table_kurir"));
    }

    public function table_kurir() {
        $data_kurir = Kurir::all();
        return view("kurir.table_kurir") -> with("data_kurir", $data_kurir);
    }

    public function form_edit_kurir($id) {
        return view('kurir.form_update_kurir')->with("id",$id);
    }

    public function update_kurir(Request $request, $id){
        $kurir = Kurir::find($id);
        $kurir->nama_kurir = $request->get("nama");
        $kurir->nik = $request->get("nik");
        $kurir->alamat = $request->get("alamat");
        $kurir->jenis_kelamin = $request->get("jenis_kelamin");
        $kurir->id_user = $request->get('user');
        $kurir->save();
        return redirect(route("table_kurir"));
    }

    public function hapus_kurir($id){
        Kurir  ::destroy($id);
        return redirect(route("table_kurir"));
    }

    public function show_kurir($id){
        $data_kurir = Kurir::find($id);
        return view("kurir.show_kurir")->with("data_kurir", $data_kurir);
    }
}
