<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
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
