<?php
session_start(); 
include('../login-cadastro/conexao.php');

$lut = $_POST['lutar'];
$ven = $_POST['vender'];
$_SESSION["inv_id"] =$_POST["id"];
$_SESSION['foto_enm'] = $_POST['foto_enm'];

$_SESSION["gold_cust"]=$_POST["usuario"];
if($lut=='lutar'){
header("location:key_12venceu.php");  
}

if($ven=='vender'){
header("location:key_12vender.php"); 
}




/*
$id = $_POST['gold'];

var_dump($lut);
var_dump($ven);

$result_usuarios = "SELECT * FROM inventory  WHERE inv_id = '$id'";
$resultado_usuarios = mysqli_query($conexao, $result_usuarios);*/



?>
