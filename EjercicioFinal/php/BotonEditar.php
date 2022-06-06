<?php



$hostname='localhost';
$database='n19100144';
$username='root';
$password='Belen123.';
$port='3306';

$paridCte=$_POST['par1'];
$idjuego=$_POST['par2'];
$nomJuego=$_POST['par3'];
$Categoria=$_POST['par4'];
$anioJuego=$_POST['par5'];
$nomComp=$_POST['par6'];
$precioJuego=$_POST['par7'];
$Descripcion=$_POST['par8'];

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
    $consultaSql = "UPDATE videojuegos set 
    
    idjuego = '$idjuego', nomJuego = '$nomJuego', Categoria = '$Categoria', anioJuego = '$anioJuego', nomComp = '$nomComp',
    precioJuego = '$precioJuego', Descripcion = '$Descripcion' where id= $paridCte ;";

    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();
    $operacion=true;
}
else{
    $operacion=false;
}
} 
catch (PDOException $e) {
echo "Error de consulta a la base de datos";
echo $e->getMessage();

}

echo json_encode($operacion);
?>