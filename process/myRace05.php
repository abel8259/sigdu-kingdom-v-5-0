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
		ficha_DONO */

$user_1= $_SESSION['usuario'];


    $sql = "SELECT *  FROM personagem where char_user = '$user_1'";    
 $result = pg_query($conexao,$sql);
$row = pg_fetch_assoc($result);


$name_1=$_SESSION['char'];

 $sql2 = "SELECT *  FROM modelochar where status_name = 'Gigante_racial'";    
 $result2 = pg_query($conexao,$sql2);
$row2 = pg_fetch_assoc($result2);


$Gigante_racial1_atk=$row2["status_atk"];
$Gigante_racial1_def=$row2["status_def"];
$Gigante_racial1_pw=$row2["status_pw"];
$Gigante_racial1_hp=$row2["status_hp"];
$Gigante_racial1_mp=$row2["status_mp"];


$sql3 = "SELECT *  FROM modelochar where status_name = 'Gigante_R2'";    
 $result3 = pg_query($conexao,$sql3);
$row3 = pg_fetch_assoc($result3);



$Gigante_racial2_atk=$row3["status_atk"];
$Gigante_racial2_def=$row3["status_def"];
$Gigante_racial2_pw=$row3["status_pw"];
$Gigante_racial2_hp=$row3["status_hp"];
$Gigante_racial2_mp=$row3["status_mp"];

$sql4 = "SELECT *  FROM modelochar where status_name = 'lv_u'";    
 $result4 = pg_query($conexao,$sql4);
$row4 = pg_fetch_assoc($result4);



$Gigante_u_atk = $row4["status_atk"];
$Gigante_u_def = $row4["status_def"];
$Gigante_u_pw = $row4["status_pw"];
$Gigante_u_hp = $row4["status_hp"];
$Gigante_u_mp = $row4["status_mp"];

$Gigante_racial3_atk=$Gigante_racial1_atk + $Gigante_racial2_atk + $Gigante_u_atk;
$Gigante_racial3_def=$Gigante_racial1_def + $Gigante_racial2_def +$Gigante_u_def;
$Gigante_racial3_pw= $Gigante_racial1_pw + $Gigante_racial2_pw + $Gigante_u_pw;
$Gigante_racial3_hp= $Gigante_racial1_hp + $Gigante_racial2_hp + $Gigante_u_hp;
$Gigante_racial3_mp= $Gigante_racial1_mp + $Gigante_racial2_mp + $Gigante_u_mp;	

$Cons = round($Gigante_racial3_hp/2);
$CHA = round($Gigante_racial3_pw/2);
$Fr	= round($Gigante_racial3_atk);
$Vel =	round($Gigante_racial3_pw/2);
$Int =	round($Gigante_racial3_mp);
$Sorte = round(($Gigante_racial3_def + $Cons)/2);

$sql = "INSERT INTO fichasuno( 
ficha_dono, 
ficha_nome,
ficha_Race,
ficha_ATK,
ficha_DEF,
ficha_PW,
ficha_HP,
ficha_MP,
ficha_hp_MAX,
ficha_mp_MAX,
ficha_XP,
ficha_LV,
ficha_Const,
ficha_CHA,
ficha_Fr,
ficha_Vel,
ficha_Int,
ficha_Sorte,
ficha_Class, 
ficha_Sclass)
 VALUES( 
 '$user_1',
 '$name_1',
 'Gigante',
 '$Gigante_racial3_atk',
 '$Gigante_racial3_def',
 '$Gigante_racial3_pw',
 '$Gigante_racial3_hp',
 '$Gigante_racial3_mp',
 '$Gigante_racial3_hp',
 '$Gigante_racial3_mp',
 0,
 1,
 '$Cons',
 '$CHA',
 '$Fr',
 '$Vel',
 '$Int',
 '$Sorte',
 'Guardião',
 'Guerreiro' )" ;
      if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . pg_error($conexao);
}
      if (pg_query($conexao,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . pg_error($conexao);
}



$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];
$id= $_SESSION['id-char'];



header("location:../keypage/key_30.php");


?>