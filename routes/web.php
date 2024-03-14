<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $mahasiswa =[
        'ummi',
        'fiza',
        'hana',
    ];
    return view('dasboard')->with (['data' => $mahasiswa]);
});

Route::get('/profil', function () {
    echo "<h1>Hello Word</h1>";
    return "ini adalah halaman profil";
});

Route::get('/mahasiswa/ti/udin', function () {
    echo "<p style='font-size:40;color:orange'>Jurusan Teknologi Informasi";
    echo '<h1>Selamat Datang</h1>';
    echo '<hr>'; 
    echo '<p>lorem ipsum dolor site amet consectetur adipsicing elit. culpa, delectus.</p>'; 
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return '<p>ketua Hima Jurusan TI adalah <b>' .$nama .'</b></p>';
});