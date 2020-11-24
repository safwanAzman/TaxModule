<?php

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

Route::get('/', function () {
    return view('pages.mainpage');
});

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