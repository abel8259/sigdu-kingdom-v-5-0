<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title> Cenários add </title>
		
		<style>
           
			.cen_box > p{
				float:left;
			}
	        .cen_box{
				border: 3px solid white;
				margin-bottom:2%; 
	        }

	        .text_cen_box{
				padding-left:1%; 			
	        }

	        .cen_box_title{
				border: 3px solid white;
				margin-bottom:2%; 
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
		    a{
		    	text-decoration: none;
		    	color:white;
		    } 
		     body{
            	background-color:black;
            	color:white; 
            }
		</style>
	
	</head>

	<body>
		<div class="links"> 
			<a class= "menu" href="../keypage/key_24.php">menu</a>
			<br>
			<a class= "voltar" href="../keypage/key_24.php">voltar</a>
			<br>
		</div>

		<div class="cen_box_title" >
			<p class="text_cen_box"> <b>Modo história:</b>  </p> 
		</div>
		<div class="cen_box" >
			<a href="hotel_golden_star/tela_01_cen.php"> <p class="text_cen_box"> <i>Começar </i> </p></a> 
		</div>
		<br/>
		<br/>
		<br/>
		<div class="cen_box_title" >
			<p class="text_cen_box"> <b> Save points : </b> </p> 
		</div>

	<?php 
		include('../login-cadastro/conexao.php');
		session_start(); 






$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"];  





         
$stmt = $pdo-> prepare( "SELECT * FROM localidads  WHERE char_localidad = '$name_1'");
$stmt-> execute();
$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );

foreach($result  as  $value ) {
          

          
                   
                     
                       echo "<a href=".$value['localidads_html']."><div class='cen_box'>";
       




$stmt2 = $pdo-> prepare( "SELECT * FROM inv_camada  WHERE dono_inv  = '$name_2' ORDER BY id_inv_cam LIMIT 1 ");
$stmt2-> execute();
$result2 = $stmt2-> fetchAll( PDO::FETCH_ASSOC );

foreach($result2  as  $value2) {
          echo "<td scope='row'><img src='".$value2['save']."'</td>";


          
                   
                     }
                       
       

      
      


echo " <p class='text_cen_box'> <i>".$value['localidad_local']." </i> </p>";
		echo "</div></a>";




        
          
          }
         
           
         ?>
    
    
 





















		
	</body>
</html>