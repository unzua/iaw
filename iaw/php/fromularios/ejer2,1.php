


<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        formulario2
    
    </title>
</head>
<body>
   
    
    <form action="ejer2.php" method='POST'>
    <?php
    $frutas=["manzana","fresa","limon","cerezas","naranja","pera"];
    for($posicion=0;$posicion<6; $posicion++){
       
       print"<p><input type='radio' name='fruta' value='$frutas[$posicion]'>$frutas[$posicion]</input></p>";
    }

       
       
      ?>  
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>
</html>