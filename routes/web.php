<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontendController\Homecontroller;
use App\Http\Controllers\frontendController\Aboutcontroller;
use App\Http\Controllers\frontendController\Contactcontroller;
use App\Http\Controllers\frontendController\blogcontroller;
use App\Http\Controllers\frontendController\testimonialcontroller;
use App\Http\Controllers\frontendController\Productscontroller;
use App\Http\Controllers\frontendController\allProductscontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Mail\MyMail;

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

// Route::get('/', function () {
//     Mail::to('nattiq039@gmail.com')
// ->send(new MyMail());
   
// });

   
// Route::middleware([ 'auth:sanctum','verified'])->get('/dashboard',function(){
//     return View('dashboard');
// })->name('dashboard');

// Auth::Routes([
//     'verify'=> true
// ]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/',[homecontroller::class,'index']);
// Route::get('/verification/verify', 'VerificationController@verify')->name('verification.verify');


route::get('/redirect',[homecontroller::class,'redirect'])->middleware('auth','verified');
route::get('/product_Details/{id}',[homecontroller::class,'product_Details']);
route::get('/Add_cart',[homecontroller::class,'Add_cart']);

route::get('/view_Catagory',[AdminController::class,'view_Catagory']);
route::post('/add_Catagory',[AdminController::class,'add_Catagory']);
route::get('/cate_table',[AdminController::class,'cate_table']);
route::get('/cate/delete/{id}',[AdminController::class,'delete']);
route::get('/testing/{id}',[AdminController::class,'testing']);

route::post('/update/{id}',[AdminController::class,'update']);

route::get('/view_order',[AdminController::class,'order']);
route::get('/Delivered/{id}',[AdminController::class,'Delivered']);
route::get('/Print_PDF/{id}',[AdminController::class,'Print_PDF']);
// route::get('/',[homecontroller::class,'index']);
route::get('/',[App\Http\Controllers\frontendController\Homecontroller::class,'index']);    
route::get('/Contact',[App\Http\Controllers\frontendController\Contactcontroller::class,'Contact']);    
route::get('/about',[App\Http\Controllers\frontendController\Aboutcontroller::class,'about']); 
route::get('/allProduct',[App\Http\Controllers\frontendController\allProductscontroller::class,'allProduct']); 
route::get('/blog',[App\Http\Controllers\frontendController\blogcontroller::class,'blog']);  
route::get('/testimonial',[App\Http\Controllers\frontendController\testimonialcontroller::class,'testimonial']);                                                                                                                                                                                                                                                                            
// Route::get('/index', [App\Http\Controllers\frontendController\Homecontroller::class, 'index'])->name('index');
// add_product
route::get('/view_product',[ProductController::class,'view_product']);
route::post('/add_product',[ProductController::class,'add_product']);
route::get('/show_product',[ProductController::class,'show_product']);
route::get('/delete_product/{id}',[ProductController::class,'delete_product']);
route::get('/update_product/{id}',[ProductController::class,'update_product']);
route::post('/update_product_confirm/{id}',[ProductController::class,'update_product_confirm']);
route::post('/Addcart/{id}',[homecontroller::class,'Addcart']);
route::get('/remove_cart/{id}',[homecontroller::class,'remove_cart']);
route::get('/cash_order',[homecontroller::class,'cash_order']);

route::get('/stripe_card/{totalprice}',[homecontroller::class,'stripe_card']);
// route::get('/using_card/{totalprice}',[homecontroller::class,'card']);
Route::post('/stripe_card/{totalprice}',[homecontroller::class,'stripePost'])->name('stripe.post');


// Route::post('stripe', 'stripePost')->name('stripe.post');



