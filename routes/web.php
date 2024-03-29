<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'contact'])->name('contact.post');
// Route::get('/', function () {
//     return view('frontend.index');
// });

// Route::get('/404', function() {
//     return view('frontend.404');
// });

Route::get('/form-tamamlandi', function() {
    return view('frontend.success');
});

