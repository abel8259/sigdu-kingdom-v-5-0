<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <style>
    body{
      position:relative; 
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
       .pg2{
         margin-top:2%; 
         padding-left: 2%;
         position:absolute; 
       }
       .pg04{
         margin-left:82%;
         margin-top:2%;
         position:absolute;
         right: 0px; 
       }
       
        a.pg04:link, a.pg04:visited, a.home:link, a.home:visited , a.pg2:link, a.pg2:visited {
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

      .pg04-mob{
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

      .pg2-mob{
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
    
    <h1 class="h1"> Sobre o jogo: </h1>
  
    <div class="div">
      <p  class = "texto01">  O jogo retrata uma ficção científica nos quais várias raças vivem em conjunto,
        inclusive os deuses. Reúne o principal em termos de RPG, muito xp, lv up, itens
        aos montes, quests, loots medianos (nem muito nem pouco). Temáticas pouco vistas.
        Novidades em termos de jogabilidade (item personalizável, personagem com grandes
        alterações). Grinding e loot-coming motivacionais.</p>
    </div>
      
    
    
    
   

    <a class= "pg2" href="sobre_2.php">pagina 2</a>
    <a class= "pg04" href="sobre_4.php">pagina 4</a>

  </div>

<!--MOBILE ABAIXO-->  

 <div class= "texto02-mob" >
    
   
    
    <h1 class="h1-mob"> Sobre o jogo: </h1>
  
    <div class="div-mob">
      <p  class = "texto01-mob">  O jogo retrata uma ficção científica nos quais várias raças vivem em conjunto,
        inclusive os deuses. Reúne o principal em termos de RPG, muito xp, lv up, itens
        aos montes, quests, loots medianos (nem muito nem pouco). Temáticas pouco vistas.
        Novidades em termos de jogabilidade (item personalizável, personagem com grandes
        alterações). Grinding e loot-coming motivacionais.</p>
    </div>
    

    <a class= "home-mob" href="../index.php">Página inicial</a>
    <a class= "pg2-mob" href="sobre_2.php">anterior</a>
    <a class= "pg4-mob" href="sobre_4.php">próxima</a>
   
    
  </div>

<!--FIM-DE-MOBILE-->







</body>
</html>