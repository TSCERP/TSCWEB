<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Articles\ListArticlesController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/language/{locale}', function (string $locale) {
    if (! in_array($locale, ['en','vn'])) {
        abort(404);
    }
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // blogs here

});

Route::prefix('/blogs')->group(function () {
    Route::get('/', ListArticlesController::class)->name('blogs');
});

//change language
Route::get('/{post:slug}', [BlogsController::class, 'show'])->name('admin.post.show');
//require __DIR__.'/auth.php';

