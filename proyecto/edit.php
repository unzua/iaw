<?php
// leer lo que nos llega
$id = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];

include_once 'conexion.php';
// update
$sql_update ="UPDATE user SET username=?, password=? WHERE id=?";
$sentencia_sql =$gbd->prepare($sql_update);
$sentencia_sql->execute(array($username, $password, $id));
header("location:user.php");