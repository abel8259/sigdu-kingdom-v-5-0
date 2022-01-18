<?php
session_start(); 
include('../login-cadastro/conexao.php');


$id = $_SESSION["id-char"];


$sql = " UPDATE perfil_clan SET Perfil_clan = 'White sharkers' WHERE Perfil_clan_id_ficha = '$id'";


  if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" ;
}





$sql0 = "SELECT * FROM fichasuno
 WHERE ficha_id ='$id'";
  $result0 = pg_query($conexao,$sql0);
$row0 = pg_fetch_assoc($result0);
$rc = $row0["ficha_race"];

if($rc=="Draconato"){
$sql = " UPDATE perfil_clan SET Perfil_ouvinte = 'S' WHERE Perfil_clan_id_ficha = '$id'";
if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" ;
}

}else{
$sql = " UPDATE perfil_clan SET Perfil_ouvinte = 'N' WHERE Perfil_clan_id_ficha = '$id'";
if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" ;

}
$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];
$id= $_SESSION['id-char'];



$sql12 = " INSERT INTO currencies(Currencies_DONO,Currencies_nome,Currencies_gold,Currencies_gem) VALUES('$name_1','$user_1',5000,5)";
if (pg_query($conexao,$sql12)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql12 . "<br>" ;
} 
header("location:../keypage/key_24.php");