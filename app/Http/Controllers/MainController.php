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

    // funzione per cancellare
    public function heroDelete(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('home');
    }

    // funzione per creare nuovo eroe
    public function heroCreate()
    {

        return view('pages.heroCreate');
    }

    // funzione per ricevere i dati dal form: crea nuovo eroe 
    public function heroStore(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'before_or_equal:date',
            'heigth' => 'required|integer|min:50|max:200',
        ]);

        $hero = new Hero();

        $hero->first_name = $data['first_name'];
        $hero->last_name = $data['last_name'];
        $hero->date_of_birth = $data['date_of_birth'];
        $hero->heigth = $data['heigth'];

        $hero->save();

        return redirect()->route('home');
    }
}