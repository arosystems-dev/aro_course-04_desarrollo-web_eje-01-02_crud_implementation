<?php

namespace App\Http\Controllers;

use App\Models\MArticulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CArticulo extends Controller
{
    // INDEX
    public function index()
    {
        $articulos = MArticulo::all()->where('estado', 1);
        return view('articulo.VIndex', ['articulos' => $articulos]);
    }

    // SEARCH
    public function search(Request $request)
    {
        $criterio = $request->criterio;
        $articulos = MArticulo::where('estado', 1)
            ->where(function ($q) use ($criterio) {
                $q->where('id', 'LIKE', "%{$criterio}%")
                    ->orWhere('nombre', 'LIKE', "%{$criterio}%")
                    ->orWhere('descripcion', 'LIKE', "%{$criterio}%")
                    ->orWhere('cantidad', 'LIKE', "%{$criterio}%");
            })
            ->get();
        // dd($articulos);
        return view('articulo.VIndex', ['articulos' => $articulos]);
    }

    // CREATE
    public function create()
    {
        return view('articulo.VCreate');
    }

    // STORE
    public function store(Request $request)
    {
        $articulo = new MArticulo();
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->estado = 1;
        $articulo->save();
        return Redirect::to('/articulo/index');
    }

    // SHOW
    public function show() {}

    // EDIT
    public function edit(String $id)
    {
        $articulo = MArticulo::find($id);
        return view('articulo.VEdit', ['articulo' => $articulo]);
    }

    // UPDATE
    public function update(Request $request, String $id)
    {
        $articulo = MArticulo::find($id);
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->estado = 1;
        $articulo->update();
        return Redirect::to('/articulo/index');
    }

    // DESTROY
    public function destroy($id)
    {
        $articulo = MArticulo::find($id);
        $articulo->estado = 0;
        $articulo->update();
        return Redirect::to('/articulo/index');
    }
}
