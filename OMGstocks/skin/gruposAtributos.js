$(document).ready( function() {

		 $.ajax({
		 	url: 'controladores/getProducto.php', 
		 	method: 'POST', 
		 	data: { idProd: 7348, 
		 			  type: 'showProduct'
		 			}, 
		 	success: function(mensaje){
		 		  productData = JSON.parse(mensaje);   
		 		  console.log(productData); 
		 		  
				  for( x in productData ){  
						  $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th><td>""</td>'+ 
						  		'<td>'+productData[x].type_attr+'</td>'+ 
						  		'<td>'+productData[x].ID+'</td>'); 
						} 
		 	}
		 });

}); 