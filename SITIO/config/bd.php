<?php

$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){ echo "";} 
} catch ( exception $ex) {
    echo $ex->getmessage();

}

?>
