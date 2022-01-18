<?php 
session_start(); 
include('../login-cadastro/conexao.php');



$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 
$nomeitem = $_POST["nome"];

      
$result_item   = $pdo-> prepare( "SELECT * FROM shops  WHERE inv_nome = '$nomeitem'");
$result_item -> execute();
$resultado_item = $result_item -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item as  $row_item ) {





$type = $row_item['inv_type'];


echo $type;

$content = $row_item['inv_nome'];



try{

$uery   = $pdo-> prepare( "UPDATE inv_camada SET $type = '$content'   WHERE dono_inv='$name_2' AND   user_inv='$name_1'");

$uery -> execute();
 var_dump($uery );
  echo $uery ->rowCount();
  echo 'new record created successfully';
 header("location:key_12inventory.php"); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}



}


?>
