<?php
print "<pre>";
print_r($_REQUEST);
print"<pre>";

if(isset($_REQUEST["fruta"])){
    $fruta=$_REQUEST["fruta"];
    print "<img src=\"img/frutas/$fruta.svg\" width='100' height='200'";
    print "<p>fruta introducido";
    
  
}else{
    print "<p>introduce una de estas frutas: manzana, fresa, limon, cereza.</p>";
}
?>
