<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerku;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TrackingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//menu
Route::get('/kosong',[controllerku::class,"blank"])->name("blank1");
Route::get('/apa',[controllerku::class,"empty"])->name("emptypok");
Route::get('/home',[controllerku::class,"menu"])->name("menu");
Route::get('/table',[UserController::class,"table"])->name("table-saya");
Route::get('/form',[UserController::class,"form"])->name("form-saya");
Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

//kurir
Route::get('/kurir',[KurirController::class,"form_kurir"])->name("form_kurir");
Route::post('/simpan_kurir',[KurirController::class,"kurir_simpan"])->name("simpan_kurir");
Route::get('/table_kurir',[KurirController::class,"table_kurir"])->name("table_kurir");
Route::get('/edit_kurir/{id}',[KurirController::class,"form_edit_kurir"])->name("form_edit_kurir");
Route::put('/update_kurir/{id}',[KurirController::class,"update_kurir"])->name("edit_kurir");
Route::delete('/delete_kurir/{id}',[KurirController::class,"hapus_kurir"])->name("delete_kurir");
Route::get('/tampil_kurir/{id}',[KurirController::class,"show_kurir"])->name("kurir_show");

//paket 
Route::get('/paket/{id}',[PaketController::class,"form_paket"])->name("form_paket");
Route::post('/simpan_paket',[PaketController::class,"paket_simpan"])->name("simpan_paket");
Route::get('/table_paket',[PaketController::class,"table_paket"])->name("table_paket");
Route::get('/edit_paket/{id}',[PaketController::class,"form_edit_paket"])->name("form_edit_paket");
Route::put('/update_paket/{id}',[PaketController::class,"update_paket"])->name("edit_paket");
Route::delete('/delete_paket/{id}',[PaketController::class,"hapus_paket"])->name("delete_paket");
Route::get('/tampil_paket/{id}',[PaketController::class,"show_paket"])->name("paket_show");

//kategori
Route::get('/kategori',[KategoriController::class,"form_kategori"])->name("form_kategori");
Route::post('/simpan_kategori',[KategoriController::class,"kategori_simpan"])->name("simpan_kategori");
Route::get('/table_kategori',[KategoriController::class,"table_kategori"])->name("table_kategori");
Route::get('/edit_kategori/{id}',[KategoriController::class,"form_edit_kategori"])->name("form_edit_kategori");
Route::put('/update_kategori/{id}',[KategoriController::class,"update_kategori"])->name("edit_kategori");
Route::delete('/delete_kategori/{id}',[KategoriController::class,"hapus_kategori"])->name("delete_kategori");
Route::get('/tampil_kategori/{id}',[KategoriController::class,"show_kategori"])->name("kategori_show");

//tracking
Route::get('/tracking',[TrackingController::class,"form_tracking"])->name("form_tracking");
Route::post('/simpan_tracking',[TrckingController::class,"tracking_simpan"])->name("simpan_tracking");
Route::get('/table_tracking',[TrackingController::class,"table_tracking"])->name("table_tracking");
Route::get('/edit_tracking/{id}',[TrackingController::class,"form_edit_tracking"])->name("form_edit_tracking");
Route::put('/update_tracking/{id}',[TrackingController::class,"update_tracking"])->name("edit_tracking");
Route::delete('/delete_tracking/{id}',[TrackingController::class,"hapus_tracking"])->name("delete_tracking");
Route::get('/tampil_tracking/{id}',[TrackingController::class,"show_tracking"])->name("tracking_show");

// Route::middleware("auth")->group(function() {
    Route::get('/tampil',[UserController::class,"tampil"])->name("menu-saya");
    Route::post('/simpan',[UserController::class,"simpan_user"])->name("simpan-saya");
    Route::get('/edit_user/{id}',[UserController::class,"form_edit"])->name("form_edit");
    Route::put('/update_user/{id}',[UserController::class,"user_update"])->name("edit");
    Route::delete('/delete_user/{id}',[UserController::class,"hapus"])->name("delete");
    Route::get('/tampil_user/{id}',[UserController::class,"show"])->name("user_show");
//    });
   



