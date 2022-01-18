<meta charset="UTF-8"/>  
<?php


session_start(); 
include('../login-cadastro/conexao.php');

$user_1= $_SESSION['usuario'];
$id = $_SESSION["id-char"];

$sql0 = "SELECT * FROM fichasuno
 WHERE ficha_id ='$id'";
 $result0 = pg_query($conexao,$sql0);
$row0 = pg_fetch_assoc($result0);
$user = $row0["ficha_dono"];
$nome = $row0["ficha_nome"];
$sql89 = " INSERT INTO  perfil_clan(Perfil_nome, Perfil_dono, Perfil_clan, Perfil_ouvinte,	Perfil_tipo, Perfil_mod, Perfil_clan_id_ficha, Perfil_clan_ico) VALUES('$nome','$user','Guilda','ouvinte','Guilda','MOD',$id,'../img_geral/ini_brs.png')";
      if (pg_query($conexao,$sql89)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" ;
}
$sql98 = "INSERT INTO  inv_camada  ( DONO ,  user ,  head ,  olhoDIR ,  olhoesq ,  ombroDIR ,  ombroesq ,  peitoral ,  cintura ,  handDIR ,  handesq ,  chifreDIR ,  chifreesq ,  cotoveloDIR ,  cotoveloesq ,  coxaDIR ,  coxaesq ,  feetDIR ,  feetesq ,  orelhaDIR ,  orelhaesq ,  asaDIR ,  asaesq ,  calda ,  neck ,  camada ,  id_inv_cam ) VALUES ('$user_1','$nome', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', NULL);
";
      if (pg_query($conexao,$sql98)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql98 . "<br>" ;
}
	


header("location:../keypage/key_32_2.php");






?>