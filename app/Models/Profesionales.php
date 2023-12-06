<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesionales extends Model
{
    use HasFactory;

    protected $table="profesionales";

    protected $fillable=[
        'tipo_documento',
        'documento',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'especialidad',
        'estado'
    ];
}
