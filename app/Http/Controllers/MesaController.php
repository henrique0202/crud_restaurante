<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index', compact('mesas'));
    }

    public function create()
    {
        return view('mesas.create');
    }

    public function store(Request $request)
    {
         $request->validate([
        'numero' => 'required|integer|min:1',
        'lugares' => 'required|integer|min:1',
        'status' => 'required|in:livre,ocupada,reservada',
    ]);

        Mesa::create($request->all());
        return redirect()->route('mesas.index')->with('success', 'mesa cadastrada com sucesso');
    }

    public function edit($id)
    {
        $mesa = Mesa::findOrFail($id);
        return view('mesas.edit', compact('mesa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'numero' => 'required|integer|min:1',
        'lugares' => 'required|integer|min:1',
        'status' => 'required|in:livre,ocupada,reservada', $id,
    ]);

        $mesa = Mesa::findOrFail($id);
        $mesa->update($request->all());
        return redirect()->route('mesas.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Mesa::destroy($id);
        return redirect()->route('mesas.index');
    }
}