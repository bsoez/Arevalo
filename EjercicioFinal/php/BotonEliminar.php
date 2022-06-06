<?php

$paridCte=$_POST['par1'];

$hostname='localhost';
$database='n19100144';
$username='root';
$password='Belen123.';
$port='3306';

$operacion;

try {
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

} catch (PDOException $e) {
   echo "Error de conexion a la base de datos;";
   echo $e->getMessage();
   exit();
}


try {
    if (!($paridCte == null) ) {
        $consultaSql = "delete from IDJUEGO where idjuego=".$paridCte;
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();

    $operacion=true;

    }
    
    else {
        $operacion=false;
    }
} catch (PDOException $e) {
echo "Error de consulta a la base de datos";
echo $e->getMessage();

}

echo json_encode($operacion);
?>