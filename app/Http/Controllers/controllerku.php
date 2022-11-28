<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\User;

class controllerku extends Controller
{
    function blank() {
        return view('blank');
    }

    function empty() {
        return view('empty');
    }

    function menu() {
        return view('menu');
    }

    // function table() {
    //     $data_user = User::all();
    //     return view("table") -> with("data_user", $data_user);
    // }
}


