
var emporte_Cx = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordX:") + ")objeto:"));
var emporte_Cy = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordY:") + ")objeto:"));
var emporte_Cz = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordZ:") + ")objeto:"));
var emporte_spot = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("spot:") + ")objeto:"));

var cX = emporte_Cx.valor_var;
var cY = emporte_Cy.valor_var;
var cZ = emporte_Cz.valor_var;



function savepoint(){ 

add_historic("coordX:", cX, "valor inicial");
add_historic("coordY:", cY, "valor inicial");
add_historic("coordZ:", cZ, "valor inicial");
}


function foward(){
cX = cX + 0;
cY = cY - 1;
cZ = cZ + 0;
savepoint();
}

function back(){
cX = cX + 0;
cY = cY + 1;
cZ = cZ + 0;
savepoint();

}

function right(){
cX = cX + 1;
cY = cY + 0;
cZ = cZ + 0;
savepoint();

}


function left(){
cX = cX - 1;
cY = cY + 1;
cZ = cZ + 0;
savepoint();

}

function up(){
cX = cX + 0;
cY = cY + 0;
cZ = cZ + 1;
savepoint();

}

function down(){
cX = cX + 0;
cY = cY + 0;
cZ = cZ - 1;
savepoint();

}

