<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajeContacto extends Model
{
    use HasFactory;
    protected $table = 'mensajes_contacto';
    protected $guarded = [];

    public function guardarMensaje($request)
    {
        // Reglas de validación.
        $request->validate([
            'Nombre' => 'required|max:25',
            'Correo' => 'required|email',
            'Telefono' => 'required|string|regex:/^\+?\d{8,}$/',
            'Mensaje' => 'required|max:500',
            'Operacion' => 'required|max:10',
            'Precio' => 'required|numeric|min:0|max:1000000000',
            'Tipo_contacto' => 'required|string|max:20',
            'Personal_inmobiliario' => 'required|string|max:100'
        ]);
        // Estructuración de datos para posterior inserción en base de datos.
        $datos = [
            'nombre_apellido' => $request->Nombre,
            'email' => $request->Correo,
            'telefono' => $request->Telefono,
            'mensaje' => $request->Mensaje,
            'operacion' => $request->Operacion,
            'precio' => $request->Precio,
            'tipo_contacto' => $request->Tipo_contacto,
            'asesor_seleccionado' => $request->Personal_inmobiliario
        ];

        $mensaje = MensajeContacto::create($datos);

        return $mensaje;
    /**
     * Este método guarda los datos enviados desde el formulario de contacto en la tabla 'mensajes_contacto'.
     * @author Leandro Brizuela.
     * @param array $request Matriz con los datos enviados desde el formulario de contactos.
     * @return object $mensaje Objeto resultante de la inserción realizada en la base de datos. Contiene datos útiles
     * para operaciones posteriores.
     */
    }
}
