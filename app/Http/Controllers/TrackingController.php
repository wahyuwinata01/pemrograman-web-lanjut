<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;
class TrackingController extends Controller
{
    public function form_tracking() {
        return view('tracking.form_tracking');
    }

    public function tracking_simpan(Request  $request){
        $tracking = new Tracking();
        $tracking->posisi_barang = $request->get("posisi_barang");
        $tracking->tanggal = $request->get("tanggal");
        $paket->save();
        return redirect(route("table_tracking"));
    }

    public function table_tracking() {
        $data_tracking = Tracking::all();
        return view("tracking.table_tracking")->with("data_tracking", $data_tracking);
    }

    public function form_edit_tracking($id) {
        return view('tracking.form_update_tracking')->with("id",$id);
    }

    public function update_tracking(Request $request, $id){
        $tracking = Tracking::find($id);
        $tracking->posisi_barang = $request->get("posisi_barang");
        $tracking->tanggal = $request->get("tanggal");
        $tracking->save();
        return redirect(route("table_tracking"));
    }

    public function hapus_tracking($id){
        Tracking::destroy($id);
        return redirect(route("table_tracking"));
    }

    public function show_tracking($id){
        $data_tracking = Tracking::find($id);
        return view("tracking.show_tracking")->with("data_tracking", $data_tracking);
    }
}
