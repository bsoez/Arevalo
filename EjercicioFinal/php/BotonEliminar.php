<?php


$id = $_POST['par1'];
$hostname = 'localhost';
$database = 'n19100144';
$username = 'nuevo';
$password = 'Belen123.';


try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

//$con->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);

try{
    
    $consultaSql = "delete from n19100144.videojuegos where idJuego=" .$id;
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