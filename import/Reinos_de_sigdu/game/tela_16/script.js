  function intro_400_01(){
    inventory.push({"Numero": "400",
            "Nome": "Chave de Manutenção;",
            "ATK": "0",
            "DEF": "0",
            "GOLD": "0",
            "TIPO": "lock key;",
            "KIT": "itens de quest;",
            "Shop": "Item hunter",
            "Código1": "ITR",
            "Código2": "ITHHNT",
            "Código3": "00000038",
            "Código final": "ASLW&amp;ITHHNT00000038",
            "src_thumb":"../library/img/itens/item400-thumb.png",
            "src_desc":"../library/img/itens/item400-desc.png",
            "src_value":"../library/img/itens/item400-gold.png",
            "src_img":"../library/img/itens/item400-img.png"});
    var inventory_input_str = JSON.stringify(inventory);
    localStorage.setItem("Inventory", inventory_input_str); 

    add_invetory(no); 
    
};


  function item400_buy(){ 
  var gold_char = JSON.parse(localStorage.getItem(localStorage.getItem("char:")+']'+':'+"Gold:"));
  var gold_char_0 = gold_char - 4000; 

    if(gold_char_0 <=0){
      //alert("você não pode vender comprar este item. Dinheiro Insuficiente."); 
    }else{
      gold_char = gold_char - 4000;
      gold_string = JSON.stringify(gold_char);
      localStorage.setItem(localStorage.getItem("char:")+']'+':'+"Gold:", gold_string);
      intro_400_01();
    }

  }

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