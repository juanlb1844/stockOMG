
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
	 		  var productData = JSON.parse(mensaje);   
	 		  console.log(productData); 
	 		  //$('#data-product-name').html( productData[0].value_attr );
			  $('#data-product-name').val( productData[0].value_attr );
	 		  $('#data-product-sku').val( productData[1].value_attr ); 
	 		  $('#data-product-mainImg').attr('src', productData[7].value_attr ); 
	 		  var description = productData[8].value_attr; 
			  $('#summernote').summernote('code', description);
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


