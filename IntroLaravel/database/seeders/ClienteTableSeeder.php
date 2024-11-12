<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Herramienta para modificar a la base de datos
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert(
            [
                [
                    'nombre' => 'Fernando',
                    'apellido' => 'Gómez',
                    'correo' => 'polotrollero27@gmail.com',
                    'telefono' => '4423425872'
                ],
                [
                    'nombre' => 'Baruch',
                    'apellido' => 'Ortíz',
                    'correo' => 'baruchortiz@gmail.com',
                    'telefono' => '4423584323'
                ],
                [
                    'nombre' => 'Marlen',
                    'apellido' => 'González',
                    'correo' => 'marlengonzalez@gmail.com',
                    'telefono' => '4423248931'
                ]]
        );
    }
}
