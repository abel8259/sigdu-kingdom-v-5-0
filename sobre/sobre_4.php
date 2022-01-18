<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Sobre - página 4</title>
  <style>
     body{
     position:relative; 
   }
   
   h1{
     padding-left: 36%;
     display:block; 
     margin: 22px 0px;  }
   
   .texto01{
     padding-left: 1%; 
      padding-right: 1%;
     text-align: justify;
     border: 1px solid #000;
     margin-left:19%;
   }
   
   .texto02{
    margin-top:16%;
    margin-right:25%;
    margin-bottom:45%;
    margin-left:25%;
    float:left; 
    position:absolute;  
   }
   .home{
     margin-top:2%; 
     padding: 2%;
     position:absolute; 
     top: -5%;

   }
   .pg3{
     padding: 2%;    
     margin-top:2%;
     position:absolute; 
     left: 0px;
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
   
 .foto{
   position:absolute;
   display:block; 
 }   
 .pg4{
     padding: 12px 23px ;    
     position:relative; 
     margin: 20px;
     float:left; 
   }
  
.texto02-mob{display:none;}
.home-mob{display:none;}
.h1-mob{display:none;}
.div-mob{display:none;}
.texto01-mob{display:none;}
.pg3-mob{display: none;}
.foto-mob{display: none;}

@media screen and (max-width: 982px) {

  .texto02{display:none;}
  .home{display:none;}
  .h1{display:none;}
  .div{display:none;}
  .texto01{display:none;}
  .pg3{display: none;}
  .foto {display:none; }

  .texto02-mob{
    display:block; 
  }

  .h1-mob{
    text-align:center; 
    font-size:80px;
    display:block;
    margin-top: 122px; 
    padding: 0px 0px 0px 0px; 
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
    font-size:70px;
    display: block;
    padding: 27px; 
    background-color: #000;
    color: white;
    text-align: center;
    text-decoration: none;
    border: 1px solid #000;
    margin-top: 25px; 
    margin-bottom: 25px; 
    width:100%;
  }

  .home-mob{
    font-size:70px;
    display:block;
    padding: 27px;  
    background-color: #000;
    color: white;
    text-align: center;
    text-decoration: none;
    border: 1px solid #000;
    margin-top: 200px; 
    margin-bottom: 25px;
    width:100%;

  }

  .foto-mob{
    position:relative ;
    display:block;
    top: 40px;
    margin : 0px 390px; 
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

    <a class="home" href="../index.php">Página inicial</a>

    <h1> Sobre o CEO:</h1>
    
    <div >
      <img class="foto" src="https://i.ibb.co/2NchtcF/78640863-2654284984650256-4902248201043574784-n.jpg" width="85px" height="85px" border= "1px">
    </div>
    
    <div >
      <p  class = "texto01"  > "Uma pessoa pacata que dá toda sua energia no seu trabalho." Tem 4 cursos na area                 
       de web design sendo 2 em html e css e 2 em javascript. A maioria dos cursos foi pela                                  
       internet mesmo. Pois o modelo de ensino atual encontra-se obsoleto. Prefere trabalhar só e                 
       atualmente reside em fortaleza, Ceará.   </p>             
                                                                                                
    </div>
    <a class= "pg3" href="sobre_3.php">pagina 3</a>
    
    
    <!--MOBILE ABAIXO--> 
  </div>

  <div class= "texto02-mob" >

    

    <div>
      <img class="foto-mob" src="../img_geral/sobre/78640863-2654284984650256-4902248201043574784-n.jpg" width="160px" height="160px" border= "9px">
    </div>

    <h1 class="h1-mob"> Sobre o CEO: </h1>

    
    
    <div >
      <p  class = "texto01-mob"  > "Uma pessoa pacata que dá toda sua energia no seu trabalho." Tem 4 cursos na area                 
       de web design sendo 2 em html e css e 2 em javascript. A maioria dos cursos foi pela                                  
       internet mesmo. Pois o modelo de ensino atual encontra-se obsoleto. Prefere trabalhar só e                 
       atualmente reside em fortaleza, Ceará.   </p>             
                                                                                                
    </div>

    
    <a class= "home-mob" href="../index.php">Página inicial</a>
 
    <a class= "pg3-mob" href="sobre_3.php">Anterior</a>
    
    

   <!--FIM-DE-MOBILE--> 
    
  </div>
</body>
</html>


