<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>  
		<title> Tela 22 - Histórico </title>
	</head>

    <style>
		th{
			border:2px solid black;
			text-align:center; 
		}
		td{
			border:2px solid black;
			text-align:center; 
		}
		tr{
			border:2px solid black ;
		}
		table{
			border:2px solid black ;	
			margin-top:7%;
			margin-left:32.7%;  		
		} 

		.pagmenu{
            border: 1px solid black;
            padding:7px;

		}
		.pagmenu:hover{
			background-color: grey;
			color:white; 
           
		}

		span{
			 cursor: pointer;
		} 

		div.pagination{
			margin-top:8%; 
			margin-left:37.5%; 
          
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

	<body>
			<div class="links"> 
			<a class= "menu" href="key_24.php">menu</a>
			<br>
			<a class= "voltar" href="key_18.php">voltar</a>
			<br>
		</div>

	<br>
		
		



<table>
			 <thead>
			 	<tr>
					<th> no. </th>
					<th> nome </th>
					<th> valor </th>
					<th> descrição </th>
				</tr>
			 </thead>
 <tbody>
			 	

		<?php
		session_start(); 
		include('../login-cadastro/conexao.php');
		$id= $_SESSION['id-char'];
		
		
		
		
		
		$sql0 = "SELECT * FROM fichasuno
		 WHERE ficha_id ='$id'";
		  $result0 = mysqli_query($conexao,$sql0);
		$row0 = mysqli_fetch_assoc($result0);
		$user_1 = $row0["ficha_DONO"];
        $name_1 = $row0["ficha_nome"];
		
		
		
		
      /* 
		$result_usuarios =;
$result = $conexao->query($result_usuarios);
while($row_usuario = mysqli_fetch_array($result)){

var_dump($row_usuario); 


  			 	
				
    
        echo "<td >".$row_usuario['history_hist_id']."</td>";
        echo "<td >".$row_usuario['history_hist_nome']."</td>";
        echo "<td >".$row_usuario['history_hist_valor']."</td>";
        echo "<td >".$row_usuario['history_hist_desc']."</td>";
        
        

   

 

 echo "</tr>";
*/









	
		
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 10;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios ="SELECT * FROM history_hist WHERE history_hist_DONO='$user_1' AND  history_hist_char ='$name_1'   LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
		echo "<tr>";
		echo "<td >".$row_usuario['history_hist_id']."</td>";
        echo "<td >".$row_usuario['history_hist_nome']."</td>";
        echo "<td >".$row_usuario['history_hist_valor']."</td>";
        echo "<td >".$row_usuario['history_hist_desc']."</td>";
        echo "</tr>";
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(history_hist_id) AS num_result FROM history_hist";
		$resultado_pg = mysqli_query($conexao, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listar.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='key_22.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='key_22.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='key_22.php?pagina=$quantidade_pg'>Ultima</a>";
		
		


		?>

	
   
	
		

		 
      
	

	</body>

	<!--
<script type="text/javascript" src="script.js"></script>-->


</html>