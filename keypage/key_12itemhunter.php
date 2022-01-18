<?php

session_start(); 
include('../login-cadastro/conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

   <!--básico-->  
            <meta charset="UTF-8"/>  
            <title>Item hunter;</title>
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
    .buttoin{
      border: 3px solid black ;

    }
    	body{
       position:relative;
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
    $result_usuarios = "SELECT * FROM shops  WHERE nome_da = 'Item_hunter' ORDER BY `shops`.`inv_gold` DESC LIMIT $inicio, $qnt_result_pg";
    $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
       echo "<form action='key_12enemy1_bck.php' method='POST'>";
      echo "<div class='buttoin'>";
            echo "<div class='card-content'>";
            echo "<div class='content'>";
          
       
         echo "<img src=".$row_usuario['inv_nome'].">";
            echo "<spam  name='char' id='p01'>ITEM: </spam><spam  id='p02'> " .$row_usuario['inv_nome_item']. "</spam><br>";
             echo "<spam  id='p01'>MODIFICADORES:</spam><spam  id='p02'> ".$row_usuario['inv_mod']."</spam><br>";
            
      echo "<spam  id='p01'> SLOTS:</spam><spam  id='p02'>".$row_usuario['inv_slots']."</spam><br>";
      echo "<spam name='usuario' id='p01'>GOLD:</spam><spam  id='p02'><b> ".$row_usuario['inv_gold'] . "</b></spam><br>";
      echo "<input name='gold' id='p01' type='hidden'value=".$row_usuario['inv_id']."></input>";
      echo "</div>";
            echo "</div>";
            echo "<div class='buttons'>";
        echo "<button class='button is-link'>Comprar</button>";
      echo "</div>";
            echo "</div>";

           
         
      echo "</form>";
           
    }
    //Paginção - Somar a quantidade de usuários
    $result_pg = "SELECT COUNT(inv_id) AS num_result FROM shops";
    $resultado_pg = mysqli_query($conexao, $result_pg)or die(mysqli_error($conexao));
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 2;

       echo "<nav class='pagination is-centered' role='navigation' aria-label='pagination'>";
        echo "<ul class='pagination-list'>";
    
     echo " <a href='key_12itemhunter.php?pagina=1'class='pagination-link' aria-label='Goto page 1'><li>1</li></a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){

        echo "<a href='key_12itemhunter.php?pagina=$pag_ant' class='pagination-previous'>$pag_ant</a> ";
      }
    }
     echo "<li><span class='pagination-ellipsis'>&hellip;</span></li>";
  
    echo "<li><a class='pagination-link is-current' aria-current='page'>$pagina</a></li> ";
    
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<a href='key_12itemhunter.php?pagina=$pag_dep'>$pag_dep</a> ";
      }
    }
    
    
     echo "<li><span class='pagination-ellipsis'>&hellip;</span></li>";
  
    echo "<a href='key_12itemhunter.php?pagina=$quantidade_pg' class='pagination-link' aria-label='Goto page 86'><li>Ultima</li></a>";
      echo "</ul>";
        echo "</nav>";
    ?>    
  </body>
</html>

<?php
  
  /* echo "<a class="pagination-next">Next page</a>"; */
 ?>
  
   
    

    
