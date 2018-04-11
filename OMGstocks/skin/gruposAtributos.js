$(document).ready( function() {

		class setData {
			construct(attribute, type) {
				this.nombre = attribute; 
				this.type   = type; 
			}
		}

		 $.ajax({
		 	url: 'controladores/getAttributes.php', 
		 	method: 'POST', 
		 	data: { idProd: 7348, 
		 			  type: 'showProduct'
		 			}, 
		 	success: function(mensaje){
		 		  		productData = JSON.parse(mensaje);   
				  		for( x in productData ){  
						 		 $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th><td>""</td>'+ 
						  		'<td>'+productData[x].name_attribute+'</td>'+ 
						  		'<td>'+productData[x].type_value+'</td>'); 
							}  
		 	  }
		 });

		 $('.tree-categories').click(function(event){
			$('.tree-categories li').css('font-weight', '400'); 
			$(event.target).css('font-weight', 'bold'); 
			$(event.target).addClass('selected-category');
		});

		getCategories(); 
		function getCategories() {
			$.ajax({
				url : 'controladores/getCategories.php', 
				method : 'post', 
				data: {}, 
				success : function(response) {
					var categories = JSON.parse(response);
					$('.tree-categories').html(''); 
					for( var key in categories ) { 
						if( (categories[key].id_category == 1 || categories[key].parent_id == null ) ) {
							var urlImg = "skin/media/folder-open.png"; 
							var idCat = categories[key].id_category; 
							$('.tree-categories').append('<li id="idCat'+idCat+'"><img src="'+urlImg+'">'+categories[key].name_category+'</li>'); 
						} else {
							var nameCategory = categories[key].name_category; 
							var idCategory = categories[key].id_category; 
							var parentId = categories[key].parent_id; 
							if ( $($('#idCat'+parentId).find('ul')).html() != null && parentId != 1) {
								$($('#idCat'+parentId).find('ul')).append('<li id="idCat'+idCategory+'"><img src="'+urlImg+'">'+nameCategory+'</li>');
							} else {
								$('#idCat'+parentId).append('<ul><li id="idCat'+idCategory+'"><img src="'+urlImg+'">'+nameCategory+'</li></ul>'); 
							}
						}
					}
				} 
			}); 
		} 
}); 