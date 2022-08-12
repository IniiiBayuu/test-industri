<?php
 
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SuplierController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route backhand
Route::group(['prefix'=>'admin','middleware'=>['auth']],
function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('product',ProductController::class);
    // Route::resource('pesanan',PesananController::class);
    // Route::resource('pembelian',PembelianController::class);
    // Route::resource('pembeli',PembeliController::class);
    // Route::resource('suplier',SuplierController::class);
});

Route::group(['prefix'=>'user'],function(){
    Route::get('/', function(){
        return view('user');
    });
});

