<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\WordController;
use App\Http\Controllers\UserController;

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




//単語



 



Route::get('member/word_top',['middleware' => 'auth', function(){
    return view('word.index');
}])->name('word.index');
//ログイン成功
// Route::get('/word_top', [WordController::class, 'index'])->name('word.index');
// Route:: group(['middleware'=> 'auth'],function(){

    

Route::group(['middleware' => 'auth'],function(){
    Route::get('member/word_top/edit', [WordController::class, 'edit'])->name('word.edit');
    Route::post('member/word_top/create', [WordController::class, 'create'])->name('word.create');

    Route::get('member/word_top/quiz/{id}', [WordController::class, 'quiz'])->name('word.index_quiz');

    Route::get('member/word_top/answer', [WordController::class, 'answer'])->name('word.answer');

    Route::get('member/word_top/list', [WordController::class, 'list'])->name('word.list');
    
    Route::get('member/word_top/renew_view/{id}', [WordController::class, 'renew_view'])->name('word.renew');
    Route::post('member/word_top/renew_view/{id}', [WordController::class, 'renew'])->name('word.renew');

    Route::get('member/word_top/destroy/{id}',[WordController::class,'destroy_word'])->name('word.destroy');

    Route::get('member/word_top/quiz_ready', [WordController::class, 'quiz_view'])->name('word.quiz_ready');
    // ログアウト
    Route::get('member/word/user/logout',[UserController::class, 'get_logout'])->name('word.logout');
});
    

Route::group(['middleware' => 'guest'], function(){
    
    // 新規作成はセキュリティのため削除　作成する場合はコメントはずず
    
    
     //ログイン
    Route::get('member/word/user/signin', [UserController::class, 'login_view'])->name('word.login');
    Route::post('member/word/user/signin', [UserController::class, 'login'])->name('word.login');
    Route::get('member/word/user/profile',[UserController::class,'get_login'])->name('word.user_profile');
});





