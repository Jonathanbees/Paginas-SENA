<?php
//variable de entradas bases de datos

$host= "127.0.0.1";//servidor al que nos vamos a conectar.
//$port="3306";//puerto en el que va configurada la base de datos.
$user= "root";//significa raiz : quiere decir que ese es el usuario para la base de datos.
$password= "";//es la contraseña para la conexion de base de datos.
$dbname="cell2";//nombre de la base de datos.

if (!($con = new mysqli($host,$user, $password, $dbname))){
    die('No se puede conectar a la base de datos.'. mysqli_connect_error());
} else {
    //echo "Conectado a la base de datos exitosamente <h2>Bienvenido</h2>";
}                       //Conexión a la base de datos para verificarla