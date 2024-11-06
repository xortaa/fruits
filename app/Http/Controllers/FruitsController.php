<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitsController extends Controller
{
    //

    public function index()
    {
        $fruits = Fruit::all();

        return view('fruits.index', ['fruits' => $fruits]);
    }

    public function create()
    {
        return view('fruits.create');
    }

    public function store() { 
        $data = request()->validate([
            'name' => 'required',
            'color' => 'required'
        ]);

        $newFruit = Fruit::create($data);

        return redirect()->route('fruits.index');
    }
}
