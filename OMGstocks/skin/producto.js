
var productData = null; 
$(document).ready(function(){ 

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
			  		  		$('.attributes_product').append('<div class="form-group">' + 
		                        ' <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>' + 
		                        ' <div class="col-sm-10"> ' + 
		                         ' <form method="post"> ' + 
		                                ' <textarea style="width: 100%;" id="summernote" name="editordata"></textarea>' + 
		                         ' </form>' + 
		                        ' </div> ' + 
		                       ' </div>'); 
			  		  		$('#summernote').summernote({
								 	height : 200
								});
			  		  		var description = productData[x].value_attr; 
			  				$('#summernote').summernote('code', description);  
			  		  } else {
						  $('.attributes_product').append( '<div class="form-group">'+ 
		                        '<label for="inputEmail3" class="col-sm-2 control-label">'+productData[x].type_attr+'</label>' + 
		                        ' <div class="col-sm-10">' + 
		                          ' <input type="input" id="data-product-name" placeholder="cargando..." value="'+productData[x].value_attr+'" class="form-control" name="">' + 
		                        ' </div> ' + 
		                      ' </div> '); 
			  		  }
					}
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


