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
      <th scope="col">Level</th>
      <th scope="col">Elmo</th>
      <th scope="col">Personagem</th>
      <th scope="col">Dono</th>
      <th scope="col">Escolher</th>
    </tr>
  </thead>
  <tbody>
    
  
    <?php

   
    $dono = $_SESSION['usuario'];
    $result_usuarios = "SELECT * FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc  ";
   





     
     
 














       echo "<form action='key_23_bck.php' method='POST'>";
     
           

          echo "<tr>";

         
$stmt = $pdo-> prepare( "SELECT * FROM fichasuno  WHERE ficha_dono  = '$dono' order by ficha_id desc ");
$stmt-> execute();
$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );

foreach($result  as  $value ) {
          echo "<td scope='row'>".($value['ficha_xp']/100)."</td>";


          
                   
                     
                       
       




$stmt2 = $pdo-> prepare( "SELECT * FROM inv_camada  WHERE dono_inv  = '$dono' ORDER BY id_inv_cam LIMIT 1 ");
$stmt2-> execute();
$result2 = $stmt2-> fetchAll( PDO::FETCH_ASSOC );

foreach($result2  as  $value2) {
          echo "<td scope='row'><img src='".$value2['head']."'</td>";


          
                   
                     }
                       
       

          echo "<td>" .$value['ficha_nome']. "</td>";
      
          echo "<td>" . $value['ficha_dono'] . "</td>";
      







            
           echo "<td><button type='submit' class='btn btn-secondary'>Entrar</button></td>";
           echo "<input type='hidden' name='char' value=". $value['ficha_nome'] ."></input>";
           echo "<input type='hidden' name='usuario' value=". $value['ficha_dono'] ."></input>";
           echo "<input type='hidden' name='id-0' value=". $value['ficha_id'] ."></input>";
           echo "</tr>";
          
          }
         
           echo "</form>";
         
    
    
  
  echo "</tr>";
  echo "</tbody>";
echo "</table>";


    ?>    

 
  





</div>


    
  </body>
</html>


  
   
    

    
