var idCatSelected = 1; 
var attributes = null; 
var idAttr = 0; 
var attrsByCats = null; 
var idAttributeEdit = null; 
$(document).ready( function() {

		class setData {
			construct(attribute, type) {
				this.nombre = attribute; 
				this.type   = type; 
			}
		}


		$('.line-switch').click( function( ) {
		    if( !$(this).children().hasClass('active-switch') ) {
		         $('.bullet-switch').addClass('active-switch');
		         Notification.requestPermission();
		          $('.from-attribute input').attr('disabled'); 
		          $('.form-attribute input').attr('disabled', 'disabled'); 
		 	 	  $('.form-attribute select').attr('disabled', 'disabled'); 
		 	 	  $('.title-action-attr').text('Seleccionar'); 
		 	 	  $('#selectAttribute').removeAttr('disabled'); 
		 	 	  $('#selectAttribute').selectpicker('refresh');
		    } else {
		          $('.bullet-switch').removeClass('active-switch'); 
		          $('.form-attribute input').removeAttr('disabled');   
		 	 	  $('.form-attribute select').removeAttr('disabled');
		 	 	  $('.title-action-attr').text('Nuevo'); 
		 	 	  $('#selectAttribute').attr('disabled', 'disabled'); 
		 	 	  $('#selectAttribute').selectpicker('refresh');
		     }
		}); 

		$('#selectAttribute').change(function(){
			var idCatSelected = $('#selectAttribute option:selected').attr('idAttribute');
			idAttr = idCatSelected; 
		 	for( x in attributes) {
		 		if( attributes[x].id_attribute == idCatSelected ) {
		 			$('#nameAttribute').val( attributes[x].name_attribute ); 
		 			$('#attributeType').val( attributes[x].type_value ); 
		 			$('#defaultValue').val( attributes[x].default_value );
		 		}
		 	}
		}); 
		
		getAttributes(function(mensaje){
		  	productData = JSON.parse(mensaje); 
		  	attributes = productData; 
		  	attrsByCats = productData; 
		  	var def = "";  
	  		for( x in productData ){  
			 		 $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th>'+
			 		 	'<td>"'+(productData[x].default_value == null ? def : productData[x].default_value)+'"</td>'+ 
			  			'<td>'+productData[x].name_attribute+'</td>'+ 
			  			'<td>'+productData[x].type_value+'</td>'+ 
			  			'<td>'+productData[x].id_attribute+'</td>');

			  		$("#selectAttribute").append('<option idAttribute="'+productData[x].id_attribute+'" value="Attr">'+productData[x].name_attribute+'</option>'); 
				}  
			$("#selectAttribute").selectpicker("refresh");  

			$('.attributes').off('click'); 
			$('.attributes').on('click', 'tr', function(event) {
				idAttributeEdit = $($($(event.target).parent().find('td'))[3]).text(); 
				for( x in attrsByCats) { 
										if( attrsByCats[x].id_attribute == idAttributeEdit ) {
											var nameAttr = attrsByCats[x].name_attribute; 
											var dataType = attrsByCats[x].type_value; 
											var defaultValue = attrsByCats[x].default_value; 
											$('#editNameAttr').val(nameAttr); 
											$('#editDataType').val(dataType); 
											$('#editDefaultData').val(defaultValue); 
										}
									}
				  $('#editAttribute').modal({
				        show: 'false'
				    }); 

			}); 

		}); 

		$('#editSaveAttr').click(function() {
			var nameAttr = $('#editNameAttr').val(); 
			var dataType = $('#editDataType').val(); 
			var defaultValue = $('#editDefaultData').val(); 
			 $.ajax({
			 	url: 'controladores/editAttribute.php', 
			 	method: 'POST', 
			 	data: { idAttr : idAttributeEdit, 
			 			nameAttr : nameAttr, 
			 			dataAttr : dataType, 
			 			defaultAttr : defaultValue
			 			}, 
			 	success: function(response) {
			 		window.location.href="?p=grupos_atributos"; 
			 	}
			 });

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
		 	alert(idAttr); 
		 	var nameAttribute = $('#nameAttribute').val(); 
		 	var typeData = $('#attributeType').val(); 
		 	var defaultValue = $('#defaultValue').val(); 

		 	var exist = null; 
		 	if ( $('.bullet-switch').hasClass('active-switch') ) {
		 		exist = 'seleccionado'; 
		 	} else {
		 		exist = 'nuevo';  
		 	}

		 	alert(exist); 

		 	if( (idCatSelected == 1) && (exist == 'nuevo')) {
		 		alert('Seleccione una Categoría..'); 
		 		return;  
		 	}
		 	if( (nameAttribute.length < 1) && (exist == 'nuevo')) {
		 		alert('Asigne un nombre'); 
		 		return; 
		 	}		 	

		 	$.ajax({
			 	url: 'controladores/setSaveAttribute.php', 
			 	method: 'POST', 
			 	data: { nameAttribute : nameAttribute, 
			 			typeData : typeData, 
			 			defaultData : defaultValue, 
			 			idCatSelected : idCatSelected, 
			 			idAttr : idAttr  
			 			}, 
			 	success: function(response){
			 		  		window.location.href = "?p=grupos_atributos"; 
			 	  }
		 	});  
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
					 			if(response != 'sin datos') { 
					 		  		dataAttributes = JSON.parse(response);
					 		  		attrsByCats = dataAttributes; 
					 		  		console.log(attrsByCats);
					 		  		iter = dataAttributes;  
					 		  		var deff = ''; 
					 		  		$('.attributes').html(''); 
					 		  		for( x in attrsByCats ){  
								 		 $('.attributes').append('<tr><th scope="row">'+(parseInt(x)+1)+'</th>'+
								 		'<td>'+(attrsByCats[x].default_value == null ? deff : attrsByCats[x].default_value)+'</td>'+ 
								  		'<td>'+attrsByCats[x].name_attribute+'</td>'+ 
								  		'<td>'+attrsByCats[x].type_value+'</td>'+ 
								  		'<td>'+attrsByCats[x].id_attribute+'</td>');
									}  

									$('.attributes').off('click'); 
									$('.attributes').on('click', 'tr', function(event) {
										idAttributeEdit = $( $($(event.target).parent().find('td'))[3]).text(); 
										for( x in attrsByCats) { 
											if( attrsByCats[x].id_attribute == idAttributeEdit ) {
												var nameAttr = attrsByCats[x].name_attribute; 
												var dataType = attrsByCats[x].type_value; 
												var defaultValue = attrsByCats[x].default_value; 
												$('#editNameAttr').val(nameAttr); 
												$('#editDataType').val(dataType); 
												$('#editDefaultData').val(defaultValue); 
											}
										}
										$('#editAttribute').modal({
									        show: 'false'
									    }); 
									}); 
						 	  } else {
						 	  	$('.attributes').html('').append('<tr><td>Sin atributos</td><td></td><td></td><td></td><td></td></tr>');
						 	  } // 
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