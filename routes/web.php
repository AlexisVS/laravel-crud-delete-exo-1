<?php

use App\Http\Controllers\MemberController;
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

Route::get('/member', [MemberController::class, "index"]);
Route::get('/create-member', [MemberController::class, "indexCreateMember"]);
Route::post('/create-member--post', [MemberController::class, "createMemberSTORE"]);
Route::delete('/member--delete/{id}', [MemberController::class, "destroy"]);
Route::get('/homme', [MemberController::class, "indexHomme"]);
Route::get('/femme', [MemberController::class, "indexFemme"]);