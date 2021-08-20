<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\veiculos;

class veiculosController extends Controller
{
    public function create()
    {
        return view('veiculos.create');
    }
    public function store(Request $request)
    {
        veiculos::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'ano' => $request->ano,
            'renavam' => $request->renavam,
            'proprietario' => $request->proprietario,
            'email' => $request->email



        ]);
    }
}
