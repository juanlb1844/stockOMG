
// auto iniciar funciones para redondeo 
(function() {
  function decimalAdjust(type, value, exp) {
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
})();


// función para quitar espacios laterales e intermedios | asignar atributo como ID de campo 
var quitSpace = function(str) {
    var cadena = '';
    var arrayString = str.split(' ');
    for (var i = 0; i < arrayString.length; i++) {
        if (arrayString[i] != "") {
            cadena += arrayString[i];
        }
    }
    return cadena;
};  


$(document).ready(function(){

  // Obtener y listar el producto siguiente 
    $('#nextProduct').click(function() {
      var idProd = productData[0].ID;
      window.location.href = '?p=producto&idProducto='+ (parseInt(idProd)+1);
    }); 

}); 