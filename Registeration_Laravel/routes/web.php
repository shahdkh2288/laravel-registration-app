<?php
use App\Http\Controllers\RegisterationController;
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
Route::get('/index', function () {
  return view('index');
});
Route::get('/', function () {
    return view('welcome');
});

Route::resource('registerations', RegisterationController::class);



Route::post('registerations', [RegisterationController::class, 'store'])->name('registerations.store');

