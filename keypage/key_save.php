<?php
session_start();

include('../login-cadastro/conexao.php');
 
$name_2 = $_SESSION["usuario"];

$name_1 = $_SESSION["char"];

$sql9  = "SELECT SUM (inv_atk)   FROM
    inventory  WHERE inv_dono = '$name_2'";
$result9 = pg_query($conexao,$sql9);
$row9 = pg_fetch_assoc($result9);
$atk = $row9['sum']; 
 

 $sql92  = "SELECT SUM (inv_def)   FROM
    inventory  WHERE inv_dono = '$name_2'";
$result92 = pg_query($conexao,$sql92);
$row92 = pg_fetch_assoc($result92);
$def= $row92['sum'];

$sql9234  = "SELECT SUM (inv_pw)   FROM
    inventory  WHERE inv_dono = '$name_2'";
$result9234 = pg_query($conexao,$sql9234);
$row9234 = pg_fetch_assoc($result9234);
$pw = $row9234['sum'];


$sql9235  = "SELECT SUM (inv_hp_max)   FROM
    inventory  WHERE inv_dono = '$name_2'";
$result9235 = pg_query($conexao,$sql9235);
$row9235 = pg_fetch_assoc($result9235);
$hp = $row9235['sum'];


$sql9236  = "SELECT SUM (inv_mp_max)   FROM
    inventory  WHERE inv_dono = '$name_2'";
$result9236 = pg_query($conexao,$sql9236);
$row9236 = pg_fetch_assoc($result9236);
$mp = $row9236['sum'];


$sql924  = "UPDATE fichasuno    SET ficha_atk  = $atk ,       ficha_def = $def,       ficha_pw = $pw,     ficha_hp_max = $hp,      ficha_mp_max = $mp   WHERE ficha_dono  = '$name_2' AND ficha_nome = '$name_1'  ";
$result9236 = pg_query($conexao,$sql924);

?>