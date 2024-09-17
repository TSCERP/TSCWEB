<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Articles\ListArticlesController;
use App\Http\Controllers\Articles\ViewArticleController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::name('solution.')->prefix('solution')->group(function () {
    Route::get('/dashboard-bi', function () {
        return view('dashboard-bi');
    })->name('dashboard.bi');
    Route::get('/travel-expense', function () {
        return view('solution.te');
    })->name('travel.expense');
    Route::get('/sap-business-one', function () {
        return view('sap');
    })->name('sapb1');
    Route::get('/oracle-netsuite', function () {
        return view('netsuite');
    })->name('netsuite');

});
Route::get('/document', function () {
    return view('document');
})->name('document');

Route::get('/language/{locale}', function (string $locale) {
    if (! in_array($locale, ['en','vi'])) {
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
Route::name('admin.')->prefix('/{blogs:slug}')->group(function () {
    Route::get('/', ViewArticleController::class)->name('post.show');
});


