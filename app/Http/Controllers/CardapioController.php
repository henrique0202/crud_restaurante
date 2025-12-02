<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('cardapios.index', compact('cardapios'));
    }

    public function create()
    {
        return view('cardapios.create');
    }

    public function store(Request $request)
    {
        Cardapio::create($request->all());
        return redirect()->route('cardapios.index');
    }

    public function edit($id)
    {
        $cardapio = Cardapio::findOrFail($id);
        return view('cardapios.edit', compact('cardapio'));
    }

    public function update(Request $request, $id)
    {
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->update($request->all());
        return redirect()->route('cardapios.index');
    }

    public function destroy($id)
    {
        Cardapio::destroy($id);
        return redirect()->route('cardapios.index');
    }
}