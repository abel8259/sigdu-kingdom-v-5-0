<?php

session_start(); 
include('../login-cadastro/conexao.php');

$_SESSION["char"] =$_POST["char"];
$_SESSION["usuario"] =$_POST["usuario"]; 
$_SESSION["id-char"] =$_POST["id-0"];

$id= $_SESSION["id-char"];
$name_2=$_SESSION["usuario"];


try {

 
$sql988 = $pdo-> prepare( "SELECT * FROM fichasuno WHERE ficha_id  = '$id'  ");

$sql988-> execute();

 var_dump($sql988);
  echo $sql988->rowCount();
  echo 'new record created successfully';
  header('location: ./key_24.php ') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}





/*header("location:key_24.php");*/ 


?>






