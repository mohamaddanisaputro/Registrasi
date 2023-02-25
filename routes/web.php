<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as C;

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
    return redirect()->to('registrasi');
});

Route::get('/halamanutama', function () {
    return view('halamanutama');
});

Route::post('registrasi/caridata', [C\RegistrasiController::class, 'cariData'])->name('registrasi.caridata');
Route::resource('registrasi', C\RegistrasiController::class);
Route::resource('cari', C\CariController::class);

Route::get('login',[C\LoginController::class, 'login']);
Route::post('login',[C\LoginController::class, 'actionlogin']);

//memberitahukan sebelum masuk ke menu beranda
Route::middleware('auth')->group(function(){
    Route::get('/berandaevent', function () {
        return view('berandaevent');
    });
    
    Route::resource('peserta', C\PesertaController::class);
    Route::resource('daftarevent', C\DaftarEventController::class);
    Route::resource('kategorikelas', C\KategoriKelasController::class);
    Route::resource('pendaftaranpeserta', C\PendaftaranPesertaController::class);
    Route::resource('registrasiulang', C\RegistrasiUlangController::class);
    Route::get('logout', [C\LoginController::class, 'actionLogout']);
});




