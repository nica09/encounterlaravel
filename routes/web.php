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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ROUTE VIEW BLOG YG TAMPIL DI HOME
Route::get('/memberr', [App\Http\Controllers\HomeController::class, 'indextwo'])->
name('memberr');

//ROUTE ADD BLOG YG TAMPIL DI HOME
Route::get('home/add/blog', [App\Http\Controllers\HomeController::class, 'addProduuk'])->name('addblog');
Route::post('home/post/blog', [App\Http\Controllers\HomeController::class, 'prosestambahblogshome'])->name('home.prosestambahblogs');

//ROUTE EDIT BLOG YG TAMPIL DI HOME
Route::get('home/blog/edit/{id_blog}',[App\Http\Controllers\HomeController::class, 'editHomeBlog'])->name('updatesdatablog');

Route::post('home/blog/proses/edit/{id_blog}',[App\Http\Controllers\HomeController::class, 'updateDataHomeBlog'])->name('updatedatablogs');

//ROUTE HAPUS BLOG YG TAMPIL DI HOME
Route::get('/blog/hapus/{id_blog}',[App\Http\Controllers\HomeController::class, 'hapusDataBlog'])->name('hapusdatablog');






//ROUTE VIEW SLIDER
Route::get('/slider', [App\Http\Controllers\SliderController::class, 'index'])->
name('slider');

//ROUTE ADD SLIDER
Route::get('/add/slider', [App\Http\Controllers\SliderController::class, 'addSlider'])->name('addsliderr');

Route::post('/post/slider', [App\Http\Controllers\SliderController::class, 'prosestambahsliders'])->name('slider.prosestambahsliders');

//ROUTE EDIT SLIDER
Route::get('/slider/edit/{id_slider}',[App\Http\Controllers\SliderController::class, 'editSlider'])->name('updatedataslider');

Route::post('/slider/proses/edit/{id_slider}',[App\Http\Controllers\SliderController::class, 'updateDataSlider'])->name('updatedatasliders');

//ROUTE HAPUS SLIDER
Route::get('/slider/hapus/{id_slider}',[App\Http\Controllers\SliderController::class, 'hapusDataSlider'])->name('hapusdataslider');





//ROUTE VIEW BLOG
Route::get('/blog', [App\Http\Controllers\BlogerController::class, 'index'])->
name('blog2');

//ROUTE ADD BLOG
Route::get('/add/blog', [App\Http\Controllers\BlogerController::class, 'addProduk'])->name('addblog');
Route::post('/post/blog', [App\Http\Controllers\BlogerController::class, 'prosestambahblogs'])->name('blogg.prosestambahblogs');

//ROUTE EDIT BLOG
Route::get('/blog/edit/{id_blog}',[App\Http\Controllers\BlogerController::class, 'editBlog'])->name('updatedatablog');

Route::post('/blog/proses/edit/{id_blog}',[App\Http\Controllers\BlogerController::class, 'updateDataBlog'])->name('updatedatablogs');

//ROUTE HAPUS BLOG
Route::get('/blog/hapus/{id_blog}',[App\Http\Controllers\BlogerController::class, 'hapusDataBlog'])->name('hapusdatablog');






//ROUTE VIEW PRODUCT
Route::get('/productt', [App\Http\Controllers\ProductController::class, 'index'])->
name('productt');

//ROUTE ADD PRODUCT
Route::get('/add/product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addproduct');
Route::post('/post/product', [App\Http\Controllers\ProductController::class, 'prosestambahproduks'])->name('blogg.prosestambahproduct');

//ROUTE EDIT PRODUCT
Route::get('/product/edit/{id_product}',[App\Http\Controllers\ProductController::class, 'editProduct'])->name('updatedataproduk');

Route::post('/product/proses/edit/{id_product}',[App\Http\Controllers\ProductController::class, 'updateDataProduct'])->name('updatedataproduks');

//ROUTE HAPUS PRODUCT
Route::get('/product/hapus/{id_product}',[App\Http\Controllers\ProductController::class, 'hapusDataProduct'])->name('hapusdatablog');





//ROUTE VIEW MEMBER
Route::get('/memberr', [App\Http\Controllers\MemberController::class, 'index'])->
name('memberr');

//ROUTE ADD MEMBER
Route::get('/add/member', [App\Http\Controllers\MemberController::class, 'addMember'])->name('addmember');
Route::post('/post/member', [App\Http\Controllers\MemberController::class, 'prosestambahmember'])->name('memberr.prosestambahmember');

//ROUTE EDIT MEMBER
Route::get('/member/edit/{id_member}',[App\Http\Controllers\MemberController::class, 'editMember'])->name('updatedatamember');

Route::post('/member/proses/edit/{id_member}',[App\Http\Controllers\MemberController::class, 'updateDataMember'])->name('updatedatamembers');

//ROUTE HAPUS MEMBER
Route::get('/member/hapus/{id_member}',[App\Http\Controllers\MemberController::class, 'hapusDataMember'])->name('hapusdatamember');

