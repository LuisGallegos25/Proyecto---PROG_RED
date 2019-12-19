<?php

namespace App\Http\Controllers;

use App\Defensa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DefensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Defensa::all();
        return view ('defensa.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('defensa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
           
        
        $datos = new defensa();
            $datos->nombres = $request->nombres;
            $datos->correo = $request->correo;
            $datos->identificacion = $request->identifiacion; 
            $datos->direccion = $request->direccion;
            

        $datos->save();
        $datos=Defensa::all();
        
        //return view('products.index', compact('datos'));
        return redirect('/defensa')->with('toast_success','Solicitud enviada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Defensa  $defensa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Defensa  $defensa
     * @return \Illuminate\Http\Response
     */
    public function edit(Defensa $defensa)
    {
        return view('defensa.edit',compact('defensa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Defensa  $defensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Defensa $defensa)
    {
       
        

            $defensa->nombres = $request->nombres;
            $defensa->correo = $request->correo;
            $defensa->identificacion = $request->identificacion; 
            $defensa->direccion = $request->direccion;
            $defensa->estado = $request->estado;

        $defensa->save();
        $datos=Defensa::all();
        //return view('products.index', compact('datos'));
        return redirect('/defensa')->with('toast_success','Solicitud editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Defensa  $defensa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defensa $defensa)
    {
        $defensa->delete();
        $datos=Defensa::all();
        //return view('products.index', compact('datos'));
        return redirect('/defensa')->with('toast_success','Producto Eliminado');
        
    }
}
