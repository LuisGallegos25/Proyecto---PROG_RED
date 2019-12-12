@extends('layouts.app')
@section('content')
@foreach ($products as $product)
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
        
        <center>
                <h1>{{$product->title}}</h1>
            <div class="row-center">
                
                <div class="col-sm-1 col-xs-12"  style="height:30%">
                        
                </div>
                <div class="col-sm-4 col-xs-12" >
                        <img class="card-img-top" src="images/{{$product->foto}}" alt="">
                    <p>
                        
                        <strong>Descripcion</strong>
                    </p>
                    <p>
                        {{$product->description}}
                    </p>
                    <p>
                    <a href="{{ route('contact') }}" class="btn btn-success">Comprar</a>
                    </p>
                </div>
            </div>
        </center>
        </div>

    </div>
    
@endforeach    

@endsection