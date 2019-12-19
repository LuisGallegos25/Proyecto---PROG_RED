@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey text-light">
    
        
<button class="btn btn-sm btn-outline-secondary text-ligh" type="button"><a class="text-light" href="{{ url('/products') }}">Productos</a> </button>
          <button class="btn btn-outline-success text-light" type="button"><a class="text-light" href="{{ url('/defensa') }}">Solucitudes</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/categoria') }}"> Categorias</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/proveedor') }}"> Proveedores</a></button>
          <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/promocion') }}"> Promociones</a></button>
        
        
      
<h1>Solicitudes</h1>
</div>
<div class="container">
    <table class="table table-dark text-light">
        <thead>
            <tr>
              
                <td>Nombres</td>
                <td>Correo</td>
                <td>Identificacion</td>
                <td>direccion</td>
                <td>Estado</td>
                <td>Acciones</td>

            </tr>
        </thead>
        <tbody>
                
            @foreach ($datos as $defensa)
            
                <tr>
                    
                    <td>{{ $defensa->nombres }}</td>
                    <td>{{ $defensa->correo }}</td>
                    <td>{{ $defensa->identificacion }}</td>
                    <td>{{ $defensa->direccion }}</td>
                    <td>{{ $defensa->estado }}</td>
                <td>  
                <form action="{{ route('defensa.destroy', $defensa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                    
                    <a href="{{ route('defensa.edit',$defensa->id)}}" class="btn btn-warning" >Editar</a></td>
            
                    
                    </form>
                
               
                </tr>
            @endforeach
        </tbody>  
    </table>

</div>
    
@endsection