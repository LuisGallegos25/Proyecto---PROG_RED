<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Product::all();
        return view ('products.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            
        }
        
        $request->validate([
            'title'=>'required',
            'pricing'=>'required',
            'description'=>'required',
            //'foto'=>'required'
        ]);

        
        
        $datos = new Product();
            $datos->title = $request->title;
            $datos->pricing = $request->pricing;
            $datos->description = $request->description; 
            $datos->foto = $name;

        $datos->save();
        $datos=Product::all();
        
        //return view('products.index', compact('datos'));
        return redirect('/products')->with('toast_success','Nuevo Articulo Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title'=>'required',
            'pricing'=>'required',
            'description'=>'required'
        ]);
            $product->title = $request->title;
            $product->pricing = $request->pricing;
            $product->description = $request->description;
            
        $product->save();
        $datos=Product::all();
        //return view('products.index', compact('datos'));
        return redirect('/products')->with('toast_success','Producto Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $datos=Product::all();
        //return view('products.index', compact('datos'));
        return redirect('/products')->with('toast_success','Producto Eliminado');
        
    }
}
