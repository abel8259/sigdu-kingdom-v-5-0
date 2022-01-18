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
    $result_usuarios = "SELECT * FROM personagem  WHERE char_user = '$dono' ORDER BY `personagem`.`char_power` DESC LIMIT $inicio, $qnt_result_pg";
    $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
       echo "<form action='key_23_bck.php' method='POST'>";
      echo "<div class='buttoin'>";
            echo "<div class='card-content'>";
            echo "<div class='content'>";
          
       
         
            echo "<spam  name='char' id='p01'>Nome: </spam><spam  id='p02'>" .$row_usuario['char_nome']. "</spam><br>";
             echo "<input type='hidden' name='char' value=". $row_usuario['char_nome'] ."></input><br>";
            
      
      echo "<spam name='usuario' id='p01'>Criado por: </spam><spam  id='p02'>" . $row_usuario['char_user'] . "</spam><br>";
      echo "<input type='hidden' name='usuario' value=". $row_usuario['char_user'] ."></input><br>";
      echo "<input type='hidden' name='id-0' value=". $row_usuario['char_id'] ."></input><br>";
      
      echo "</div>";
            echo "</div>";
            echo "<div class='buttons'>";
        echo "<button class='button is-link'>Acessar</button>";
      echo "</div>";
            echo "</div>";

           
         
      echo "</form>";
           
    }
    //Paginção - Somar a quantidade de usuários
    $result_pg = "SELECT COUNT(char_id) AS num_result FROM personagem";
    $resultado_pg = mysqli_query($conexao, $result_pg)or die(mysqli_error($conexao));
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 2;

       echo "<div class='center'>";
       
        echo "<div class='pagination'>";
    
     echo " <a href='key_23.php?pagina=1'class='pagination-link' aria-label='Goto page 1'>Inicio</a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){

        echo "<a href='key_23.php?pagina=$pag_ant' class='pagination-previous'>$pag_ant</a> ";
      }
    }
     echo "<span class='pagination-ellipsis'>&hellip;</span>";
  
    echo "<a class='pagination-link is-current' aria-current='page'><b>Pagina atual:</b>   $pagina</a> ";
    
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<a href='key_23.php?pagina=$pag_dep'>$pag_dep</a> ";
      }
    }
    
    
     
  
    echo "<a href='key_23.php?pagina=$quantidade_pg' class='pagination-link' aria-label='Goto page 86'>Ultima</a>";

      echo "</div>";

        echo "</navdiv>";
    ?>   */ 