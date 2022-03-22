<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function store(Request $request){
    $validated = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'message' => 'required'
        ]);

    $correo = new ContactoMailable($request->all());

    Mail::to('emanuelovares@gmail.com')->send($correo);

    return redirect()->route('home')->with('info', 'Mensaje enviado');
  }
}

    //   $validated = $request->validate([
    //     'origen' => 'required',
    //     'camara' => 'required',
    //     'temperatura' => 'required|gt:20|lt:45',

    //     'inconforme' => 'required|boolean',
    //     'noConformidad' => 'exclude_if:inconforme,false|required',
    //   ]);

    //   $usuario = auth()->user()->id;
    
    //   $camara_temperatura = CamaraTemperature::create([
    //     'origen' => $request->origen,
    //     'camara' => $request->camara,
    //     'temperatura' => $request->temperatura,
    //     'user_id' => $usuario,
    //     'verificado' => 0,

    //     'inconforme' => $request->inconforme,
    //     'inconformidad' => $request->noConformidad,
    //     'acciones' => $request->accionesCorrectivas,
    //   ]);
  
    //   return redirect()->route('temperatura-camaras.show', $camara_temperatura);