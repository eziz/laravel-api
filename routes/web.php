<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::get("sample", [TestController::class, "sample"])->middleware("api");

//Route::group(["middleware"=>["mymiddleware"]], function(){
//});

Route::prefix("admin")->group(function () {
    Route::get("create-user", [AdminController::class, "createUser"]);
    Route::get("list-users", [AdminController::class, "listUsers"]);
    Route::get("edit-user", [AdminController::class, "editUser"]);
});


Route::group(["prefix" => "admin"], function () {
});


Route::group(["middleware" => "first", "second"], function () {
});

Route::prefix("customer")->group(function () {
    Route::get("list-purchase", [CustomerController::class, "listPurchase"]);
    Route::get("list-blogs", [CustomerController::class, "listBlogs"]);
    Route::get("create-blog", [CustomerController::class, "createBlog"]);
});
