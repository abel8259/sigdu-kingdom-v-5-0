<meta charset="UTF-8"/>  
<?php

//primeiro o fichasuno 

session_start(); 
include('../login-cadastro/conexao.php');

#	Nome	Tipo	Agrupamento (Collation)	Atributos	Nulo	Omissão	Extra	Acções

	/*	ficha_nome	
		ficha_Race	
		ficha_Class
		ficha_Sclass
		ficha_ATK	
		ficha_DEF
		ficha_PW	
		ficha_HP
		ficha_MP
		ficha_XP
		ficha_LV
		ficha_Const
		ficha_CHA
		ficha_Fr
		ficha_Vel
		ficha_Int
		ficha_Sorte
		ficha_DONO 




ficha_id

ficha_nome 

ficha_Race
ficha_Class
ficha_Sclass

ficha_ATK
ficha_DEF
ficha_PW
ficha_HP
ficha_MP









		*/

$user_1= $_SESSION['usuario'];
$id = $_SESSION["id-char"];


$sql3 = "SELECT *  FROM modelochar where status_name = 'mágico'";    
 $result3 = pg_query($conexao,$sql3);
$row3 = pg_fetch_assoc($result3);

echo $id;

$sql90 = "SELECT * FROM fichasuno
 WHERE ficha_id =$id";
 echo $sql90;
 $result0 = pg_query($conexao,$sql90);
$row0 = pg_fetch_assoc($result0);


$Daemon_racial3_atk=$row0["ficha_ATK"] + $row3["status_atk"];
$Daemon_racial3_def=$row0["ficha_DEF"] + $row3["status_def"];
$Daemon_racial3_pw= $row0["ficha_PW"] + $row3["status_pw"];
$Daemon_racial3_hp= $row0["ficha_HP"] + $row3["status_hp"];
$Daemon_racial3_mp= $row0["ficha_MP"] + $row3["status_mp"];	

$Cons = round($Daemon_racial3_hp/2);
$CHA = round($Daemon_racial3_pw/2);
$Fr	= round($Daemon_racial3_atk);
$Vel =	round($Daemon_racial3_pw/2);
$Int =	round($Daemon_racial3_mp);
$Sorte = round(($Daemon_racial3_def + $Cons)/2);

$sql = " UPDATE  fichasuno SET 

ficha_ATK ='$Daemon_racial3_atk',
ficha_DEF ='$Daemon_racial3_def',
ficha_PW = '$Daemon_racial3_pw',
ficha_HP ='$Daemon_racial3_hp',
ficha_MP ='$Daemon_racial3_mp',

ficha_Const ='$Cons',
ficha_CHA = '$CHA',
ficha_Fr ='$Fr',
ficha_Vel ='$Vel',
ficha_Int = '$Int',
ficha_Sorte='$Sorte'

   WHERE ficha_id= '$id'" ;
      if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . pg_error($conexao);
}




header("location:../keypage/key_31.php");




?>