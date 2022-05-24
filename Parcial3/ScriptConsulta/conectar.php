<?php

$hostname= 'localhost';
$database= 'asp';
$username= 'root';
$password= '';

try{
    $con= new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e) {
    echo "Error de conexion con la base de datos";
    echo $e->getMessage();
    exit();

}

$con->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>