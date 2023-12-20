<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fauzan;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/member',[Fauzan::class, 'index'],)->name('member');

Route::get('/tambah',[Fauzan::class, 'tambah'])->name('tambah');

Route::post('/insert',[Fauzan::class, 'insert'])->name('insert');

Route::get('/tampilkandata/{id}',[Fauzan::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/update/{id}',[Fauzan::class, 'update'])->name('update');

Route::get('/delete/{id}',[Fauzan::class, 'delete'])->name('delete');
