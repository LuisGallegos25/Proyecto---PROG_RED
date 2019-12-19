@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey text-light">
    
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/products') }}">Productos</a> </button>
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/defensa') }}">Solicitudes</a></button>
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/categoria') }}"> Categorias</a></button>
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/proveedor') }}"> Proveedores</a></button>
    <button class="btn btn-outline-success text-light" type="button"><a class="text-light" href="{{ url('/promocion') }}">Promociones</a></button>
           
      
<h1>Promociones</h1>
</div>
<div class="container">
    <table class="table table-dark text-light ">
        <thead>
            <tr>
              
                <td>Nommbre</td>
                <td>Porcentaje</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
                <a href="{{ route('promocion.create')}}" class="btn btn-warning">Nuevo</a>
            @foreach ($datos as $promocion)
            
                <tr>
                    
                    <td>{{ $promocion->nombre }}</td>
                    <td>{{ $promocion->porcentaje }}</td>
                   
                    
                <td>  
                <form action="{{ route('promocion.destroy', $promocion->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                    
                    <a href="{{ route('promocion.edit',$promocion->id)}}" class="btn btn-warning" >Editar</a></td>
            
                    
                    </form>
                
               
                </tr>
            @endforeach
        </tbody>  
    </table>

</div>
    
@endsection