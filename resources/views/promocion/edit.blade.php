@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row ">
    <div class="col-sm-8 offset-sm-2 ">
       <h1 class="display-3">Editar Registro de proveedor</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul> 
         </div><br />
       @endif
       <form method="post" action="{{ route('promocion.update',$promocion->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control text-light" name="nombre" value="{{$promocion->nombre}}"/>
        </div>
    
        <div class="form-group">
            <label for="porcentaje">Porcentaje:</label>
            <input type="text" class="form-control text-light" name="porcentaje" value="{{$promocion->porcentaje}}"/>
        </div>
                               
       <div class="form-group text-right">
           <a href="{{url('/promocion')}}">Regresar al listado de proveedores</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
   
    
@endsection