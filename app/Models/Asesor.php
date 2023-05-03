<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $table = 'asesores';

    public function obtenerCorreoAsesor ($asesor)
    {
        if (!isset($asesor)) {
            return false;
        }
        $correo_asesor = Asesor::where('nombre_apellido', $asesor)
                        ->where('estado', 1)
                        ->get('email');
        return $correo_asesor->first();
    /**
     * Este método obtiene de la tabla 'asesores', el email de un asesor según su nombre completo.
     * @author Leandro Brizuela.
     * @param string $asesor Nombre completo del asesor.
     * @return object $correo_asesor
     */
    }
}
