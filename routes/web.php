<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomikController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Komik;
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
        "komik" => Komik::all(), "title" => "Komik Online Abah Zhongli"
    ]);
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action', [
    AuthController::class,
    'registerAction'
])->name('register.action');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
    ])->name('login.action');

Route::get('/logout', [
    AuthController::class, 'logout'
    ])->name('logout');

Route::get('/auth', function () {
    return view('auth.auth');
})->name('login');

Route::middleware(['auth', 'ceklevel:admin'])-> group(function () {
    Route::get('/admin/adminmenu', function () {
        return view('admin.adminmenu', [
        "komik" => Komik::all(),
        ]);
    })->name('adminmenu');

    Route::get('/admin/komik', function () {
        return view('admin.komik', [
            "komik" => Komik::all()
        ]);
    })->name('admin.komik');

    Route::get('/admin/akun', function () {
        return view('admin.akun', [
        "user" => User::all()
        ]);
    })->name('admin.akun');

    Route::get('/admin/addkomik', function () {
        return view('admin.addkomik');
    })->name('admin.addkomik');

    Route::controller(KomikController::class)->group(function () {
        Route::post('/admin/komik/add/action', 'add')->name('admin.add');
        Route::get('/admin/komik/edit/{id}', 'edit')->name('admin.edit');
        Route::post('/admin/komik/edit/{id}/action','update')->name('admin.update');
        Route::post('/admin/komik/delete/{id}/action', 'delete')->name('admin.delete');
        Route::post('/admin/akun/delete/{id}/action', 'deleteakun')->name('admin.deleteakun');
        Route::get('/admin/komik/searchkomik', 'searchkomik')->name('admin.searchkomik');
        Route::get('/admin/komik/searchakun', 'searchakun')->name('admin.searchakun');
        Route::get('/admin/komik/download_excel', 'download_excel')->name('admin.download_excel');
    });
});

Route::middleware('auth')-> group(function () {
    Route::get('/user/usermenu', function () {
        return view('user.usermenu', [
            "komik" => komik::all(),
            ]);
    })->name('user.usermenu');
    Route::get('/user/statistika', function () {
        return view('user.statistika', [
            "komik" => Komik::all()
        ]);
    })->name('user.statistika');
});
