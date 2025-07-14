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
    Route::get('/erp-preimplementation', function () {
        return view('solution.erp-preimplementation');
    })->name('erp-preimplementation');
    Route::get('/erp-maintenance', function () {
        return view('solution.erp-maintenance');
    })->name('erp-maintenance');
    Route::get('/japanese-it-hub', function () {
        return view('solution.japanese-it-hub');
    })->name('japanese-it-hub');
    Route::get('/ai-coach-build', function () {
        return view('solution.ai-coach-build');
    })->name('ai-coach-build');
    Route::get('/saas-product', function () {
        return view('solution.saas-product');
    })->name('saas-product');
    Route::get('/oracle-netsuite', function () {
        return view('netsuite');
    })->name('netsuite');
});
Route::name('course.')->prefix('course')->group(function () {
    Route::get('/ai-course-sme', function () {
        return view('course.ai-course-sme');
    })->name('ai-coach-sme');
});
Route::get('/about-us', function () {
    return view('contact-us');
})->name('about');
Route::get('/documents', function () {
    return view('document');
})->name('documents');
Route::get('/sap-business-one', ['App\Http\Controllers\SolutionController', 'sap'])->name('sapb12');
Route::get('/language/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'vi'])) {
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
