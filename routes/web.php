<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

Route::get('/', [ConsultaController::class, 'index'])->name('consultas.index');

// Ejercicio 1: información sobre los seeders y datos existentes
Route::get('/ejercicio1', [ConsultaController::class, 'ejercicio1Info'])->name('ejercicio1');

// Ejercicio 2: pedidos del usuario con ID 2
Route::get('/ejercicio2', [ConsultaController::class, 'ejercicio2PedidosUsuario2'])->name('ejercicio2');

// Ejercicio 3: pedidos con datos del usuario (nombre y email)
Route::get('/ejercicio3', [ConsultaController::class, 'ejercicio3PedidosConUsuario'])->name('ejercicio3');

// Ejercicio 4: pedidos cuyo total está entre 100 y 250
Route::get('/ejercicio4', [ConsultaController::class, 'ejercicio4PedidosRangoTotal'])->name('ejercicio4');

// Ejercicio 5: usuarios cuyo nombre inicia con "R"
Route::get('/ejercicio5', [ConsultaController::class, 'ejercicio5UsuariosLetraR'])->name('ejercicio5');

// Ejercicio 6: total de pedidos del usuario con ID 5
Route::get('/ejercicio6', [ConsultaController::class, 'ejercicio6TotalPedidosUsuario5'])->name('ejercicio6');

// Ejercicio 7: pedidos con usuario ordenados por total desc
Route::get('/ejercicio7', [ConsultaController::class, 'ejercicio7PedidosConUsuarioOrdenados'])->name('ejercicio7');

// Ejercicio 8: suma total del campo "total" en pedidos
Route::get('/ejercicio8', [ConsultaController::class, 'ejercicio8SumaTotalPedidos'])->name('ejercicio8');

// Ejercicio 9: pedido más económico con usuario asociado
Route::get('/ejercicio9', [ConsultaController::class, 'ejercicio9PedidoMasBaratoConUsuario'])->name('ejercicio9');

// Ejercicio 10: producto, cantidad y total de cada pedido agrupados por usuario
Route::get('/ejercicio10', [ConsultaController::class, 'ejercicio10PedidosAgrupadosPorUsuario'])->name('ejercicio10');
