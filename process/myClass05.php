<meta charset="UTF-8"/>  
<?php


session_start(); 
include('../login-cadastro/conexao.php');

$name_2 = $_SESSION["usuario"]; 

$sql0 = "SELECT MAX(ficha_id) FROM fichasuno
 WHERE ficha_DONO ='$name_2'";
$result0 = pg_query($conexao,$sql0);
$row0 = pg_fetch_assoc($result0);

$id = $row0["max"];  
$_SESSION["id-char"] = $id;


$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];
$id= $_SESSION['id-char'];




$sql2 = "UPDATE fichasuno
SET ficha_Class = 'Mágico',  ficha_Sclass = 'Necromante' 
WHERE ficha_id= '$id' "; 
$result2 = pg_query($conexao,$sql2);



header("location:magic.php");



?>