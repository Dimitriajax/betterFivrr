<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/', [PostsController::class, 'getAllFeaturedPosts'])->name('home');

Route::get('/home', [PostsController::class, 'getAllFeaturedPosts']);


// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/vacatures/freelancer', [PostsController::class, 'getAllFreelancePosts'])->name('applications.freelancer');

Route::get('/vacatures/werkgever', [PostsController::class, 'getAllEmployerPosts'])->name('applications.employers');

Route::get('/vacatures/nieuw', function () {
    return view('createApplication');
})->name('application.new');

Route::post('vacatures/nieuw/create', [PostsController::class, 'create'])->name('application.create');

Route::get('/vacature/{postId}', [PostsController::class, 'getPost'])->name('application');




Route::get('/user/{username?}', [UserProfileController::class, 'getUser'])->name('user');

Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::get('/profile', function () {
    return view('profile.edit');
})->name('profile');



Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
