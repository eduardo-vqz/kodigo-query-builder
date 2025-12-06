<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function index()
{
    // Vista principal con el menú de ejercicios
    return view('consultas.index');
}

    /**
     * Ejercicio 1:
     * NOTA: La inserción de los 5 registros ya la estamos haciendo con seeders.
     * Este método solo sirve como referencia para indicar que los datos
     * ya deberían estar cargados en la base de datos.
     */
    public function ejercicio1Info()
    {
        

        return response()->json([
            'mensaje' => 'Los registros se insertan mediante seeders (UsuariosSeeder y PedidosSeeder).',
            'usuarios' => Usuario::all(),
            'pedidos'  => Pedido::all(),
        ]);
    }

    /**
     * Ejercicio 2:
     * Recupera todos los pedidos asociados al usuario con ID 2.
     */
    public function ejercicio2PedidosUsuario2()
    {
        // Usando Eloquent
        $pedidos = Pedido::where('usuario_id', 2)->get();

        return response()->json($pedidos);
    }

    /**
     * Ejercicio 3:
     * Obtén la información detallada de los pedidos,
     * incluyendo el nombre y correo electrónico de los usuarios.
     */
    public function ejercicio3PedidosConUsuario()
    {
        // Opción A: Usando Eloquent con la relación "usuario"
        $pedidos = Pedido::with('usuario')->get();

        // Opción B (comentada): Usando Query Builder y join
        /*
        $pedidos = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select(
                'pedidos.id',
                'pedidos.producto',
                'pedidos.cantidad',
                'pedidos.total',
                'usuarios.nombre as usuario_nombre',
                'usuarios.email as usuario_email'
            )
            ->get();
        */

        return response()->json($pedidos);
    }

    /**
     * Ejercicio 4:
     * Recupera todos los pedidos cuyo total esté en el rango de $100 a $250.
     */
    public function ejercicio4PedidosRangoTotal()
    {
        // Usando whereBetween en Eloquent
        $pedidos = Pedido::whereBetween('total', [100, 250])->get();

        return response()->json($pedidos);
    }

    /**
     * Ejercicio 5:
     * Encuentra todos los usuarios cuyos nombres comiencen con la letra "R".
     */
    public function ejercicio5UsuariosLetraR()
    {
        // Usando LIKE
        $usuarios = Usuario::where('nombre', 'LIKE', 'R%')->get();

        return response()->json($usuarios);
    }

    /**
     * Ejercicio 6:
     * Calcula el total de registros en la tabla de pedidos
     * para el usuario con ID 5.
     */
    public function ejercicio6TotalPedidosUsuario5()
    {
        $cantidadPedidos = Pedido::where('usuario_id', 5)->count();

        return response()->json([
            'usuario_id' => 5,
            'total_pedidos' => $cantidadPedidos,
        ]);
    }

    /**
     * Ejercicio 7:
     * Recupera todos los pedidos junto con la información de los usuarios,
     * ordenándolos de forma descendente según el total del pedido.
     */
    public function ejercicio7PedidosConUsuarioOrdenados()
    {
        // Usando Eloquent + with + orderBy
        $pedidos = Pedido::with('usuario')
            ->orderBy('total', 'desc')
            ->get();

        return response()->json($pedidos);
    }

    /**
     * Ejercicio 8:
     * Obtén la suma total del campo "total" en la tabla de pedidos.
     */
    public function ejercicio8SumaTotalPedidos()
    {
        $suma = Pedido::sum('total');

        return response()->json([
            'suma_total_pedidos' => $suma,
        ]);
    }

    /**
     * Ejercicio 9:
     * Encuentra el pedido más económico, junto con el nombre
     * del usuario asociado.
     */
    public function ejercicio9PedidoMasBaratoConUsuario()
    {
        // Opción A: Eloquent
        $pedido = Pedido::with('usuario')
            ->orderBy('total', 'asc')
            ->first();

        if (!$pedido) {
            return response()->json([
                'mensaje' => 'No hay pedidos registrados.',
            ], 404);
        }

        return response()->json($pedido);

        /**
         * Opción B con Query Builder (referencia):
         *
         * $pedido = DB::table('pedidos')
         *     ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
         *     ->select(
         *         'pedidos.id',
         *         'pedidos.producto',
         *         'pedidos.cantidad',
         *         'pedidos.total',
         *         'usuarios.nombre as usuario_nombre'
         *     )
         *     ->orderBy('pedidos.total', 'asc')
         *     ->first();
         */
    }

    /**
     * Ejercicio 10:
     * Obtén el producto, la cantidad y el total de cada pedido,
     * agrupándolos por usuario.
     *
     * Interpretación: listar los pedidos pero organizados
     * mostrando también información del usuario.
     */
    public function ejercicio10PedidosAgrupadosPorUsuario()
    {
        // Usando Query Builder para mostrar claramente el "agrupado por usuario"
        $resultados = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select(
                'usuarios.id as usuario_id',
                'usuarios.nombre as usuario_nombre',
                'usuarios.email as usuario_email',
                'pedidos.producto',
                'pedidos.cantidad',
                'pedidos.total'
            )
            ->orderBy('usuarios.id')
            ->get();

        return response()->json($resultados);
    }
}
