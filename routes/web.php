<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/admin')->group(function (){
Route::match(['get','post'],'/login', [App\Http\Controllers\Admin\AdminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::group(['middleware'=>['admin']],function (){

Route::get('/dashboard', [App\Http\Controllers\Admin\AdminLoginController::class, 'dashboard'])->name('dashboard');
//category
Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'addCategory'])->name('addCategory');
Route::get('/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'storeCategory'])->name('storeCategory');
Route::get('/category/table', [App\Http\Controllers\Admin\CategoryController::class, 'dataTable'])->name('tableCategory');
Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'editCategory'])->name('editCategory');
Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'updateCategory'])->name('updateCategory');
Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'deleteCategory'])->name('deleteCategory');
Route::get('/category/restore/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'restoreCategory'])->name('restoreCategory');
Route::get('/category/force-delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'forceDeleteCategory'])->name('forceDeleteCategory');
Route::get('/category/trash', [App\Http\Controllers\Admin\CategoryController::class, 'trash'])->name('trash');
Route::post('/category/deleteCategories', [App\Http\Controllers\Admin\CategoryController::class, 'deleteMultipleCategory'])->name('deleteMultipleCategory');
Route::post('/category/forcedeleteCategories', [App\Http\Controllers\Admin\CategoryController::class, 'forceDeleteMultipleCategory'])->name('forceDeleteMultipleCategory');
Route::get('/category/export-excel', [App\Http\Controllers\Admin\CategoryController::class, 'exportCategoryExcel'])->name('exportCategoryExcel');
Route::get('/category/make-pdf', [App\Http\Controllers\Admin\CategoryController::class, 'makePdf'])->name('makePdf');
Route::get('/category/export-pdf', [App\Http\Controllers\Admin\CategoryController::class, 'exportPdf'])->name('exportPdf');

//product
Route::get('/add-product', [App\Http\Controllers\Admin\ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/product/index', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
Route::post('/product/store', [App\Http\Controllers\Admin\ProductController::class, 'storeProduct'])->name('storeProduct');
Route::get('/product/table', [App\Http\Controllers\Admin\ProductController::class, 'dataTable'])->name('tableProduct');
Route::get('product/edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'editProduct'])->name('editProduct');
Route::post('/product/update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('/product/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteProduct'])->name('deleteProduct');
// Route::get('/product/restore/{id}', [App\Http\Controllers\Admin\ProductController::class, 'restoreProduct'])->name('restoreProduct');
// Route::get('/product/force-delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'forceDeleteProduct'])->name('forceDeleteProduct');
// Route::get('/product/trash', [App\Http\Controllers\Admin\ProductController::class, 'trash'])->name('trash');
// Route::get('/product/deleteProducts', [App\Http\Controllers\Admin\ProductController::class, 'deleteMultipleProduct'])->name('deleteMultipleProduct');
// Route::post('/product/forcedeleteProducts', [App\Http\Controllers\Admin\ProductController::class, 'forceDeleteMultipleProduct'])->name('forceDeleteMultipleCategory');
Route::get('/product/export-excel', [App\Http\Controllers\Admin\ProductController::class, 'exportProductExcel'])->name('exportProductExcel');
// Route::get('/product/make-pdf', [App\Http\Controllers\Admin\ProductController::class, 'makePdf'])->name('makePdf');
// Route::get('/product/export-pdf', [App\Http\Controllers\Admin\ProductController::class, 'exportPdf'])->name('exportPdf');


});
});