<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use MarcReichel\IGDBLaravel\Models\Game;

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
    //$games = Game::where('name', 'Fortnite')->get();

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        // 'data' => Http::withHeaders([
        //     'Client-ID' => 'iaj70hx3m2igkd5yh41ewffsmi0wi6',
        //     'Authorization' => 'Bearer hpjh7j75xx1y1zgt7nkpytdxlswjnm'
        // ])
        // ->withBody(
        //     'fields *;', 'text/plain'
        // )
        // ->post('https://api.igdb.com/v4/games')
        // ->json(),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
