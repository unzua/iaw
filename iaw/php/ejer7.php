<html>
<head>
    <TITLE>EJERCICIO1</TITLE>

</head>
<body>
    
    <?php
        
        $jugador1_1= rand (1,6);
        $jugador1_2= rand (1,6);
        $jugador1_3= rand (1,6);

        $jugador2_1= rand (1,6);
        $jugador2_2= rand (1,6);
        $jugador2_3= rand (1,6);

        $trio1= false;
        $trio2= false;

        $pareja1=false;
        $valor_pareja1=false;
        $pareja2=false;
        $valor_pareja2=false;

    print "<div style='background-color:blue'>";
    print "<img src=\"img/dados\d$jugador1_1.svg\">";
    print "<img src=\"img/dados\d$jugador1_2.svg\">";
    print "<img src=\"img/dados\d$jugador1_3.svg\">";
    print "</div>";

    print "<div style='background-color:red'>";
    print "<img src=\"img/dados\d$jugador2_1.svg\">";
    print "<img src=\"img/dados\d$jugador2_2.svg\">";
    print "<img src=\"img/dados\d$jugador2_3.svg\">";
    print "</div>";
    //jugador1 trios
    if (($jugador1_1==$jugador1_2)&& $jugador1_2 == $jugador1_3){
        $trio1=true;
    }//juagador1 parejas
    elseif ($jugador1_1==$jugador1_2){
        $pareja1=true;
        $valor_pareja1=$jugador1_1;
    }
    elseif ($jugador1_1==$jugador1_3){
        $pareja1=true;
        $valor_pareja1=$jugador1_1;
    }
    elseif ($jugador1_2==$jugador1_3){
        $pareja1=true;
        $valor_pareja1=$jugador1_2;
    }
    //jugador2 trio
     if($jugador2_1==$jugador2_2 && $jugador2_2 == $jugador2_3){
        $trio2=true;
    }
    //jugador2 parejas
    elseif ($jugador2_1==$jugador2_2){
        $pareja2=true;
        $valor_pareja2=$jugador2_1;
    }
    elseif ($jugador2_1==$jugador2_3){
        $pareja2=true;
        $valor_pareja2=$jugador2_1;
    }
    elseif ($jugador2_2==$jugador2_3){
        $pareja1=true;
        $valor_pareja2=$jugador2_2;
    }

    if($trio1==true && $trio2 == true){
        if($jugador1_1>$jugador2_1){
            print "<p>Gana jugador 1</p>";
        }
        elseif($jugador1_1<$jugador2_1){
            print "<p>Gana jugador 2</p>";
        }
        else{ 
            print "<p>empate</p>";
        }
    }
    else {
        if($trio1 == true && $trio2== false){
            print "<p>GamaJUgador1</p>";

        }elseif ($trio2 == true && $trio1==false){
            print "<p>gana jugador2</p>";
        }else{
            if($pareja1 == true && $pareja2==true){
                if($valor_pareja1>$valor_pareja2){
                    print "<p>gana jugador1</p>";
                }elseif($valor_pareja2 > $valor_pareja1){
                    print"<p>ganajugador2</p>";
                }
            }
        }
    }
    
    ?>
</body>
</html> 