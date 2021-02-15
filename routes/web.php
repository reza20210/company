<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminCounterController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminHeaderController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminQuestionController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('default');
Route::get('/projects', [MainController::class, 'showAllProjects'])->name('projects');
Route::get('/users', [MainController::class, 'showAllUsers'])->name('users');
Route::get('/users/{id}', [MainController::class, 'showUser'])->name('user');
Route::get('/about', [MainController::class, 'showAbout'])->name('about');
Route::get('/testimonials', [MainController::class, 'testimonials'])->name('testimonials');
Route::get('/questions', [MainController::class, 'questions'])->name('questions');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/services/{id}', [MainController::class, 'showService'])->name('showService');
Route::get('/projects/{id}', [MainController::class, 'showProject'])->name('showProject');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact/store', [MainController::class, 'messageStore'])->name('messageStore');
Route::get('search', [MainController::class, 'searchProject'])->name('search');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('admin/users', AdminUserController::class);
    Route::resource('admin/projects', AdminProjectController::class);
    Route::resource('admin/categories', AdminCategoryController::class);
    Route::resource('admin/photos', AdminPhotoController::class);
    Route::resource('admin/slides', AdminSlideController::class);
    Route::resource('admin/headers', AdminHeaderController::class);
    Route::resource('admin/customers', AdminCustomerController::class);
    Route::resource('admin/services', AdminServiceController::class);
    Route::resource('admin/counters', AdminCounterController::class);
    Route::resource('admin/abouts', AdminAboutController::class);
    Route::resource('admin/questions', AdminQuestionController::class);
    Route::resource('admin/messages', AdminMessageController::class);

    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//    Route::get('admin/comments', 'Admin\CommentController@index')->name('comments.index');
//    Route::post('admin/actions/{id}', 'Admin\CommentController@actions')->name('comment.actions');
//    Route::get('admin/comment/{id}', 'Admin\CommentController@edit')->name('comment.edit');
//    Route::patch('admin/comment/{id}', 'Admin\CommentController@update')->name('comment.update');
//    Route::delete('admin/comment/{id}', 'Admin\CommentController@destroy')->name('comment.destroy');

    Route::delete('admin/delete/media', [AdminPhotoController::class, 'deleteAll'])->name('photo.delete.all');
});
