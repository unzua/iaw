<?php   
    include_once 'conexion.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM user"; 

    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_GET){
      $id = $_GET['id'];
      $sql_lectura_id ="SELECT * FROM user WHERE id=?";
      $sentencia_select_id = $gbd->prepare($sql_lectura_id);
      $sentencia_select_id->execute(array($id));
      $resultado_id = $sentencia_select_id->fetch();
    }
    if($_POST){
        $username=$_POST["username"];
        $password=$_POST["password"];

        if($username != "" and $password != ""){
            $sql_insert ="INSERT INTO user(username, password) VALUES (?,?)";

            $sentencia_sql= $gbd->PREPARE($sql_insert);
            $sentencia_sql->execute(array($username,$password));

            header("location:user.php");
        }
    
    }
  
    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulario</title>
        <style>
            body{
              background-color: black;
            }

            .bgcolorb{
                 background-color: white;
            }
            .div-a{
              margin:auto;
      				width:600px;
      				font-family:Arial, Helvetica, sans-serif;

            }
            .nav > img{
              width: 500px;
            }

            ul{
              list-style:none;
            }
            .nav li{
              background-color:black;
              color:white;
              text-decoration: none;
              padding: 10px 15px;
              display: block;
              float: left;
            }
            div > h3{
            font-family:Arial, Helvetica, sans-serif;
            color: #000;
            }
            .barra-a{
              display: flex;
              justify-content: center;
              align-items: center;
              background-color: #84848b;

              overflow: hidden;
            }
            .ba{

              height: auto;
              float: center;
              text-align: center;

            }
            .celdab{
              background-color:#red;
              width: auto;
              overflow: hidden;
            }
            .celda{

              padding: 10px;
              float: left;
              overflow: hidden;
            }
            .center {
              text-align: center;
              border: 3px solid grey;
            }
            p{
              color: black;
            }
            div > img{
              float: left;
              width: 45%;
            }
            div > p{
              font-family:Arial, Helvetica, sans-serif;
              float: center;
            }
            .fck{
              width: 300px;
              float: center;
              controls: controls;

            }
            .texto{
              color: #ffffff;
            }
            table, th, td {
              border: 1px solid black;
              text-align: center;
              margin-left: 40%;

            }


        </style>
    </head>
    <body>
    <div class="div-a" background="white">
        <ul class="nav">
          <li class="logo"><a href="index.html"><img src="https://cdn.shopify.com/s/files/1/1314/2513/files/flat_800x800_075_f.u2_large.jpg?v=1505821278" width=65%></li>
          <li>features</li>
          <li>events</li>
          <li>video</li>
          <li>shop</li>
          <li><a href="user.php">regsitro de usuarios</li ></a>
        </ul>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br>
      <div class="bgcolorb center"> 
    <table>
        <?php
            foreach($resultado as $username){
                print "<tr>
                        <td>$username[username]</td>
                        <td>[password]</td>
                        <td><a href=user.php?id=$username[id]>EDIT</a></td>
                        <td><a href=delete.php?id=$username[id]>&#128465</a></td>
                        </tr>";
            }
        ?>
    </table>
      
    <?php if(!$_GET):?>
    <form action="user.php" method="POST">
            <p><label for="username">username</labdel>
                <input type="text" name="username">
            </p>
            <p><label for="password">password</labdel>
                <input type="password" name="password">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    <?php if($_GET):?>
    <form action="user.php" method="POST">
            <p><label for="username">username</labdel>
                <input type="text" name="username">
            </p>
            <p><label for="password">password</labdel>
                <input type="password" name="password">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    
    <?php if($_GET):?>
      <h2>editar tabla</h2>
    <form action="edit.php" method="GET">
            <p><label for="username">username</labdel>
                <input type="text" name="username" value="<?php print $resultado_id['username']?>">
            </p>
            <p><label for="password">password</labdel>
                <input type="password" name="password" <?php print $resultado_id['password']?>>
            </p>
            <input type="hidden" name="id" value="<?php print $resultado_id['id']?>">
            <p><button>editar</button></p>
    </form>
    <?php endif ?>
    
    <div>
    </body>
    </html>