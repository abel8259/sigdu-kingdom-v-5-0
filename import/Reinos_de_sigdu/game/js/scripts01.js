

function myPlan01() {
 localStorage.setItem('plan', 'WARMANCER');
  
}


function myPlan02() {
  localStorage.setItem('plan', 'HERO-FUSION'); 
  
}
function myPlan03() {
 localStorage.setItem('plan', 'REQUEST'); 
  
}
function myPlan04() {
 
 
 localStorage.setItem('plan',  'OLYMPYANUS');

}


console.log(localStorage);
// Armazena no LocalStorage


var user = JSON.parse(localStorage.getItem('user'));

// Obtém do LocalStorage
//var objSalvo = localStorage.getItem(objteste);
//console.log('objSalvo: ', JSON.parse(objSalvo[1]));