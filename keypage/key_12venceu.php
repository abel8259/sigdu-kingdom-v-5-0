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








$sql20 = $pdo-> prepare("UPDATE currencies SET currencies_gold = '$gold_t' WHERE currencies_dono  = '$char' AND currencies_nome = '$user'");

$sql20-> execute();


































}/* foreach 2 */ 

}/* foreach 1 */ 

/*header("location:key_24.php"); */


?>




<!DOCTYPE html>
<html>



<head>
	<head>

	    <!--básico-->  
		    <meta charset="UTF-8"/>  
			<title>SIGDU KINGDOM</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
		<!---->


		<!--inclusão de css--> 
		    <link rel="stylesheet" type="text/css" href="../css/key_3.css"/>
		    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet"/>
		    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
	    <!---->


		<!--tags para SEO-->
			<meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
			<meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>
			<meta name="author" content="rock studios"/>   
		<!---->

		<!--tags pro favicon-->
		   <link rel="shortcut icon" href="img_geral/favicon/favicon_084925/favicon.ico" >
		   <link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >
		<!---->
		


		<style>
			.victory{
				width:40%;
				margin-left:30%; 
			}
            ul{
            	position:relative ;
            	left:40%;
            	width:10%;
            	border:2px black solid ;
            	text-decoration:none;
            	list-style: none; 
            }
            li{
            	background-color:#ccc;
            	text-align: center 
                 
            }
		</style>

</head>


<body style= "position:relative">
  
<img src="../img_geral/victory.png" class="victory"/>

<div >
 <ul >
  <li ><a> <b>xp atual: 
  	<?php
$inv_id = $_SESSION['inv_id'];
$stmt996 = $pdo-> prepare( "SELECT ficha_xp FROM fichasuno  WHERE ficha_dono  = '$user' order by ficha_id desc LIMIT 1 ");

$stmt996-> execute();
$result996 = $stmt996-> fetchAll( PDO::FETCH_ASSOC );
$inv_id = $_SESSION["inv_id"];
foreach($result996  as  $value996 ) {
	
$result_usuarios = $pdo-> prepare( "SELECT inv_pw FROM inventory  WHERE inv_id = '$inv_id'  ORDER BY inv_gold DESC");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios  as  $row_usuario ) {
   $xpat = $value996["ficha_xp"] + $row_usuario['inv_pw'];
   

$sql20 = $pdo-> prepare("UPDATE fichasuno SET ficha_xp = '$xpat' WHERE ficha_dono  = '$user' AND ficha_nome = '$char' ");

$sql20-> execute();


echo $xpat;
}
}

?> 















  	 </b></a></li>
  <li ><a> <b>ouro ganho: 
   <?php 



$inv_id = $_SESSION["inv_id"];


$result_usuarios = $pdo-> prepare( "SELECT inv_gold FROM inventory  WHERE inv_id = '$inv_id'  ORDER BY inv_gold DESC");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios  as  $row_usuario ) {










   
  
                  echo $row_usuario['inv_gold'];


}
?>

     </b></a></li>
 
 </ul>
</div>
<!-- mobile
<div id="menu01pg00000001-mob" >
 <ul id="ulpg00000001-mob">
  <li id="li1pg00000001-mob"><a> <b>xp : 
  
  		












  	</b></a></li>
  <li id="li2pg00000001-mob"> <a id="a2pg00000001-mob" href="key_23.php"> <b>ouro:  
    










     </b></a></li>
 
 </ul>
</div>-->



</body>

</html>
</body>
</html>