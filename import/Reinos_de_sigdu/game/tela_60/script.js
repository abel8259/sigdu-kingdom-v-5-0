var emporte_Cx = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordX:") + ")objeto:"));
var emporte_Cy = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordY:") + ")objeto:"));
var emporte_Cz = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("coordZ:") + ")objeto:"));
var emporte_spot = JSON.parse(localStorage.getItem("HSC" + search_hsc_01("spot:") + ")objeto:"));

var cX = emporte_Cx.valor_var;
var cY = emporte_Cy.valor_var;
var cZ = emporte_Cz.valor_var;


if(cX == 1 &&cY == 1&& cZ == 1){
document.getElementById("myImg").src =hotel_golden_star[0].nome_do_arquivo;
}

if( cX == 1 &&
	cY == 2 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[1].nome_do_arquivo;


}

if( cX == 2 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[2].nome_do_arquivo;


}

if( cX == 2 &&
	cY == 2 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[3].nome_do_arquivo;


}

if( cX == 3 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[4].nome_do_arquivo;


}            

if( cX == 3 &&
	cY == 2 &&
	cZ == 1){


document.getElementById("myImg").src =hotel_golden_star[5].nome_do_arquivo;


}

if( cX == 4 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[6].nome_do_arquivo;


}

if( cX == 5 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[7].nome_do_arquivo;


}

if( cX == 6 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[8].nome_do_arquivo;


}

if( cX == 7 &&
	cY == 1 &&
	cZ == 1 ){


document.getElementById("myImg").src =hotel_golden_star[9].nome_do_arquivo;


}