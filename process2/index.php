<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title> PoRTAO v1.2</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style>
			body{
    		background-image:url("../../img_geral/PROTOTIPO DESIGN V3/fundo.png");  
    	}
           a{
           	text-decoration: none;
           	color:black;
		   
           } 
			
			
	       .cen_box{
				border: 3px solid black;
				margin-bottom:2%; 
				cursor:pointer;
				background-color:#666666; 
	        }

	        .text_cen_box{
				padding-left:1%; 			
	        }

	        .cen_box_title{
				border: 3px solid black;
				margin-bottom:2%; 
				background-color: #333333;
				
				font-weight:bold;
	        }
	        .cen_box:hover {
			  background-color: #555555;
			  color:white;

			}
            a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited {
			    background-color: #000;
			    border: 1px solid #000;
			    color: white;
			    display: inline-block;
			    padding: 14px 25px;
			    text-align: center;
			    text-decoration: underline;
			    
			   
		    }

		    a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active  {

		      background-color: #e0e0d1;
		      color: #000;
		    }


		    .links{
			    width:120px;
			    margin-bottom:2%; 
		    }
		    vermelho{
		    	color:red;
		    }
		</style>
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>
		<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sd-card" viewBox="0 0 16 16">
  <path d="M6.25 3.5a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2z"/>
  <path fill-rule="evenodd" d="M5.914 0H12.5A1.5 1.5 0 0 1 14 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5V3.914c0-.398.158-.78.44-1.06L4.853.439A1.5 1.5 0 0 1 5.914 0zM13 1.5a.5.5 0 0 0-.5-.5H5.914a.5.5 0 0 0-.353.146L3.146 3.561A.5.5 0 0 0 3 3.914V14.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active" href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg></a>
  </li>
			<li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-radios-grid" viewBox="0 0 16 16">
  <path d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></a>
  </li>
			<li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a>
  </li>
			<li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
  <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
  <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>
  </li>
			<li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg></a>
  </li>
		
</ul> 
		


		<div class="cen_box_title" >
			<p class="text_cen_box" style="color:black;" > Introduçao        Bem vindo ao emulador Portao. Ele emula o jogo do reinos
				de sigdu e sua história e vai 
				a outros com e por ele. Mas ele fecha. Entao bom jogo Em breve adicionaremos uma descriçao do jogo aqui. 
			        Dispensamos fan service por enquanto. Reinos de Sigdu é um jogo Soulsike temado em texto com uma história louca de arrepiar
			        bom... No mundo onde habita sigdu Existem deuses, semideuses e outros seres. Muitas classes. Se passa em um universo cyberpunk e
			        medieval bem  dark. Espero inspirar voce. Boa viagem forasteiro. </p> 
		</div>

		
   

		<form action="/pagina-processa-dados-do-form" method="post">
   
			<div class="cen_box" >
				<p class="text_cen_box" > Nome ;   </p> 
				
				<input type="text"> </input>
			</div>
		
        
		<div class="cen_box" >
			<p class="text_cen_box" > Raça ;   </p> 
            
			<select>
				<optgroup label=”basico”>
					   <option value=”elemental”> elemental</option> 
					   <option value=”daemon”> daemon</option> 
					   <option value=”feral”> feral </option> 
					   <option value=”gigante”> gigante</option> 
					   <option value=”draconato”> draconato </option> 
					   <option value=”humano”> humano </option> 
				  </optgroup>
				 <optgroup label=”hero-fusion”>
					   <option value=”dark”> dark </option> 
					   <option value=”none”> none</option> 
					   <option value=”darkliquid> darkliquid</option> 
				  </optgroup>
				<optgroup label=”olympianus”>
					   <option value=”chultuniano”> chultunian </option> 
					   
				  </optgroup>
			  </select> 
		</div>
		<div class="cen_box" >
			<p class="text_cen_box" > Classe ;   </p> 
			<select>
				<optgroup label=”basico***”>
					<optgroup label=”lanceiro”>
						   <option value=”ladino”> ladino </option> 
						   <option value=”arqueiro”> arqueiro </option> 
					  </optgroup>
					  <optgroup label=”guardiao”>
						   <option value=”guerreiro”> guerreiro </option> 
						   <option value=”barbaro”> barbaro </option> 
					  </optgroup>
					 <optgroup label=”magico”>
						   <option value=”mago”> mago </option> 
						   <option value=”necromante”> necromante </option> 
					  </optgroup>
				               <optgroup label=”Fusion”>
						   
						       
					  </optgroup>
				</optgroup>
			        <optgroup label=”hero-fusion***”>
						  <option value=”faraó”> Faraó </option> 
						   <option value=”capitao”> capitao </option> 
						   <option value=”ninja”> Ninja </option> 
						   <option value=”marinheiro”> marinheiro  </option> 
						   <option value=”soldado”> soldado </option> 
						   <option value=”healer”> Healer </option> 
						   <option value=”druida”> druida </option> 
						   <option value=”bruxo”> Bruxo </option> 
						   <option value=”múmia”> Múmia </option> 
						   <option value=”fantasma”> Fantasma </option> 
						   <option value=”arcano”> Arcano  </option> 
				</optgroup>
			  </select>   
		</div>		
		<div class="cen_box" >
			<p class="text_cen_box" > Grupo;   </p> 
	        <select>
				<optgroup label=””>
					   <option value=”itens99”> itens 99 - Objetivo: colecionar e consumir aficcionadamente no mercado. - Prêmio : +50 slot per/lv no inventario. -  requisitos minimos: irace </option> 
					   <option value=”racers”> racers - Objetivo: zerar o jogo. Prêmio: +1000pw per/lv. -  requisitos minimos: irace </option> 
					   <option value=”ira”> ira - Objetivo: zerar o jogo o mais rapido possivel. Prêmio: + 10.500 pw per/lv. -  requisitos minimos: irace </option> 
					   <option value=”racersroad”> racers of the road - Objetivo: zerar o jogo a longo prazo. Prêmio: +500 pw per/lv  </option> 
					   <option value=”ascientrunes”> ascient runes - Objetivo: focar no modo história. Prêmio: +5 runes per level / +5 cenario per level.    </option>
					   <option value=”valor_do_item_03”> texto explicativo do item 03</option> 
					   <option value=”valor_do_item_04”> texto explicativo do item 04</option>
					   <option value=”valor_do_item_03”> texto explicativo do item 03</option> 
					   <option value=”valor_do_item_04”> texto explicativo do item 04</option>
					   <option value=”valor_do_item_03”> texto explicativo do item 03</option> 
					   <option value=”valor_do_item_04”> texto explicativo do item 04</option>
				  </optgroup>
				  <optgroup label=”descrição do segundo agrupamento”>
					   <option value=”valor_do_item_03”> texto explicativo do item 03</option> 
					   <option value=”valor_do_item_04”> texto explicativo do item 04</option> 
					 
				  </optgroup>
			  </select>   	
		</div>
		</form>
       

	</body>
</html>
