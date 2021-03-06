$(document).ready( function() {
		getCategories(); 

		var dataLocalCategory = {
			idCatSelected : 1
		}; 

		// Armar árbol de categorías 
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
							$('.tree-categories').append('<li id="idCat'+idCat+'"><input type="checkbox"><img src="'+urlImg+'">'+categories[key].name_category+'</li>'); 
						} else {
							var nameCategory = categories[key].name_category; 
							var idCategory = categories[key].id_category; 
							var parentId = categories[key].parent_id; 
							if ( $($('#idCat'+parentId).find('ul')).html() != null && parentId != 1) {
								$($('#idCat'+parentId).find('ul')).append('<li id="idCat'+idCategory+'"><span class="tree-child"></span><input type="checkbox"><img src="'+urlImg+'">'+nameCategory+'</li>');
							} else {
								$('#idCat'+parentId).append('<ul><li id="idCat'+idCategory+'"><span class="tree-child"></span><input type="checkbox"><img src="'+urlImg+'">'+nameCategory+'</li></ul>'); 
							}
						}
					}
					$('body').off('click', '.tree-categories ul'); 
					$('body').on('click', '.tree-categories ul', function (event) { 
													console.log($(event.target).find('ul').first().css('display')+'--'); 
													if( $(event.target).find('ul').first().css('display') == 'block') 
														$(event.target).find('ul').slideUp(); 
													else 
														$(event.target).find('ul').slideDown(); 
												}); 
				} 
			}); 
		} 

		//Cambiar categoría seleccionada 
		$('.tree-categories').click(function(event){
			$('.tree-categories li').css('font-weight', '400'); 
			console.log($(event.target).css('font-weight', 'bold'));
			$(event.target).addClass('selected-category');
			var cadIdCat = $(event.target).attr('id');
			cadIdCat = cadIdCat.substr( 5, cadIdCat.length );  
			dataLocalCategory.idCatSelected = cadIdCat;  
		});
}); 