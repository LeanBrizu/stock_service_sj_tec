<?php
namespace App\Http\Controllers;

use App\Mail\ContactosMailable;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    public function index ()
    {
        return view('inicio');
    }

    public function guardarMensajeContacto (Request $request)
    {
        $request->validate ([
            'Nombre' => 'required|max:25',
            'Correo' => 'email|required',
            'Mensaje' => 'required|max:500'
        ]);

        Mail::to($request->Correo)->send(new ContactosMailable($request->all()));

        return view('inicio');
    }

}
