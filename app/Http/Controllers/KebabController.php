<?php

namespace App\Http\Controllers;

use App\kebab;
use Illuminate\Http\Request;

class KebabController extends Controller
{


    public function index()
    {

        $kebabs = Kebab::latest()->get();

        return view('kebab.index', ["kebabs" => $kebabs]);
    }
    //

    public function create()
    {

        return view('kebab.create');
    }

    public function store()
    {

        $kebab = new kebab();
        $kebab->name = request('name');
        $kebab->base = request('base');
        $kebab->type = request('type');
        $kebab->toppings = request('toppings');

        $kebab->save();




        return redirect('/')->with('message', 'Thank you for your orders');
    }

    public function show($id)
    {
        $kebab = Kebab::findOrfail($id);

        return view('kebab.show', ['kebab' => $kebab]);
    }
    public function destroy($id)
    {
        $kebab = Kebab::findOrfail($id);
        $kebab->delete();
        return redirect('/kebab');
    }
}
