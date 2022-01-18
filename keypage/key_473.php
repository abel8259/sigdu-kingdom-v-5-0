<!DOCTYPE html>
<html>
	<head>
		
		    <meta charset="utf-8"/> 
			<title> Shops: </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
        <!---->

        <!--tags para SEO-->
            <meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
            <meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>
            <meta name="author" content="rock studios"/>   
        <!---->

        <!--DEPENDENCIAS-->

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!---->

        <!--tags pro favicon-->
           <link rel="shortcut icon" href="../img_geral/favicon/favicon_084925/favicon.ico" >
           <link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >
        <!---->

		<style>
			
			.dotted_box{
                border: 3px dotted black;
				margin-bottom:2%; 
				cursor:pointer;
				position: relative;
			}
      
			.cen_box_left{
				margin-top:30px; 
                border: 3px solid black;
				margin-bottom:2%; 
				cursor:pointer;
				padding-top:2%;
				padding-bottom:2%;
				padding-left:10%;
				padding-right:10%;   
				float:left; 
				margin-left:17%; 
			}

           .img_cen_box0{
			   float:left;
               
          
           }

           a{
           	text-decoration: none;
           	color:black;
           } 
           p{
           	text-align:center; 
           }
	        .cen_box{
				border: 3px solid black;
				margin-bottom:2%; 
				cursor:pointer;
	        }

	        

	        .cen_box_title{
				border: 3px solid black;
				margin-bottom:2%; 
	        }
	        .cen_box:hover, .cen_box_left:hover {
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
			    text-decoration: none;
			    
			    width:100%;
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
		    body {
  font-family: Arial;
  margin: 0;
  background-color: black; 
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.badge-warning{
	border-radius:12%;
	background-color:yellow;
	color:black;   
}
.badge-danger{
	border-radius:12%;
	background-color:red;
	color:black;
	}

.badge-success{
	border-radius:12%;
	background-color:green;
	color:black;
}
		</style>
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>


<div class="links"> 
			<a class= "menu" href="key_24.php">menu</a>
			<br>
			<a class= "voltar" href="key_24.php">voltar</a>
			<br>
		</div>





<h2 style="text-align:center">Itens adicionados recentemente: </h2>

<div class="card-group">

<?php

require '../login-cadastro/conexao.php'  ; 


$stmt5= $pdo-> prepare( "SELECT * FROM shops ORDER BY
       inv_id DESC LIMIT 6 ");
$stmt5-> execute();
$result5 = $stmt5-> fetchAll( PDO::FETCH_ASSOC );

foreach($result5 as  $value5) {
         

echo "<div class='card'>";

echo " <img class='card-img-top' src='".$value5['inv_nome']."' style='width:100%'>";

echo "</div>";
          
                   
                     }





?>

</div>










  
    
  
    
  
    
  
</div>


    




<h2><p class="text_cen_box"> <b> lista de shops: </b></p> </h2>



<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="row">No.</th>
      <th scope="col">Disponibilidade</th>
      <th scope="col">NPC</th>
      <th scope="col">Nome</th>
      <th scope="col">ENTRADA</th>
    </tr>
  </thead>
  <tbody>
    <a href="key_12radiantstar.php" > <tr>
      <th scope="row">1</th>
      <td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
      <td><img  class="img_cen_box0" src="../img_geral/npc/darker2.png" width="50px" height="50px"/></td>
      <td><p class="text_cen_box" > Boss;(Radiant star)   </p></td>
       <td><a href="../keypage/key_12radiantstar.php" class="btn  btn-primary" tabindex="-1" role="button" aria-disabled="true">Entrar</a></td>
    </tr></a>



    <a href="key_12enemy1.php" > <tr>
      <th scope="row">2</th>


            <td><img  class="img_cen_box0" src="../img_geral/01.png" width="50px" height="50px"/></td>
		    <td><img  class="img_cen_box0" src="../img_geral/npc/ozion7.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> enemy level 1;</p></td>
            <td><a href="../keypage/key_12enemy1.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">ENtrar </a></td>
    </tr></a>



    <tr>
      <th scope="row">3</th>
      <td ><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
      <td><img  class="img_cen_box0" src="../img_geral/npc/stratovarious6.png" width="50px" height="50px"/></td>
      <td><p class="text_cen_box"> enemy level 2;</p></td>
       <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
    </tr>





    <tr>
      <th scope="row">4</th>
        <td> <img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
        <td><img  class="img_cen_box0" src="../img_geral/npc/val4.png" width="50px" height="50px"/></td>
		<td><p class="text_cen_box"> Books;</p></td>
		 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
      
    </tr>
		

		<tr>
            <th scope="row">5</th>		
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/dolores9.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> pet;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		</tr>

	
		<tr>
            <th scope="row">6</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/necrovega13.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Gods pets;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		</tr>	


		<tr>
            <th scope="row">7</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/freyia3.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> External parts; <span class="badge badge-pill badge-success">HERO FUSION</span>  </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			
</tr>

		<tr>
            <th scope="row">8</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
		    <td><img  class="img_cen_box0" src="../img_geral/npc/custela12.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Clan personalização;   </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			

</tr>
		<tr>
            <th scope="row">9</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/hreik10.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Cenários ;   </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			
</tr>

		<tr>
            <th scope="row">10</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/sarla11.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Cenario fusion;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
</tr>			

		<a href="key_12fusionboss.php">
		<tr>
            <th scope="row">11</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/legion14.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Gods race;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		</a>
</tr>
		<tr>
            <th scope="row">12</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/01.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/varcella17.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Begining; <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="../keypage/key_12thebegin.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">ENtrar</a></td>
		
</tr>

		<tr>
            <th scope="row">13</th>		
		
			<td><img  class="img_cen_box0" src="../img_geral/01.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/legion14.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Fusion boss;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="../keypage/key_12fusionboss.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">ENtrar </a></td>
			</tr>

        
		<tr>
            <th scope="row">14</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/ozion7.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Full power;  <span class="badge badge-pill badge-success">HERO FUSION</span> </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		</tr>
	    
			<tr>
            <th scope="row">15</th>		
			
					<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
					<td><img  class="img_cen_box0" src="../img_geral/npc/mortis5.png" width="50px" height="50px"/></td>
					<td><p class="text_cen_box"> Pactos ;   </p> </td>
					 <td><a href="key_12_path_shop.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Entrar</a></td>
			
		</tr>
        
			<tr>
            <th scope="row">16</th>		
			
				<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
				<td><img  class="img_cen_box0" src="../img_geral/npc/zaia16.png" width="50px" height="50px"/></td>
				<td><p class="text_cen_box"> Item raros ;   </p> </td>
				 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>
       
		<tr>
            <th scope="row">17</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/01.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/darker2.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Arsenal ;   </p> </td>
			 <td><a href="../keypage/key_12arsenaloculto.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">ENtrar </a></td>
		
</tr>

		<tr>
            <th scope="row">18</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/bakarokt8.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> <b>EXPANSÃO ;</b>     </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			
		
		<tr>
            <th scope="row">19</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/>
				<td><img  class="img_cen_box0" src="../img_geral/npc/val4.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> Maps   </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
	</tr>	
		<tr>
            <th scope="row">20</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/bakarokt8.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> UI ON  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			</tr>

		<tr>
            <th scope="row">21</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/misszumbi1.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> UI OFF  </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			</tr>

		<tr>
            <th scope="row">22</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/necrovega13.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> LOOT  <span class="badge badge-warning">OLYMPIANUS </span> </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>

		</div>	

		<tr>
            <th scope="row">23</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/varcella17.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> BODY;  <span class="badge badge-warning">OLYMPIANUS </span> </p> </td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>
			

		<tr>
            <th scope="row">24</th>		
						<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
						<td><img  class="img_cen_box0" src="../img_geral/npc/bakarokt8.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> CUSTOM; <span class="badge badge-warning">OLYMPIANUS </span>  </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>
		

		<tr>
            <th scope="row">25</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/dolores9.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> ETHERIAL; <span class="badge badge-warning">OLYMPIANUS </span>  </p></td> 
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>
		
		<tr>
            <th scope="row">26</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/01.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/misszumbi1.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> INITIAL  <span class="badge badge-warning">OLYMPIANUS </span>  </p> </td>
			 <td><a href="key_12initial.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Entrar</a></td>
				</tr>
		

		<tr>
            <th scope="row">27</th>		
		
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/zurk15.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> ARSENAL   <span class="badge badge-warning">OLYMPIANUS </span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
				</tr>
			

		<tr>
            <th scope="row">28</th>		
		
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/mortis5.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> MALUS  <span class="badge badge-warning">OLYMPIANUS </span> </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
			
</tr>

		<tr>
            <th scope="row">29</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/freyia3.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> ADVENT ; <span class="badge badge-warning">OLYMPIANUS </span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		
</tr>
        <tr>
            <th scope="row">30</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/custela12.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> EXTRA   ; <span class="badge badge-pill badge-danger">REQUEST</span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
	

		<tr>
            <th scope="row">31</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/stratovarious6.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> RENEGADE  ; <span class="badge badge-pill badge-danger">REQUEST</span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		</tr>
		<tr>
            <th scope="row">32</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/sarla11.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> loore  ;  <span class="badge badge-pill badge-danger">REQUEST</span> </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		
</tr>

<th scope="row">33</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/zurk15.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> METAL   ; <span class="badge badge-pill badge-danger">REQUEST</span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		
</tr>

<th scope="row">34</th>		
			
			<td><img  class="img_cen_box0" src="../img_geral/09.png" width="50px" height="50px"/></td>
			<td><img  class="img_cen_box0" src="../img_geral/npc/zaia16.png" width="50px" height="50px"/></td>
			<td><p class="text_cen_box"> ITENS  ; <span class="badge badge-pill badge-danger">REQUEST</span>  </p></td>
			 <td><a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></td>
		
</tr>

		  </tbody>
        </table>
	</body>
</html>