@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Formulario de solicitud</h1>
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
       <form method="post" action="{{ route('defensa.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control text-light" name="nombres"/>
        </div>
    
        <div class="form-group">
            <label for="correo">Correo electronico:</label>
            <input type="correo" class="form-control text-light" name="correo"/>
        </div>
    
        <div class="form-group">    
          <label for="identificacion">Numero de identificacion:</label>
          <input type="text" class="form-control text-light" name="identificacion"/>
      </div>
      <div class="form-group">    
        <label for="direccion">Direccion:</label>
        <input type="text" class="form-control text-light" name="direccion"/>
    </div>

    <div class="form-group">    
      <label for="estado">Estado de solicitud:</label>
      <input type="text" class="form-control text-light" name="estado" value="En espera" disabled/>
  </div>
      
                               
       <div class="form-group text-right">
           <a href="{{url('producto')}}">Regresar a ver otras armas</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
</div>
    
@endsection