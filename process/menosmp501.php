<?php 

session_start(); 
include('../login-cadastro/conexao.php');

$name_2 = $_SESSION["usuario"]; 
$nome_2 = $_SESSION["char"]; 
$sql0 = "SELECT MAX(ficha_id) FROM fichasuno
 WHERE ficha_DONO ='$name_2'";
$result0 = pg_query($conexao,$sql0);
$row0 = pg_fetch_assoc($result0);


$id = $row0["MAX(ficha_id)"]; 
$_SESSION["id-char"] = $id;

$sql3 = "SELECT * FROM ens
 WHERE Ens_DONO ='$name_2'   AND  Ens_nome = '$nome_2' AND Ens_numb_UI ='$id'";
$result3 = pg_query($conexao,$sql3);
$row3 = pg_fetch_assoc($result3);
var_dump($row3);








if($row3["Ens_ico"] == "../img_geral/p-ui-1.png"){
	$ico_new= "../img_geral/p-ui-1.png"; 
   
   
}

if($row3["Ens_ico"] == "../img_geral/H-ui-1.png"){
	$ico_new=  "../img_geral/G-ui-1.png";
   
   
}


if($row3["Ens_ico"] == "../img_geral/G-ui-1.png"){
	$ico_new=  "../img_geral/M-ui-1.png";
   
  
}

if($row3["Ens_ico"] == "../img_geral/M-ui-1.png"){
	$ico_new=  "../img_geral/p-ui-1.png";
   
    
}


$sql = " UPDATE ens SET Ens_ico = '$ico_new'  WHERE Ens_DONO ='$name_2'   AND  Ens_nome = '$nome_2' AND Ens_numb_UI ='$id'";
$result = pg_query($conexao,$sql);


header("location:../keypage/en_inventory.php"); 

/*

$mp1= $row3["Ens_1"] -50;
$mp2= $row3["Ens_2"] +50;
$sql = " UPDATE ens SET Ens_1 = $mp1 , Ens_2 = $mp2 WHERE Ens_numb_UI ='$id'";


  if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . pg_error($conexao);
}
var_dump(pg_error($conexao)); 




*/


?>