var hsc_cont_var_hj = 0;  
var hsc_cont_var_pre = 0;  
var text_hsc_search = "text";  
var result_search_hj = []; 
var k_cont_hsc = 1;
var aux_add_hsc_two = 0;
var res_search = 0;  
var hsc_matriz_02 = [];
/*======search-function========*/ 

function  search_hsc_01(search_th){
	res_search  = res_search  + 1;
	text_hsc_search = res_search .toString(); 
	while(localStorage.getItem("HSC" + text_hsc_search + ")objeto:") != null){
        
     

        text_hsc_search = res_search.toString(); 

		if(localStorage.getItem("HSC" + text_hsc_search + ")objeto:") != null){

			hsc_matriz_02[k_cont_hsc] = localStorage.getItem("HSC" + text_hsc_search + ")objeto:");

		}

		if(hsc_matriz_02[k_cont_hsc].nome_var == search_th ){

			result_search_hj[aux_add_hsc_two] = text_hsc_search;
			aux_add_hsc_two = aux_add_hsc_two + 1;
		}

		
		k_cont_hsc = k_cont_hsc + 1;
		res_search  = res_search  + 1;
	}
	aux_add_hsc_two = 0;


   return result_search_hj[aux_add_hsc_two] ;

}




/*======search-function-end======*/

























































function call_page(nome_var_02,valor_var_02,description_var_02){

	
    	var call_cont_hsc = 1;
        var call_text_hsc_search = call_cont_hsc.toString();
		var obj_local_hsc01  = {nome_var :  nome_var_02, valor_var: valor_var_02, description_var : description_var_02};
		var j_cont_y = JSON.stringify(obj_local_hsc01);
		    
	 
			
		localStorage.setItem("NO.HSC" + call_text_hsc_search + "):",call_text_hsc_search);
		localStorage.setItem("HSC" + call_text_hsc_search + ")objeto:", j_cont_y);
	
}  







function add_historic(nome_var_02,valor_var_02,description_var_02){ 
     
   
	
		k_cont_hsc = k_cont_hsc + 1;
		text_hsc_search = k_cont_hsc.toString();
		while(localStorage.getItem("NO.HSC" + text_hsc_search + "):") != null ){
				

				
	        k_cont_hsc = localStorage.getItem("NO.HSC" + text_hsc_search + "):")
	        text_hsc_search = k_cont_hsc.toString();

		}

	
    


      
	text_hsc_search = k_cont_hsc.toString();



	var obj_local_hsc01  = {nome_var :  nome_var_02, valor_var: valor_var_02, description_var : description_var_02};
	var j_cont_y = JSON.stringify(obj_local_hsc01);
		    
	 
			
	localStorage.setItem("NO.HSC" + text_hsc_search + "):",text_hsc_search);
	localStorage.setItem("HSC" + text_hsc_search + ")objeto:", j_cont_y);
    

}
























/*====================================FUNÇÃO-HISTÓTICO=======================================*/ 
/*
function add_historic(nome_var_02,valor_var_02,description_var_02){ 
	
	if(nome_var_02 == "pagination:"){
        var obj_local_hsc01  = {nome_var :  nome_var_02, valor_var: valor_var_02, description_var : description_var_02};
	    var j_cont_y = JSON.stringify(obj_local_hsc01);
         
		localStorage.setItem("NO.HSC6):",text_hsc_search);
	    localStorage.setItem("HSC6)objeto:", j_cont_y);

	    
    }else{
        

        k_cont_hsc = k_cont_hsc + 1;

        if((localStorage.getItem("HSC6)objeto:") != null) && (aux_add_hsc_two != 2)  ){

			k_cont_hsc = 7;
	        
	        aux_add_hsc_two = 2;

        }
        
        if(k_cont_hsc == 5){
            

	        var obj_local_hsc02  = {nome_var :  nome_var_02,
	        valor_var: 0,
	        description_var : "organização registrada!!"};

		    var j_cont_z = JSON.stringify(obj_local_hsc02);

	        text_hsc_search = "5"; 


	        localStorage.setItem("NO.HSC" + text_hsc_search + "):",text_hsc_search);
		    localStorage.setItem("HSC" + text_hsc_search + ")objeto:", j_cont_z);
        
        

        }else{
        

		    var obj_local_hsc01  = {nome_var :  nome_var_02, valor_var: valor_var_02, description_var : description_var_02};
		    var j_cont_y = JSON.stringify(obj_local_hsc01);
		    
			text_hsc_search = k_cont_hsc.toString(); 
			
			localStorage.setItem("NO.HSC" + text_hsc_search + "):",text_hsc_search);
		    localStorage.setItem("HSC" + text_hsc_search + ")objeto:", j_cont_y);
	 	
		
		}
		


    }

}

/*================================FIM-DE-FUNÇÃO-HISTÓTICO====================================*/ 