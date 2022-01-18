
if(document.getElementById("nomefirst").textContent == "nome"){

	document.getElementById("nomefirst").innerHTML = localStorage.getItem("char1:");
	
}


if(document.getElementById("nomesecond").textContent == "nome"){

	document.getElementById("nomesecond").innerHTML =  localStorage.getItem("char2:");

}
	

if(document.getElementById("nomethird").textContent == "nome"){

	document.getElementById("nomethird").innerHTML =  localStorage.getItem("char3:");

}



if(document.getElementById("nomefour").textContent == "nome"){

	document.getElementById("nomefour").innerHTML =  localStorage.getItem("char4:");

}

if(document.getElementById("nomefive").textContent == "nome"){

	document.getElementById("nomefive").innerHTML =  localStorage.getItem("char5:");

}

if(document.getElementById("nomesix").textContent == "nome"){

	document.getElementById("nomesix").innerHTML =  localStorage.getItem("char6:");

}
	
 
if(document.getElementById("nomeseven").textContent == "nome"){

	document.getElementById("nomeseven").innerHTML =  localStorage.getItem("char7:");

}


if(document.getElementById("lvfirst").textContent == "pw"){

	
	if(localStorage.getItem("SLOT1:u~" + localStorage.getItem("char1:")+"]"+":"+"UF~_PW:") != null){
		
		document.getElementById("lvfirst").innerHTML = localStorage.getItem("SLOT1:u~" + localStorage.getItem("char1:")+"]"+":"+"UF~_PW:");

	}
	
}


if(document.getElementById("lvsecond").textContent == "pw"){

	if(localStorage.getItem("SLOT2:u~" + localStorage.getItem("char2:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvsecond").innerHTML =  localStorage.getItem("SLOT2:u~" + localStorage.getItem("char2:")+"]"+":"+"UF~_PW:");

	}

}
	

if(document.getElementById("lvthird").textContent == "pw"){

	if(localStorage.getItem("SLOT3:u~" + localStorage.getItem("char3:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvthird").innerHTML =  localStorage.getItem("SLOT3:u~" + localStorage.getItem("char3:")+"]"+":"+"UF~_PW:");

	}

}



if(document.getElementById("lvfour").textContent == "pw"){

	if(localStorage.getItem("SLOT4:u~" + localStorage.getItem("char4:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvfour").innerHTML =  localStorage.getItem("SLOT4:u~" + localStorage.getItem("char4:")+"]"+":"+"UF~_PW:");

	}

}

if(document.getElementById("lvfive").textContent == "pw"){

	if(localStorage.getItem("SLOT5:u~" + localStorage.getItem("char5:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvfive").innerHTML =  localStorage.getItem("SLOT5:u~" + localStorage.getItem("char5:")+"]"+":"+"UF~_PW:");

	}

}

if(document.getElementById("lvsix").textContent == "pw"){
 
    if(localStorage.getItem("SLOT6:u~" + localStorage.getItem("char6:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvsix").innerHTML =  localStorage.getItem("SLOT6:u~" + localStorage.getItem("char6:")+"]"+":"+"UF~_PW:");

    }

}
	
 
if(document.getElementById("lvseven").textContent == "pw"){

	if(localStorage.getItem("SLOT7:u~" + localStorage.getItem("char7:")+"]"+":"+"UF~_PW:") != null){

		document.getElementById("lvseven").innerHTML =  localStorage.getItem("SLOT7:u~" + localStorage.getItem("char7:")+"]"+":"+"UF~_PW:");

    }

}

