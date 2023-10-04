<?php
use App\Models\Category;
use App\Models\Character;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('characters', function () {
    return view('characters', [
        'characters' => Character::latest()->get()
    ]);
});


/*Route::get('test-character', function () {
    dd(Characters::getCharacterDetails('gon'));
});

*/

Route::get('characters/{character}', function (Character $character) {


    return view('character', [
        'character' => $character
    ]);

});
Route::get('categories/{category:slug}', function (Category $category) {
    return view('characters', [
        'characters' => $category->characters
    ]);
});
Route::get('authors/{author:username}', function (User $author) {

    return view('characters', [
        'characters' => $author->characters
    ]);
});
