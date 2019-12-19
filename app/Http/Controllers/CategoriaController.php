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
        //return $request;
        
        
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
     * @param  \App\Categoria  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Categoria::find($id);
        return view('cateoria.show',['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
            $categoria->title = $request->title;
            $categoria->description = $request->description;
            
        $categoria->save();
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
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        $datos=Categoria::all();
        //return view('products.index', compact('datos'));
        return redirect('/categoria')->with('toast_success','Categoria Eliminada');
        
    }
}
