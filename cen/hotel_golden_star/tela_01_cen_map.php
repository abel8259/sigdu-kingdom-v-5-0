<?php
session_start(); 
include("../../login-cadastro/conexao.php"); 
$user = $_SESSION['char'];

$dono = $_SESSION['usuario']; ?>

<!DOCTYPE html>
<html>
	<head>
		
		    <meta charset="utf-8"/> 
			<title> MAPA: </title>
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
		<style>
			img{
				width:280px;
				height:280px;
			}
             body{
             	background-image:url("../../img_geral/PROTOTIPO DESIGN V3/fundo.png");
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
		    .flt{
		    	float:left; 
		    }
		    .badge{

		    }
		    div.card{
		    	background-color: #ccc;
		    	color:black ; 
		    } 

		</style>
		<script type="text/javascript" src="script.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>

	<body>


<div class="links"> 
			<a class= "menu" href="../../keypage/key_24.php">menu</a>
			<br>
			<a class= "voltar" href="tela_01_cen.php">voltar</a>
			<br>
		</div>

<!--<button type="button" class="btn btn-primary">
  Notifications <span class="badge bg-secondary">5</span>
</button>-->
<br/>
<br/>
<br/>

<h2 style="text-align:center"> Mapa: </h2>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page">bussola</a>
  </li>
  

</ul>







    
   
 
 
 

	<div class="card flt" style="width: 18rem;">
		<div class="card-header">
    ZOOM 01
  </div>

	  <div class="card-body">
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>cidade </b>  </li>
	    <li class="list-group-item">Sigdu </li>
	    
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>

 



<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 02
  </div>

  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>estado </b>  </li>
	    <li class="list-group-item">  trenzark   </li>
	    
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>



<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 03
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>país</b>  </li>
	    <li class="list-group-item">  tvarius </li>
	   
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>


<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 04
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>Continente</b> </li>
	    <li class="list-group-item"> soul </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>

	<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 05
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>planeta</b>   </li>
	    <li class="list-group-item">instinct </li>
	
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>
	<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 06
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>sistema</b>  </li>
	    <li class="list-group-item"> luar  </li>
	
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>





	<div class="card flt" style="width: 18rem;">
		<div class="card-header">
    ZOOM 07
  </div>

	  <div class="card-body">
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>constelaçao </b>  </li>
	    <li class="list-group-item">casmafobius  </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>

 



<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 08
  </div>

  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>univero local no. </b>  </li>
	    <li class="list-group-item"> 1 </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>



<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 09
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>setor menor no.</b> </li>
		<li class="list-group-item"> 1 </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>


<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 10
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>setor maior no. </b> </li>
	    <li class="list-group-item"> 1 </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>

	<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 11
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>super universo :</b></li>
	    <li class="list-group-item"> 1 </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>
	<div class="card flt" style="width: 18rem;">
	<div class="card-header">
    ZOOM 12
  </div>
 
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><b>grande universo: </b> </li>
	    <li class="list-group-item"> 1 </li>
	  
	  </ul>
	  
	  <div class="card-footer">
	      <small class="text-muted"> Canto remoto  </small>
	    </div>
	</div>








<div style="clear:both"></div>

<br/>
<br/>
<br/>



<ul class="nav nav-tabs">
  
  <li class="nav-item">
    <a class="nav-link active" aria-current="page">Quests:</a>
  </li>

</ul>

<div class="card-group">

<?php





$stmt2 = $pdo-> prepare( "SELECT * FROM quests  WHERE char_quests = '$dono'");
$stmt2-> execute();
$result2 = $stmt2-> fetchAll( PDO::FETCH_ASSOC );

foreach($result2  as  $value2) {





echo "<div class='card text-dark bg-light mb-3' style='max-width: 18rem;'>";
echo "<div class='card-header'>DROP</div>";
echo "<img  class='img_cen_box0' src=".$value2['quests_src']." />";
echo "<div class='card-body'>";
echo "<p class='card-text'>".$value2['quests_estado']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";}





?>

		
		
			
		

</div>
			
			
		   
		   
       
	</body>
</html>