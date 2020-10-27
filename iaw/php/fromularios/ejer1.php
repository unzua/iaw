<?php
print "<pre>";
print_r($_REQUEST);
print"<pre>";

$grosor = $_REQUEST['grosor'];
$tamaño = $_REQUEST['tamaño'];
$color = $_REQUEST['color'];


if ($tamaño !=""){
    print "<p>Tamaño introducido</p>";
}else{
    print "<p>Taamaño no introducido</p>";
}

if($grosor !=""){
    print "<p>Grosor introducido</p>";
    print "<svg width=\"400\" height=\"110\">
    <rect width=\"$tamaño\" height=\"$tamaño\" style=\"fill:;stroke-width:$grosor;stroke:$color\">
    </svg>";;
}else{
    print"<p>Grosor no introducido</p>";
};
?>