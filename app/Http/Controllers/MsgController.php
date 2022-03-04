<?php

namespace App\Http\Controllers;

use App\Mail\MsgRecivido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MsgController extends Controller
{
    public function store()
    {
      $mensaje = request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'asunto' => 'required',
           'contenido' => 'required|min:3'
       ]);
       Mail::to('danielmateoquinterov4@gmail.com')->queue(new MsgRecivido($mensaje));
       return 'Mensaje enviado';
    }
}
