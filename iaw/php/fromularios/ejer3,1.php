<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        formulario3
    
    </title>
</head>
<body>
   
    
    <form action="ejer3.php" method='POST'>
    <?php
     print "<p>escoger color de texto</p>";
   
   print "<input type='color' name='color_txt'>";



    print "<p> escoger color del fondo</p>";
    print "<input type='color' name='color'>";
      ?>  
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>
</html>