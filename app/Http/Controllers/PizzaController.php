<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    /* Querying The Database For All Pizzas */
    public function index()
    {
        // $pizzas = Pizza::latest()->get();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'Hawaiian')->get();

        $pizzas = Pizza::all();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    /* GET single pizza by Id */
    public function show($id)
    {
        /*
        |---------------------------------------
        | Use $id to query the database for
        | for a single pizza
        |----------------------------------------
        */
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', [
            'pizza' => $pizza,
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    /* Store pizza data to the database */
    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('msg', 'Thanks for your order!');
    }
}
