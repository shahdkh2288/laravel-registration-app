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
//
//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\App;

Route::get('/{locale?}', function ($locale = 'en') {
    if (!in_array($locale, ['en', 'ar', 'ru', 'de'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('welcome');
})->name('locale.switch');

Route::resource('registerations', RegisterationController::class);



Route::post('registerations', [RegisterationController::class, 'store'])->name('registerations.store');


