@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="card product text-left">
            @if(Auth::check() && $product->user_id == Auth::user()->id)
            
            <center><div class="absolute actions">
                    <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">Borrar</button>
                            <a href="{{ route('products.create')}}" class="btn">Nuevo</a>
                            <a href="{{ route('products.edit',$product->id)}}" class="btn" >Editar</a></td>
                    
            </div></center>

            @endif
        <h1>{{$product->title}}</h1>
            <div class="row">
                <div class="col-sm-6 col-xs-12"></div>
                <div class="col-sm-6 col-xs-12">
                    <p>
                        <strong>Descripcion</strong>
                    </p>
                    <p>
                        {{$product->description}}
                    </p>
                    <p>
                        <a href="" class="btn btn-success">Agregar al carrito</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection