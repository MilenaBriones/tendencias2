<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

include ("./Class/Triangulo.php"); 
$triangulo = new Triangulo(Null); 
print_r($triangulo->tabla()); 
?> 

<table style="margin: 0 auto"
    <tr><h3 style="text-align: center; color: navy"> EL AREA ES: </h3> </tr>
    <tr><td style="text-align: center"> <?php echo "".$triangulo->area($_POST['altura'], $_POST['base']);?></td></tr>
</table>
<br>
<table style="margin: 0 auto">
 <tr><h3 style="text-align: center; color: aqua"> EL PERIMETRO ES: </h3> </tr>
<tr><td style="text-align: center"> <?php echo "".$triangulo->perimetro($_POST['altura'], $_POST['base']);?></td></tr>
</table>
    </body>
</html>
