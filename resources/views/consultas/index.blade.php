<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía de Consultas SQL en Laravel</title>

    <!-- Bootstrap 5 desde CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >

    <style>
        body {
            background-color: #f5f5f5;
        }
        .card-ejercicio {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }
        .card-ejercicio:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
        }
        pre {
            max-height: 400px;
            overflow: auto;
            background-color: #1e1e1e;
            color: #eaeaea;
            padding: 1rem;
            border-radius: .5rem;
        }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="text-center mb-4">
        <h1 class="mb-2">Guía de Consultas SQL en Laravel</h1>
        <p class="text-muted mb-0">
            Query Builder &amp; ORM – Actividad: Usuarios y Pedidos
        </p>
    </div>

    <!-- Fila de tarjetas -->
    <div class="row g-3 mb-4">
        <!-- Ejercicio 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio1') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 1</h5>
                    <p class="card-text">
                        Verificar los registros insertados en las tablas de usuarios y pedidos
                        (cargados mediante seeders).
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio2') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 2</h5>
                    <p class="card-text">
                        Recuperar todos los pedidos del usuario con ID 2.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio3') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 3</h5>
                    <p class="card-text">
                        Ver información de pedidos junto con nombre y correo del usuario.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 4 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio4') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 4</h5>
                    <p class="card-text">
                        Pedidos cuyo total está en el rango de $100 a $250.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 5 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio5') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 5</h5>
                    <p class="card-text">
                        Usuarios cuyos nombres comienzan con la letra "R".
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 6 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio6') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 6</h5>
                    <p class="card-text">
                        Total de registros en la tabla pedidos para el usuario con ID 5.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 7 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio7') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 7</h5>
                    <p class="card-text">
                        Pedidos con información de usuarios, ordenados por total descendente.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 8 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio8') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 8</h5>
                    <p class="card-text">
                        Suma total del campo "total" en la tabla de pedidos.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 9 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio9') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 9</h5>
                    <p class="card-text">
                        Pedido más económico con el usuario asociado.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>

        <!-- Ejercicio 10 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-ejercicio h-100" data-url="{{ route('ejercicio10') }}">
                <div class="card-body">
                    <h5 class="card-title">Ejercicio 10</h5>
                    <p class="card-text">
                        Producto, cantidad y total de cada pedido, agrupados por usuario.
                    </p>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-sm btn-primary btn-ver-ejercicio">
                        Ver resultado
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Panel de resultados -->
    <div class="card">
        <div class="card-header">
            <strong>Resultado de la consulta</strong>
        </div>
        <div class="card-body">
            <p class="text-muted">
                Selecciona un ejercicio para ver aquí el resultado (formato JSON).
            </p>
            <pre id="resultado-json">{}</pre>
        </div>
    </div>
</div>

<!-- Bootstrap JS + fetch simple -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const botones = document.querySelectorAll('.btn-ver-ejercicio');
        const resultado = document.getElementById('resultado-json');

        botones.forEach(boton => {
            boton.addEventListener('click', function (e) {
                e.preventDefault();

                const card = this.closest('.card-ejercicio');
                const url = card.getAttribute('data-url');

                resultado.textContent = 'Cargando...';

                fetch(url)
                    .then(res => res.json())
                    .then(data => {
                        resultado.textContent = JSON.stringify(data, null, 4);
                    })
                    .catch(err => {
                        console.error(err);
                        resultado.textContent = 'Ocurrió un error al obtener los datos. Revisa la consola.';
                    });
            });
        });
    });
</script>
</body>
</html>
