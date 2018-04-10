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

		 $('.tree-categories').click(function(event){
			$('.tree-categories li').css('font-weight', '400'); 
			console.log($(event.target).css('font-weight', 'bold'));
			$(event.target).addClass('selected-category');
			var cadIdCat = $(event.target).attr('id');
			cadIdCat = cadIdCat.substr( 5, cadIdCat.length );  
			dataLocalCategory.idCatSelected = cadIdCat;  
			//alert( cadIdCat );	
		});
}); 