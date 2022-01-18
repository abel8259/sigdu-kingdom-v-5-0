<?php
/* ESFERAS DE ENERGIAS RETIRAAS DO GDD DÁ MTO TRABALHO*/      

session_start(); 
include('../login-cadastro/conexao.php');

$dono = $_SESSION["usuario"]; 
$char  = $_SESSION["char"];






?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8"/>  
 <!--básico-->  
            <meta charset="UTF-8"/>  
            <title>Ficha;</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
        <!---->

        <!--tags para SEO-->
            <meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
            <meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>
            <meta name="author" content="rock studios"/>   
        <!---->

        <!--tags pro favicon-->
           <link rel="shortcut icon" href="../img_geral/favicon/favicon_084925/favicon.ico" >
           <link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >
        <!---->

<link rel="stylesheet" type="text/css" href="style.css"/> 

<style type="text/css">

div.caixa_01{
border: 2px solid #000;
width: 100%;
}

div.caixa_02{
border: 2px solid #000;
width: 100%;
}


.button {
  background-color: #000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.letra2{
  text-align: center;
}

.letra3{
    font-weight: bold;
}

.letra4{
    font-size:24px;
}


.grid-container {
  display: grid;
  grid-template-columns: auto auto;
 
  padding: 10px;
}
.grid-item {
  background-color: black ;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: #000;
  padding: 10px;
}

.grid-container > div {
  background-color:white ;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.item1 {
  grid-row: 1 /6;
}


.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto ;
  grid-gap: 10px;
  background-color: #000;
  padding: 10px;
}

.grid-container > div {
  background-color: black ;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.item1 {
  grid-column: 1 / 9;
}


.button2 {
border: double #000 4px;
  width: 5%;}


.pagination {
  display: inline-block;
  margin-left:39%;
}

.pagination a {
  color: white;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #000;
}

.pagination a.active {
  background-color: #000;
  color: white;
  border: 1px solid #000;
}

a.pg1:link, a.pg1:visited {
  background-color: #000;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 1px solid #000;
}

a.pg1:hover, a.pg1:active {
  background-color: #e0e0d1;
  color: #000;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
}

body{
  background-color:black ; 
}
p{
  color:white;
}
h1{
  color:white;
}
.grid-item{
  color:white;
}
</style>


</head>

<body>
 <a class= "pg1" href="key_18.php">voltar</a>
 <a class= "pg1" href="key_undeadsave.php">Salvar e ascender </a>
<br>

	
<div class="caixa_01" >
  <p class="letra2" >Nome:</p>
  <p  id="nm-char" class="letra2 letra3" ><?php echo $_SESSION["char"];?></p>
</div>







<div class="caixa_01" >
  <p class="letra2" >Nacionalidade:</p>
  <p  id="rc-char" class="letra2 letra3" ><?php

$stmt999 = $pdo-> prepare( "SELECT ficha_race FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc LIMIT 1 ");
$stmt999-> execute();
$result999 = $stmt999-> fetchAll( PDO::FETCH_ASSOC );

foreach($result999  as  $value999 ) {

   echo $value999["ficha_race"];

}

 ?></p>
</div>

<div class="caixa_01" >
  <p class="letra2" >Classe :</p>
  <p  id="cl-char" class="letra2 letra3" ><?php

$stmt992 = $pdo-> prepare( "SELECT ficha_sclass FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc LIMIT 1 ");
$stmt992-> execute();
$result992 = $stmt992-> fetchAll( PDO::FETCH_ASSOC );

foreach($result992  as  $value992 ) {

   echo $value992["ficha_sclass"];

}

 ?>  </p>
</div>




<div class="caixa_01" >
  <p class="letra2" >Plano:</p>
  <p  id="plano-char" class="letra2 letra3" ><?php

$stmt993 = $pdo-> prepare( "SELECT perfil_tipo FROM perfil_clan  WHERE perfil_dono  = '$dono' LIMIT 1 ");
$stmt993-> execute();
$result993 = $stmt993-> fetchAll( PDO::FETCH_ASSOC );

foreach($result993  as  $value993 ) {

   echo $value993["perfil_tipo"];

}

 ?> </p>
</div>

<div class="caixa_01" >
  <p class="letra2" >Organzição:</p>
  <p  id="org-char" class="letra2 letra3" > <?php

$stmt993 = $pdo-> prepare( "SELECT perfil_clan FROM perfil_clan  WHERE perfil_dono  = '$dono' LIMIT 1 ");
$stmt993-> execute();
$result993 = $stmt993-> fetchAll( PDO::FETCH_ASSOC );

foreach($result993  as  $value993 ) {

   echo $value993["perfil_clan"];

}?></p>
</div>

<br>



<br>





 
 <div class="caixa_02">
  <p class="letra2" >Gold:</p>
  <p id="level" class="letra2 letra3" ><?php

$stmt994 = $pdo-> prepare( "SELECT currencies_gold FROM currencies WHERE currencies_dono ='$char' AND currencies_nome = '$dono' LIMIT 1 ");
$stmt994-> execute();
$result994 = $stmt994-> fetchAll( PDO::FETCH_ASSOC );

foreach($result994  as  $value994 ) {

   echo $value994["currencies_gold"];

}?> </p>
</div>

  <div class="caixa_02">
  <p class="letra2" >Gemas:</p>
  <p id="level" class="letra2 letra3" ><?php

$stmt994 = $pdo-> prepare( "SELECT currencies_gem FROM currencies WHERE currencies_dono ='$char' AND currencies_nome = '$dono' LIMIT 1 ");
$stmt994-> execute();
$result994 = $stmt994-> fetchAll( PDO::FETCH_ASSOC );

foreach($result994  as  $value994 ) {

   echo $value994["currencies_gem"];

}?></p>
</div>







<br>



<br>








 
 <div class="caixa_02">
  <p class="letra2" >xp:</p>
  <p id="level" class="letra2 letra3" ><?php

$stmt996 = $pdo-> prepare( "SELECT ficha_xp FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc LIMIT 1 ");
$stmt996-> execute();
$result996 = $stmt996-> fetchAll( PDO::FETCH_ASSOC );

foreach($result996  as  $value996 ) {

   echo $value996["ficha_xp"];

}?> </p>
</div>





<div class="caixa_02">
  <p class="letra2" >level:</p>
  <p id="level" class="letra2 letra3" ><?php

$stmt996 = $pdo-> prepare( "SELECT ficha_xp FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc LIMIT 1 ");
$stmt996-> execute();
$result996 = $stmt996-> fetchAll( PDO::FETCH_ASSOC );

foreach($result996  as  $value996 ) {

   $eco = $value996["ficha_xp"]/100;
echo $eco;
}?></p>
</div>



<div class="caixa_02">
  <p class="letra2" >raragon level:</p>
  <p id="level" class="letra2 letra3" ><?php

$stmt996 = $pdo-> prepare( "SELECT ficha_xp FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc LIMIT 1 ");
$stmt996-> execute();
$result996 = $stmt996-> fetchAll( PDO::FETCH_ASSOC );

foreach($result996  as  $value996 ) {

   $eco = $value996["ficha_xp"]/1000;
echo $eco;
}?></p>
</div>










</body>



</html>

<!--<br>

<div class="pagination">
  
  <a href="../tela_61/tela_61.html" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

<br>-->