<?php

session_start();
include('../login-cadastro/conexao.php');
include('key_12lutar.php');
$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 
$char = $_SESSION["char"];
				        $result_usuarios02 = "SELECT * FROM fichasuno WHERE ficha_nome = '$char'  ORDER BY ficha_nome DESC";
                        $resultado_usuarios02 = pg_query($conexao, $result_usuarios02);
                        $row_AMG = pg_fetch_assoc($resultado_usuarios02);
                        $ATK_F = $row_AMG['ficha_atk'];
				        $MAX_I = $_SESSION["MAX_I"];
                        $MAX_I = $MAX_I - $ATK_F*3;
				        $MAX_F  =$_SESSION["MAX_F"];
				        $MAX_F = $MAX_F - 50;
				        $_SESSION["MAX_F"]= $MAX_F;
				   
                      
				      

header("location:key_12lutar.php");
?>
 