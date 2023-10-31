<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Character;


class CharacterController extends Controller
{
    public function index()
    {
        return view('characters.index', [
            'characters' => Character::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),

        ]);
    }
    public function show(Character $character)
    {
        return view('characters.show', [
            'character' => $character
        ]);
    }

}
