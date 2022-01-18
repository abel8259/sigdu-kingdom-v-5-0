
<?php

session_start(); 
include('../login-cadastro/conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

   <!--básico-->  
            <meta charset="UTF-8"/>  
            <title> SHOP ENEMY LV1;</title>
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
           <link rel="stylesheet" href="../css/key_23.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <!---->

  <link rel="stylesheet" href="css/styles.css?v=1.0"> 
  <style>
    .buttoin{
      border: 3px solid black ;

    }
    	body{
       position:relative;
       background-color:black; 
       color:white;
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
     
     img{
      width:200px;
          height:auto ;
      
    }
  </style>

  </head>

  <body>


  
  
  <div class="links">
  <a class= "menu" href="key_24.php">menu</a>
<br>
  <a class= "voltar" href="key_473.php">voltar</a>
<br>
</div>


    </a><br>
    
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../img_geral/npcs2/darker2.png" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> Bosses radiant star </h5>
        <p class="card-text"> Conjunto de bosses para lutar nas horas enfatídicas</p>
        
      </div>
    </div>
  </div>
</div> 

<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Elmo</th>
      <th scope="col">personagem</th>
      <th scope="col">atk</th>
      <th scope="col">defesa</th>
       <th scope="col">poder</th>
       <th scope="col">gold</th>
      <th scope="col">Escolher</th>
    </tr>
  </thead>
  <tbody>
    




    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    
    //Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Setar a quantidade de itens por pagina
    $qnt_result_pg = 10;
    
    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    $dono = $_SESSION['usuario'];
  




$stmt6= $pdo-> prepare( "SELECT * FROM shops  WHERE nome_da = 'Radiant_Star' ORDER BY  shops . inv_id  desc LIMIT $qnt_result_pg OFFSET $inicio");
$stmt6-> execute();
$result6 = $stmt6-> fetchAll( PDO::FETCH_ASSOC );

foreach($result6 as  $value6) {
         


                   
                    








echo "<form action='key_12enemy1_bck.php' method='POST'>";
      echo "<div class='buttoin'>";
            echo "<div class='card-content'>";
            echo "<div class='content'>";
     
           

          echo "<tr>";
          
          echo "<td><img style='width:40px;height:40px' src=".$value6['inv_nome']."></td>";

          echo "<td>" .$value6["inv_nome_item"]. "</td>";
      
          echo "<td>" . $value6['inv_atk'] . "</td>";
      

          echo "<td>" . $value6['inv_def'] . "</td>";



          echo "<td>" . $value6['inv_pw'] . "</td>";

         echo "<td>" . $value6['inv_gold'] . "</td>";
         echo "<input name='inv-id' id='p01' type='hidden'value=".$value6['inv_id']."></input>";
          echo "<input name='gold' id='p01' type='hidden'value=".$value6['inv_gold']."></input>";
 echo "<td><button type='submit' class='btn btn-warning'>Comprar</button></td>";

 echo "</div>";
            echo "</div>";
            echo "<div class='buttons'>";
       
      echo "</div>";
            echo "</div>";

           
         
      echo "</form>";
            
        
         










 }














     $result_pg= $pdo-> prepare( "SELECT COUNT(inv_id) AS num_result FROM shops WHERE nome_da = 'Radiant_Star'  ");
$result_pg-> execute();
$resultado_pg = $result_pg-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_pg as   $row_pg ) {      
    
     //Paginção - Somar a quantidade de usuários
    
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 2;

       echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination justify-content-center'>";
    
     echo " <a href='key_12radiantstar.php?pagina=1'class='page-link' aria-label='Goto page 1'>1</a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){

        echo "<li class='page-item'><a class='page-link' href='key_12radiantstar.php?pagina=$pag_ant' > Prev:".$pag_ant."</a></li>";
      }
    }
     
  
    echo "<li class='page-item'><a class='page-link' aria-current='page'>Pagina local: ".$pagina." </a></li> ";
    
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<li class='page-item'><a class='page-link' href='key_12radiantstar   .php?pagina=$pag_dep'>$pag_dep</a> ";
      }
    }
    
    
     

    echo "<li class='page-item'><a class='page-link' href='key_12radiantstar.php?pagina=$quantidade_pg' class='page-link' aria-label='Goto page 86'>Ultima</a></li>";
      echo "</ul>";
        echo "</nav>";
  
  
 
 
}
 ?>
  
     </body>
</html>

    

    
