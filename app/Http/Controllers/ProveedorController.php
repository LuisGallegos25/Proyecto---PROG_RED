<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Proveedor::all();
        return view ('proveedor.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'nit'=>'required',
            //'foto'=>'required'
        ]);

        
        
        $datos = new Proveedor();
            $datos->name = $request->name;
            $datos->email = $request->email;
            $datos->direccion = $request->direccion; 
            $datos->telefono = $request->telefono;
            $datos->nit = $request->nit;

        $datos->save();
        $datos=Proveedor::all();
        
        //return view('products.index', compact('datos'));
        return redirect('/proveedor')->with('toast_success','Proveedor Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        
        $proveedor->name = $request->name;
        $proveedor->email = $request->email;
        $proveedor->direccion = $request->direccion; 
        $proveedor->telefono = $request->telefono;
        $proveedor->nit = $request->nit;
            
        $proveedor->save();
        $datos=Proveedor::all();
        //return view('products.index', compact('datos'));
        return redirect('/proveedor')->with('toast_success','Proveedor Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        $datos=Proveedor::all();
        //return view('products.index', compact('datos'));
        return redirect('/proveedor')->with('toast_success','Proveedor Eliminado');
    }
}
