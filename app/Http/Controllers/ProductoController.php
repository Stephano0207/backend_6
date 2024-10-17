<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Exception;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ListaProducto=Productos::with(['categoria'])
        ->where('estado','=','1')
        ->get();
        return response()->json($ListaProducto);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $producto=new Productos();
            $producto->descripcion=$request->descripcion;
            $producto->idcategoria=$request->idcategoria;
            $producto->precio=$request->precio;
            $producto->cantidad=$request->cantidad;
            $producto->estado=1;
            $producto->save();
            $result=[
            'descripcion'=>$producto->descripcion,
            'idcategoria'=>$producto->idcategoria,
            'precio'=>$producto->precio,
            'cantidad'=>$producto->cantidad,
            'created' => true];
            return $result;
            }
            catch(Exception $e){
            return "Error fatal - ".$e->getMessage();
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Productos::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto=Productos::findOrFail($id);
        $producto->update($request->all());
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
