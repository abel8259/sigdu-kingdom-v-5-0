<!--ALGORITMO:-ESTRUTURA-LOGIN-IN----> 
<!--PARA:-PROJETO-R-S---------------->   
<!--COMENTÁRIOS:-PADRÕES-DE-PROJETO-->
<!--LANG:-HTML-ESTRUTURA------------->
<!--DESIGNER-IDEA:-ABEL-BARBOSA------>
<!--ADAPTAÇÃO:-ABEL-BARBOSA---------->

	<!--INICIO-->

		<!DOCTYPE html>
			<html>
		        <!--SESSION-START-->
					<?php 

					session_start(); 

					?>
				<!---->
			<head>


				    <!--básico-->  
					    <meta charset="UTF-8"/>  
						<title>SIGDU KINGDOM - Cadastro </title>
						<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
					<!---->


					<!--inclusão de css-->
					    <link rel="preconnect" href="https://fonts.gstatic.com">
			            <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
			            <link rel="stylesheet" type="text/css" href="../css/cadastro_2.css"/>
				    <!---->


					<!--tags para SEO-->
						<meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
						<meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg, soulslike"/>
						<meta name="author" content="rock studios"/>   
					<!---->
					
			</head>





			<body>

				<!--CODIGO-DE-ERRO-->
				    <?php 
				        if(isset($_SESSION['nao-autenticado'])):
				    ?>

				        <div class="notification is-success">
				            <p>ERRO: Usuário ou senha inválidos.</p>
				        </div>
				                     
				    <?php
				        endif;
				        unset($_SESSION['nao-autenticado']);
				    ?>
                <!---->


<!--CODIGO-DE-ERRO-->
				    <?php 
				        if(isset($_SESSION['usuario_existe'])):
				    ?>

				        <div class="notification is-success">
				            <p>ERRO: USUARIO EXISTE .</p>
				        </div>
				                     
				    <?php
				        endif;
				        unset($_SESSION['usuario_existe']);
				    ?>
                <!---->


				<!--CODIGO-DE-ERRO-->
				    <?php 
				        if(isset($_SESSION['status_cadastro'])):
				    ?>

				        <div class="notification is-success">
				            <p>ERRO: Usuário nop cadastrado com sucesso.</p>
				        </div>
				                     
				    <?php
				        endif;
				        unset($_SESSION['status_cadastro']);
				    ?>
                <!---->



			
			    <form id="form55" action="cadastrar.php"  method="POST">
					<div class="login-box">
						<span>Cadastro:</span>
					</div> 

					<input class="user55" type="text" name="user4_9">
                    <div class="clear"></div> 

					

	                <div class="senha-box">
						<span>SENHA:</span>
					</div> 
					<div class="clear"></div> 

	                <input class ="pass55" type="password" name="pass4_9">

	                <div class="clear"></div>
                    
	                <button id="button55" type="submit"><p><b>ENTRAR</b></p></button>
			   </form>
            
            <img src="../img_geral/PROTOTIPO DESIGN V3/Sin título-1.png" class="img-logo"  />

			<!--
			<form id="form55" action="login.php"  method="POST">
				<p><b>Usuário: </b></p> 
				<input id="user55" type="text" name="user4_9">
				<p><b>Senha: </b></p> 
				<input id="pass55" type="password" name="pass4_9">
				<button id="button55" type="submit">login</button>
			</form>-->

            <!--
			<a href="cadastro.php"> <p id="p55"><b><strong>Se juntar ao jogo. Cadastro </strong> </b></p> </a> 
			<a href="../index.php"> <p id="p55"><b><strong>Tela inicial. Home</strong> </b></p> </a> 
            -->

			</body>


		</html>


	<!---->


<!---->
