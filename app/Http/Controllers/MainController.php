<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $heroes = Hero::all();

        return view('pages.home', compact('heroes'));
    }

    public function heroDelete(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('home');
    }
}