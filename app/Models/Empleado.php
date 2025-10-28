<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Agregamos
use Illuminate\Database\Eloquent\Factories\HasFactory; 

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
