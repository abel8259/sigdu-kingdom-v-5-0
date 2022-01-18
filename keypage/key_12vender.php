<?php

session_start(); 
include('../login-cadastro/conexao.php');
 


$user=$_SESSION["usuario"];

$char =$_SESSION["char"]; 

$inv_id = $_SESSION['inv_id'];














        
$result_usuarios  = $pdo-> prepare( "SELECT * FROM currencies WHERE currencies_dono ='$char' AND currencies_nome = '$user'");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_item ) {
         












$gol=$_SESSION["gold_cust"];
 





$sql14  = $pdo-> prepare( "SELECT currencies_gold FROM currencies WHERE currencies_dono ='$char' AND currencies_nome = '$user'");
$sql14-> execute();
$result14 = $sql14-> fetchAll( PDO::FETCH_ASSOC );

foreach($result14 as  $row14 ) {
         


$goldc = $row14['currencies_gold'];




$gold_t= ($goldc + $gol);



$sql19 = $pdo-> prepare("DELETE from inventory WHERE 	inv_id='$inv_id'");
$sql19-> execute();

try {




$sql20 = $pdo-> prepare("UPDATE currencies SET currencies_gold = '$gold_t' WHERE currencies_dono  = '$char' AND currencies_nome = '$user'");

$sql20-> execute();

  echo $sql20->rowCount();
  echo 'new record created successfully';
  /* header('location: ./key_24.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

































}/* foreach 2 */ 

}/* foreach 1 */ 

/*header("location:key_24.php"); */


?>