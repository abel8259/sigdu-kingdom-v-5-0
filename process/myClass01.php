<meta charset="UTF-8"/>  
<?php


session_start(); 
include('../login-cadastro/conexao.php');

$name_5 = $_SESSION["usuario"]; 
$name_6=$_SESSION['char'];








$sql387=$pdo->prepare("SELECT * FROM fichasuno WHERE ficha_dono ='$name_5' AND ficha_nome =  '$name_6'  ORDER BY ficha_id DESC LIMIT 1");
    
     $info87 = $sql387 -> fetchALL(); 
    foreach ($info87 as $key => $value ){

    
    

$id = value["ficha_id"]; 
$_SESSION["id-char"] = $id;

    } 

    $sql387-> execute();



$sql287=$pdo->prepare("UPDATE fichasuno
SET ficha_Class = 'Lanceiro',  ficha_Sclass = 'Arqueiro' 
WHERE ficha_id= '$id' ");
$sql287-> execute();
header("location:../keypage/key_31.php");

?>
