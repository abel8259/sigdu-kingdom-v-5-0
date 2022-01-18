  
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
		ficha_DONO */

$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];


 





$sql2=$pdo->prepare("SELECT *  FROM  modelochar where status_name = 'Daemon_racial'");
    
     $info2 = $sql2 -> fetchALL(); 
    foreach ($info2 as $key => $value ){

    
    

      
$Daemon_racial1_atk=value["status_atk"];
$Daemon_racial1_def=value["status_def"];
$Daemon_racial1_pw=value["status_pw"];
$Daemon_racial1_hp=value["status_hp"];
$Daemon_racial1_mp=value["status_mp"];


    } 


$sql3=$pdo->prepare("SELECT *  FROM  modelochar where status_name = 'Daemon_R2'");
    
     $info3 = $sql3 -> fetchALL(); 
    foreach ($info3 as $key => $value ){

    
    

      
$Daemon_racial2_atk=value["status_atk"];
$Daemon_racial2_def=value["status_def"];
$Daemon_racial2_pw=value["status_pw"];
$Daemon_racial2_hp=value["status_hp"];
$Daemon_racial2_mp=value["status_mp"];


    } 

    $sql3-> execute();






$sql4=$pdo->prepare("SELECT *  FROM  modelochar where status_name = 'lv_u'");
    
     $info4 = $sql4 -> fetchALL(); 
    foreach ($info4 as $key => $value ){

    
$Daemon_u_atk = value["status_atk"];
$Daemon_u_def = value["status_def"];
$Daemon_u_pw = value["status_pw"];
$Daemon_u_hp = value["status_hp"];
$Daemon_u_mp = value["status_mp"];
    

      
$Daemon_racial2_atk=value["status_atk"];
$Daemon_racial2_def=value["status_def"];
$Daemon_racial2_pw=value["status_pw"];
$Daemon_racial2_hp=value["status_hp"];
$Daemon_racial2_mp=value["status_mp"];


    } 

    $sql4-> execute();


$Daemon_racial3_atk=$Daemon_racial1_atk + $Daemon_racial2_atk + $Daemon_u_atk;
$Daemon_racial3_def=$Daemon_racial1_def + $Daemon_racial2_def +$Daemon_u_def;
$Daemon_racial3_pw= $Daemon_racial1_pw + $Daemon_racial2_pw + $Daemon_u_pw;
$Daemon_racial3_hp= $Daemon_racial1_hp + $Daemon_racial2_hp + $Daemon_u_hp;
$Daemon_racial3_mp= $Daemon_racial1_mp + $Daemon_racial2_mp + $Daemon_u_mp;	


$HP_MAX = $Daemon_racial3_hp;
$MP_MAX = $Daemon_racial3_mp;

$Cons = round($Daemon_racial3_hp/2);
$CHA = round($Daemon_racial3_pw/2);
$Fr	= round($Daemon_racial3_atk);
$Vel =	round($Daemon_racial3_pw/2);
$Int =	round($Daemon_racial3_mp);
$Sorte = round(($Daemon_racial3_def + $Cons)/2);
  
try {


  $stmt = $pdo->prepare('INSERT INTO  fichasuno(ficha_id,  ficha_dono, ficha_nome, ficha_Race, ficha_ATK, ficha_DEF, ficha_PW, ficha_HP, ficha_MP, ficha_hp_MAX, ficha_mp_MAX, ficha_XP, ficha_LV , ficha_Const , ficha_CHA , ficha_Fr , ficha_Vel, ficha_Int , ficha_Sorte , ficha_Class , ficha_Sclass) 
VALUES( NULL ,   :nome1 , 
	:nome2,
	:nome3 , 
	:nome4 , 
	:nome5, 
	:nome6, 
	:nome7 , 
	:nome8 , 
	:nome9 , 
	:nome10 , 
	:nome11 , 
	:nome12 , 
	:nome13, 
	:nome14 , 
	:nome15 , 
	:nome16 , 
	:nome17 , 
	:nome18, 
	:nome19, 
	:nome20');
  $stmt->execute(array(
    ':nome1' => $user_1, 
	':nome2' => $name_1, 
	':nome3' => 'Daemon', 
	':nome4' => $Daemon_racial3_atk, 
	':nome5' => $Daemon_racial3_def, 
	':nome6' => $Daemon_racial3_pw, 
	':nome7' => $Daemon_racial3_hp, 
	':nome8' => $Daemon_racial3_mp, 
	':nome9' => $Daemon_racial3_hp, 
	':nome10' => $Daemon_racial3_mp, 
	':nome11' => 0, 
	':nome12' => 1, 
	':nome13' => $Cons, 
	':nome14' => $CHA, 
	':nome15' => $Fr, 
	':nome16' => $Vel, 
	':nome17' => $Int, 
	':nome18' => $Sorte, 
	':nome19' => 'Guardião', 
	':nome20' => 'Guerreiro'));

  echo $stmt->rowCount();
  echo 'new record created successfully';
  header('location: ../keypage/key_30.php ') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>