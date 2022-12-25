<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    if(Auth::check()){
        $type = Auth::User()->type;
        return view('home', ['type' => $type]);
    } else {
        return view('home');
    }
});



Route::view('/home','home')->name('home')->middleware('auth');

/*========== ->middleware('auth')->middleware('is_admin')===*/

/*======================= ADMIN =====================*/
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::view('/admin', 'admin.home')->name('admin.home');
    Route::get('/admin/pizza/index', [PizzaController::class, 'index'])->name('admin.pizza');
    Route::get('/admin/pizza/add', [PizzaController::class, 'addForm'])->name('admin.pizza.add');
    Route::post('/admin/pizza/add', [PizzaController::class, 'add'])->name('admin.pizza.add');
    Route::get('/admin/pizza/edit/{id}', [PizzaController::class, 'editForm'])->name('admin.pizza.edit');
    Route::post('/admin/pizza/edit/{id}', [PizzaController::class, 'edit'])->name('admin.pizza.edit');
    Route::get('/admin/pizza/delete/{id}', [PizzaController::class, 'deleteForm'])->name('admin.pizza.delete');
    Route::post('/admin/pizza/delete/{id}', [PizzaController::class, 'delete'])->name('admin.pizza.delete');
    Route::get('/admin/user/index', [UserController::class, 'index'])->name('admin.user');
    Route::get('/admin/user/createPizzaiolo', [UserController::class, 'createForm'])->name('admin.users.createPizzaiolo');
    Route::post('/admin/user/createPizzaiolo', [UserController::class, 'createPizzaiolo'])->name('admin.users.createPizzaiolo');
    Route::get('/admin/user/createAdmin', [UserController::class, 'createFormAdmin'])->name('admin.users.createAdmin');
    Route::post('/admin/user/createAdmin', [UserController::class, 'createAdmin'])->name('admin.users.createAdmin');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'editForm'] )->name('admin.users.edit');
    Route::post('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::get('/admin/user/delete_User/{id}', [UserController::class, 'deleteForm'])->name('admin.user.delete');
    Route::post('/admin/user/delete_User/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
});

/*================ USER ===================*/
Route::middleware(['auth', 'is_user'])->group(function () {
    Route::view('/user', 'user.home')->name('user.home');
    Route::get('/user/commande_pizza/home', [CommandeController::class, 'show'])->name('user.commande');
    Route::get('/user/commande/add/{id}', [CommandeController::class, 'add']) -> name('user.add');
    Route::get('/user/commande/panier', [CommandeController::class, 'showPanier']) -> name('user.panier');
    Route::put('/user/commande/panier/update/{id}', [CommandeController::class, 'update']) -> name('user.panier.update');
    Route::get('/user/commande/panier/delete/{id}', [CommandeController::class, 'delete']) -> name('user.panier.delete');
    Route::get('/user/commande/panier/payer', [CommandeController::class, 'pay']) -> name('user.panier.payer');
    Route::view('/user/compte', 'user.Gestion_du_compte.edit') -> name('user.edit');
    Route::put('/user/compte', [AuthenticatedSessionController::class, 'passwd']) -> name('user.compte.modif');

});


/*=================== COOK =================*/
Route::middleware(['auth', 'is_cook'])->group(function () {
        Route::view('/cook', 'cook.home')->name('cook.home');

        Route::view('/cook/edit', 'cook.edit') -> name('cook.edit.passwd');
        Route::put('/cook/edit', [AuthenticatedSessionController::class, 'Editpasswd']) -> name('cook.edit.passwd');
});


/*============= AUTH ==============*/
Route::get('/login', [AuthenticatedSessionController::class,'showForm'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class,'login']);
Route::get('/logout', [AuthenticatedSessionController::class,'logout'])
    ->name('logout')->middleware('auth');


/*===================== Register ======================*/
Route::get('/register', [RegisterUserController::class,'showForm'])
    ->name('register');
Route::post('/register', [RegisterUserController::class,'store']);



