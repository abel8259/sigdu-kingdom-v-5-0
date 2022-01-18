
<?php

session_start();
include('../login-cadastro/conexao.php'); 
$name_2 = $_SESSION["usuario"];

$name_1 = $_SESSION["char"]; 
$char = $_SESSION["char"];
$result_item = "SELECT * FROM inv_camada  WHERE dono_inv='$name_2' AND  user_inv='$name_1'";
$resultado_item = pg_query($conexao, $result_item);
$row_item = pg_fetch_assoc($resultado_item);

$bm = $_SESSION["battle_mana"];


$user = $_SESSION['usuario'];
$fotoinimigo = $_SESSION['foto_enm'];
$result_usuarios = "SELECT * FROM inventory  WHERE inv_DONO = '$user' AND  inv_nome='$fotoinimigo'";
    $resultado_usuarios = pg_query($conexao, $result_usuarios);
    $row_inim = pg_fetch_assoc($resultado_usuarios);
    
$result_usuarios04 = "SELECT * FROM inventory  WHERE inv_dono = '$user' AND  inv_nome='$fotoinimigo'";

$result_usuarios02 = "SELECT * FROM fichasuno WHERE ficha_nome = '$char'  ORDER BY ficha_nome DESC";
    $resultado_usuarios02 = pg_query($conexao, $result_usuarios02);
    $row_AMG = pg_fetch_assoc($resultado_usuarios02);
    
    $resultado_usuarios04 = pg_query($conexao, $result_usuarios04);
    $row_inim = pg_fetch_assoc($resultado_usuarios04);
   
    $MAX_I = $row_inim['inv_hp_max'];
$MAX_F = $row_AMG['ficha_mp_max'];

$_SESSION["MAX_F_MP"] = $row_inim['inv_mp_max'];
$REST_LIFE_F = $_SESSION["MAX_F"];
$REST_F_MP = $_SESSION["MAX_F_MP"];
$REST_LIFE_I = $_SESSION["MAX_I"];






				         
		                
						
						
						
                       
				      

				    







$MAX_F_MP = $row_AMG['ficha_mp_max'];
$REST_F_MP = $MAX_F_MP;
$REST_F_MP = $_SESSION["MAX_F"];
$def_I = $row_inim['inv_def'];
$NOME_I = $row_inim['inv_nome_item'];

   
$ATK_F = $row_AMG['ficha_atk'];
$ATK_I = $row_inim['inv_atk'];

 
if($_SESSION["battle_initial"] == "begin"):
$_SESSION["battle_initial"] = "process";
$REST_LIFE_I = $MAX_I;
$_SESSION["MAX_I"] = $MAX_I;
$REST_LIFE_F = $MAX_F;
$_SESSION["MAX_F"] = $MAX_F;
$REST_LIFE_I = $_SESSION["MAX_I"];
endif;



if($_SESSION["MAX_I"] > 0):
	$_SESSION["battle_initial"] = "process";
$REST_LIFE_I = $REST_LIFE_I - $ATK_F;
$_SESSION["MAX_I"] = $REST_LIFE_I;


endif;

if($REST_LIFE_I <= 0):
$_SESSION["battle_initial"]  = "finale";
header('location:key_12venceu.php'); 
endif;

if($bm == "ativo"):

$bm = "inativo";
endif;
$_SESSION["battle_mana"] = "inativo";


if($REST_F_MP < 0):
	$REST_F_MP = 0;
	echo "<p style='color:white'><b> Carregando Mana </b></p>";
endif;
?>

<!DOCTYPE html>
<html>

	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta charset="utf-8"/>  
		<title> Tela de luta - Battle </title>
	

    <style>
    	body{
    		background-image:url("../img_geral/PROTOTIPO DESIGN V3/fundo.png");  
    	}
    	.enemybox{
    		border:3px solid black ;
    		background-color:#ccc;
    		}
		th{
			border:2px solid black;
			text-align:center; 
		}
		td{
			border:2px solid black;
			text-align:center; 
		}
		tr{
			border:2px solid black ;
		}
		table{
			border:2px solid black ;	
			margin-top:7%;
			margin-left:32.7%;  		
		} 

		.pagmenu{
            border: 1px solid black;
            padding:7px;

		}
		.pagmenu:hover{
			background-color: grey;
			color:white; 
           
		}

		span{
			 cursor: pointer;
		} 

		div.pagination{
			margin-top:8%; 
			margin-left:37.5%; 
          
		}
		a.menu:link, a.menu:visited,a.menu02:link, 
		a.menu02:visited,a.menu03:link,
		 a.menu03:visited, a.voltar:link, a.voltar:visited {
		    background-color: #000;
		    border: 1px solid #000;
		    color: white;
		    display: inline-block;
		    padding: 14px 25px;
		    text-align: center;
		    text-decoration: none;
		    
		    width:100%;
	    }
        a.menu:hover, a.menu:active , 
        a.menu02:hover, a.menu02:active ,
        a.menu03:hover, a.menu03:active ,
         a.voltar:hover, a.voltar:active  {
	      background-color: #e0e0d1;
	      color: #000;
	    }


    .links{
    width:120px;
    }
    </style>
</head>
	<body>

		<div class="links"> 
			<a class= "menu" href="key_24.php">menu</a>
			<br>
			<a class= "voltar" href="key_18.php">voltar</a>
			<br>
		</div>

	<br>
		
		<div class="links"> 
			<a class= "menu02" href="key_12lutar.php">atacar </a>
			<br>
				<?php if($REST_LIFE_F > 0):
				    echo "<a class='menu03' href='key12lutarmana.php' >usar mana<br> <i>'atk extra'</i></h1></a>";
				endif;
				?>
			<br>
			<?php if($REST_LIFE_F <= 0):
			echo "<a class= 'menu03' href='key_12restore.php'>restaurar mana</a>";
			endif;
				?>
			<br>
		</div>


		
     <?php
        echo "<img style='border-radius:50% ; border : 9px solid #ccc; background-color:grey;' src=".$_SESSION['foto_enm'].">";
        $ind = $REST_LIFE_I * 1337 / $MAX_I;
       
     ?>
        <div class="enemybox"> 

	        <label for="w3-container"><?php
	        echo $name_1; ?>
	        	
	        </label>


			<div class="w3-border">     

			  <div class="w3-container w3-margin w3-red" style="height:24px;width:"<?php echo "$ind";?>"><h1 class="w3-text-red" style="text-shadow:1px 1px 0 #444">
			  HP:<b><?php
			        echo "$REST_LIFE_I"; ?></b></h1></div>
			<br>
			</div>

			<div class="w3-border">     

			  <div class="w3-container w3-margin w3-blue" style="height:24px;width:<?php echo "$ind02";?>">
			  	<h1 class="w3-text-red" style="text-shadow:1px 1px 0 #444">
			  MP:
			  <b>
			  	<?php
			        echo "$REST_MP_I"; ?>
			        	
			        </b>
			    </h1>
			</div>
			<br>
	
		<div class="w3-light">
		  <div class="w3-container w3-blue w3-center" style="width:75%"></div>
		</div><br>
		
		 
        <?php echo "<img style='border-radius:50% ; border : 9px solid white; background-color:grey;' class='char'src=".$row_item['head'].">";
        $ind03 = $REST_LIFE_F*1337/$MAX_F;
        $ind04 = $REST_F_MP*1337/$MAX_F_MP;
     ?>
        <div class="enemybox"> 

	        <label for="w3-container"><?php
	        echo "Player: <b>$name_1</b>"; ?>
	        	
	        </label>


			<div class="w3-border">     

			  <div class="w3-container w3-margin w3-blue" style="height:24px;width:<?php echo "$ind04";?>">
			  	<h1 class="w3-text-red" style="text-shadow:1px 1px 0 #444">
			  MP:
			  <b>
			  	<?php
			        
			        echo "$REST_LIFE_F /";
			        echo "$MAX_F_MP"; ?>
			        	
			        </b>
			    </h1>
			 </div>
			 <br>
		  </div>
	    </div>
		
		<div class="w3-light">
		  <div class="w3-container w3-blue w3-center" style="width:75%"></div>
		</div><br>



<?php

unset($_SESSION['mana-click']);
	

$ATK_F = $row_AMG['ficha_atk'];
	?>

		
	</body>
</html>
