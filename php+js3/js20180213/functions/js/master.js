function add(x, y, z){

  if(isNaN(y)){
    y = 0;
  }

  var suma = x + Number(y) + z;
  return suma;
}

function substract(x, y){
  var result = x - y;
  return result;
}

var division = function(x, y){
  var result = x / y;
  return result;
}
