<?php

use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

//route=>urls
//controller=>funcation +view


//site1 .. site1/homeاسم الموقع /اسم الصفحه
Route::prefix('site1')->controller(SiteController::class)
->name('site.')->group(function(){
    Route::get('/index' ,   'index')->name('index');
    Route::get('/about' ,  'about')->name('about');
    Route::get('/service' ,  'service')->name('service');
    Route::get('/contact' ,  'contact')->name('contact');
});//نحط الكلمة الثابته نحطهم جوا جروب بساعدني في حال التعديل
Route::get('/',function(){
return view('index');
});

route::get('home',function(){
return view('site1.home');
});
Route::prefix('site2')->Group(function(){
Route::get('/', [Site2Controller::class,"index"])->name('index');
Route::get('about', [Site2Controller::class,"about"])->name('about');
Route::post('post_msg', [Site2Controller::class,"post_msg"])->name('post_msg');
Route::get('/view', [Site2Controller::class,"view"])->name('view');

});


