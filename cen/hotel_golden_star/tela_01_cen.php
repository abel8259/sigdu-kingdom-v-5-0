<?php 
session_start();
include('../../login-cadastro/conexao.php');
 $local = "entrada do hotel golden star" ; 
 $name_1=$_SESSION["char"];


 $sql90=$pdo->prepare("INSERT INTO  localidads  ( localidad_id,  char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES(NULL, '$name_1','$local', '../cen/hotel_golden_star/tela_01_cen.php','../img_geral/LAPIDE-SEMINOVA-D.png')");
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
			<p class="text_cen_box"> Hotel Golden Star - Voc?? acabou de entrar num  hotel  muito  bonito e alto, por??m 
			muito descuidado. As janelas est??o danificadas e estilha??adas. As plantas est??o entrando 
			no pr??dio. S??o plantas verdes e de ra??zes bem fortes . H?? um balc??o e uma escada a direita.
			A escada est?? inacess??vel. Ao left a um segundo balc??o onde h?? algo brilhante jogado ao 
			canto. Em frente  ha duas portas parecidas comas portas de emerg??ncia de um hospital.
			Elas s??o velhas e tem  v??rios arranh??es parecendo ter vindo de algo grande.</p> 
		</div>

		

		
       <a href="tela_11_cen.php"/> 
		<div class="cen_box" >
			<p class="text_cen_box" > Analisar vidros;   </p> 
		</div></a> 
        <a href="tela_02_cen.php"> 
		    <div class="cen_box" >
			    <p class="text_cen_box" > falar com os zumbis;   </p> 
		    </div>		
        </a>
		 
		    <div class="cen_box" >
			    <p class="text_cen_box" > Ir at?? a coisa brilhante; <vermelho><b> !!!!!! </b></vermelho>  </p> 
		    </div>
	    

       
        
		<div class="cen_box" >
			<p class="text_cen_box"> Ir at?? a se??ao do elevador; </p> 
		</div>		

		<div class="cen_box" >
			<p class="text_cen_box" > verificar as escadas;  </p> 
		</div>

        <a href="tela_04_cen.php"> 
			<div class="cen_box" >
				<p class="text_cen_box"> Seguir em frente at?? as portas vermelhas; </p> 
			</div>
	    </a> 

        <a href="tela_04_cen.php"> 
			<div class="cen_box" >
				<p class="text_cen_box"> Sair do hotel; </p> 
			</div>
	    </a> 

	</body>
</html>