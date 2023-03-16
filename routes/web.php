<?php

    use App\Http\Controllers\CommentsController;
    use App\Http\Controllers\PodcastController;
  use App\Http\Controllers\StripeController;
  use App\Http\Controllers\UserController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Models\Podcast;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

    // index - Show all podcasts
    // show - Show single podcasts
    // create - Show form to create new podcasts
    // store - Store new podcasts
    // edit - Show form to edit podcast
    // update - Update podcast
    // destroy - Delete podcast

// All Podcasts
Route::get('/', [PodcastController::class, 'index']);

// Show Create Form
Route::get('/podcasts/create', [PodcastController::class, 'create'])->middleware('auth');

// Manage Podcasts
Route::get('/podcasts/manage', [PodcastController::class, 'manage'])->middleware('auth');

// Single Podcast
Route::get('/podcasts/{podcast}', [PodcastController::class, 'show']);

// Store Podcast Data
Route::post('/podcasts', [PodcastController::class, 'store'])->middleware('auth');

// Update Podcast
Route::put('/podcasts/{podcast}', [PodcastController::class, 'update'])->middleware('auth');

// Delete Podcast
Route::delete('/podcasts/{podcast}', [PodcastController::class, 'destroy'])->middleware('auth');

// Show Edit Form
Route::get('/podcasts/{podcast}/edit', [PodcastController::class, 'edit'])->middleware('auth');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Show Payment Form
Route::get('/payment', [StripeController::class, 'index']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Comments
Route::post('/comments', [CommentsController::class, 'store']);

// Payment
Route::post('/checkout', '\App\Http\Controllers\StripeController@checkout')->name('checkout');

// Payment Success
Route::get('/success', '\App\Http\Controllers\StripeController@success')->name('success');
