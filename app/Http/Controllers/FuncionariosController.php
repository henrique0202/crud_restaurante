<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'cargo' => 'required|string|max:255',
        'telefone' => 'required|string|max:20',
    ]);
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index')->with('success','funcionario cadastrado com sucesso');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'cargo' => 'required|string|max:255',
        'telefone' => 'required|string|max:20',
    ]);
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index')->with('success','funcionario atualizado com sucesso');
    }

    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionarios.index');
    }
}