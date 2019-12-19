@extends('layouts.app')
@section('content')

<div class="container white text-light table-dark">
     
     <!-- FORMULARIO -->
 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
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
       <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="title">Titulo:</label>
            <input type="text" class="form-control text-light" name="title"/>
        </div>
    
        <div class="form-group">
            <label for="pricing">Precio de tu producto en centavos de dolar:</label>
            <input type="number" class="form-control text-light" name="pricing"/>
        </div>
    
        <div class="form-group">    
           <label for="description">Descripcion del producto:</label>
           <input type="text" class="form-control text-light" name="description"/>
       </div>

       <div class="form-group">    
          <label for="file">Foto del producto:</label>
          <input type="file"  name="foto"/>
      </div>

      <div class="form-group">
        <label for="">Seleccione su Proveedor : </label>
        <select name="proveedor" class="custom-select">          
          @foreach ($proveedores as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Seleccione una categoria : </label>
        <select name="categoria" class="custom-select">          
          @foreach ($categoria as $item)
              <option value="{{ $item->id }}">{{ $item->title }}</option>
          @endforeach
        </select>
      </div>
                               
       <div class="form-group text-right">
           <a href="{{url('/products')}}">Regresar al listado de productos</a>
            <input type="submit" value="Enviar" class="btn btn-warning">
           </div>
    
    </form>
     </div>
   </div>
   </div>
</div>
    
@endsection