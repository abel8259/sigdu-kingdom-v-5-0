<?php
session_start(); 
include('../login-cadastro/conexao.php');




$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];


try{

$sql23=$pdo->prepare(" UPDATE perfil_clan SET Perfil_clan = 'Sisters of Nirvana' WHERE perfil_nome = '$user_1' AND perfil_dono = '$name_1' ");
$sql23-> execute();


 var_dump($sql23);
  echo $sql23->rowCount();
  echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}




try{

$sql21=$pdo->prepare(" INSERT INTO currencies(currencies_dono,currencies_nome,currencies_gold,currencies_gem) VALUES(NULL,'$name_1','$user_1',5000,5)");
$sql21-> execute();

 var_dump($sql21);
  echo $sql21->rowCount();
  echo 'new record created successfully';
  header('location: ../keypage/key_24.php ') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}






/*header("location: ../keypage/key_24.php");*/