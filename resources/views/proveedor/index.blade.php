@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey text-light">
    
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/products') }}">Productos</a> </button>
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/defensa') }}">Solicitudes</a></button>
    <button class="btn btn-sm btn-outline-secondary text-light" type="button"><a class="text-light" href="{{ url('/categoria') }}"> Categorias</a></button>
    <button class="btn btn-outline-success text-light" type="button"><a class="text-light" href="{{ url('/proveedor') }}"> Proveedores</a></button>
        
      
<h1>Proveedores</h1>
</div>
<div class="container">
    <table class="table table-dark text-light ">
        <thead>
            <tr>
              
                <td>Nommbre</td>
                <td>Correo Electronico</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>NIT</td>
            </tr>
        </thead>
        <tbody>
                <a href="{{ route('proveedor.create')}}" class="btn btn-warning">Nuevo</a>
            @foreach ($datos as $proveedor)
            
                <tr>
                    
                    <td>{{ $proveedor->name }}</td>
                    <td>{{ $proveedor->email }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->nit }}</td>
                    
                <td>  
                <form action="{{ route('proveedor.destroy', $proveedor->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                    
                    <a href="{{ route('proveedor.edit',$proveedor->id)}}" class="btn btn-warning" >Editar</a></td>
            
                    
                    </form>
                
               
                </tr>
            @endforeach
        </tbody>  
    </table>

</div>
    
@endsection