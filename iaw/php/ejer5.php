<html>
<head>
    <TITLE>EJERCICIO1</TITLE>

</head>
<body>
    <
    <?php
        $carta1=rand (1,10);
        $carta2=rand (1,10);
        $carta3=rand (1,10);


        if ($carta1 > $carta2 and $carta1 > $carta3){
            echo "<p>la carta mas alta es la primera carta</p>";
        }
        elseif ($carta2 > $carta1 and $carta2 >$carta3){
            echo "<p>la carta mas alta es la segunda</p>";
        }
        else {
            echo "<p>la carta mas alta es la tercera</p>";
        }
        print "<img src=\"img\cartas\c$carta1.svg\">";
        print "<img src=\"img\cartas\c$carta2.svg\">";
        print "<img src=\"img\cartas\c$carta3.svg\">";

   
    ?>
</body>
</html> 