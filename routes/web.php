<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('auth')->group(function () {
Route::view('/', 'welcome'
    //function(){return redirect(route('login'));}
)->name('home');

Route::get('/dashboard', function () {
    return view('pages.mainpage');
})->name('mainpage');

Route::resource('Emandatelist','\App\Http\Controllers\EmandatelistController');
Route::resource('SenaraiHartaCukai','\App\Http\Controllers\SenaraiHartaCukai');
Route::resource('SenaraiHartaBaru','\App\Http\Controllers\SenaraiHartaBaruController');
Route::resource('ProsesBilCukai','\App\Http\Controllers\ProsesBilCukaiController');
Route::get('DownloadResit','\App\Http\Controllers\ProsesBilCukaiController@downloadBilCukai');
Route::resource('TempahGelanggang','\App\Http\Controllers\TempahGelanggangController');
Route::resource('SenaraiTempahan','\App\Http\Controllers\SenaraiTempahanController');
Route::resource('SenaraiAkaun','\App\Http\Controllers\SenaraiAccountController');
Route::resource('MaklumatAkaunSewa','\App\Http\Controllers\MaklumatAkaunController');
Route::resource('SenaraiKutipan','\App\Http\Controllers\kutipan\SenaraiKutipanController');
Route::resource('Bilpelbagai','\App\Http\Controllers\BilPelbagaiController');
Route::get('DownloadResitBil','\App\Http\Controllers\BilPelbagaiController@downloadBil');

Route::resource('CukaiTaksiranTest','\App\Http\Controllers\cukai\CukaiTaksiranController');
Route::get('CukaiTaksiranPDF','\App\Http\Controllers\cukai\CukaiTaksiranController@cukaiTaksiranPDF');
Route::resource('SenaraiCukaiTaksiran','\App\Http\Controllers\cukai\SenaraiCukaiTaksiranController');

Route::resource('TaxinvoiceTest','\App\Http\Controllers\cukai\TaxInvoiceController');
Route::get('TaxinvoicePDF','\App\Http\Controllers\cukai\TaxInvoiceController@taxInvoice');

Route::get('SenaraiResit','\App\Http\Controllers\kutipan\SenaraiKutipanController@senaraiResit')->name('senaraiResit');
Route::get('resitPDF/{id}','\App\Http\Controllers\kutipan\SenaraiKutipanController@resitPDF')->name('resitPDF');
Route::get('senaraiTransaksiPDF/{duration}','\App\Http\Controllers\kutipan\SenaraiKutipanController@senaraiTransaksiPDF')->name('senaraiTransaksiPDF');
});
