<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Archivo;

class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('/productos/productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('/productos/productoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|max:150',
            'descripcion' => 'required|max:250',
            'cantidad' => 'required|integer|min:0',
            'precio' => 'numeric|required|min:0'
        ]);

        $producto = Producto::create($request->all());


        if ($request->file('archivo')->isValid()){
            $ubicacion = $request->archivo->store('productos');
            $archivo = new Archivo();
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre = $request->archivo->getClientOriginalName();
            $archivo->mime = '';

            $producto->archivos()->save($archivo);
        }
        
        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('/productos/productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('/productos/productoEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request -> validate([
            'nombre' => 'required|max:150',
            'descripcion' => 'required|max:250',
            'cantidad' => 'integer|min:0',
            'precio' => 'numeric|required|min:0'
        ]);

        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect('/producto');
    }
}
