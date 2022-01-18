var ini;
var bgn=0; 
var rado;
var x2;
var y2;
var z2;
var f2;
var cont = []; 
var nm = []; 
var chv ="tty";
var jtbrns01; 
var jtbrns02; 

function begin_End(){
    bgn = localStorage.getItem("bgn:");
    if(chv ==="tty"){

        chv = "dope"; 
    
        if(bgn === 1){

        

        }
        else{
  
            ini = 1;

            localStorage.setItem("ini:", ini);

        }
    


    

    }else{


        localStorage.setItem("bgn:", 1);
        ini+=1;


    }

localStorage.setItem("ini:", ini);

}



    
    function key(){
    x2 = Math.floor(Math.random() * 1000000000);
    y2 = Math.floor(Math.random() * 1000000000);
    z2 = Math.floor(Math.random() * 1000000000);
    f2 = Math.floor(Math.random() * 1000000000);


}	


function serialkey(){
rado  = (f2*y2)*100000000/(x2+z2);
return rado; 
}


function contador01(){

key();

begin_End();


var x = document.getElementById("input01").value;

var y = document.getElementById("input02").value;

var conj_serial = [];  



conj_serial[ini]=serialkey();

if(ini %2 === 0){
    jtbrns01=ini/2;
    nm[jtbrns01] = "Nome:" + x + "/-/"+ "[" +"Serialkey :"+ conj_serial[jtbrns01] + "]" ; 
}


var myJSON1 = JSON.stringify(nm[jtbrns01]);





document.getElementById("demo1").innerHTML = x ;
document.getElementById("demo2").innerHTML = y ;

localStorage.setItem(myJSON1,y);


}