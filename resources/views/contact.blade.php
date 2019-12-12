@extends('layouts.app')
@section('content')





<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Formulario de Solicitud</h1>
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
         <form method="post" action="{{ route('messages.store') }}">  
             @csrf
             <div class="form-group">    
                 <label>Nombres:</label>
                 <input type="text" class="form-control" name="name"/>
             </div>
   
             <div class="form-group">
                 <label >Correo:</label>
                 <input type="email" class="form-control" name="email"/>
             </div>
   
             <div class="form-group">
                 <label >Identificacion:</label>
                 <input type="text" class="form-control" name="subject"/>
             </div>
             <div class="form-group">
                 <label >Direccion:</label>
                 <input type="text" class="form-control" name="content"/>
             </div>                                      
             <input type="submit" value="Enviar" class="btn btn-success">
                    
                </div>

             
         </form>
     </div>
   </div>
   </div>


@endsection