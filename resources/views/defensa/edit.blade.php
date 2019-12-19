@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row ">
    <div class="col-sm-8 offset-sm-2 ">
       <h1 class="display-3">Confirmar Solicitud</h1>
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
       <form method="post" action="{{ route('defensa.update',$defensa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="Nombres">Nombres:</label>
            <input type="text" class="form-control text-light" name="nombres" value="{{$defensa->nombres}}"/>
        </div>
    
        <div class="form-group">
            <label for="correo">Correo electronico:</label>
            <input type="correo" class="form-control text-light" name="correo" value="{{$defensa->correo}}"/>
        </div>
    
        <div class="form-group">    
           <label for="identificacion">Numero de Identificacion:</label>
           <input type="text" class="form-control text-light" name="identificacion" value="{{$defensa->identificacion}}"/>
       </div> 
       <div class="form-group">    
        <label for="direccion">Direccion:</label>
        <input type="text" class="form-control text-light" name="direccion" value="{{$defensa->direccion}}"/>
    </div> 
    <div class="form-group">    
      <label for="estado">Estado de solicitud:</label>
      <input type="text" class="form-control text-light" name="estado" value="{{$defensa->estado}}"/>
  </div> 
                               
       <div class="form-group text-right">
           <a href="{{url('/defensa')}}">Regresar al listado de solicitudes</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
   
    
@endsection