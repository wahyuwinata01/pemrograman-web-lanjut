<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function table() {
        // echo auth()->user()->kurir->id;
        $data_user = User::all();
        return view("user.table") -> with("data_user", $data_user);
    }

    public function form() {
        return view('user.form_user');
    }

    public function login() {
        return view('login');
    }

    public function form_edit($id) {
        return view('user.form_update')->with("id",$id);
    }

    public function simpan_user(UserRequest  $request){
        $user = new User();
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();
        return redirect(route("table-saya"));
    }

    public function user_update(UserRequest $request, $id){
        $user = User::find($id);
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();
        return redirect(route("table-saya"));
    }

    public function hapus($id){
        User::destroy($id);
        return redirect(route("table-saya"));
    }

    public function show($id){
        $data_user = User::find($id);
        return view("user.show_user")->with("data_user", $data_user);
    }
}
