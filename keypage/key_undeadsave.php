<?php 
session_start();



include('../login-cadastro/conexao.php');

$char =$_SESSION["char"]; 
$dono = $_SESSION["usuario"];

?>

<!DOCTYPE html>



<html lang="en">
<head>
<!--básico-->  
            <meta charset="UTF-8"/>  
            <title>Ascendência</title>
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
        <!---->
<style>
  	body{position:relative;}
    .button {
      position:absolute;
      padding: 5% 7%;
      text-align: center;
      font-size: 16px;
      background-color: black ;
      color: white;
      border: 2px solid white;
    }


    p:hover {
      background-color: #555555;
      
    }

    img:hover{
    	box-shadow: 0 0 2px 1px #000;
      border: 1px solid #000;
      border-radius: 4px;
      padding: 5px;
    }


    #caixao{
    	position:absolute;
      margin-top:0.25%;
      margin-left:10%;
      width: 22%;

    }

 

    #salvar {
      margin-top:6%;
      margin-left:33%;
      padding-right: 28%;
    }
 #caixao2{
      position:absolute;
      margin-top:20%;
      margin-left:-5%;
      width: 22%;

    }

 

    #salvar2 {
      margin-top:25%;
      margin-left:33%;
      padding-right: 28%;
    }



    a.pg1{
         margin-left:72%;
         margin-top:2%;
         position:absolute; 
       }
       
       a.pg1:link, a.pg1:visited {
      background-color: black ;
      color: white;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border: 1px solid white;
    }

    a.pg1:hover, a.pg1:active {
      background-color: #e0e0d1;
      color: #000;
    }

    body{
      background-color: black ; 
    }

    p{color:white;}

    @media screen and (max-width: 720px ){

     #caixao {
      position:relative ;
      margin-top:1%;
      margin-left:33%;
      width: 33%;

    }

   

    #salvar{
     position:relative ;
      top:5%;
      margin-left:28vw; 
       width: 12vw;
       margin-right:0; 
    }

 #caixao2 {
      position:relative ;
      margin-top:1%;
       margin-left:33%;
      width: 33%;

    }

   

    #salvar2{
     position:relative ;
      top:5%;
      margin-left:28vw; 
       width: 12vw;
       margin-right:0;  
    }
    a.pg1{
         margin-right:0%;
         margin-top:2%;
         position:absolute; 
       }
    } 

</style>
<meta charset="UTF-8"/>  
</head>

<body>
   <?php 
                $result_item3   = $pdo-> prepare("SELECT save FROM inv_camada  WHERE dono_inv='$dono' AND  user_inv='$char' LIMIT 1");
$result_item3 -> execute();
$resultado_item3 = $result_item3 -> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_item3 as  $row_item3 ) {


     
               
                  echo "<img id='caixao' src=".$row_item3['save'].">";}
                  ?>
 
   
   
   <a href="key_uso.php"> <p id="salvar2" class="button"> customizar save  </p></a>
    <a class= "pg1" href="key_24.php">menu principal</a>
</body>
</html>