<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
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



/* 메인화면 */
Route::get('/', [IndexController::class, 'index']) -> name('main');

Route::get('register', [RegisterController::class, 'index']) -> name('register');
Route::POST('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class,'index']) -> name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('logout', [LoginController::class,'logout']);


/* 그 외 메뉴 */
Route::get('notice_question', [NoticeController::class, 'notice_question']) -> name('notice_question');
Route::get('notice_information', [NoticeController::class, 'notice_information']) -> name('notice_information');
Route::get('notice_consulting', [NoticeController::class, 'notice_consulting']) -> name('notice_consulting');
Route::post('Consulting', [NoticeController::class, 'consulting']);

Route::get('contact', [ContactController::class, 'contact']) -> name('contact');
Route::get('contact_create',function(){
    return view('SOHO.Main.contact_create');
}) -> name('contact_create');
Route::post('Contact_save',[ContactController::class,'save']) -> name('Contact_save');
Route::get('contact/{contact}', [ContactController::class, 'contact_view']) -> name('contact_view');
Route::delete('Contact/{id}',[ContactController::class,'delete']) ->name('contact_delete');
Route::get('/Contact_search', [ContactController::class, 'search'])->name('Contact_search');
Route::post('/comments/store',[CommentController::class, 'store']) ->name('comment.add');


Route::get('event', [EventController::class, 'event']) -> name('event');
Route::get('event/{event}', [EventController::class, 'event_view']) -> name('event_view');


/* 푸터 */
Route::get('intro',function(){
    return view('SOHO.Footer.intro');
}) ->name('intro');
Route::get('consume',function(){
    return view('SOHO.Footer.consume');
})->name('consume');
Route::get('policy',function(){
    return view('SOHO.Footer.policy');
})->name('policy');
Route::get('navigate',function(){
    return view('SOHO.Footer.navigate');
})->name('navigate');
Route::get('email_refuse',function(){
    return view('SOHO.Footer.email_refuse');
})->name('email_refuse');




/* 상품 판매 */

//차량관제
Route::get('Car',function(){
    return view('SOHO.M2M.index');
}) -> name('차량관제');

//로봇
Route::get('Robot',function(){
    return view('SOHO.Robot.index');
}) -> name('서빙로봇');




//인터넷
Route::get('Internet_home/1',function(){
    return view('SOHO.Internet.가정용.우리가게패키지');
}) -> name('Internet_home_1');

Route::get('Internet_home/2',function(){
    return view('SOHO.Internet.가정용.인터넷');
}) -> name('Internet_home_2');

Route::get('Internet_home/3',function(){
    return view('SOHO.Internet.가정용.우리가게무선인터넷');
}) -> name('Internet_home_3');

Route::get('Internet_home/4',function(){
    return view('SOHO.Internet.가정용.인터넷전화');
}) -> name('Internet_home_4');

Route::get('Internet_home/5',function(){
    return view('SOHO.Internet.가정용.지능형CCTV');
}) -> name('Internet_home_5');

Route::get('Internet_home/6',function(){
    return view('SOHO.Internet.가정용.IPTV');
}) -> name('Internet_home_6');

Route::get('Internet_home/7',function(){
    return view('SOHO.Internet.가정용.우리집지킴이Easy');
}) -> name('Internet_home_7');

Route::get('Internet_home/8',function(){
    return view('SOHO.Internet.가정용.상품결합할인');
}) -> name('Internet_home_8');

Route::get('Internet_home/9',function(){
    return view('SOHO.Internet.가정용.유무선결합할인');
}) -> name('Internet_home_9');

Route::get('Internet_home/10',function(){
    return view('SOHO.Internet.가정용.U+투게더결합');
}) -> name('Internet_home_10');


Route::get('Internet_Enterprise/1',function(){
    return view('SOHO.Internet.기업용.오피스넷');
}) -> name('Internet_Enterprise_1');

Route::get('Internet_Enterprise/2',function(){
    return view('SOHO.Internet.기업용.우리회사패키지');
}) -> name('Internet_Enterprise_2');

Route::get('Internet_Enterprise/3',function(){
    return view('SOHO.Internet.기업용.IPTV');
}) -> name('Internet_Enterprise_3');

Route::get('Internet_Enterprise/4',function(){
    return view('SOHO.Internet.기업용.시내전화');
}) -> name('Internet_Enterprise_4');

Route::get('Internet_Enterprise/5',function(){
    return view('SOHO.Internet.기업용.인터넷전화일반형');
}) -> name('Internet_Enterprise_5');

Route::get('Internet_Enterprise/6',function(){
    return view('SOHO.Internet.기업용.인터넷전화고급형');
}) -> name('Internet_Enterprise_6');

Route::get('Internet_Enterprise/7',function(){
    return view('SOHO.Internet.기업용.인터넷전화교환기설치형');
}) -> name('Internet_Enterprise_7');

Route::get('Internet_Enterprise/8',function(){
    return view('SOHO.Internet.기업용.클라우드고객센터');
}) -> name('Internet_Enterprise_8');

Route::get('Internet_Enterprise/9',function(){
    return view('SOHO.Internet.기업용.전국대표번호');
}) -> name('Internet_Enterprise_9');

Route::get('Internet_Enterprise/10',function(){
    return view('SOHO.Internet.기업용.050FAX');
}) -> name('Internet_Enterprise_10');

Route::get('Internet_Enterprise/11',function(){
    return view('SOHO.Internet.기업용.080전화');
}) -> name('Internet_Enterprise_11');







