  
<?php


session_start(); 
include('../login-cadastro/conexao.php');

  $nome=$_SESSION['char']; 
$user_1= $_SESSION['usuario'];










 


try {


 $sql890=$pdo->prepare("INSERT INTO  fichasuno(ficha_id,  ficha_dono, ficha_nome, ficha_race, ficha_atk , ficha_def, ficha_pw, ficha_hp, ficha_mp, ficha_hp_max, ficha_mp_max , ficha_xp, ficha_lv , ficha_const , ficha_cha  , ficha_fr , ficha_vel, ficha_int , ficha_sorte , ficha_class , ficha_sclass) VALUES(NULL, '$user_1','$nome',  'Daemon',	  50, 	150, 	 110, 	 259, 	 150, 	  100, 	 100,	  0, 	  1, 	 130, 	  55, 	  50, 	  55, 	 150, 	 140, 	  'Guardian ', 	  'Guerreiro')");

$sql890-> execute();

 var_dump($sql890);
  echo $sql890->rowCount();
  echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}




    
    




    


try {


$sql89=$pdo->prepare("INSERT INTO  perfil_clan(Perfil_clan_id, Perfil_nome, Perfil_dono, Perfil_clan, Perfil_ouvinte,   Perfil_tipo, Perfil_mod,  Perfil_clan_id_ficha, Perfil_clan_ico) VALUES(NULL,  '$nome','$user_1','clan','ouvinte','Clan', '../img_geral/braso_ini.png',NULL,'../img_geral/ini_brs.png')");
$sql89-> execute();
    

    

    $sql89-> execute();

/*header("location: ../keypage/key_32.php"); */

 var_dump($sql89);
  echo $sql89->rowCount();
  echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}




try {



$sql98=$pdo->prepare("INSERT INTO  inv_camada(id_inv_cam, dono_inv,  user_inv ,  head ,  olhodir ,  olhoesq ,  ombrodir ,  ombroesq ,  peitoral ,  cintura , handdir , handesq ,  chifredir ,  chifreesq ,  cotovelodir ,  cotoveloesq ,  coxadir ,   coxaesq ,  feetdir ,  feetesq ,  orelhadir ,  orelhaesq ,  asadir ,  asaesq ,  calda ,   neck ,  camada, save   ) VALUES (NULL,'$user_1','$nome', '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png', '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',   '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',   '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',   '../img_geral/braso_ini.png',   '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png',  '../img_geral/braso_ini.png', 'primeira', '../img_geral/braso_ini.png' )");
$sql98-> execute();
/*header("location: ../keypage/key_32.php"); */

 var_dump($sql98);
  echo $sql98->rowCount();
  echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


header('location: ../keypage/key_32.php ') ;



?>
