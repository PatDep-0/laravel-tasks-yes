<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return redirect()->route('artists.search');
});

Route::get('/artists/search', [ArtistController::class, 'search'])->name('artists.search');
Route::get('/artists/{artistID}', [ArtistController::class, 'show'])->name('artists.show');
