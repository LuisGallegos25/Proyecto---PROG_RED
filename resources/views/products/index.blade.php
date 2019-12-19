@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey text-light">
    
        
<button class="btn btn-outline-success text-light" type="button"><a class="text-light" href="{{ url('/products') }}">Productos</a> </button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/defensa') }}">Solicitudes</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/categoria') }}"> Categorias</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/proveedor') }}"> Proveedores</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/promocion') }}"> Promociones</a></button>
        
        
      
<h1>Armas de Fuego</h1>
</div>
<div class="container">
    <table class="table table-dark text-light ">
        <thead>
            <tr>
              
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Proveedor</td>
               
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
                <a href="{{ route('products.create')}}" class="btn btn-warning">Nuevo</a>
            @foreach ($datos as $product)
            
                <tr>
                    
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->pricing }}</td>
                    <td>{{ $product->proveedor->name }}</td>
                    
                <td>  
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                    
                    <a href="{{ route('products.edit',$product->id)}}" class="btn btn-warning" >Editar</a></td>
            
                    
                    </form>
                
               
                </tr>
            @endforeach
        </tbody>  
    </table>

</div>
    
@endsection