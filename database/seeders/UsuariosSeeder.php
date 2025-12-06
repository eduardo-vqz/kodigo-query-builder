<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertamos al menos 5 usuarios
        Usuario::create([
            'nombre' => 'Roberto Pérez',
            'email'  => 'roberto@example.com',
        ]);

        Usuario::create([
            'nombre' => 'Rebeca López',
            'email'  => 'rebeca@example.com',
        ]);

        Usuario::create([
            'nombre' => 'Ricardo Gómez',
            'email'  => 'ricardo@example.com',
        ]);

        Usuario::create([
            'nombre' => 'María Rodríguez',
            'email'  => 'maria@example.com',
        ]);

        Usuario::create([
            'nombre' => 'Roxana Martínez',
            'email'  => 'roxana@example.com',
        ]);
    }
}
