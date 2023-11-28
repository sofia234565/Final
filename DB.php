<?php

$host='localhost';
$bd='id18653570_oficinaxyz'; # Name
$usuario='id18653570_david'; # Usuario
$contraseia='[CdKKKQc_!1[-K)0';

try {
        $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseia);
        
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>