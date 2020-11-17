<?php   
    include_once 'conexion.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM usuarios"; 

    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_POST){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];

        if($username != "" and $password != "" and $email != "" and $edad != ""){
            $sql_insert ="INSERT INTO usuarios(username, password, email, edad) VALUES (?,?,?,?)";

            $sentencia_sql= $gbd->PREPARE($sql_insert);
            $sentencia_sql->execute(array($username,$password,$email));

            header("location:usuarios.php");
        }
    
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>username</title>
    </head>
    <body>
    <?php if(!$_GET):?>
    <form action="respuesta.php" method="POST">
            <p><label for="username">username</labdel>
                <input type="text" name="username">
            </p>
            <p><label for="password">password</labdel>
                <input type="password" name="password">
            </p>
            <p><label for="email">eamil</labdel>
                <input type="text" name="email">
            </p>
            <p><label for="edad">edad</labdel>
                <input type="numer" name="email">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    
    <?php if($_GET):?>
        <form action="usuarios.php" method="POST">
            <p><label for="username">username</labdel>
                <input type="text" name="username">
            </p>
            <p><label for="password">password</labdel>
                <input type="text" name="descripcion">
            </p>
            <p><label for="email">eamil</labdel>
                <input type="text" name="email">
            </p>
            <p><label for="edad">edad</labdel>
                <input type="numer" name="email">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    </body>
    </html>