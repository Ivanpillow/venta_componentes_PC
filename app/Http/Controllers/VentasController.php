<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venta = Ventas::all();

        return view('ventas/ventaIndex', compact('venta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ventas/ventaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar
        $request->validate([
            'id_usuario' => 'required',
            'subtotal' => 'required',
            'fecha' => 'required|max:255',
        ]);

        //Guardar
        $venta = new ventas();
        $venta->id_usuario = $request->id_usuario;
        $venta->subtotal = $request->subtotal;
        $venta->fecha = $request->fecha;
        $venta->save();

        //Redireccionar
        //return redirect()->back();
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ventas $venta)
    {
        return view('ventas.ventaShow', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ventas $venta)
    {
        return view('ventas.ventaEdit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ventas $venta)
    {
        $request->validate([
            'id_usuario' => 'required',
            'subtotal' => 'required',
            'fecha' => 'required|max:255',
        ]);

        //Guardar
        $venta->id_usuario = $request->id_usuario;
        $venta->subtotal = $request->subtotal;
        $venta->fecha = $request->fecha;
        $venta->save();

        return redirect()->route('ventas.show', $venta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ventas $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
