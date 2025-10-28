<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importamos el modelo
use App\Models\Empleado;
use Illuminate\Support\Facades\DB; 


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       // 1. Limpiamos la tabla antes de sembrar
        DB::table('empleados')->delete();

        // 2. Definimos una lista de datos para los 20 empleados
        $empleadosData = [
            // El registro 1
            [
                'nombre' => 'Rene',
                'apellido' => 'Vasquez',
                'correo' => 'rene@gmail.com',
                'salario' => 3000.00,
            ],
            // 19 ejemplos adicionales con datos ficticios
            [
                'nombre' => 'Maria',
                'apellido' => 'Gomez',
                'correo' => 'maria.gomez@empresa.com',
                'salario' => 2550.50,
            ],
            [
                'nombre' => 'Javier',
                'apellido' => 'Rodríguez',
                'correo' => 'javier.rodriguez@empresa.com',
                'salario' => 4100.00,
            ],
            [
                'nombre' => 'Sofía',
                'apellido' => 'López',
                'correo' => 'sofia.lopez@empresa.com',
                'salario' => 1900.75,
            ],
            [
                'nombre' => 'Andrés',
                'apellido' => 'Martínez',
                'correo' => 'andres.martinez@empresa.com',
                'salario' => 3500.00,
            ],
            [
                'nombre' => 'Valentina',
                'apellido' => 'Hernández',
                'correo' => 'valentina.hdez@empresa.com',
                'salario' => 2850.30,
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Díaz',
                'correo' => 'carlos.diaz@empresa.com',
                'salario' => 1800.00,
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Sánchez',
                'correo' => 'laura.sanchez@empresa.com',
                'salario' => 4500.25,
            ],
            [
                'nombre' => 'Diego',
                'apellido' => 'Pérez',
                'correo' => 'diego.perez@empresa.com',
                'salario' => 2200.50,
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Ramírez',
                'correo' => 'ana.ramirez@empresa.com',
                'salario' => 3100.90,
            ],
            [
                'nombre' => 'Miguel',
                'apellido' => 'Flores',
                'correo' => 'miguel.flores@empresa.com',
                'salario' => 2950.00,
            ],
            [
                'nombre' => 'Elena',
                'apellido' => 'Castillo',
                'correo' => 'elena.castillo@empresa.com',
                'salario' => 4800.70,
            ],
            [
                'nombre' => 'Pablo',
                'apellido' => 'Morales',
                'correo' => 'pablo.morales@empresa.com',
                'salario' => 1750.60,
            ],
            [
                'nombre' => 'Lucía',
                'apellido' => 'Rojas',
                'correo' => 'lucia.rojas@empresa.com',
                'salario' => 3900.20,
            ],
            [
                'nombre' => 'Fernando',
                'apellido' => 'Vargas',
                'correo' => 'fernando.vargas@empresa.com',
                'salario' => 2300.00,
            ],
            [
                'nombre' => 'Isabel',
                'apellido' => 'Molina',
                'correo' => 'isabel.molina@empresa.com',
                'salario' => 4200.50,
            ],
            [
                'nombre' => 'Ricardo',
                'apellido' => 'Guerrero',
                'correo' => 'ricardo.guerrero@empresa.com',
                'salario' => 2100.00,
            ],
            [
                'nombre' => 'Gabriela',
                'apellido' => 'Acosta',
                'correo' => 'gabriela.acosta@empresa.com',
                'salario' => 3300.10,
            ],
            [
                'nombre' => 'Sergio',
                'apellido' => 'Herrera',
                'correo' => 'sergio.herrera@empresa.com',
                'salario' => 2600.00,
            ],
            [
                'nombre' => 'Diana',
                'apellido' => 'Ortega',
                'correo' => 'diana.ortega@empresa.com',
                'salario' => 4600.80,
            ],
        ];

        // 3. Iteramos sobre los datos e insertamos usando Empleado::create
        foreach ($empleadosData as $data) {
             // Usamos Empleado::create 
             Empleado::create($data); 
        }
    }
}
