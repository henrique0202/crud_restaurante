<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Cliente;
use App\Models\Mesa;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.create', compact('clientes', 'mesas'));
    }

    public function store(Request $request)
    {
        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.edit', compact('reserva', 'clientes', 'mesas'));
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());
        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reservas.index');
    }
}