<?php

session_start(); 
include('../login-cadastro/conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

   <!--básico-->  
            <meta charset="UTF-8"/>  
            <title> Util;</title>
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

  <link rel="stylesheet" href="css/styles.css?v=1.0"> 
  <style>

img{
  width:86px;
  height:95px;
}
.center {
    
  text-align: center;
}

.pagination {
  display: inline-block;
}
.button{
 text-decoration: none;
 border: 3px solid black;
 color:white;
 background-color:black; 
 margin-left:3px;
 margin-bottom:3px;
 padding:5px;   
 cursor:pointer;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;

}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
    .venda_box{
      border:3px solid black;
      margin:5px;
      float: left;
      padding:9px;
    }
    .textbox{
      border:3px solid black;
      margin:5px;
      float: left;
      padding:3px; 
    }
    .image_inv01{
      border:3px solid black;
      margin:5px;
      float: left;  
    }
    .letras01{
      font-size:20px;
      font-weight:bold;
    }
    .buttoin{
      border: 3px solid black ;

    }
    	body{
       position:relative;
  	}

    div.clear{
      clear:both; 
    }  
  	
   
   img:hover {
  box-shadow: 0 0 2px 1px #000;
  border: 1px solid #000;
  border-radius: 4px;
  padding: 5px;
}


  #img01{
  	position:absolute;
  	margin-top:1%;
  	margin-left:18%; 

  }  

  #img02{
  	position:absolute;
  	margin-top:8.5%;
  	margin-left:18%; 

  } 
  #img03{
  	position:absolute;
  	margin-top:16%;
  	margin-left:18%; 

  }  
  #img04{
  	position:absolute;
  	margin-top:1%;
  	margin-left:57%; 

  }  
  #img05{
  	position:absolute;
  	margin-top:8.5%;
  	margin-left:57%; 

  } 
  #img06{
  	position:absolute;
  	margin-top:16%;
  	margin-left:57%; 

  } 
  h1{
  	margin-top:7%;
  	margin-left:18%;
  	margin-right:18%;
    border: 1px solid #000;
    text-align: center; 
  }

  a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited {
    background-color: #000;
    border: 1px solid #000;
    color: white;
    display: inline-block;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    
    width:100%;
    }

   a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active  {
      background-color: #e0e0d1;
      color: #000;
    }


    .links{
    width:120px;
    }
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin:3px; 
  border:2px solid black ;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgb(40,40,40)  ;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before   {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white ;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider   {
  background-color: black ;
}

input:focus + .slider {
  box-shadow: 0 0 1px black ;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round  {
  border-radius: 34px;
}

.slider.round:before   {
  border-radius: 50%;
}
.container {
  margin:10px;
}
.submit_menu{
 text-decoration: none;
 border: 3px solid black;
 color:white;
 background-color:black; 
 margin-left:3px;
 margin-bottom:3px;
 padding:5px;   
 cursor:pointer;
}
}
  </style>

  </head>

  <body>


  
  
  <div class="links">
  <a class= "menu" href="key_24.php">menu</a>
<br>
  <a class= "voltar" href="key_12inventory.php">voltar</a>
<br>
</div>


    </a><br>
    
    




    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    $user = $_SESSION['usuario'];
   
    $dono = $_SESSION['usuario'];







$result_usuarios = $pdo-> prepare( "SELECT * FROM inventory  WHERE inv_dono = '$user' ORDER BY inv_gold DESC");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios  as  $row_usuario ) {





      echo "<div class='container'>";
       echo "<form action='key_uso_back.php' method='POST'>";
      echo "<div class='buttoin'>";
         "<div class='card-content'>";
          echo "<div class='content'>";
          
            

              echo "<img class='image_inv01'  src=".$row_usuario['inv_nome'].">";



              echo "<br/>";



                echo "<div class='textbox'>";
                  echo "<spam  name='char' id='p01'><b>ITEM:</b> </spam><spam  id='p02'> " .$row_usuario['inv_nome_item']. "</spam><br>";
                  echo "<spam  id='p01'><b>MODIFICADORES:</b> </spam><spam  id='p02'> ".$row_usuario['inv_mod']."</spam><br>";
                  echo "<spam  id='p01'> <b>SLOTS:</b></spam><spam  id='p02'>".$row_usuario['inv_slots']."</spam><br>";
                  echo "<spam name='gold' id='p01'><b>GOLD:</b> </spam><spam  id='p02'><b> ".$row_usuario['inv_gold'] . "</b></spam><br>";
                  echo "<input name='nome' id='p01' type='hidden' value='".$row_usuario['inv_nome']."'></input>";
                 echo "<input class='submit_menu' type='submit' value='usar'>";
                echo "</div>";


               

            echo "</div>";

              echo "<br/>";


             
                echo "<div class='clear'></div>";
              echo "</div>";
      


            echo "</form>";
          echo "</div>"; 
        echo "</div>";   
      }
      

   
    ?>  
  </body>
</html>

   
    

    


