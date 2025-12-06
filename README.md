# Actividad 2: Consultas SQL en Laravel (Query Builder & ORM)

Este proyecto forma parte de la **Actividad 2** de la Academia de Tecnología Creativa Kódigo.  
El objetivo es practicar consultas SQL utilizando **Query Builder** y **Eloquent ORM**, trabajando sobre dos tablas relacionadas: `usuarios` y `pedidos`.  
Además, incluye una **interfaz gráfica con Bootstrap** para visualizar cada ejercicio de forma interactiva.

---

## Tecnologías Utilizadas

- PHP 8.x  
- Laravel 10.x  
- MySQL / MariaDB  
- Eloquent ORM  
- Query Builder  
- Bootstrap 5  
- Blade Templates  

---

## Base de Datos

El proyecto utiliza una base de datos llamada:

```
query_builder
```

### Tablas principales

#### `usuarios`
- id  
- nombre  
- email  
- timestamps  

#### `pedidos`
- id  
- usuario_id (FK → usuarios.id)  
- producto  
- cantidad  
- total  
- timestamps  

---

## Instalación del Proyecto

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/tu_usuario/actividad2-laravel-consultas.git
cd actividad2-laravel-consultas
```

### 2️⃣ Instalar dependencias

```bash
composer install
```

### 3️⃣ Configurar `.env`

```env
DB_DATABASE=query_builder
DB_USERNAME=root
DB_PASSWORD=
```

Luego generar la key:

```bash
php artisan key:generate
php artisan config:clear
```

---

## Migraciones y Seeders

### 4️⃣ Ejecutar migraciones

```bash
php artisan migrate
```

### 5️⃣ Ejecutar seeders

```bash
php artisan db:seed
```

Los seeders poblan las tablas `usuarios` y `pedidos` con datos de prueba.

---

## Estructura del Proyecto

```
app/
 └── Http/
     └── Controllers/
         └── ConsultaController.php

app/Models/
 ├── Usuario.php
 └── Pedido.php

resources/views/consultas/
 └── index.blade.php

routes/
 └── web.php

database/seeders/
 ├── UsuariosSeeder.php
 ├── PedidosSeeder.php
 └── DatabaseSeeder.php
```

---

## Ejercicios Implementados

Todos los ejercicios se encuentran en:

```
app/Http/Controllers/ConsultaController.php
```

| Ejercicio | Descripción |
|----------|-------------|
| 1 | Visualizar registros insertados (seeders) |
| 2 | Obtener pedidos del usuario con ID 2 |
| 3 | Pedidos con nombre y correo del usuario |
| 4 | Pedidos con total entre 100 y 250 |
| 5 | Usuarios cuyo nombre inicia con "R" |
| 6 | Contar pedidos del usuario con ID 5 |
| 7 | Pedidos ordenados por total (descendente) |
| 8 | Suma total del campo `total` |
| 9 | Pedido más económico con usuario |
| 10 | Pedidos agrupados por usuario |

---

## Interfaz Gráfica

Ruta principal:

```
http://127.0.0.1:8000/
```

La vista se encuentra en:

```
resources/views/consultas/index.blade.php
```

Incluye:

- Cards de Bootstrap  
- Botones para ejecutar cada consulta  
- Panel de resultados JSON  
- Uso de `fetch()` para comunicación con backend  

---

## Rutas Disponibles

| Ruta | Acción |
|------|--------|
| `/` | Menú principal (interfaz gráfica) |
| `/ejercicio1` | Ver usuarios y pedidos |
| `/ejercicio2` | Pedidos del usuario 2 |
| `/ejercicio3` | Pedidos + usuario |
| `/ejercicio4` | Pedidos entre 100–250 |
| `/ejercicio5` | Usuarios con nombre iniciando en "R" |
| `/ejercicio6` | Total de pedidos usuario 5 |
| `/ejercicio7` | Pedidos ordenados por total desc |
| `/ejercicio8` | Suma total de pedidos |
| `/ejercicio9` | Pedido más barato |
| `/ejercicio10` | Pedidos agrupados por usuario |

---

## Ejecutar Proyecto

```bash
php artisan serve
```

Abrir en navegador:

```
http://127.0.0.1:8000/
```

---

## Objetivo de la Actividad

- Comprender relaciones entre tablas utilizando ORM  
- Practicar consultas SQL con Laravel  
- Generar migraciones, modelos y seeders  
- Visualizar resultados mediante interfaz gráfica  
- Dominar Query Builder y Eloquent  

---

## Autor

Proyecto desarrollado para fines educativos y práctica profesional  
en la **Academia de Tecnología Creativa Kódigo**.


