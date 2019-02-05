<?php

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

//依存注入
use App\Task;
use Illuminate\Http\Request;

Auth::routes();

//ホーム
Route::get('/',function(){
    return view('/auth/login');
});
//新規登録
Route::get('/createUser',function(){
    return view('/auth/register');
});
//ログインチェック
Route::post('/logincheck','Auth\LoginController@authenticate');
//ログアウト
Route::get('/logout','Auth\LoginController@logout');

//タスクの一覧
Route::get('/tasks', 'TaskController@index');
//タスクの保存
Route::post('/task', 'TaskController@store');
//タスクの削除
Route::delete('/task/{task}', 'TaskController@destroy');

/**
 *　カレンダー表示
 */
Route::get('/calendar', function(){
    return view('calendar');
});

Route::get('/home', 'HomeController@index')->name('home');
