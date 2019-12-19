<?php

namespace App\Http\Controllers;

use App\Promocion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Promocion::all();
        return view ('promocion.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promocion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
        
        
        $datos = new Promocion();
            $datos->nombre = $request->nombre;
            $datos->porcentaje = $request->porcentaje;
            
        $datos->save();
        $datos=Promocion::all();
        
        //return view('products.index', compact('datos'));
        return redirect('/promocion')->with('toast_success','Promocion Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $promocion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocion $promocion)
    {
        return view('promocion.edit',compact('promocion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
        
        $promocion->nombre = $request->nombre;
        $promocion->porcentaje = $request->porcentaje;
        
            
        $promocion->save();
        $datos=Promocion::all();
        //return view('products.index', compact('datos'));
        return redirect('/promocion')->with('toast_success','Promocion Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
        $datos=Promocion::all();
        //return view('products.index', compact('datos'));
        return redirect('/promocion')->with('toast_success','Promocion Eliminada');
    }
}
