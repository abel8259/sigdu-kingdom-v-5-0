<?php 
session_start();
include('../../login-cadastro/conexao.php');
 $local = "falando com zumbi" ; 
 $name_1=$_SESSION["char"]; 
 $sql90=$pdo->prepare("INSERT INTO  localidads  ( localidad_id,  char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES(NULL, '$name_1','$local', '../cen/hotel_golden_star/tela_03_cen.php','../img_geral/LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();


 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title> PoRTAO </title>
		
		<style>
			body{
    		background-image:url("../../img_geral/PROTOTIPO DESIGN V3/fundo.png");  
    	}
           a{
           	text-decoration: none;
           	color:black;
           } 
	       .cen_box{
				border: 3px solid black;
				margin-bottom:2%; 
				cursor:pointer;
				background-color:#666666; 
	        }

	        .text_cen_box{
				padding-left:1%; 			
	        }

	        .cen_box_title{
				border: 3px solid black;
				margin-bottom:2%; 
				background-color: #333333;
				
				font-weight:bold;
	        }
	        .cen_box:hover {
			  background-color: #555555;
			  color:white;

			}
            a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited {
			    background-color: #000;
			    border: 1px solid #000;
			    color: white;
			    display: inline-block;
			    padding: 14px 25px;
			    text-align: center;
			    text-decoration: none;
			    
			    width:100%;
		    }

		    a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active  {

		      background-color: #e0e0d1;
		      color: #000;
		    }


		    .links{
			    width:120px;
			    margin-bottom:2%; 
		    }
		    vermelho{
		    	color:red;
		    }
		</style>
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>
		<div class="links"> 
			<a class= "menu" href="../../keypage/key_24.php">menu</a>
			<br>
			<a class= "voltar" href="../cen_add.php">voltar</a>
			<br>
			<a class= "voltar" href="tela_01_cen_map.php">Mapa</a>
			<br>
		</div>

		<div class="cen_box_title" >
		<p class="text_cen_box"> MENU ALBUN </p> 
			<p class="text_cen_box"> O zumbi olha rapidamente pra você e perguntar: no que posso ajudar?</div>
       
        <a href="tela_05_cen.php"> 
		<div class="cen_box" >
			<p class="text_cen_box" >  Como posso ter acesso as portas de trás?      </p> 
		</div></a>
        <a href="tela_06_cen.php"> 
		<div class="cen_box" >
			<p class="text_cen_box" >Onde está o porteiro?   </p> 
		</div></a>


        <div class="cen_box" >
			<p class="text_cen_box" >Por que as escadas estão interditadas? </p> 
		</div></a>

        <a href="tela_02_cen.php"> 
        <div class="cen_box" >
			<p class="text_cen_box" >Voltar ao balcão </p> 
		</div></a>
        </a>
	</body>
</html>