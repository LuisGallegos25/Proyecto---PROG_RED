@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Añadir Categoria</h1>
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
       <form method="post" action="{{ route('categoria.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="title">Titulo:</label>
            <input type="text" class="form-control text-light" name="title"/>
        </div>
    
    
        <div class="form-group">    
           <label for="description">Descripcion de la categoria:</label>
           <input type="text" class="form-control text-light" name="description"/>
       </div>

                               
       <div class="form-group text-right">
           <a href="{{url('/categoria')}}">Regresar al listado de categorias</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
</div>
    
@endsection