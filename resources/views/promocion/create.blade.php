@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Registrar Proveedor</h1>
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
       <form method="post" action="{{ route('promocion.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="nombre">Nombres:</label>
            <input type="text" class="form-control text-light" name="nombre"/>
        </div>
    
        <div class="form-group">
            <label for="porcentaje">Porcentaje:</label>
            <input type="text" class="form-control text-light" name="porcentaje"/>
        </div>
                          
       <div class="form-group text-right">
           <a href="{{url('/promocion')}}">Regresar al listado de promociones</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
</div>
    
@endsection