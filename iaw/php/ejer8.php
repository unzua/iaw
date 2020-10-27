<html>
<head>
    <TITLE>EJERCICIO8</TITLE>

</head>
<body>
    <?php
        $r=rand (0,255);
        $a=rand (0,255);
        $v=rand (0,255);
        $circulos=rand(1,10);

        print "<table>" ;
        for ($contador=1;$contador<=10;$contador++){
            print "<p style=\"color:rgb($r,$v,$a)\"></p>";
            print "<svg height='100' width='100'>";
                print "<circle cx='50' cy='50' r='40' stroke='black' stroke-width='3' fill=\"rgb($r,$v,$a)\"> ";
                print"</svg> ";
        }
        print "</table>"
        
    ?>
</body>
</html>