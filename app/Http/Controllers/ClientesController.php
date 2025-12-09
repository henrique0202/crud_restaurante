<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|string|min:25',
        'telefone' => 'required|email|unique:clientes,email',
    ]);
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'telefone' => 'required|string|max:20',
        'email' => 'required|email|unique:clientes,email,' . $id,
    ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('clientes.index');
    }
}
