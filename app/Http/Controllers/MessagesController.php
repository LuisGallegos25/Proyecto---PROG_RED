<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessagesController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        //
        Mail::to('albertogallego356@gmail.com')->queue(new MessageReceived($msg));
        //return 'Mensaje Enviado';

      // $alert= Alert::success('Mensaje Enviado','Te responderemos algun dia');
     //return redirect('/contacto')->with('toast_success','Mensaje Enviado ');
     
     //sendGrid
     //Mail::to('albertogallego356@gmail.com')->queue(new MessageReceived($msg));
     //return new MessageReceived($msg);
     return redirect('home')->with('toast_success','Su solicitud sera procesada.');
    }
}
