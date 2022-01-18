var ini=1; 
var rado;
var x2;
var y2;
var z2;
var f2;
var chv="dro"; 
  

function key(){

    if(chv === "dro")
    {
    
    ini = 1;
    chv = "bro";
    localStorage.setItem("ini:",ini);

    }else{

    ini += 1;
    localStorage.setItem("ini:",ini);

    }

    localStorage.setItem("ini:",ini);

    x2 = Math.floor(Math.random() * 1000000000);
    y2 = Math.floor(Math.random() * 1000000000);
    z2 = Math.floor(Math.random() * 1000000000);
    f2 = Math.floor(Math.random() * 1000000000);
}	


function serialkey(){
rado  = (f2*y2)/(x2+z2);
return rado; 
}


function contador01(){

key();

var conj_serial = [];  
conj_serial[ini]=serialkey();

var nm = [];
nm[ini] = '[ACC_SC:' + ini + ']'; 

var myJSON2 = JSON.stringify(nm[ini]);
document.getElementById("demo1").innerHTML = myJSON2;
document.getElementById("demo2").innerHTML = conj_serial[ini];
localStorage.setItem(myJSON2, conj_serial[ini]);

localStorage.setItem("ini:",ini);


}

