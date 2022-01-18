function add_invetory(no){



	for (var i = 0; i <= (inventory.length); i++) {
		if (inventory[i].Numero == no){

	    var numb_str = i.toString();

		var  objj = JSON.stringify(inventoryl[i]);

		localStorage.setItem("INV"+ numb_str,objj);

		}

	}
 
  
	  
}



