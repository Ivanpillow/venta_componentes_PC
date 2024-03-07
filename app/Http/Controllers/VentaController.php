<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas/ventaIndex', compact('ventas'));
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
        $request->validate([
            'id_usuario' => 'required | max:255',
            'subtotal' => ['required'],
            'fecha' => ['required'],
        ]);

        //Guardar
        $venta = new Venta();
        $venta->id_usuario = $request->id_usuario;
        $venta->subtotal = $request->subtotal;
        $venta->fecha = $request->fecha;
        $venta->save();

        //Redireccionar
        return redirect()->route('venta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        return view('ventas.ventaShow', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        return view('ventas.ventaEdit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'id_usuario' => 'required | max:255',
            'subtotal' => ['required'],
            'fecha' => ['required'],
        ]);

        $venta->id_usuario = $request->id_usuario;
        $venta->subtotal = $request->subtotal;
        $venta->fecha = $request->fecha;
        $venta->save();

        return redirect()->route('venta.show', $venta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('venta.index');
    }
}
