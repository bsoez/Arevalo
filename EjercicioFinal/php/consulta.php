<?php

$id = 2;

$hostname = 'localhost';
$database = 'n19100144';
$username = 'newuser';
$password = 'Belen123.';
$port='3306';

try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$passwword);
} catch(PDOException $e){
    echo "$password";
    echo $e->getMessage();
    exit();
}
//$con->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
try{
   
    $consultaSql = "Select idJuego,nomJuego,Categoria,anioJuego,nomComp,precioJuego,Descripcion,ultimaVersion from videojuegos where idNumero=" .$id;
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();
}catch(PDOException $e){
    echo "Error de la consulta";
    echo $e->getMessage();
}
$resultadoJSON = json_encode($resultado);
echo $resultadoJSON;
?>
