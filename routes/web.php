<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\childcategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\membershipController;
use App\Http\Controllers\informationController;

use App\Http\Controllers\authController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NewController::class, 'index']);



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.home.home');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[homeController::class, 'adddashboard']);



//frontend
Route::get('/subcategory/page/general/{id}',[NewController::class, 'subcategorypageinfo']);
Route::get('/subcategory/page/admission/{id}',[NewController::class, 'subcategorypageadmissioninfo']);
Route::get('/subcategory/page/academic/{id}',[NewController::class, 'subcategorypageacademicinfo']);
Route::get('/childcategory/page/{id}',[NewController::class, 'childcategorypageinfo']);
Route::get('/pdf/file/view/{id}',[DocumentController::class, 'subcategoryfileview']);
// Route::get('/subcategory/file/download/{file}',[DocumentController::class, 'subcategoryfiledownload']);
Route::get('/pdf/file/view/child/suggetion/{id}',[DocumentController::class, 'childcategoryfileview']);
Route::get('/pdf/file/view/child/note/{id}',[DocumentController::class, 'childcategorynoteview']);

Route::post('/membership/form',[membershipController::class, 'membershipinfo']);
Route::get('/subcategory/page/mcq/{id}',[NewController::class, 'subcategorypagemcqinfo']);
Route::get('/subcategory/page/recent/{id}',[NewController::class, 'subcategorypagerecentinfo']);


Route::get('/academic',[NewController::class, 'academicnavlink']);
Route::get('/job',[NewController::class, 'jobnavlink']);
Route::get('/admission',[NewController::class, 'admissionnavlink']);
Route::get('/contact',[NewController::class, 'contact']);
Route::post('/search',[NewController::class, 'searchinfo']);





//admin panel
// Route::get('/dashboard', [homeController::class, 'index']);
Route::get('/category/add', [categoryController::class, 'index']);
Route::post('/category/save', [categoryController::class, 'savecategoryinfo']);
Route::get('/subcategory/add', [subcategoryController::class, 'index']);
Route::post('/subcategory/save', [subcategoryController::class, 'subcategorysaveinfo']);
Route::get('/childcategory/add', [childcategoryController::class, 'childcategoryaddinfo']);
Route::post('/childcategory/save', [childcategoryController::class, 'childcategorysaveinfo']);
Route::get('/category/manage', [categoryController::class, 'managecategoryinfo']);
Route::get('/category/unpublish/{id}', [categoryController::class, 'categoryunpublishedinfo']);
Route::get('/category/publish/{id}', [categoryController::class, 'categorypublishedinfo']);
Route::get('/category/edit/{id}', [categoryController::class, 'categoryeditinfo']);
Route::post('/category/update', [categoryController::class, 'categoryupdateinfo']);
Route::get('/category/delete/{id}', [categoryController::class, 'categorydeleteinfo']);
Route::get('/subcategory/manage', [subcategoryController::class, 'managesubcategoryinfo']);
Route::get('/subcategory/unpublish/{id}', [subcategoryController::class, 'subcategoryunpublishedinfo']);
Route::get('/subcategory/publish/{id}', [subcategoryController::class, 'subcategorypublishedinfo']);
Route::get('/subcategory/edit/{id}', [subcategoryController::class, 'subcategoryeditinfo']);
Route::post('/subcategory/update', [subcategoryController::class, 'subcategoryupdateinfo']);
Route::get('/subcategory/delete/{id}', [subcategoryController::class, 'subcategorydeleteinfo']);
Route::get('/member/manage',[membershipController::class,'managemember']);
Route::get('/member/delete/{id}',[membershipController::class,'memberdelete']);
Route::get('/information/add',[informationController::class,'informationadd']);
Route::post('/information/save',[informationController::class,'informationsave']);
Route::get('/information/manage',[informationController::class,'informationmanage']);
Route::get('/information/unpublish/{id}',[informationController::class,'informationunpublish']);
Route::get('/information/publish/{id}',[informationController::class,'informationpublish']);
Route::get('/information/delete/{id}',[informationController::class,'informationdelete']);

Route::get('/contact/add',[informationController::class,'contactadd']);
Route::post('/contact/save',[informationController::class,'contactsave']);
Route::get('/contact/manage',[informationController::class,'contactmanage']);
Route::get('/contact/unpublish/{id}',[informationController::class,'contactunpublish']);
Route::get('/contact/publish/{id}',[informationController::class,'contactpublish']);
Route::get('/contact/delete/{id}',[informationController::class,'contactdelete']);
Route::get('/contact/edit/{id}',[informationController::class,'contactedit']);
Route::post('/contact/update',[informationController::class,'contactupdate']);
















// Route::get('/logout', [authController::class, 'logout']);

Route::get('/pdf/add', [pdfController::class, 'pdfaddinfo']);
Route::get('/ajax-product-subcategory', [pdfController::class, 'getSubcategory']);
Route::get('/ajax-product-childcategory', [pdfController::class, 'getChildcategory']);
Route::post('/pdf/save',[pdfController::class, 'pdfsaveinfo']);







