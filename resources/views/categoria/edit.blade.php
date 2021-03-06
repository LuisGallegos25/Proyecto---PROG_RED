@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row ">
    <div class="col-sm-8 offset-sm-2 ">
       <h1 class="display-3">Editar Categoria</h1>
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
       <form method="post" action="{{ route('categoria.update',$datos->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="title">Titulo:</label>
            <input type="text" class="form-control text-light" name="title" value="{{$datos->title}}"/>
        </div>
    
        <div class="form-group">
            <label for="description">Descripcion de la categoria:</label>
            <input type="text" class="form-control text-light" name="description" value="{{$datos->description}}"/>
        </div>
    
        
                               
       <div class="form-group text-right">
           <a href="{{url('/categoria')}}">Regresar al listado de categoria</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
   
    
@endsection