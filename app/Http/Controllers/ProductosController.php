<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Productos::all();

        return view('productos/productoIndex', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos/productoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required',
            'stock' => 'required',
            'categoria' => 'required|max:255',
            'status' => 'required',
        ]);

        //Guardar
        $productos = new Productos();
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->stock = $request->stock;
        $productos->categoria = $request->categoria;
        $productos->status = $request->status;
        $productos->save();

        
        
        //Redireccionar
        //return redirect()->back();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        return view('productos.productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        return view('productos.productoEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required',
            'stock' => 'required',
            'categoria' => 'required|max:255',
            'status' => 'required',
        ]);

        //Guardar
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->categoria = $request->categoria;
        $producto->status = $request->status;
        $producto->save();

        return redirect()->route('producto.show', $producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
