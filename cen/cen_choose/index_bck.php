<?php 
session_start(); 
include('../login-cadastro/conexao.php');
$_SESSION["inv_id"] =$_POST["id"]; 


$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 
$inv_id = $_SESSION["inv_id"];
$result_item = "SELECT * FROM localidads  WHERE localidad_id = '$inv_id'";
$resultado_item = pg_query($conexao, $result_item);




$row_item = pg_fetch_assoc($resultado_item);


$type = $row_item['inv_type'];
$content = $row_item['inv_nome'];

$uery ="UPDATE localidads  SET localidads_src = '$content'   WHERE char_localidad = '$name_1'";
$resultado = pg_query($conexao, $uery);
echo "Error: " . $uery . "<br>";
header("location:key_12inventory.php"); 

?>