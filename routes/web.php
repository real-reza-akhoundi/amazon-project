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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->group(function (){

    Route::get('/' , [\App\Http\Controllers\Admin\AdminDashboardController::class , 'index'])->name('admin.home');


        
    /*
    |--------------------------------------------------------------------------
    | Market Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::prefix('market')->group(function (){
        
        //category
        Route::prefix('category')->group(function (){
            Route::get('/' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'index'])->name('admin.market.category.index');
            Route::get('/create' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'create'])->name('admin.market.category.create');
            Route::post('/store' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}' , [\App\Http\Controllers\Admin\Market\CategoryController::class , 'destroy'])->name('admin.market.category.destroy');
        });

        //brand
        Route::prefix('brand')->group(function (){
            Route::get('/' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'index'])->name('admin.market.brand.index');
            Route::get('/create' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'create'])->name('admin.market.brand.create');
            Route::post('/store' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'update'])->name('admin.market.brand.update');
            Route::delete('/delete/{id}' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'destroy'])->name('admin.market.brand.destroy');
        });

        //comment
        Route::prefix('comment')->group(function (){
            Route::get('/' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'index'])->name('admin.market.brand.index');
            Route::get('/show/{id}' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'edit'])->name('admin.market.brand.show');
            Route::delete('/delete/{id}' , [\App\Http\Controllers\Admin\Market\BrandController::class , 'destroy'])->name('admin.market.brand.destroy');
        });





    });


});
