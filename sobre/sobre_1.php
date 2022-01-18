<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Sobre - página 1</title>
 
<style>
body{
  position:relative; 
}

.h1{
  padding-left: 38%;    
}
   
.texto01{
  padding-left: 2%; 
      padding-right: 2%;
     text-align: justify;
     border: 1px solid #000;
     
}
   
   .texto02{
    margin-top:16%;
    margin-right:25%;
    margin-bottom:45%;
    margin-left:25%;
    display:block; 
    position:absolute;  
   }
   .home{
    top:-25%;
     margin-top:2%; 
     padding-left: 2%;
     position:absolute; 
   }
   .pg2{
     margin-left:82%;
     margin-top:2%;
     position:absolute; 
     right:0px;
   }
   
   a.home:link, a.home:visited , a.pg2:link, a.pg2:visited {
    background-color: #000;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: 1px solid #000;
   }

  a:hover, a:active {
    background-color: #e0e0d1;
    color: #000;
  }
.pg4{
     padding: 12px 23px ;    
     position:relative; 
     margin: 20px;
     float:left; 
   }
      a:link, a:visited {
  background-color: #000;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 1px solid #000;
}

a:hover, a:active {
  background-color: #e0e0d1;
  color: #000;
}
.texto02-mob{display:none;}
.home-mob{display:none;}
.h1-mob{display:none;}
.div-mob{display:none;}
.texto01-mob{display:none;}
.pg2-mob{display: none;}

@media screen and (max-width: 982px) {

.texto02{display:none;}
.home{display:none;}
.h1{display:none;}
.div{display:none;}
.texto01{display:none;}
.pg2{display: none;}


.texto02-mob{
  display:block; 
}



.h1-mob{
  text-align:center; 
  font-size:80px;
  display:block;
  margin-top: 122px; 
}

.div-mob{
   display:block;
}

.texto01-mob{
  display:block;
  text-align:justify;
  margin-top: 140px; 
}

.pg2-mob{
  font-size:50px;
  display: block;
  padding:20px; 
  background-color: #000;
  color: white;
  text-align: center;
  text-decoration: none;
  border: 1px solid #000;
  margin-top: 50px; 
  margin-bottom: 25px; 
}

.home-mob{
  font-size:50px;
  display:block;
  padding:20px; 
  background-color: #000;
  color: white;
  text-align: center;
  text-decoration: none;
  border: 1px solid #000;
  margin-top: 200px; 
  margin-bottom: 25px;
}
}
.pg7{
     padding: 12px 23px ;    
     position:relative; 
     margin: 20px;
     float:left;
     background-color  
   }
.pg7:nth-of-type(2){
    top:-17px; 
  } 
</style>

  </head>

<body>
    
      <a class= "pg7" href="../site_AGENDA/HOME/index.html">agenda</a>
    <br>
      <a class= "pg7" href="../site_DEMO/index.html"> novo sobre</a>
      <br>
  <div class= "texto02" >
    
    <a class= "home" href="../index.php">Página inicial</a>
    
    <h1 class="h1"> Propósito:</h1>
  
    <div class="div">
      <p  class = "texto01"  > O projeto é uma resposta a pedidos constantes de jogadores por um RPG de qualidade. 
       Trazendo também os jogadores de rpg de mesa para gostar de um jogo mais dark. O jogo 
       abre  um leque de possibilidades você pode seguir uma das trilhas de herói ou pode  
       focar em   colecionar itens comprando-os. As trilhas servem todas para se tornar um 
       deus. </p>
    </div>
      
    
    
    <a class= "pg2" href="sobre_2.php">próxima</a>

  </div>

<!--MOBILE ABAIXO-->  

 <div class= "texto02-mob" >
    
   
    
    <h1 class="h1-mob"> Propósito:</h1>
  
    <div class="div-mob">
      <p  class = "texto01-mob"  > O projeto é uma resposta a pedidos constantes de jogadores por um RPG de qualidade. 
       Trazendo também os jogadores de rpg de mesa para gostar de um jogo mais dark. O jogo 
       abre  um leque de possibilidades você pode seguir uma das trilhas de herói ou pode  
       focar em   colecionar itens comprando-os. As trilhas servem todas para se tornar um 
       deus. </p>
    </div>
    

    <a class= "home-mob" href="../keypage/key_1.php">Página inicial</a>
    
    <a class= "pg2-mob" href="sobre_2.php">próxima</a>
  </div>

<!--FIM-DE-MOBILE-->

</body>
</html>