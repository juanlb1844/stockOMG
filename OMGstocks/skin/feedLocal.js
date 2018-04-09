$(document).ready( function(){

		initFeedWindow(); 

		getCategories(); 



		// Feed Local Categories 
		$('#newCategoryBtn').click(function() {
			var catName = $('#formCategoryName').val(); 
			var catDesc = $('#formCategoryDesc').val(); 
			var catMeta = $('#formCategoryMeta').val(); 

			if(catName.length < 1) {
				alert('Dato obligatorio'); 
				return; 
			}
			$.ajax({
				url: 'controladores/newCategory.php', 
				method: 'POST', 
				data: {
					catName : catName, 
					catDesc : catDesc, 
					catMeta : catMeta, 
					catParent : dataLocalCategory.idCatSelected 
				},
				success: function(response) {
					//alert(response); 
					window.location.href = "?p=feedLocal"; 
				} 
			}); 

		}); 

		var dataLocalCategory = {
			idCatSelected : null 
		}; 

		$('#editCatBtn').click(function() {
			//alert(dataLocalCategory.idCatSelected); 
		}); 

		$('#deleteCategory').click(function() {
			$.ajax({
				url: 'controladores/deleteCategory.php', 
				method: 'POST', 
				data: {
					idCat : dataLocalCategory.idCatSelected ,  
				},
				success: function(response) {
					window.location.href = "?p=feedLocal"; 
				} 
			});
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

		$('#newCatBtn').click( function() {
			//alert(dataLocalCategory.idCatSelected);   
		}); 

		function getCategories() {
			$.ajax({
				url : 'controladores/getCategories.php', 
				method : 'post', 
				data: {}, 
				success : function(response) {
					var categories = JSON.parse(response);
					$('.tree-categories').html(''); 
					for( var key in categories ) { 
						if( categories[key].parent_id == 1 || categories[key].parent_id == null ) {
							var urlImg = "skin/media/folder-open.png"; 
							var idCat = categories[key].id_category; 
							$('.tree-categories').append('<li id="idCat'+idCat+'"><img src="'+urlImg+'">'+categories[key].name_category+'</a>'); 
						} else {
							var nameCategory = categories[key].name_category; 
							var idCategory = categories[key].id_category; 
							var parentId = categories[key].parent_id; 
							console.log('¿¿¿¿');
							if ( $($('#idCat'+parentId).find('ul')).html() != null ) {
								$($('#idCat'+parentId).find('ul')).append('<li id="idCat'+idCategory+'"><img src="'+urlImg+'">'+nameCategory+'</li>');
							} else {
								$('#idCat'+parentId).append('<ul><li id="idCat'+idCategory+'"><img src="'+urlImg+'">'+nameCategory+'</li></ul>'); 
							}
						}
					}
				} 
			}); 
		} 
		// -- Feed Local Categories 




		function initFeedWindow() {
				 $.ajax({
					 	url: 'controladores/core.php', 
					 	type: 'post', 
					 	data: { url : '', type: 'user-view' }, 
					 	success: function(mensaje){
					 			 viewData = JSON.parse(mensaje); //datos brutos 
					 			 lineProduct = [];
					 			 row = [];  
					 			 console.log(viewData); 
								 viewData.forEach( function(val) {  
									if( val.type_attr == 'Name Product') { 
										row.push( val.value_attr ); 
									} else if ( val.type_attr == 'SKU' ) {
										row.push( val.value_attr ); 
									} else if ( val.type_attr == 'Normal Price' ) {
										row.push( val.value_attr ); 
									}else if ( val.type_attr == 'stock' ) {
										row.push( val.value_attr ); 
									}else if ( val.type_attr == 'distributor' ) {
											row.push( val.value_attr ); 
											row.push(val.ID); 
											lineProduct.push(Array(row[4], 
																   row[0], 
																   row[1], 
																   row[3], 
																   row[2], 
																   '<span style="font-size: 14px; color:#03a87c;">&bullet; publicado</span>', 
																   row[5]));
									        row = []; 
									}
								 } ); 	
								 appendViewData(lineProduct);  
					 	}
					 }); 
			
	}

	/* 
     * 
     *   -- A P P E N D | VIEW DATA -- 
     * 
     */
     var viewDataTable = null; 

     function appendViewData(dataView){ 
		arr  = new Array(); 
		arr2 = new Array();
		console.log('...................');   
        console.log(dataView); 

		if(viewDataTable != null){ viewDataTable.destroy(); }

		viewDataTable = $('#tableFeed').DataTable( {
	        data: dataView, 
	        columns: [
	            { title: "Proveedor" },
	            { title: "Nombre" }, 
	            { title: "SKU" },
	            { title: "Stock" },
	            { title: "Precio" }, 
	            { title: "Estado"}, 
	            { title: "ID"}
	          ], 

	        initComplete: function() {
	        	 var app = this.api();
		            app.$('td').click( function (target) { 
		            	elems = $(event.target).parent().find('td'); 
		            	idProd = elems[6].innerHTML; 
		            	//window.location.href = "http://laptopmexico.mx/app-ws/front-end/ver-producto.html?idProd="+idProd;  
		            	window.location.href = "?p=producto&idProducto="+idProd;   
		            }); 
	        } 
	    });		 
	}   

}); 