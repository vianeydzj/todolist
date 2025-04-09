# Lista de Tareas - Aplicación Web

Esta es una aplicación web para gestionar una lista de tareas. Permite a los usuarios crear de forma sencilla.

## Funcionalidades

- Agregar nuevas tareas
- Eliminar tareas
- Interfaz intuitiva y responsiva

## Tecnologías Utilizadas

- HTML5
- CSS3
- Laravel
- Bootstrap
-  Laravel 12
- PHP 8.2.12
- MySQL
- Blade (motor de plantillas de Laravel)

## Requisitos

- Composer
- PHP >= 8.2.12
- MySQL
- Node.js y NPM (opcional para compilar assets)

##La base de datos se llama app y la tabla principal es task, con campos como:
-id (int)
-Created_at, updated_at (timestamps)

## Instalación y uso

```bash
# Clonar el repositorio
[git clone https://github.com/tu-usuario/lista-de-tareas.git](https://github.com/vianeydzj/todolist.git)

# Entrar al proyecto
cd todolist

#Instala las dependencias de PHP:
composer install

#Configura el archivo .env con los datos de tu base MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app
DB_USERNAME=root
DB_PASSWORD=

#Ejecuta la migración para la tabla task:
php artisan migrate

#Inicia el servidor:
php -S localhost:8000 -t public/





