<?php

session_start(); 
include('../login-cadastro/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

   <!--básico-->  
            <meta charset="UTF-8"/>  
            <title>Menu de chars ;</title>
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

 
  </head>

  <body>



<div class="container-show">
  
<table class="table table-dark">
  <thead>
    <tr>
     
    
      <th scope="col">Personagem</th>
      <th scope="col">Elmo</th>
      <th scope="col">Localidade</th>
      <th scope="col">Xp</th>
     
    </tr>
  </thead>
  <tbody>
    
  <?php

   
    $dono = $_SESSION['usuario'];
   
   





     
     
 
    
//Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Setar a quantidade de itens por pagina
    $qnt_result_pg = 10;
    
    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;














       
     
           

       

         
$stmt = $pdo-> prepare( "SELECT * FROM fichasuno  order by ficha_id  desc LIMIT $qnt_result_pg OFFSET $inicio ");
$stmt-> execute();
$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );

foreach($result  as  $value ) {
         

 $char= $value['ficha_nome'];
 $uss = $value['ficha_dono'];



          
                   
                  
          echo "<tr>";
          echo "<td scope='row'>".$value['ficha_nome']."</td>";   
                       
         



$stmt2 = $pdo-> prepare( "SELECT * FROM inv_camada WHERE dono_inv = '$uss' AND user_inv = '$char' ORDER BY id_inv_cam desc LIMIT 1 ");
$stmt2-> execute();
$result2 = $stmt2-> fetchAll( PDO::FETCH_ASSOC );

foreach($result2  as  $value2) {
  
           
      
          echo "<td><img src='".$value2['head']."'/></td>";


          
                   
                     
                       
   
         
      $stmt3 = $pdo-> prepare("SELECT * FROM localidads  WHERE char_localidad = '$char' ORDER BY localidad_id DESC LIMIT 1");
$stmt3-> execute();
$result3 = $stmt3-> fetchAll( PDO::FETCH_ASSOC );

foreach($result3  as  $value3) {
       





         
         echo "<td scope='row'>".$value3['localidad_local']."</td>";




            
           }
          
          
          


        
    


   














       
         

        



         
           
          
          
        }
             echo "<td>". $value['ficha_xp']."</td>";

         echo "</tr>";
    }  
           
      


 
  echo "</tbody>";
   
    
echo "</table>";


































 $result_pg= $pdo-> prepare( "SELECT COUNT(*) AS num_result FROM fichasuno   order by ficha_id ");
$result_pg-> execute();
$resultado_pg = $result_pg-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_pg as   $row_pg ) {      
    
     //Paginção - Somar a quantidade de usuários
    
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 3;

       echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination justify-content-center'>";
    
     echo " <a href='key_4732.php?pagina=1'class='page-link' aria-label='Goto page 1'>1</a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){

        echo "<li class='page-item'><a class='page-link' href='key_4732.php?pagina=$pag_ant' > Prev:".$pag_ant."</a></li>";
      }
    }
     
  
    echo "<li class='page-item'><a class='page-link' aria-current='page'>Pagina local: ".$pagina." </a></li> ";
    
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<li class='page-item'><a class='page-link' href='key_4732.php?pagina=$pag_dep'>$pag_dep</a> ";
      }
    }
    
    
     

    echo "<li class='page-item'><a class='page-link' href='key_4732.php?pagina=$quantidade_pg' class='page-link' aria-label='Goto page 86'>Ultima</a></li>";
      echo "</ul>";
        echo "</nav>";
  
  }
 
 











    ?>    

 
  
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <a href="key_24.php" > <button type="button" class="btn btn-secondary">voltar </button></a>
  

  
</div>


</div>


    
  </body>
</html>


  
   
    

    
