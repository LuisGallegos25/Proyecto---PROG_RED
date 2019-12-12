<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class SolicitudController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'content'=>'required'
        ]);


        $datos = new Solicitud();
            $datos->name = $request->name;
            $datos->email = $request->email;
            $datos->subject = $request->subject; 
            $datos->content = $request->content;

        $datos->save();
        $datos=Solicitud::all();
        
        return redirect('home')->with('toast_success','Su solicitud sera procesada.');
       
    }

}
