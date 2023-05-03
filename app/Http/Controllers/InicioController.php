<?php
namespace App\Http\Controllers;

use App\Mail\ContactosMailable;
use App\Mail\TestMail;
use App\Models\Asesor;
use App\Models\MensajeContacto;
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
        // Guardado del formulario de contacto.
        $mensajeContacto = new MensajeContacto();
        $mensaje = $mensajeContacto->guardarMensaje($request);
        //Obtención del correo del asesor inmobiliario.
        $asesor = new Asesor();
        $correo_asesor = $asesor->obtenerCorreoAsesor($mensaje->asesor_seleccionado);
        //Envío de correo al asesor inmobiliario con los datos de contacto pertinentes.
        if ($correo_asesor->email) {
            Mail::to($correo_asesor->email)->send(new ContactosMailable($request->all()));
            $mensaje = 'Muy pronto un asesor se pondrá en contacto con usted. Muchas gracias por elegirnos.';
        } else {
            $mensaje = 'Error al comunicarse con el asesor. Por favor, inténtelo de nuevo o intente comunicarse
             por otro medio.';
        }
        $datos = [
            'texto' => $mensaje
        ];

        return view('inicio', $datos);
    /**
     * Método controlador que invoca las funcionalidades de guardado de datos recibidos del formulario de contactos y
     * envío de email al asesor inmobiliario correspospondiente.
     * @author Leandro Brizuela.
     * @param object $request Datos del formulario de contacto.
     * @return view
     */
    }

}
