@extends('layouts.app')
@section('content')





<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Formulario de Solicitud</h1>
     <div>
       @if ($errors->any())
         
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
             <button type="submit" class="btn btn-primary">Enviar</button>

             <div class="green">
                    
                </div>

             
         </form>
     </div>
   </div>
   </div>


@endsection