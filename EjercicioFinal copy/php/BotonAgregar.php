<?php




$paridCte=$_POST['par1'];
$idjuego=$_POST['par2'];
$nomJuego=$_POST['par3'];
$Categoria=$_POST['par4'];
$anioJuego=$_POST['par5'];
$nomComp=$_POST['par6'];
$precioJuego=$_POST['par7'];
$Descripcion=$_POST['par8'];

$hostname='localhost';
$database='n19100144';
$username='root';
$password='Belen123.';
$port='3306';


try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$passwword);
} catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

//$con->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);

try{
    //campos que vas a insertar
    $consultaSql = "insert into n19100144.videojuegos (idjuego,nomJuego,Categoria,anioJuego,nomComp,precioJuego,Descripcion)
     //atributos
    values('$idjuego','$nomJuego','$Categoria',$anioJuego,'$nomComp', '$precioJuego', '$Descripcion');" ;
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();

}catch(PDOException $e){
    echo "Error d la consulta";
    echo $e->getMessage();

}

$resultadoJSON = json_encode($resultado);
echo $resultadoJSON;
?>