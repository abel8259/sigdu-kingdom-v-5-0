<!DOCTYPE html>

<html lang="en">
<head>
 <meta charset="utf-8">

  <title>Sobre - página 2</title>

 <style>
 body{
  position:relative; 
}

.h1{
  padding:0;  
  text-align:center;   
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
   a.pg1{
     margin-top:2%; 
     padding-left: 2%;
     position:absolute; 
   }
   a.pg3{
     margin-left:82%;
     margin-top:2%;
     position:absolute;
     right: 0px; 
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
  a.home:link, a.home:visited, a.pg3:link, a.pg3:visited ,a.pg1:link, a.pg1:visited {
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
.pg3-mob{display:none;}
.pg1-mob{display:none;}
@media screen and (max-width: 982px) {

  .texto02{display:none;}
  .home{display:none;}
  .h1{display:none;}
  .div{display:none;}
  .texto01{display:none;}
  .pg3{display: none;}
  .pg1{display: none;}

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

  .pg3-mob{
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

  .pg1-mob{
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
    
    <h1 class="h1"> Sobre a empresa: </h1>
  
    <div class="div">
      <p  class = "texto01"  > Presidida pelo CEO Abel Barbosa, Rock studios é uma micro-empresa de jogos de MMO-   
       RPG que no momento esta focada na criação do seu primeiro game: Reinos de Sigdu. Desde                          
       seu inicio ela está empenhada neste jogo, mesmo apesar de ter passado várias profis-             
       sionais por seus códigos. Mas a missão deste jogo foi repassada bem e está em boas mãos.</p>
    </div>
      
    
    
    
    <a class= "pg1" href="sobre_1.php">anterior</a>
    <a class= "pg3" href="sobre_3.php">próxima</a>
  </div>

<!--MOBILE ABAIXO-->  

 <div class= "texto02-mob" >
    
   
    
    <h1 class="h1-mob"> Sobre a empresa: </h1>
  
    <div class="div-mob">
      <p  class = "texto01-mob"  > Presidida pelo CEO Abel Barbosa, Rock studios é uma micro-empresa de jogos de MMO-   
       RPG que no momento esta focada na criação do seu primeiro game: Reinos de Sigdu. Desde                          
       seu inicio ela está empenhada neste jogo, mesmo apesar de ter passado várias profis-             
       sionais por seus códigos. Mas a missão deste jogo foi repassada bem e está em boas mãos.</p>
    </div>
    

    <a class= "home-mob" href="../index.php">Página inicial</a>
    
   
     <a class= "pg1-mob" href="sobre_1.php">anterior</a>
    <a class= "pg3-mob" href="sobre_3.php">próxima</a>
  </div>

<!--FIM-DE-MOBILE-->

</body>
</html>