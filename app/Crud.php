<?php
//Este es nuestro namespace para evitar conflictos a la hora de usar la clase de otras clases
namespace App;
//Usemos la clase Illuminate de la clase Model
class Crud extends Model{

    //Nombre de la tabla 
    protected $table='user';
    //Nombre de los atributos
    protected $contentTable=['Nombre','Apellidos','Correo','Password'];
}