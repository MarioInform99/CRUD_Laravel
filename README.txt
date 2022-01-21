# Creacion de Proyecto en Laravel
De momento realizaremos un pequeño proyecto similar al del CRUD_PHP.

Explicaciones en este texto
Para empezar con este framework de Laravel necesitamos un gestor de software como Composer. En la documentacion de Laravel 
nos dice que debemos de instalar WSL (Windows Subsystem Linux), que es nada mas que una distribucion de Linux o terminal de Linux en 
Windows. Pero para ahorrar nos tarea y problemas usaremos el COMPOSER que es como un gestor de paquetes como apt en Linux

Para crear el proyecto usaremos el siguiente comando
## composer create-project laravel/laravel <nombre del app>

Necesitamos tener en nuestro ordenador un entorno en el que podamos correr Laravel, por ejemplo,
en Windows usaremos XAMPP y en entorno Linux necesitamos instalar php, Apache y mysql.

Para migrar o conectarse a la base de datos con laravel debemos de ir al archivo .env
y previamente tener creado la base de datos. En el archivo .env debemos de cambiar estos datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=

Bien ahora usaremos los siguientes comando para crear una tabla de usuarios. El archivo artisan
es un CLI (Command Line Interface) que es el principal archivo que usaremos. Ejecutamos este comando.
## php artisan
Este comando se nos mostrar los comando disponibles
Crearemos la creacion de la tabla del usuario.
## php artisan make:migration create_user_table --create="user"
make:migration crea una nueva migracion de archivos y crea el archivo create_user_table y con nombre de la tabla "user".
Posteriormente tenemos que migrar datos usando los siguientes comandos. El archivo se nos han creado en
database/migrations/<fecha>_create_user_table.php.
## php artisan migrate
Modificamos el archivo creado anteriormente que esta en esta direccion /database/migrations/<fecha>_create_user_table y añadimos
estas lineas dentro del metodo up().

    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Correo');
            $table->string('Password');
            $table->timestamps();
        });
    }
Una vez realizado esto refrescamos la migracion de archivos.
## php artisan migrate:refresh
Bien ahora tenemos que crear un modelo para operar en la base de datos, ahora dentro del archivo "app" donde creamos el archivo crud.php
este sera una clase que tendra de herencia Model 
Una vez realizado el archivo y su contenido realizamos este comando, para crear un controlador con nombre CrudController
## php artisan make:controller CrudController -r
Creamos el controlador este se encuentra en esta direccion /app/Http/Controllers/CrudController.php
Este archivo contenido estas funciones index(), create(), store(),show(),edit(),update(),destroy()
Ahora insertaremos o implementaremos las operaciones del CRUD con los metodos disponibles en CrudController.php

Primero crearemos una ruta en /routes/web.php para insertar las operaciones.
    Route::get('/insert', function () {
        return view('create');
    });
Ahora creamos el archivo create.blade.php, blade es un procesador de contenido que se se encarga de cargar el estilo
en la Route que introducimos antes no es necesario introducir todo el nombre del archivo.
Instalamos bootstrap para laravel con ~
## composer require laravel/ui
## php artisan ui bootstrap
No es necesario usar el ui, pero esto nos sirve para crear algunos template con bootstrap. En mi caso,
he creado un template desde 0, y he añadido las librerias a traves del link como bootstrap
Para usar un archivo externo como por ejemplo un css o js, debemos de usar la funcion dentro de donde lo quieras
llamar, asset('');. Esta funcion busca los archivos dentro de la carpeta 
    /public
        |-css
            |-app.css
        |-js
            |-app.js

