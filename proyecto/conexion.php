<?php
$link = 'mysql:host=localhost;dbname=user';
$usuario = 'root';
$pwd = '';

try{
    // la variable que tiene la conexion es gbd
    $gbd= new PDO($link, $usuario, $pwd);
    print "Conectado!";
} catch(PDOException $e){
    print "error". $e->getMessage()."<br/>";
    die();
}


