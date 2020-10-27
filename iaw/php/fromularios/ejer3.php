<?php
print "<pre>";
print_r($_REQUEST);
print"<pre>";

if (isset($_REQUEST["color_txt"])) {
    $color_txt=$_REQUEST["color_txt"];

    print "<p style='color:$color_txt'>esto es una prueba</p>";
}else{
    print"<p>escoge un color para el texto</p>";
}

if (isset($_REQUEST["color"])) {
    $color=$_REQUEST["color"];

    print "<body style='background-color:$color'></body>";
}else{
    print"<p>escoge un color para el fondo</p>";
}
?>