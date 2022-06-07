<?php

$id = $_POST['par2'];
$nomJuego=$_POST['par3'];
$Categoria=$_POST['par4'];
$anioJuego=$_POST['par5'];
$nomComp=$_POST['par6'];
$precioJuego=$_POST['par7'];
$descripcion=$_POST['par8'];
$ultimaVersion=$_POST['par9'];

$hostname='localhost';
$database='n19100144';
$username='nuevo';
$password='Belen123.';
$port='3307';

try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

//$con->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
try{
    //campos que vas a insertar
    $consultaSql = "Update videojuegos SET nomJuego='$nomJuego', Categoria='$Categoria',anioJuego=$anioJuego, nomComp = '$nomComp', precioJuego = '$precioJuego', Descripcion = '$descripcion', ultimaVersion = $ultimaVersion where idJuego = $id;";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();

}catch(PDOException $e){
    echo "Error de la consulta";
    echo $e->getMessage();

}

$resultadoJSON = json_encode($resultado);
echo $consultaSql;
?>