@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row ">
    <div class="col-sm-8 offset-sm-2 ">
       <h1 class="display-3">Añadir producto</h1>
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
       <form method="post" action="{{ route('products.update',$product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="title">Titulo:</label>
            <input type="text" class="form-control text-light" name="title" value="{{$product->title}}"/>
        </div>
    
        <div class="form-group">
            <label for="pricing">Precio de tu producto en centavos de dolar:</label>
            <input type="number" class="form-control text-light" name="pricing" value="{{$product->pricing}}"/>
        </div>
    
        <div class="form-group">    
           <label for="description">Descripcion del producto:</label>
           <input type="text" class="form-control text-light" name="description" value="{{$product->description}}"/>
       </div> 
                               
       <div class="form-group text-right">
           <a href="{{url('/products')}}">Regresar al listado de productos</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
   
    
@endsection