var obj ={
	spot_zoom32x:"Hotel Golden Star",
    spot_zoom16x:"Salão de prédios #1",
    spot_zoom8x:"Salão #1",
    spot_zoom4x:"Sigdu",
    var_x:10,
    var_y:23,
    var_z:0
};

function xyz(wx,wy,wz){
	obj.var_x= wx;
	obj.var_y= wy;
	obj.var_z= wz;
	obj_input_str = JSON.stringify(obj);
	localStorage.setItem("Local:", obj_input_str);  
};