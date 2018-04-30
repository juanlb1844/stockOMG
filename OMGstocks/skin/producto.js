
var productData = null; 
var main_img_data = null; 
var img_to_main = null; 
var url_to_main = null; 

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

	// obtener galería del producto 
	function getGallery () {
		$.ajax({
		 	url: 'controladores/getGallery.php', 
		 	method: 'POST', 
		 	data: {  idProd : productData[0].ID  }, 
		 	success: function(mensaje){
		 		  var gallery = JSON.parse(mensaje); 
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
		 });
	}

$(document).ready(function(){ 

	$('#saveImg').click( function() {
		var idProduct = productData[0].ID; 
		//alert('to main: ' +url_to_main); 

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
		/* alert('main: ' +main_img_data.url); 
		alert('id to main: ' +img_to_main); */ 
		//alert(idProduct);  
		
	
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
		 			idProd : productData[0].ID 
		 			}, 
		 	success: function(mensaje){
		 		  console.log(mensaje); 
		 		  window.location.reload(); 
		 	}
		 });
		console.log( productData ); 
	}); 

	//id producto general 
	var idProd = null; 
	$('#summernote').summernote({
	 	height : 200
	});


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
		                        ' <label for="inputPassword3" class="col-sm-2 control-label">Description</label>' + 
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
		                        ' <label for="inputPassword3" class="col-sm-2 control-label">Short description</label>' + 
		                        ' <div class="col-sm-10"> ' + 
		                         ' <form method="post"> ' + 
		                                ' <textarea style="width: 100%;" id="'+productData[x].type_attr+'" name="editordata"></textarea>' + 
		                         ' </form>' + 
		                        ' </div> ' + 
		                       ' </div>'; 

			  		  		$('.attributes_product').append(data); 

			  		  		//$(data).prependTo($('.attributes_product')).slideDown("fast");

			  		  		$('#'+productData[x].type_attr).summernote({
								 	height : 200
								});
			  		  		var description = productData[x].value_attr; 
			  				$('#'+productData[x].type_attr).summernote('code', description);  
			  		  } else {
			  		  		data = '<div class="form-group">'+ 
		                        '<label for="inputEmail3" class="col-sm-2 control-label">'+productData[x].type_attr+'</label>' + 
		                        ' <div class="col-sm-10">' + 
		                          ' <input type="input" id="'+quitSpace(productData[x].type_attr)+'" placeholder="cargando..." value="'+productData[x].value_attr+'" class="form-control input-sm" name="">' + 
		                        ' </div> ' + 
		                      ' </div> '; 
							$(data).prependTo($('.attributes_product')).slideDown('fast');  

			  		  }

				}
				
			// Agregar datos a table [relación de coincidencias de porductos por proveedor]
			for(var i in productData) {
				if(productData[i].type_attr == 'distributor') {
	  		  		$('#relationDis').text(productData[i].value_attr); 
				} else if ( productData[i].type_attr == 'Name Product' ) {
					$('#relationName').text(productData[i].value_attr); 
				} else if ( productData[i].type_attr == 'SKU' ) {
					$('#relationSku').text(productData[i].value_attr); 
				} else if ( productData[i].type_attr == 'stock' ) {
					$('#relationStock').text(productData[i].value_attr); 
				} else if ( productData[i].type_attr == 'Normal Price' ) {
					$('#relationPrice').text(productData[i].value_attr); 
				}
			}

			getGallery(); 
			// Seleccionar categorías a las que pertenece 	
			$.ajax({
			 	url: 'controladores/getRelationCategory.php', 
			 	method: 'POST', 
			 	data: { idProd: productData[0].ID,  
			 			}, 
			 	success: function(mensaje){
			 		  var relation = JSON.parse(mensaje); 
			 		  console.log(relation); 
			 		  for( var i = 0; i < relation.length; i++) {
			 		  	var idRel = relation[i].category_id_categories; 
			 		  	$('.tree-categories #idCat'+idRel+' input').first().attr('checked', true); 
			 		  }
			 	}
			 });
	
	 	}
	 });
	
	$('#getDescription').on('click', function(){
		var markupStr = $('#summernote').summernote('code');
		alert( markupStr ); 
		alert(idProd);
		$.ajax({
		 	url: 'controladores/setSaveProduct.php', 
		 	method: 'POST', 
		 	data: { idProd: idProd, 
		 			description: markupStr  
		 			}, 
		 	success: function(mensaje){
		 		  alert(mensaje); 
		 	}
		 });
	}); 

}); 


