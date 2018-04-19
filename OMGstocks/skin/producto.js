
var productData = null; 

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

	function getGallery () {
		$.ajax({
		 	url: 'controladores/getGallery.php', 
		 	method: 'POST', 
		 	data: { 
		 			idProd : productData[0].ID 
		 			}, 
		 	success: function(mensaje){
		 		  var gallery = JSON.parse(mensaje); 
		 		   for( var i in gallery ) {
		 		   		var element = '<li><img src="media/'+gallery[i].url+'"><p><a href="media/'+gallery[i].url+'">ver</a></p></li>';  
		 		  		$('#entityGallery').append(element);  
		 		   }
		 		   $('#entityGallery').off('click'); 
		 		   $('#entityGallery').on('click', 'img', function(event) {
		 		   		   console.log($(event.target).parent().find('a').attr('href') ); 
		 		   		   $('#urlImg').val($(event.target).parent().find('a').attr('href')); 
				 		   $('#infoImg').modal({
										        show: 'false'
										    }); 
		 		   }); 

		 	}
		 });
	}

$(document).ready(function(){ 

	// Obtener galería 


	$('#saveProduct').click(function() {
		var selecteds = $('.tree-categories input:checked'); 
		var idCatSelecteds = []; 

		for( x = 0; x < selecteds.length; x++ ) { 
			var idCat = $( $(selecteds[x]).parent() ).attr('id'); 
			idCatSelecteds.push( idCat.substr(5, idCat.length) ); 
		}

		console.log(idCatSelecteds); 
		 
		for( i in productData) {
			productData[i].localValue = $('#'+quitSpace(productData[i].type_attr)).val(); 
			//console.log( $('#'+quitSpace(productData[i].type_attr)).val() ); 
		}
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

	var idProd = null; //id producto general 
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
	 		  //alert(mensaje); 
	 		  productData = JSON.parse(mensaje);   

	 		  /*
	 		  console.log(productData); 
	 		  //$('#data-product-name').html( productData[0].value_attr );
			  $('#data-product-name').val( productData[0].value_attr );
	 		  $('#data-product-sku').val( productData[1].value_attr ); 
	 		  $('#data-product-mainImg').attr('src', productData[7].value_attr ); 
	 		  var description = productData[8].value_attr; 
			  $('#summernote').summernote('code', description); */ 

			  for( x in productData ){  
			  		  if( productData[x].type_attr == 'short_description' ) {

			  		  		data = '<div class="form-group">' + 
		                        ' <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>' + 
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
		                          ' <input type="input" id="'+quitSpace(productData[x].type_attr)+'" placeholder="cargando..." value="'+productData[x].value_attr+'" class="form-control" name="">' + 
		                        ' </div> ' + 
		                      ' </div> '; 
						  //$('.attributes_product').append(data); 
							$(data).prependTo($('.attributes_product')).slideDown('fast');  

			  		  }
					}
					getGallery(); 

						
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


