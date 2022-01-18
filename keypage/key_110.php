<?php

session_start(); 
include('../login-cadastro/conexao.php');



$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 




?>
<!DOCTYPE html>
<html>
	<head>

	<meta charset="UTF-8"/>  
	 <!--básico-->  
	            <meta charset="UTF-8"/>  
	            <title>equipamento</title>
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
           <link rel="stylesheet" href="../css/key_110.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <!---->

	<link rel="stylesheet" type="text/css" href="style.css"/> 

	<style type="text/css">
    
    *{
    	padding:0px;
    	margin:0px;  
    }
    html,body{
    	height:100%;
    	background-color: black;  
        color:white;
    }
    div{
        display:block;
        border: 0  400px 100px 400px;
        border: 2px solid white;
        margin: 50px 0; 
    }
    #arvore{
    	position:absolute;
    	left:0%;
    	top:0%;
        width:30%;
        height:100%;
    }
    #caixaPrin{
        position: absolute;
        left:50%;
        width:42.3%;
        height:calc(100% *5/6) ;
        border:2px solid #ccc;
        overflow:scroll;
        margin:0; 
    }

   .char{
    position:relative ;
     width:100px;
     height:100px;
   } 




    #boxletter {
    	background-color:black   ;
    	position: absolute;
    	width:10%;
    	height:5%;  
    	left: 50%;
    	top:50%;
    	border: 3px solid white ;
    	padding:40px; 
    	
    }

.pagination {
  display: inline-block;
  margin-left:39%;
}

.pagination a {
  color: black;
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
.pg1{
	margin:5px;
	position:relative; 
}
.cor{
	left:81.4%;
} 
.cor2{
	left:80%;
}    
img{
	width:100px;
	height:100px;
}         
	
div#caixa0{
 border: 0  400px 100px 400px;
 border: 2px solid white;
}  
img.char{
    text-align: center; 
    margin: 0 220px; 
} 
@media screen and (max-width:720px ){


   #arvore{
      position:absolute;
      left:10%;
      top:0%;
      width:80%;
      height:100vh;
    }


    #caixaPrin{
        position: absolute;
        left:10%;
        width:80%;
        height:calc(100% *5/6) ;
        border:2px solid #ccc;
        overflow:scroll;
        margin:0; 
    }

a.pg1:link, a.pg1:visited {
    background-color: #000;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: 1px solid #000;
    left:10%;
    z-index:99999999;
}  
img.char{
  width:100px;
     height:100px;
      margin:0 90px; 
} 
    </style>


	</head>
	<body>

<br>
 <a class= "pg1 cor" href="key_12inventory.php">voltar</a>
 <a class= "pg1 cor2" href="#">aprimorar</a>
<br>

 
		<img id="arvore" src="../img_geral/arvore-itens.png" height="620px"/>
    <div id="caixaPrin">
       <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block  active'>VISUAL</button>";?>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>chifre direito </button>";?>
            <div id="chifredir">
                <?php 
                $result_item   = $pdo-> prepare("SELECT chifredir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item -> execute();
$resultado_item = $result_item -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item as  $row_item ) {


     
               
                  echo "<img class='char' src=".$row_item['chifredir'].">";}
                  ?>
            </div>
            <?php 
                     echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>olho direito </button>";?>

            <div id="olho direito ">
              <?php 
                $result_item   = $pdo-> prepare("SELECT olhodir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item -> execute();
$resultado_item = $result_item -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item as  $row_item ) {


     
               
                  echo "<img class='char' src=".$row_item['olhodir'].">";}
                  ?>
                 
             
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>orelha direita  </button>";?>
            <div id="orelha direito ">
              <?php 
                $result_item14   = $pdo-> prepare("SELECT orelhadir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item14 -> execute();
$resultado_item14 = $result_item14 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item14 as  $row_item14 ) {


     
               
                  echo "<img class='char' src=".$row_item14['orelhadir'].">";}
                  ?>
                           
            </div>
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>chifre Esquerdo </button>";?>
			<div id="chifreesq">
              <?php 
                $result_item15   = $pdo-> prepare("SELECT chifreesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item15 -> execute();
$resultado_item15 = $result_item15 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item15 as  $row_item15 ) {


     
               
                  echo "<img class='char' src=".$row_item15['chifreesq'].">";}
                  ?>
                             
            </div>

            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>olho Esquerdo </button>";?>
            <div id="olhoesq">
              <?php 
                $result_item16   = $pdo-> prepare("SELECT olhoesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item16 -> execute();
$resultado_item16 = $result_item16 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item16 as  $row_item16 ) {


     
               
                  echo "<img class='char' src=".$row_item16['olhoesq'].">";}
                  ?>
              
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>orelha Esquerda </button>";?>
            <div id="orelhaesq">
              <?php 
                $result_item17   = $pdo-> prepare("SELECT orelhaesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item17 -> execute();
$resultado_item17 = $result_item17 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item17 as  $row_item17 ) {


     
               
                  echo "<img class='char' src=".$row_item17['orelhaesq'].">";}
                  ?>
                      
            </div>
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Cabeça</button>";?>
            <div id="head">
                 <?php 
                $result_item12  = $pdo-> prepare("SELECT head FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item12 -> execute();
$resultado_item12 = $result_item12 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item12 as  $row_item12 ) {


     
               
                  echo "<img class='char' src=".$row_item12['head'].">";}
                  ?>
                       
                            
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Pescoço</button>";?>
            <div id="neck">
               <?php 
                $result_item18  = $pdo-> prepare("SELECT neck FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item18 -> execute();
$resultado_item18 = $result_item18 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item18 as  $row_item18 ) {


     
               
                  echo "<img class='char' src=".$row_item18['neck'].">";}
                  ?>
                             
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>peitoral</button>";?>
             <div id="peitoral">
              <?php 
                $result_item909  = $pdo-> prepare("SELECT peitoral FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item909 -> execute();
$resultado_item909 = $result_item909 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item909 as  $row_item909 ) {


     
               
                  echo "<img class='char' src=".$row_item909['peitoral'].">";}
                  ?>
                        
            </div>
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Asa direita</button>";?>
			 <div id="asadir">
        <?php 
                $result_item900  = $pdo-> prepare("SELECT asadir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item900 -> execute();
$resultado_item900 = $result_item900 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item900 as  $row_item900 ) {


     
               
                  echo "<img class='char' src=".$row_item900['asadir'].">";}
                  ?>
                                       
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>ombro direito </button>";?>
            <div id="ombrodir">
               <?php 
                $result_item902  = $pdo-> prepare("SELECT ombrodir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item902 -> execute();
$resultado_item902 = $result_item902 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item902 as  $row_item902 ) {


     
               
                  echo "<img class='char' src=".$row_item902['ombrodir'].">";}
                  ?>
                           
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>cotovelo direito </button>";?>
            <div id="cotovelodir">
               <?php 
                $result_item990  = $pdo-> prepare("SELECT cotovelodir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item990 -> execute();
$resultado_item990 = $result_item990 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item990 as  $row_item990 ) {


     
               
                  echo "<img class='char' src=".$row_item990['cotovelodir'].">";}
                  ?>
                             
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Mão direita </button>";?>
             <div id="handdir">
              <?php 
                $result_item991  = $pdo-> prepare("SELECT handdir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item991 -> execute();
$resultado_item991 = $result_item991 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item991 as  $row_item991 ) {


     
               
                  echo "<img class='char' src=".$row_item991['handdir'].">";}
                  ?>
                            
            </div>
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Asa Esquerda </button>";?>
			<div id="asaesq">
        <?php 
                $result_item907  = $pdo-> prepare("SELECT asaesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item907 -> execute();
$resultado_item907 = $result_item907 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item907 as  $row_item907 ) {


     
               
                  echo "<img class='char' src=".$row_item907['asaesq'].">";}
                  ?>
                               
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>ombro Esquerdo </button>";?>
            <div id="ombroesq">
              <?php 
                $result_item995  = $pdo-> prepare("SELECT ombroesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item995 -> execute();
$resultado_item995 = $result_item995 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item995 as  $row_item995 ) {


     
               
                  echo "<img class='char' src=".$row_item995['ombroesq'].">";}
                  ?>
                             
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>cotovelo Esquerdo </button>";?>
            <div id="cotoveloesq">
               <?php 
                $result_item11  = $pdo-> prepare("SELECT cotoveloesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item11 -> execute();
$resultado_item11 = $result_item11 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item11 as  $row_item11 ) {


     
               
                  echo "<img class='char' src=".$row_item11['cotoveloesq'].">";}
                  ?>
               
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'> Mão esquerda</button>";?>
             <div id="handesq">

              <?php 
                $result_item10  = $pdo-> prepare("SELECT handesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item10 -> execute();
$resultado_item10 = $result_item10 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item10 as  $row_item10 ) {


     
               
                  echo "<img class='char' src=".$row_item10['handesq'].">";}
                  ?>
                             

            </div>
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>cintura</button>";?>
            <div id="cintura">
             <?php 
                $result_item9  = $pdo-> prepare("SELECT cintura FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item9 -> execute();
$resultado_item9 = $result_item9 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item9 as  $row_item9 ) {


     
               
                  echo "<img class='char' src=".$row_item9['cintura'].">";}
                  ?>
                        
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>calda</button>";?>
            <div id="calda">
              <?php 
                $result_item8 = $pdo-> prepare("SELECT calda FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item8 -> execute();
$resultado_item8 = $result_item8 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item8 as  $row_item8 ) {


     
               
                  echo "<img class='char' src=".$row_item8['calda'].">";}
                  ?>
                         
            </div>
		</div>
		<div id="caixa0">
           <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>coxa direita</button>";?>
            <div id="coxadir">
              
             
              <?php 
                $result_item888  = $pdo-> prepare("SELECT coxadir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item888 -> execute();
$resultado_item888= $result_item888 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item888 as  $row_item888 ) {


     
               
                  echo "<img class='char' src=".$row_item888['coxadir'].">";}
                  ?>
                             
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>pé direito </button>";?>
             <div id="feetdir">
              <?php 
                $result_item6   = $pdo-> prepare("SELECT feetdir FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item6 -> execute();
$resultado_item6 = $result_item6 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item6 as  $row_item6 ) {


     
               
                  echo "<img class='char' src=".$row_item6['feetdir'].">";}
                  ?>
                              
            </div>
             
		</div>
		<div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>coxa Esquerda </button>";?>
            <div id="coxaesq">
              <?php 
                $result_item5   = $pdo-> prepare("SELECT coxaesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item5 -> execute();
$resultado_item5 = $result_item5 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item5 as  $row_item5 ) {


     
               
                  echo "<img class='char' src=".$row_item5['coxaesq'].">";}
                  ?>
                         
            </div>
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'>pé Esquerdo </button>";?>
             <div id="feetesq">
               <?php 
                $result_item4   = $pdo-> prepare("SELECT feetesq FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item4 -> execute();
$resultado_item4 = $result_item4 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item4 as  $row_item4 ) {


     
               
                  echo "<img class='char' src=".$row_item4['feetesq'].">";}
                  ?>
              
            </div>
             
		</div>
    <div id="caixa0">
            <?php echo "<button type='button' class='btn btn-outline-secondary btn-lg btn-block'> Cova  </button>";?>
            <div id="save">
              <?php 
                $result_item3   = $pdo-> prepare("SELECT save FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1' LIMIT 1");
$result_item3 -> execute();
$resultado_item3 = $result_item3 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item3 as  $row_item3 ) {


     
               
                  echo "<img class='char' src=".$row_item3['save'].">";}
                  ?>
                    
            </div>
            
            </div>
             
		</div>
    </div>



















	</body>
</html>