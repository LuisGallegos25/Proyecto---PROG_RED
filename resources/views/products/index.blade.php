@extends('layouts.app');
@section('content')

<div class="big-padding text-center blue-grey white-text">
<h1>PRODUCTOS</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
                <a href="{{ route('products.create')}}" class="btn btn-primary">Nuevo</a>
            @foreach ($datos as $product)
            
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->pricing }}</td>
                <td>  
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                    
                    <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary" >Editar</a></td>
            
                    
                    </form>
                
               
                </tr>
            @endforeach
        </tbody>  
    </table>

</div>
    
@endsection