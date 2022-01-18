//1) gerar serialKey
//2) gerar o numero de conta
//3) gerar o numero do usuário
//4.1) acompanhar tudo isso de nome e senha de usuário
//4.2)criar 2 objetos. Objeto conta e o objeto usuário   
//O.B.S.: (  O nome e senha é atachado ao usuário e não há conta.



var attachTOlogON = 1;
var attachTOcharON = "xxx";
/*
var attachTOlogON_mob = 1;
var attachTOcharON_mob = "xxx";
*/
var mob = 0;  

var code_user_op = getRandomInt(9999999999999999, 999999999999999999);
var code_char_op = getRandomInt(99999999999999999, 9999999999999999999);

var attachTOlogONTEXT = JSON.stringify(attachTOlogON);
var accounts = [
				{SLOT1: localStorage.getItem("SLOT1:"),
				 
				Char1: localStorage.getItem("char1:") 
				},

				{SLOT2: localStorage.getItem("SLOT2:"),
				 
				Char2: localStorage.getItem("char2:")
				},

				{SLOT3: localStorage.getItem("SLOT3:"),
				 
				Char3: localStorage.getItem("char3:") 
				},

				{SLOT4: localStorage.getItem("SLOT4:"),
				 
				Char4: localStorage.getItem("char4:") 
				},


				{SLOT5: localStorage.getItem("SLOT5:"),
				 
				Char5: localStorage.getItem("char5:") 
				},


				{SLOT6: localStorage.getItem("SLOT6:"),
				 
				Char6: localStorage.getItem("char6:") 
				},


				{SLOT7: localStorage.getItem("SLOT7:"),
				 
				Char7: localStorage.getItem("char7:")
				}

				];







    if(localStorage.getItem("SLOT1:") == null){

        
		localStorage.setItem("SLOT1:", "SLOT1");

		localStorage.setItem("char1:", "SLOT1");

	}


	if(localStorage.getItem("SLOT2:") == null){

        
		localStorage.setItem("SLOT2:", "SLOT2");

		localStorage.setItem("char2:","SLOT2");

	}
		
	

	if(localStorage.getItem("SLOT3:") == null){

        
		localStorage.setItem("SLOT3:", "SLOT3");

		localStorage.setItem("char3:", "SLOT3");

	}

	
    if(localStorage.getItem("SLOT4:") == null){

        
		localStorage.setItem("SLOT4:", "SLOT4");

		localStorage.setItem("char4:", "SLOT4");

	}


	
    if(localStorage.getItem("SLOT5:") == null){

        
		localStorage.setItem("SLOT5:", "SLOT5");

		localStorage.setItem("char5:", "SLOT5");

	}	
	

	
    if(localStorage.getItem("SLOT6:") == null){

        
		localStorage.setItem("SLOT6:", "SLOT6");

		localStorage.setItem("char6:", "SLOT6");

	}

	
    if(localStorage.getItem("SLOT7:") == null){

        
		localStorage.setItem("SLOT7:", "SLOT7");

		localStorage.setItem("char7:", "SLOT7");

	}


	localStorage.setItem("contas:", JSON.stringify(accounts));

	console.log(accounts);
/*
 
*/

/*

*/

/*
function MOBILE(){
	mob = 1;
	localStorage.setItem("mob:", JSON.stringify(mob));
}	
*/



function DEVlogON(){
    var x = 0;
   
    localStorage.setItem("bpg:","1");
    
    if(localStorage.getItem("bpg:") == "1"){
	 var cont_pg = JSON.parse(localStorage.getItem("bpg:"));
	   localStorage.setItem("bpg:","0");
    } 
	attachTOlogON = document.getElementById("input01").value;
	attachTOcharON = document.getElementById("input02").value;
   
	//attachTOlogON_mob = document.getElementById("input01-mob").value;
	//attachTOcharON_mob = document.getElementById("input02-mob").value;

	attachTOlogONTEXT = JSON.stringifyattachTOlogON;

	localStorage.setItem("SLOT:", attachTOlogON);

	localStorage.setItem("char:", attachTOcharON);

/*

	localStorage.setItem("SLOT:", attachTOlogON_mob);

	localStorage.setItem("char:", attachTOcharON_mob);

*/

    if(attachTOlogON == 1){
	    if(localStorage.getItem("SLOT1:") == "SLOT1"){
		


			localStorage.setItem("SLOT1:", attachTOlogON);

			localStorage.setItem("char1:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }

    if(attachTOlogON == 2){
	    if(localStorage.getItem("SLOT2:") == "SLOT2"){
		


			localStorage.setItem("SLOT2:", attachTOlogON);

			localStorage.setItem("char2:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }

	

	if(attachTOlogON == 3){
	    if(localStorage.getItem("SLOT3:") == "SLOT3"){

			localStorage.setItem("SLOT3:", attachTOlogON);

			localStorage.setItem("char3:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }


	if(attachTOlogON == 4){
	    if(localStorage.getItem("SLOT4:") == "SLOT4"){

			localStorage.setItem("SLOT4:", attachTOlogON);

			localStorage.setItem("char4:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }



	if(attachTOlogON == 5){
	    if(localStorage.getItem("SLOT5:") == "SLOT5"){

			localStorage.setItem("SLOT5:", attachTOlogON);

			localStorage.setItem("char5:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }

	if(attachTOlogON == 6){
	    if(localStorage.getItem("SLOT6:") == "SLOT6"){

			localStorage.setItem("SLOT6:", attachTOlogON);

			localStorage.setItem("char6:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }

	if(attachTOlogON == 7){
	    if(localStorage.getItem("SLOT7:") == "SLOT7"){

			localStorage.setItem("SLOT7:", attachTOlogON);

			localStorage.setItem("char7:", attachTOcharON);

		}
    }else if(x==0){

     
    x = 1;
    }








}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}

// Converting the JSON string with JSON.stringify()
// then saving with localStorage in the name of session
// Example of how to transform the String generated through 
// JSON.stringify() and saved in localStorage in JSON object again

/*
localStorage.setItem("UserName(MOBILE):", attachTOlogONMOB);
localStorage.setItem("char(MOBILE):", attachTOcharONMOB);
*/

/*
attachTOlogONMOB = document.getElementById("input01-mob").value;
attachTOcharONMOB = document.getElementById("input02-mob").value;
*/

/*
text_code_user_op = JSON.stringify(code_user_op);

text_code_char_op = JSON.stringify(code_char_op);
*/

/* 
Texto a ser implementado.   
n
n
n
n
 */     

/*

*/
