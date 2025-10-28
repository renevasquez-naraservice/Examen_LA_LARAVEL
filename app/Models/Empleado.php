<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory; //Por seguridad
    //Modelo Empleados - DB
    protected $table = 'empleados'; 
    protected $fillable = 
    [
        'nombre',
        'apellido',
        'correo',
        'salario'
    ];
}
