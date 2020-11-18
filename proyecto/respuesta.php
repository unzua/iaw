<?php
$resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_POST){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
            $sentencia_sql->execute(array($username,$password,$email));

            header("location:respuesta.php");
        }
    
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <?php
            foreach($resultado as $username){
                print "<tr>
                        <td>[username]</td>
                        <td>[password]</td>
                        <td>[email]</td>
                        <td>[edad]</td>
                        <td><a href=\"edit.php?id=[id]\">EDIT</a></td>
                        <td><a href=\"delete.php?id=[id]\">&#128465</a></td>
                        </tr>";
            }
        ?>
    </table>
</body>
</html>


