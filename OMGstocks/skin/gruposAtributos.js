var idCatSelected = 1; 
var attributes = null; 
$(document).ready( function() {

		
				 
	   			 


		class setData {
			construct(attribute, type) {
				this.nombre = attribute; 
				this.type   = type; 
			}
		}

		$('#selectAttribute').change(function(){
			var idCatSelected = $('#selectAttribute option:selected').attr('idAttribute');
		 	for( x in attributes) {
		 		if( attributes[x].id_attribute == idCatSelected ) {
		 			$('#nameAttribute').val( attributes[x].name_attribute ); 
		 			$('#attributeType').val( attributes[x].type_value ); 
		 		}
		 	}
			alert(idCatSelected);  
		}); 
		
		getAttributes(function(mensaje){
			 		  		productData = JSON.parse(mensaje); 
			 		  		attributes = productData; 
					  		for( x in productData ){  
							 		 $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th><td>""</td>'+ 
							  		'<td>'+productData[x].name_attribute+'</td>'+ 
							  		'<td>'+productData[x].type_value+'</td>');

							  		$("#selectAttribute").append('<option idAttribute="'+productData[x].id_attribute+'" value="Attr">'+productData[x].name_attribute+'</option>'); 
								}  
							$("#selectAttribute").selectpicker("refresh");  
		}); 


		function getAttributes(action) {
			 $.ajax({
			 	url: 'controladores/getAttributes.php', 
			 	method: 'POST', 
			 	data: { idProd: 7348, 
			 			  type: 'showProduct'
			 			}, 
			 	success: action  
			 });
		}


		 $('#saveAttribute').click( function() {
		 	var nameAttribute = $('#nameAttribute').val(); 
		 	var typeData = $('#attributeType').val(); 
		 	
		 	alert(nameAttribute); 
		 	if(idCatSelected == 1) {
		 		alert('Seleccione una Categoría..'); 
		 		return; 
		 	}
		 	$.ajax({
			 	url: 'controladores/setSaveAttribute.php', 
			 	method: 'POST', 
			 	data: { nameAttribute: 'nombre del atributo', 
			 			typeData : 'typo de dato', 
			 			defaultData: 'TEXTO', 
			 			idCatSelected : idCatSelected  
			 			}, 
			 	success: function(response){
			 		  		alert(response); 
			 	  }
		 	})
		 }); 

		 $('.tree-categories').click(function(event){
				$('.tree-categories li').css('font-weight', '400'); 
				$(event.target).css('font-weight', 'bold');
				idCatSelected = ($($(event.target)).attr('id'));
				idCatSelected = idCatSelected.substr(5, idCatSelected.length);  
				$(event.target).addClass('selected-category');
					$.ajax({
					 	url: 'controladores/getAttributesByCat.php', 
					 	method: 'POST', 
					 	data: { idCat: idCatSelected }, 
					 	success: function(response){
					 		  		dataAttributes =  JSON.parse(response);
					 		  		iter = dataAttributes;  
					 		  		$('.attributes').html(''); 
					 		  		console.log(dataAttributes); 
					 		  		for( x in dataAttributes ){  
								 		 $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th><td>""</td>'+ 
								  		'<td>'+dataAttributes[x].name_attribute+'</td>'+ 
								  		'<td>'+dataAttributes[x].type_value+'</td>');
									}  
					 	  }
					 });
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