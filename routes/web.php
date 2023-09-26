<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\VerifAge;
use Illuminate\Http\Response;
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
    return view('welcome');
});
Route::get('/register', function () {
    return view('form');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});
//Simple Routes
Route::get("/page1", function () {
    return response('<h1>my first page</h1>');
});
//Optional Routes
Route::get('/page2/{name?}', function ( $name=null) {
    $word= "welcome " . $name;
    return response("<h1>$word </h1>");
});
//Parameters Routes
Route::get('/page2/{name}/{lastname}', function ( $name,$lastname) {
    $word= "welcome " . $name ." " . $lastname;
    
    return response("<h1>$word </h1>");
});
//Query Routes
Route::get('/page2', function ( ) {
    $word= "welcome " . Request()->name ." " . Request()->lastname;    
    return response("<h1>$word </h1>");
});
//Contraint Routes
Route::get('/chiffre/{id}', function ( $id) {
    $word= "welcome " . $id;
    return response("<h1>$word </h1>");
})->where('id','[0-9]+');
Route::get('/letter/{name}', function ( $name) {
    $word= "welcome " . $name;
    return response("<h1>$word </h1>");
})->where('name','[a-zA-Z]*');

//Controller Routes
Route::get('/Controller/{name}', [HomeController::class, 'index']);
//Controller Routes With View
Route::get('/ControllerView', [HomeController::class, 'show']);
//Controller Parameters Routes With View
Route::get('/article/{n}', [HomeController::class, 'show1']);
//Controller  Routes With View Form
Route::get('/form', [HomeController::class, 'form']);
//Controller  Routes With View Form Middleware
Route::get('/result', [HomeController::class, 'result'])->middleware(VerifAge::class);

