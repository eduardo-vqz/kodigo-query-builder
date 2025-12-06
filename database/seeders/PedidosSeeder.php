<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Suponemos que los usuarios con id 1 a 5 ya existen (gracias al UsuariosSeeder)
        // Insertamos varios pedidos de prueba

        Pedido::create([
            'usuario_id' => 1,
            'producto'   => 'Teclado mecánico',
            'cantidad'   => 1,
            'total'      => 120.50,
        ]);

        Pedido::create([
            'usuario_id' => 2,
            'producto'   => 'Mouse gamer',
            'cantidad'   => 2,
            'total'      => 80.00,
        ]);

        Pedido::create([
            'usuario_id' => 3,
            'producto'   => 'Monitor 24 pulgadas',
            'cantidad'   => 1,
            'total'      => 230.99,
        ]);

        Pedido::create([
            'usuario_id' => 4,
            'producto'   => 'Audífonos inalámbricos',
            'cantidad'   => 1,
            'total'      => 95.75,
        ]);

        Pedido::create([
            'usuario_id' => 5,
            'producto'   => 'Silla ergonómica',
            'cantidad'   => 1,
            'total'      => 260.00,
        ]);

        Pedido::create([
            'usuario_id' => 5,
            'producto'   => 'Alfombrilla para mouse',
            'cantidad'   => 3,
            'total'      => 45.00,
        ]);

        Pedido::create([
            'usuario_id' => 2,
            'producto'   => 'Webcam HD',
            'cantidad'   => 1,
            'total'      => 110.00,
        ]);
    }
}
