<?php
/*Variables de conección*/
$servidor='localhost';
$usuario='root';
$clave='';
$basedatos='bdrecibounamba';

/*variable conección*/
$coneccion = mysqli_connect($servidor, $usuario, $clave, $basedatos);
 //echo "Conectado";
if($coneccion){
    echo "Bienvenido se conecto con la base de datos recibo unamba";
}
else{
 echo "Ud. No es usuario"; 
}
?>