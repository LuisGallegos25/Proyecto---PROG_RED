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
       <form method="post" action="{{ route('proveedor.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="name">Nombres:</label>
            <input type="text" class="form-control text-light" name="name"/>
        </div>
    
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <input type="email" class="form-control text-light" name="email"/>
        </div>
    
        <div class="form-group">    
           <label for="direccion">Direccion:</label>
           <input type="text" class="form-control text-light" name="direccion"/>
       </div>

       <div class="form-group">    
        <label for="telefono">telefono:</label>
        <input type="text" class="form-control text-light" name="telefono"/>

        <div class="form-group">    
            <label for="nit">NIT:</label>
            <input type="text" class="form-control text-light" name="nit"/>
        </div>
    </div>

       
                               
       <div class="form-group text-right">
           <a href="{{url('/proveedor')}}">Regresar al listado de proveedores</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
</div>
    
@endsection