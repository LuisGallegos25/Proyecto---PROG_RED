@extends('layouts.app')
@section('content')
@foreach ($products as $product)
<div class="container text-center">
        <div class="card product text-left">
            @if(Auth::check() && $product->user_id == Auth::user()->id)
            
            

            @endif
        
        <center>
                <h1>{{$product->title}}</h1>
            <div class="row-center">
                
                <div class="col-sm-1 col-xs-12"  style="height:30%">
                        
                </div>
                <div class="col-sm-4 col-xs-12" >
                        <img class="card-img-top" src="images/{{$product->foto}}" alt="">
                    <p>
                        
                        <strong>Descripcion</strong>
                    </p>
                    <p>
                        {{$product->description}}
                    </p>
                    <p>
                    <a href="{{ route('contact') }}" class="btn btn-success">Solicitar</a>
                    </p>
                </div>
            </div>
        </center>
        </div>

    </div>
    
@endforeach    

<!-- Main Footer -->
<center><footer class="main-footer">
    <!-- To the right -->
    

    <div class="container text-center">
        <div class="card product text-left">
            
        
        <center>
                <h1>Comentarios</h1>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                       <h1 class="display-3"></h1>
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
                                 <label >Asunto:</label>
                                 <input type="text" class="form-control" name="subject"/>
                             </div>
                             <div class="form-group">
                                 <label >Comentario:</label>
                                 <textarea name="content" rows="10" cols="80">Escribe aquí tus comentarios</textarea>
                             </div>                                      
                             <input type="submit" value="Enviar" class="btn btn-success">
                                    
                                </div>
                
                             
                         </form>
                     </div>
                   </div>
        </center>
        </div>

    </div>
    

    
</footer></center>

@endsection