<?php 

session_start(); 
include('conexao.php');

if(empty($_POST['user4_9']) || empty($_POST['pass4_9'])){
	header('location:../index.php'); 
	exit();
}

$usuario = $_POST['user4_9'];
$senha = $_POST['pass4_9'];


$sth=$pdo->prepare("SELECT count(*) AS total  FROM usuario  where usuario_nome= ? AND usuario_senha= ?");


$sth->bindParam(1, $usuario, PDO::PARAM_STR, 255);
$sth->bindParam(2, $senhaa, PDO::PARAM_STR, 32);

$sth->execute();


echo $sth ->rowCount();
  var_dump($sth); 
$row = $sth ->rowCount();

  echo $sth ->rowCount();
  var_dump($sth);
if($row == 1){

 $_SESSION['usuario'] = $usuarioo ;
 





header('location: ../profile/home/');


 exit();  

}else{
	$_SESSION['nao-autenticado'] = true;
	header('location:index.php'); 
	exit();
}




?>

