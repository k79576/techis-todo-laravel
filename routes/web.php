<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/home' , [App\Http\Controllers\HomeController::Class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
Route::post('/create', [App\Http\Controllers\TaskController::class, 'create']);
Route::delete('/delete/{taskId}', [App\Http\Controllers\TaskController::class, 'delete']);

// 1. 一覧画面 (http://127.0.0.1:8000/top)
Route::get('/top', [MemberController::class, 'top'])->name('members.top');

// 2. 新規登録画面 (http://127.0.0.1:8000/entry)
Route::get('/entry', [MemberController::class, 'entry'])->name('members.entry');
Route::post('/memberEntry', [MemberController::class, 'memberEntry'])->name('members.memberEntry');

// 3. 編集画面 (http://127.0.0.1:8000/edit/1 など IDが必要)
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('members.edit');
Route::post('/memberEdit', [MemberController::class, 'memberEdit'])->name('members.memberEdit');

// 4. 削除処理
Route::delete('/memberDestroy/{id}', [MemberController::class, 'memberDestroy'])->name('members.memberDestroy');