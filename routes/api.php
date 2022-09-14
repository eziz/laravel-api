<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// API Phase 1
Route::get("list-empolees", [ApiController::class, "listEmployees"]);
Route::get("single-empolee/{id}", [ApiController::class, "getSingleEmployee"]);
Route::post("add-empolee", [ApiController::class, "createEmployees"]);
Route::put("update-empolee/{id}", [ApiController::class, "updateEmployees"]);
Route::delete("delete-empolee/{id}", [ApiController::class, "deleteEmployees"]);
