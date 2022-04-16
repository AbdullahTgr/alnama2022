<?php

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


Auth::routes();



Route::get('/',[App\Http\Controllers\HomeController::class, 'index']); 


Route::get('lang/{locale}',[App\Http\Controllers\HomeController::class, 'lang']); 





Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });
 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();
Auth::routes(['register' => false]);



Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });


 if(isset($_GET['n'])){
    $x=$_GET['n'];  
 }else{
    $x=9;
 }

 

 Route::get('/products{id}', [App\Http\Controllers\HomeController::class, 'products'])->name('prds');

 Route::get('/showvid{id}', [App\Http\Controllers\HomeController::class, 'products_vid'])->name('showvid');

 Route::get('/showimg{id}', [App\Http\Controllers\HomeController::class, 'products_img'])->name('showimg');
 


 Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
 Route::get('/admin/cats', [App\Http\Controllers\AdminController::class, 'cats'])->name('admin.cats');
 Route::get('/admin/quickmsg', [App\Http\Controllers\AdminController::class, 'quickmsg'])->name('admin.quickmsg');
 Route::get('/admin/products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin.products');
 Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');

 


 // POST Methods

 Route::post('/admin/save_cat', [App\Http\Controllers\AdminController::class, 'save_cat'])->name('admin.save_cat');
 Route::post('/admin/update_cat', [App\Http\Controllers\AdminController::class, 'update_cat'])->name('admin.update_cat');
 Route::post('/admin/delete_cat', [App\Http\Controllers\AdminController::class, 'delete_cat'])->name('admin.delete_cat');
 Route::post('/admin/delete_msg', [App\Http\Controllers\AdminController::class, 'delete_msg'])->name('admin.delete_msg');

 Route::post('/admin/save_product', [App\Http\Controllers\AdminController::class, 'save_product'])->name('admin.save_product');
 Route::post('/admin/update_product', [App\Http\Controllers\AdminController::class, 'update_product'])->name('admin.update_product');
 Route::post('/admin/delete_product', [App\Http\Controllers\AdminController::class, 'delete_product'])->name('admin.delete_product');
 Route::post('/admin/delete_image', [App\Http\Controllers\AdminController::class, 'delete_image'])->name('admin.delete_image');


 Route::post('/admin/update_profile', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.update_profile'); 



 Route::get('/admin/partners', [App\Http\Controllers\AdminController::class, 'partners'])->name('admin.partners');
 Route::post('/admin/save_partner', [App\Http\Controllers\AdminController::class, 'save_partner'])->name('admin.save_partner');
 Route::post('/admin/delete_partner', [App\Http\Controllers\AdminController::class, 'delete_partner'])->name('admin.delete_partner');

 Route::get('/admin/clints', [App\Http\Controllers\AdminController::class, 'clints'])->name('admin.clints');
 Route::post('/admin/save_clint', [App\Http\Controllers\AdminController::class, 'save_clint'])->name('admin.save_clint');
 Route::post('/admin/delete_clint', [App\Http\Controllers\AdminController::class, 'delete_clint'])->name('admin.delete_clint');


 
 Route::get('/admin/contacts', [App\Http\Controllers\AdminController::class, 'contacts'])->name('admin.contacts');
 Route::post('/admin/save_contact', [App\Http\Controllers\AdminController::class, 'save_contact'])->name('admin.save_contact');
 Route::post('/admin/delete_contact', [App\Http\Controllers\AdminController::class, 'delete_contact'])->name('admin.delete_contact');


 Route::post('/admin/update_cover', [App\Http\Controllers\AdminController::class, 'update_cover'])->name('admin.update_cover');
 Route::post('/admin/update_video', [App\Http\Controllers\AdminController::class, 'update_video'])->name('admin.update_video');
 Route::get('/search/',  [App\Http\Controllers\HomeController::class, 'search'])->name('search');




Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');