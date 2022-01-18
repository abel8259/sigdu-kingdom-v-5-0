<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"/>  
 
  <title> ADD nome de usuario </title>
<style>

    body{
        color:white;
        background-color:black ; 
    }

    .bottom{
      margin-top:5%; 

    }

    .contador01{
      border: 1px solid white;
    } 

    div.registro01{
      margin-top:16%;
      margin-left:27%;
        text-align: center;
        border: 1px solid white;
        margin-right:32%;
        padding-bottom: 5% 
         
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

    /* desabilitados por display none */
    .links-mob{display:none;}
    .menu-mob{display:none;}
    .volta-mob{display:none;}
    .registro01-mob{display:none;}
      
    .name-user-mob{display:none;}
    .input01-mob{display:none;}
    .name-char-mob{display:none;}
    .input02-mob{display:none;}
    .bottom-mob{display:none;}
    a.ficha{display:none;}
    a.next{display:none;}  
    /* FIM de desabilitados por display none */


    @media screen and (max-width: 982px) {
    .links{display:none;}
    .menu{display:none;}
    .volta{display:none;}
    .registro01{display:none;}
      
    .name-user{display:none;}
    .input01{display:none;}
    .name-char{display:none;}
    .input02{display:none;}
    .bottom{display:none;}


    .links-mob{
        display:block;
        height:25%;
        width:90%;
        margin-left:2.5%;
        margin-right:2.5%; 

    }

    .menu-mob{
    display:block;
    background-color: #000;
    border: 1px solid #000;
    color: white;
    font-size:109px;
    padding: 50px 25px;
    text-align: center;
    text-decoration: none;
    width:100%;
    

    }

    .volta-mob{
        display:block;
    background-color: #000;
    border: 1px solid #000;
    color: white;
    font-size:109px;
    padding: 50px 25px;
    text-align: center;
    text-decoration: none;
    
    width:100%;
    }

    .registro01-mob{
        display:block;
        margin-top:7%;
        margin-left:7%;
        text-align: center;
        border: 5px solid black;
        margin-right:7%;
        padding-bottom: 5% ;
        padding-right:10%; 
        padding-left:10%;
    }
      
    .name-user-mob{
        display:block;
        font-size:100px;
    }
    #input01-mob{
        display:block;
        padding-right:20%;
        padding-left:37%;
        padding-bottom:10%; 
        padding-top:10%; 
        font-size:24px;
        border: 5px solid black;
    }

    .name-char-mob{
        display:block;
        font-size:100px;
    }

    #input02-mob{
        display:block;
        padding-right:20%;
        padding-left:37%;
        padding-bottom:10%; 
        padding-top:10%;
        font-size:24px;
        border: 5px solid black;
    }

    .bottom-mob{
        display:block;
        width:33.33%;
        margin-right:20%;
        margin-left:25.5%;
       
        border: 5px solid black;
        font-size:50px;
        background-color:#ccc; 
       
        margin-top:5%; 

        padding-right:37%;
        padding-left:8%;
        padding-bottom:10%; 
        padding-top:10%;
    }

    .registro01-mob > a {
        text-align:center; 
        text-decoration:none; 
    } 

    a.next{
    display:block;
    background-color: #000;
    border: 1px solid #000;
    color: white;
    font-size:109px;
    padding: 50px 25px;
    text-align: center;
    text-decoration: none;
    
    width:100%;  
    }
    
    a.ficha{
    display:block;
    background-color: #000;
    border: 1px solid #000;
    color: white;
    font-size:109px;
    padding: 50px 25px;
    text-align: center;
    text-decoration: none;
    
    width:100%;  
    }

    }
  </style>
 
<script type="text/javascript" src="script17.js"></script>
<script type="text/javascript" src="../tela_22/script_tela_22.js"></script>
</head>

<body>

      <div class="links">
        <a class= "menu" href="../tela_18/tela_18.html">menu</a>
        <a class= "voltar " href="key_1.php">voltar</a>
      </div>

      <br>
      <form action="key_27_bck.php" method="POST">
          <div class="registro01" >
          
            <h1 class="name-char">Nome do char:</h1>
            <input  id="input02" name="char_00" type="text" > </input><br/>
            <a href= ""><button class="bottom" type="submit" >ok</button></a>

          </div>
      </form>
      <!--MOBILE ABAIXO-->   

      <div class="links-mob" >
        <a class= "menu-mob" href="../tela_18/tela_18.html">Menu</a>
        <a class= "volta-mob " href="key_1.php">Voltar</a>
      </div>

      <br>
      <form action="key_27_bck.php" method="post"> 
          <div class="registro01-mob" >
        
            <h1 class="name-char-mob">Nome do char:</h1>
            <input id="input02-mob" name="char_00" type="text"> </input><br/>

            <button class="bottom-mob" type="submit" > ENVIAR  </button>

          </div>
      </form>

      <br/>
      <br/>
      <br/>
      <br/>
      <a class="next"  href= "../tela_29/tela_29.html">Próxima página</a>
      <br/>
     
      <a class="ficha"  href="../tela_61/tela_61.html" onclick="MOBILE()">Verificar ficha</a>
      <!--FIM DE MOBILE-->

</body>
</html>