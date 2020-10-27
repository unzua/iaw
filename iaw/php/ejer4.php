<html>
<head>
    <TITLE>EJERCICIO1</TITLE>

</head>
<body>
    <?php
                

        $r=rand(0,255);
        $a=rand(0,255);
        $v=rand(0,255);
        
print "<p style=\"color:rgb($r,$v,$a)\">hola</p>";
print "<svg height='100' width='100'>";
        print "<r cx='50' cy='50' r='40' stroke='black' stroke-width='3' fill=\"rgb($r,$v,$a)\"> ";
        print"</svg> ";

       print" <svg width=\"'400' height='110'\">"
       print" <rect width=\"'300' height='100' style='fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)'\" />"
      print"</svg> "
    ?>
    
</body>
</html>