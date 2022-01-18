
<?php
session_start(); 
include('conexao.php');




$data2 = $_POST['user4_9'];
$usuario  = $data2;

$data3 =  $_POST['pass4_9'];
$senha = $data3;






$sth=$pdo->prepare("SELECT * FROM usuario WHERE usuario = ? AND senha  = ?");


$sth->bindParam(1, $usuario, PDO::PARAM_STR, 255);
$sth->bindParam(2, $senha, PDO::PARAM_STR, 32);

$sth->execute();


echo $sth ->rowCount();
  var_dump($sth); 
$row = $sth ->rowCount();

  echo $sth ->rowCount();
  var_dump($sth);




if($row >= 1){

 $_SESSION['usuario'] = $usuario ;
 





header('location:../keypage/key_1.php');

 exit();  

}else{
   $_SESSION['nao-autenticado'] = true;
   header('location:loginin.php'); 
   exit();
}




?>