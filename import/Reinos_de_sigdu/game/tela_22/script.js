/*var cont_ppp =1;
	    var cont_gp = JSON.parse(localStorage.getItem("cont_HSC"));
		if(cont_ppp == 1 || cont_gp == 1){
			setpg1();
			cont_ppp = 0; 
	    }*/

	var  HSC_CEL = [{numero:1,
					 
					nome: "IN_game ",
					valor:47,
					desc:"Jogo Iniciado!"  
					}];

    
   function add_historic(no,nom,val,desc){
	   var  HSC_CEL0 = [{numero:no,
						 
						nome: nom,
						valor:val,
						desc:desc  
						}];



	       var numb_str = no.toString(); 

		   var  objj = JSON.stringify(HSC_CEL0[0]);

		   localStorage.setItem("HSC"+ numb_str,objj);
	      
	  
	  
	}


	
    
   


	function add_historic_IN(){
		var cont_i = 1; 
		var obj_hsc_str = JSON.stringify(HSC_CEL[0]); 
		 

	
		localStorage.setItem("HSC1", obj_hsc_str); 
		 localStorage.setItem("cont_HSC","0");
		
       if(localStorage.getItem("HSC2") == null){
		add_historic(2,localStorage.getItem(localStorage.getItem("char:")+']'+':'+'raça:'),0,"Raça escolhida! ");
		}
       if(localStorage.getItem("HSC3") == null){		 
		add_historic(3,localStorage.getItem(localStorage.getItem("char:")+']'+':'+'classe:'),0,"Classe  escolhida! ");
		}
       if(localStorage.getItem("HSC4") == null){		
		add_historic(4,localStorage.getItem(localStorage.getItem("char:")+']'+':'+'ORG:'),0,"ORG Tipo  escolhida! ");
	    }
		
       if(localStorage.getItem("HSC5") == null){
		add_historic(5,localStorage.getItem(localStorage.getItem("char:")+']'+':'+'[ORG]:'),0,"ORG escolhida! ");
		}
	}







    

   
	add_historic_IN();

    var cont_pg = parseInt(localStorage.getItem("pag:")); 


   function setpg1(){
    
      localStorage.setItem("pag:","0");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg2(){
      
     localStorage.setItem("pag:","10");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg3(){
     localStorage.setItem("pag:","20");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg4(){
     localStorage.setItem("pag:","30");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg5(){
     localStorage.setItem("pag:","40");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }
   function setpg6(){
     localStorage.setItem("pag:","50");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg7(){
     localStorage.setItem("pag:","60");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg8(){
     localStorage.setItem("pag:","70");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpg9(){
     localStorage.setItem("pag:","80");
      cont_pg = parseInt(localStorage.getItem("pag:"));
   }

     function setpgadd(){
      cont_pg = cont_pg + 10;
   }

   function setpgretro(){
   	  if(cont_pg > 0){
	      cont_pg = cont_pg - 10;
	  }
   }

	

	


	var  cont_HSC_int_0 =  cont_pg;

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
	   
	var  cont_HSC_string_0 = cont_HSC_int_0.toString(); 


   
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

	    var obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
	 




	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 

	    document.getElementById("no1").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom1").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val1").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc1").innerHTML = HSC_CEL[0].desc;

    }

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();

	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){



	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no2").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom2").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val2").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc2").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();

	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no3").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom3").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val3").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc3").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no4").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom4").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val4").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc4").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no5").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom5").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val5").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc5").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no6").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom6").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val6").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc6").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no7").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom7").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val7").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc7").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no8").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom8").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val8").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc8").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no9").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom9").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val9").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc9").innerHTML = HSC_CEL[0].desc;

	}

	cont_HSC_int_0 = cont_HSC_int_0 + 1; 
		   
	cont_HSC_string_0 =   cont_HSC_int_0.toString();
	
	if(localStorage.getItem("HSC"+cont_HSC_string_0) != null){

  

	    obj_hsc_int = JSON.parse(localStorage.getItem("HSC"+cont_HSC_string_0));
		 

	    HSC_CEL[0].numero = obj_hsc_int.numero; 
	    HSC_CEL[0].nome =  obj_hsc_int.nome;
	    HSC_CEL[0].valor =  obj_hsc_int.valor;
	    HSC_CEL[0].desc =  obj_hsc_int.desc; 


	  

	    document.getElementById("no10").innerHTML = HSC_CEL[0].numero;
	    document.getElementById("nom10").innerHTML = HSC_CEL[0].nome;
	    document.getElementById("val10").innerHTML = HSC_CEL[0].valor;
	    document.getElementById("desc10").innerHTML = HSC_CEL[0].desc;

	}