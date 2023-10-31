<?php
use App\Models\Category;
use App\Models\Character;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('characters', [CharacterController::class, 'index'])->name('characters');


Route::get('characters/{character}', [CharacterController::class, 'show'])->name('character');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
