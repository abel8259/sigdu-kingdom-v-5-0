function ready_inv(){ 
    
    var inv_2 = [];  
    for (var i = 0; i <= (inventory.length); i++) {
   
      var numb_str = i.toString();

      var  objj = JSON.stringify(inventory[i]);

      inv_2.push(localStorage.getItem("INV"+ numb_str,objj));

    }
    var page_rotate  =  parseInt(localStorage.getItem("pag:"));  
		document.getElementById("img_inv_1_thumb").setAttribute("src", inv_2[page_rotate].src_thumb);
		document.getElementById("img_inv_1_desc").setAttribute("src", inv_2[page_rotate].src_desc);
		document.getElementById("img_inv_1_value").setAttribute("src", inv_2[page_rotate].src_value);
    

		page_rotate = page_rotate  + 1;

		add_invetory(inv_2[page_rotate].Numero);				  
		document.getElementById("img_inv_2_thumb").setAttribute("src", inv_2[page_rotate].src_thumb);
		document.getElementById("img_inv_2_desc").setAttribute("src", inv_2[page_rotate].src_desc);
		document.getElementById("img_inv_2_value").setAttribute("src", inv_2[page_rotate].src_value);

    var gold_char = JSON.parse(localStorage.getItem(localStorage.getItem("char:")+']'+':'+"Gold:"));

    document.getElementById("vagas_i").setAttribute("value", inv_2.length);
    document.getElementById("gold_id").setAttribute("value", gold_char);
    
}


/*
function sell_item400(numb_item){
  var inv_2 = JSON.parse(localStorage.getItem("Inventory")); 
  
    if(numb_item == "400"){
      var gold_char = parseInt (localStorage.getItem(localStorage.getItem("char:")+']'+':'+"Gold:"));
      

    

        gold_char = gold_char + 4000;
        gold_string = gold_char.toString();
        localStorage.setItem(localStorage.getItem("char:")+']'+':'+"Gold:", gold_string);

       
    
  } 
  

}*/


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