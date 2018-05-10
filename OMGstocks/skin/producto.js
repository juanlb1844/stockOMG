
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

var idRelateds = []; 

var productData = null; 
var main_img_data = null; 
var img_to_main = null; 
var url_to_main = null; 
var relatedProducts = null; 

var selectedAttr = null // atributo seleccionado en modal | combinar entidades 

// obtener galería del producto 
 function getGallery () {
	$.ajax({
	 	url: 'controladores/getGallery.php', 
	 	method: 'POST', 
	 	data: {  idProd : productData[0].ID  }, 
	 	success: function(response){
	 		  if( response != 'sin resultados' ) {
		 		  var gallery = JSON.parse(response); 
		 		   for( var i in gallery ) {
		 		   		if( gallery[i].url.substr(0, 4) == 'http' ) {
		 		   			var element = '<li><img protectedUrl="'+gallery[i].url+'" idGallery="'+gallery[i].id_gallery+'" src="'+gallery[i].url+'"><p><a href="'+gallery[i].url+'">ver</a></p></li>';  
		 		   		} else {
		 		   			var element = '<li><img protectedUrl="'+gallery[i].url+'" idGallery="'+gallery[i].id_gallery+'" src="media/'+gallery[i].url+'"><p><a href="media/'+gallery[i].url+'">ver</a></p></li>';  
		 		   		}
		 		  	$('#entityGallery').append(element);  
		 		   }
		 		   $('#entityGallery').off('click'); 
		 		   $('#entityGallery').on('click', 'img', function(event) {
		 		   	    img_to_main = $(event.target).attr('idGallery'); 
		 		   	    url_to_main = $(event.target).attr('protectedUrl'); 
	 		   		    if ( $(event.target).attr('mainImg') ) {
							$('#imgMainSet').prop('checked', true); 
							$('#imgMainSet').prop('disabled', 'disabled'); 
						} else {
							$('#imgMainSet').prop('checked', false); 
							$('#imgMainSet').removeAttr('disabled');
						}

	 		   		   $('#urlImg').val($(event.target).parent().find('a').attr('href')); 
			 		   $('#infoImg').modal({ show: 'false' }); 

		 		   }); 
	 		  }
	 	}
	 });
	}

$(document).ready(function(){

 // cambiar imágen principal 
	$('#saveImg').click( function() {
		var idProduct = productData[0].ID; 
	    if( $('#imgMainSet').prop('checked') ) {
			$.ajax({
			 	url: 'controladores/updateMainImg.php', 
			 	method: 'POST', 
			 	data: { idMainPic: idProduct, 
			 			toMainUrl: url_to_main, 
			 			toMainId : img_to_main}, 
			 	success: function(mensaje){
			 		  console.log(mensaje); 
			 		  window.location.reload(); 
			 	}
			 });   
	    }  	
	}); 

 // guardar datos del producto 
	$('#saveProduct').click(function() {
		var selecteds = $('.tree-categories input:checked'); 
		var idCatSelecteds = []; 

		for( x = 0; x < selecteds.length; x++ ) { 
			var idCat = $( $(selecteds[x]).parent() ).attr('id'); 
			idCatSelecteds.push( idCat.substr(5, idCat.length) ); 
		}
		 
		for( i in productData) {
			productData[i].localValue = $('#'+quitSpace(productData[i].type_attr)).val(); 
		}
		$('.save-action').html('<img src="media/users/loading.gif" style="width:40px;"><span style="color:#2e6da4;">Guardando</span>');
		$.ajax({
		 	url: 'controladores/setAttributes.php', 
		 	method: 'POST', 
		 	data: { dataProduct: productData, 
		 			selectedCats: idCatSelecteds, 
		 			idProd : productData[0].ID, 
		 			idRelateds : idRelateds 
		 			}, 
		 	success: function(mensaje){
		 		  console.log(mensaje); 
		 		  window.location.reload(); 
		 	}
		 });
		console.log( productData ); 
	}); 

// id producto general 
var idProd = null; 

var url = window.location.href; 
idProd = url.split('=')[2];

	 $.ajax({
	 	url: 'controladores/getProducto.php', 
	 	method: 'POST', 
	 	data: { idProd: idProd, 
	 			  type: 'showProduct'
	 			}, 
	 	success: function(mensaje){
	 		  productData = JSON.parse(mensaje);   	 		  
			  for( x in productData ){  
			  		  if( productData[x].type_attr == 'distributor') {
			  		  		console.log('jump'); 
			  		  } else if(productData[x].type_attr == 'main_img') { 
			  		  			urlImg = productData[x].value_attr; 
			  		  			main_img_data = {'url' : urlImg}; 
			  		  			
			  		  			if( urlImg.substr(0, 4) != 'http' ) {
			  		  				urlImg = 'media/'+urlImg; 
			  		  			}

				  		  		var element = '<li><img mainImg="true" src="'+urlImg+'"><p><a href="'+urlImg+'">ver</a><label class="label label-primary">Main</label></p></li>';  

			 		  			$('#entityGallery').append(element);
			 		  			$('#entityGallery').off('click'); 
						 		$('#entityGallery').on('click', 'img', function(event) {
								if ( $(event.target).attr('mainImg') ) {
									$('#imgMainSet').attr('checked', true); 
								} 
						 		$('#urlImg').val($(event.target).parent().find('a').attr('href')); 
								$('#infoImg').modal({
													    show: 'false'
												    }); 
						        }); 
			  		  } else if( productData[x].type_attr == 'description' ) {
			  		  		data = '<div class="form-group">' + 
		                        ' <label for="inputPassword3" class="col-sm-2 control-label entity_attr" entityAttr="'+productData[x].type_attr+'">Description</label>' + 
		                        ' <div class="col-sm-10"> ' + 
		                         ' <form method="post"> ' + 
		                                ' <textarea style="width: 100%;" id="'+productData[x].type_attr+'" name="editordata"></textarea>' + 
		                         ' </form>' + 
		                        ' </div> ' + 
		                       ' </div>'; 

			  		  		$('.attributes_product').append(data); 

			  		  		//$(data).prependTo($('.attributes_product')).slideDown("fast");

			  		  		$('#'+productData[x].type_attr).summernote({
								 	height : 320
								});
			  		  		var description = productData[x].value_attr; 
			  				$('#'+productData[x].type_attr).summernote('code', description);  
			  		  } else if( productData[x].type_attr == 'short_description' ) {
			  		  		data = '<div class="form-group">' + 
		                        ' <label for="inputPassword3" class="col-sm-2 control-label entity_attr" entityAttr="'+productData[x].type_attr+'">Short description</label>' + 
		                        ' <div class="col-sm-10"> ' + 
		                         ' <form method="post"> ' + 
		                                ' <textarea style="width: 100%;" id="'+productData[x].type_attr+'" name="editordata"></textarea>' + 
		                         ' </form>' + 
		                        ' </div> ' + 
		                       ' </div>'; 

			  		  		$('.attributes_product').append(data); 

			  		  		$('#'+productData[x].type_attr).summernote({
								 	height : 200
								});
			  		  		var description = productData[x].value_attr; 
			  				$('#'+productData[x].type_attr).summernote('code', description);  
			  		  } else {
			  		  		data = '<div id="__'+quitSpace(productData[x].type_attr)+'" class="form-group">'+ 
		                        '<label for="inputEmail3" class="col-sm-2 control-label entity_attr" entityAttr="'+productData[x].type_attr+'">'+productData[x].type_attr+'</label>' + 
		                        ' <div class="col-sm-10">' + 
		                          ' <input type="input" id="'+quitSpace(productData[x].type_attr)+'" placeholder="cargando..." value="'+productData[x].value_attr+'" class="form-control input-sm" name="">' + 
		                        ' </div> ' + 
		                      ' </div> '; 
							$(data).prependTo($('.attributes_product')).slideDown('fast');  

			  		  }

				}
			$('body').on('click', '.entity_attr', function(event){
				//alert( $(event.target).attr('entityAttr') ); 
				selectedAttr = $(event.target).attr('entityAttr'); 
				$('#selectRelated').modal({
				        show: 'false'
				    }); 
				initModalIntegration(); 
				renderValuesRelated();
			}); 
				
			var attrSKU = null; 
			var attrUPC = null; 
			var attrNP = null; 
			var attrModel = null; 

			// Agregar datos a table [relación de coincidencias de porductos por proveedor]
			for(var i in productData) {
				if( productData[i].type_attr == 'SKU' ){
					var valAttr = productData[i].value_attr; 
					attrSKU = ( valAttr.length > 1 && valAttr != '0000') ? valAttr : '-a-a-a-a'; 
				} 
				if( productData[i].type_attr == 'UPC' ) {
					var valAttr = productData[i].value_attr; 
					attrUPC = ( valAttr.length > 1 && valAttr.trim() != '0000') ? valAttr : '-a-a-a-a'; 
				}
				if( productData[i].type_attr == 'Number Part'){
					var valAttr = productData[i].value_attr;
					attrNP = ( valAttr.length > 1 && valAttr != '0000') ? valAttr : '-a-a-a-a'; 
				}
				if ( productData[i].type_attr == 'Model' ){
					var valAttr = productData[i].value_attr; 
					attrModel = ( valAttr.length > 1 && valAttr != '0000' && valAttr != '..') ? valAttr : '-a-a-a-a'; 
				}
			}
			initFeedWindow('controladores/getRelatedProducts.php', 
							{ sku : attrSKU,  
							  upc : attrUPC, 
							  np  : attrNP, 
							  model : attrModel }); 

			getGallery(); 

			// Seleccionar categorías a las que pertenece 	
			$.ajax({
			 	url: 'controladores/getRelationCategory.php', 
			 	method: 'POST', 
			 	data: { idProd: productData[0].ID }, 
			 	success: function(mensaje){
			 			if(mensaje != 'sin resultados') {
					 		  var relation = JSON.parse(mensaje); 
					 		  console.log(relation); 
					 		  for( var i = 0; i < relation.length; i++) {
					 		  	var idRel = relation[i].category_id_categories; 
					 		  	$('.tree-categories #idCat'+idRel+' input').first().attr('checked', true); 
					 		  }
			 			}
			 	}
			 });
	 	}
	 });

	// llena la tabla de coincidencias con otros proveedores 
	function listRelateds() {
			if(relatedProducts.length > 0 ) {
				for( var i in relatedProducts) {
					$('#relationProduct').append("<tr idProductList="+relatedProducts[i][10]+">"+ 
							"<td>"+ relatedProducts[i][relatedProducts[i].length-1] +"</td>"+ 
							"<td>"+ relatedProducts[i][0] +"</td>"+ 
							"<td>"+ relatedProducts[i][1] +"</td>"+ 
							"<td>"+ relatedProducts[i][4] +"</td>"+ 
							"<td>//</td>"+ 
							"<td>"+ relatedProducts[i][2] +"</td>"+ 
							"<td>"+ relatedProducts[i][5] +"</td>"+
							"<td>"+ relatedProducts[i][3] +"</td>"+
							"<td>"+ relatedProducts[i][6] +"</td>"+ 	
							"<td>"+ relatedProducts[i][7] +"</td>"+ 
							"<td><input type='checkbox' checked='checked'></td>"+ 
						"</tr>"); 
				}
			}
		$('#relationProduct').on('click', 'input', function (event) {
			var controlAction = $(event.target).prop('checked'); 
			var idToExclude = $(event.target).parent().parent().attr('idProductList'); 
			console.log( idToExclude );
			if( !controlAction ) {
				idRelateds.forEach( function(val, index) {
					if( idToExclude == val) {
						idRelateds.splice(index, 1);
					}
				});
			} else {
				idRelateds.push(idToExclude); 
			}

		}); 
	}
	

	// Obtener datos y formatear en arreglo 
	function initFeedWindow(url, dataService) { 	
		 $.ajax({
			 	url: url, 
			 	type: 'post', 
			 	data: dataService, 
			 	success: function(mensaje){
			 			 if(mensaje == 'sin datos') {
			 			 	$("#tableFeed").html('<h2>Sin datos</h2>'); 
			 			 	return; 
			 			 }

			 			 viewData 	=  JSON.parse(mensaje); //datos brutos 
			 			console.log(viewData);
			 			 
			 			 lineProduct = [];
			 			 row = [];  

						 viewData.forEach( function(val) {  
							if( val.type_attr == 'Name Product') { 
								row.push( val.value_attr ); 
							} else if ( val.type_attr == 'SKU' ) {
								row.push( val.value_attr ); 
							} else if ( val.type_attr == 'Normal Price' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'stock' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'Number Part' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'UPC' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'Model' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'description' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'currency' ) {
								row.push( val.value_attr ); 
							}else if ( val.type_attr == 'distributor' ) {
									row.push( val.value_attr ); 
									row.push(val.ID); 
									idRelateds.push(val.ID); 
									var styleRow = '';
									if(row[3] > 10) {
										styleRow = 'style="font-size: 12px; font-weight: bold; color: green;"'; 
									} else {
										styleRow = 'style="font-size: 12px; font-weight: bold; color: orange;"'; 
									}
									lineProduct.push(Array(row[0], 
														   row[1], 
														   '<span style="font-size:13px;">$'+Math.round10(row[2], -1)+'</span>', 
														   row[3],
														   row[4],
														   row[5],
														   row[6],
														   row[7], 
														   row[8], 
														   row[9], 
														   row[10]));
							        row = []; 
							}
						 } ); 	
						 relatedProducts = lineProduct; 
						 listRelateds();
			 	}
			 }); 
	}


/* ************* Seleccionar valor atributos ***********/  
	function initModalIntegration() {
		$('.atributes-to-fill').html(''); 
		for(i in productData) {
			$('.atributes-to-fill').append('<p class="select-attrs attr_'+quitSpace(productData[i].type_attr)+'" attribute-name="'+productData[i].type_attr+'">'+productData[i].type_attr+'</p>');
		}

		var layout = ' <p class="mod-distributor-name">'+relatedProducts[0][0]+'</p> ' + 
                		' <div class="mod-attr-value"> ' + relatedProducts[0][8] 
                	  ' </div> '; 
        $('.mod-container-attrs').append(layout); 

        //alert(".attr_"+quitSpace(selectedAttr)); 
		$(".attr_"+quitSpace(selectedAttr)).addClass('selected-attr'); 
	}

	$('.selectAttrsVal').click(function() {	
		initModalIntegration(); 
	}); 

	function renderValuesRelated() {
			$('.mod-container-attrs').html(''); 
			viewData.forEach(function(val) {
			if( selectedAttr == val.type_attr ) {
				var layout = '<div class="mod-container-attr" data-dismiss="modal"> <p class="mod-distributor-name">'+val.ID + ' - ' + getDistributor(val.ID) + '</p> ' + 
                		' <div class="mod-attr-value"> ' + val.value_attr + 
                	  ' </div> </div>'; 
               	$('.mod-container-attrs').append(layout);  
               	$('body').off('click', '.mod-distributor-name'); 
               	$('body').on('click', '.mod-distributor-name', function(event){ 
               		if ( selectedAttr == 'description' || selectedAttr == 'short_description') {
               			$('#'+selectedAttr).summernote('code', $(event.target).next().html());  
               		} else {
               			console.log($(event.target).next().html()); 
               			$('#'+quitSpace(selectedAttr)).val($(event.target).next().html());  
               		}
               	} );
			}
		});
	}

	// Renderizar valores de productos para Seleccionar 

	$('body').on('click', '.select-attrs', function(event){
		selectedAttr = $(event.target).attr('attribute-name');  
		$('.selected-attr').removeClass('selected-attr'); 
		$(event.target).addClass('selected-attr'); 
		renderValuesRelated();
	}); 

	function getDistributor(idProd) {
		var distributor = '----'; 
		viewData.forEach(function(val) {
			if( val.type_attr == 'distributor' && parseInt(val.ID) == parseInt(idProd) ) {
				distributor = val.value_attr; 
			}
		});
		return distributor; 
	}

}); 


