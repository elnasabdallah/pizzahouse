<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {

        $pizzas = [[
            'type' => 'hawain',
            'price' => 3, 'base' => 'cherry crust'
        ], [
            'type' => 'volcano',
            'price' => 10, 'base' => 'Garlic crust'
        ], [
            'type' => 'Veg supreme',
            'price' => 15, 'base' => 'thin & crispy'
        ]];

        return view('pizza', [
            'pizzas' => $pizzas,

        ]);
    }
    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
