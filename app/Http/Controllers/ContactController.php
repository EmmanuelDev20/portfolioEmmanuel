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