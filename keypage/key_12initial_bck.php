<?php

session_start(); 
include('../login-cadastro/conexao.php');
 
$_SESSION["inv_id"] =$_POST["inv-id"];

$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 
$inv_id = $_SESSION["inv_id"];
$result_usuarios = "SELECT * FROM shops  WHERE inv_id = '$inv_id'";
$resultado_usuarios = pg_query($conexao, $result_usuarios);



$row_item= pg_fetch_assoc($resultado_usuarios);

$DONO=$name_2;
$_SESSION["gold_cust"] = $_POST["gold"];
$gol=$_SESSION["gold_cust"];
 

$sql14 = "SELECT * FROM currencies WHERE currencies_dono ='$name_1' AND currencies_nome = '$name_2'";
$result14 = pg_query($conexao,$sql14);



$row14 = pg_fetch_assoc($result14);
$goldc = $row14['currencies_gold'];

$gold_t= ($goldc - $gol);

if($gold_t>=0){
$atk = $row_item['inv_atk'];
$capacidade =$row_item['inv_capacidade'];
$cod_1=$row_item['inv_cod_1'];
$cod_2=$row_item['inv_cod_2'];
$cod_3=$row_item['inv_cod_3'];
$cod_final=$row_item['inv_cod_final'];
$def=$row_item['inv_def'];

$gold=$row_item['inv_gold'];
$hp_max =$row_item['inv_hp_max'];
$hp_min=$row_item['inv_hp_min'];
$id=$row_item['inv_id'];
$kit=$row_item['inv_kit'];
$loot=$row_item['inv_loot'];
$mod=$row_item['inv_mod'];
$mp_max=$row_item['inv_mp_max'];
$mp_min=$row_item['inv_mp_min'];
$nome=$row_item['inv_nome'];
$nome_item=$row_item['inv_nome_item'];
$pw=$row_item['inv_pw'];
$shop=$row_item['inv_shop'];
$slots=$row_item['inv_slots'];
$tipo=$row_item['inv_tipo'];
$type=$row_item['inv_type'];
$da=$row_item['nome_da'];
























$sql13 = "INSERT INTO inventory(
inv_atk,
inv_capacidade,
inv_cod_1,
inv_cod_2,
inv_cod_3,
inv_cod_final,
inv_def,
inv_dono,
inv_gold,
inv_hp_max,
inv_hp_min,
inv_kit,
inv_loot,
inv_mod,
inv_mp_max,
inv_mp_min,
inv_nome,
inv_nome_item,
inv_pw,
inv_shop,
inv_slots,
inv_tipo,
inv_type,
nome_da) 
VALUES(
'$atk',
'$capacidade',
'$cod_1',
'$cod_2',
'$cod_3',
'$cod_final',
'$def',
'$name_2',
'$gold',
'$hp_max ',
'$hp_min',
'$kit',
'$loot',
'$mod',
'$mp_max',
'$mp_min',
'$nome',
'$nome_item',
'$pw',
'$shop',
'$slots',
'$tipo',
'$type',
'$da')";
$result17 = pg_query($conexao,$sql13);
var_dump($gold_t);


$sql = " UPDATE currencies SET Currencies_gold = $gold_t WHERE currencies_DONO ='$name_1' AND currencies_nome = '$name_2'";

$result20 = pg_query($conexao,$sql);
};
header("location:key_24.php"); 


?>