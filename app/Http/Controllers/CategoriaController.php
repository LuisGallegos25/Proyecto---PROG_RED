<?php

namespace App\Http\Controllers;

use App\Categoria;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Categoria::all();
        return view ('categoria.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('categoria.create');
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
            'title'=>'required',
            'description'=>'required',
            //'foto'=>'required'
        ]);

        
        
        $datos = new Categoria();
            $datos->title = $request->title;
            $datos->description = $request->description; 
        $datos->save();
        $datos=Categoria::all();
        
        //return view('products.index', compact('datos'));
        return redirect('/categoria')->with('toast_success','Categoria creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos=Categoria::find($id) ;
        
        //return view('categoria.edit',compact('id'));
        return view('categoria.edit', compact('datos'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $datos=Categoria::find($id);

            $datos->title = $request->title;
            $datos->description = $request->description;
            
        $datos->save();
        $datos=Categoria::all();
        //return view('products.index', compact('datos'));
        return redirect('/categoria')->with('toast_success','Categoria Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos=Categoria::find($id);
        $datos->delete();
        $datos=Categoria::all();
        //return view('products.index', compact('datos'));
        return redirect('/categoria')->with('toast_success','Categoria Eliminado');
        
    }
}
