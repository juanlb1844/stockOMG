(function() {
  /**
   * Ajuste decimal de un número.
   *
   * @param {String}  tipo  El tipo de ajuste.
   * @param {Number}  valor El numero.
   * @param {Integer} exp   El exponente (el logaritmo 10 del ajuste base).
   * @returns {Number} El valor ajustado.
   */
  function decimalAdjust(type, value, exp) {
    // Si el exp no está definido o es cero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Si el valor no es un número o el exp no es un entero...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  // Decimal round
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  // Decimal floor
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  // Decimal ceil
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
})();

var dataLocalCategory = {
			idCatSelected : 1
		}; 

$(document).ready( function(){

		initFeedWindow('controladores/core.php', { url : '', type: 'user-view' }); 
		getCategories(); 

		// Colocar datos en modal 
		$('#editCatBtn').click(function() {
			$.ajax({
				url: 'controladores/getCategories.php', 
				method: 'POST', 
				data: {
					idCat : dataLocalCategory.idCatSelected 
				},
				success: function(response) {
					var category = JSON.parse(response); 
					$('#editCategoryName').val(category[0].name_category); 
					$('#editCategoryDesc').val(category[0].description_category); 
					$('#editCategoryMeta').val(category[0].meta_description_category); 
					//window.location.href = "?p=feedLocal"; 
				} 
			}); 
		}); 

		// Envíar datos para editar 
		$('#editCategoryBtn').click(function() {
			var catName = $('#editCategoryName').val(); 
			var catDesc = $('#editCategoryDesc').val(); 
			var catMeta = $('#editCategoryMeta').val(); 

			if(catName.length < 1) {
				alert('Dato obligatorio'); 
				return; 
			}
			$.ajax({
				url: 'controladores/editCategory.php', 
				method: 'POST', 
				data: {
					catName : catName, 
					catDesc : catDesc, 
					catMeta : catMeta, 
					catParent : dataLocalCategory.idCatSelected 
				},
				success: function(response) {
					alert(response); 
					window.location.href = "?p=feedLocal"; 
				} 
			}); 
		}); 

		// Envíar datos para nueva categoría  
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
					alert(response); 
					window.location.href = "?p=feedLocal"; 
				} 
			}); 	
		}); 

		// Borrar categoría 
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

				/* 
		$.ajax({
				url: 'controladores/getProductsByCat.php', 
				method: 'POST', 
				data: {
					idCat : 52
				},
				success: function(response) {
					var category = JSON.parse(response); 
					console.log(category); 
				} 
			}); */ 


		//Cambiar categoría seleccionada 
		$('.tree-categories').click(function(event){
			$('.tree-categories li').css('font-weight', '400');
			$('.tree-categories li').css('color', '#333333');
			console.log($(event.target).css('font-weight', 'bold'));
			$(event.target).css('color', '#337ab7'); 
			$(event.target).addClass('selected-category');
			var cadIdCat = $(event.target).attr('id');
			cadIdCat = cadIdCat.substr( 5, cadIdCat.length );  
			dataLocalCategory.idCatSelected = cadIdCat; 
			if( cadIdCat == 1) {
					initFeedWindow('controladores/core.php', { url : '', type: 'user-view' }); 
			} else {
					initFeedWindow('controladores/getProductsByCat.php', { idCat : cadIdCat });  
			}
		});

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
							$('.tree-categories').append('<li id="idCat'+idCat+'"><img src="'+urlImg+'">'+categories[key].name_category+'</li>'); 
						} else {
							var nameCategory = categories[key].name_category; 
							var idCategory = categories[key].id_category; 
							var parentId = categories[key].parent_id; 
							if ( $($('#idCat'+parentId).find('ul')).html() != null && parentId != 1) {
								$($('#idCat'+parentId).find('ul')).append('<li id="idCat'+idCategory+'"><span class="tree-child"></span><img src="'+urlImg+'">'+nameCategory+'</li>');
							} else {
								$('#idCat'+parentId).append('<ul><li id="idCat'+idCategory+'"><span class="tree-child"></span><img src="'+urlImg+'">'+nameCategory+'</li></ul>'); 
							}
						}
					}
				} 
			}); 
		} 



		// -- Obtener productos para la tabla 


		function initFeedWindow(url, dataService) {
				 $('#tableFeed').html('<img src="media/users/loading.gif" style="width:70px;">');
				 $.ajax({
					 	url: url, 
					 	type: 'post', 
					 	data: dataService, 
					 	success: function(mensaje){
					 			 if(mensaje == 'sin datos') {
					 			 	$("#tableFeed").html('<h2>Sin datos</h2>'); 
					 			 	return; 
					 			 }
					 			 viewData = JSON.parse(mensaje); //datos brutos 
					 			 // LOCAL 
					 			 	var testObject = { 'one': 1, 'two': 2, 'three': 3 };
									// Put the object into storage
									localStorage.setItem('testObject', JSON.stringify(testObject));
									// Retrieve the object from storage
									var retrievedObject = localStorage.getItem('testObject');
									console.log('retrievedObject: ', JSON.parse(retrievedObject));
					 			 // LOCAL 
					 			 
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
											var styleRow = '';
											if(row[3] > 10) {
												styleRow = 'style="font-size: 12px; font-weight: bold; color: green;"'; 
											} else {
												styleRow = 'style="font-size: 12px; font-weight: bold; color: orange;"'; 
											}
											lineProduct.push(Array(row[4], 
																   row[0], 
																   row[1], 
																   '<div style="text-align:center;"><span '+styleRow+'>'+row[3]+'</span></div>', 
																   '<span style="font-size:13px;">$'+Math.round10(row[2], -1)+'</span>', 
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
		$('#tableFeed').html(''); 

		if(viewDataTable != null){ viewDataTable.destroy(); }

		viewDataTable = $('#tableFeed').DataTable( {
	        data: dataView, 
	        columns: [
	            { title: "<span style='font-size: 15px;'>Proveedor<span>"}, 
	            { title: "<span style='font-size: 15px;'>Nombre<span>"}, 
	            { title: "<span style='font-size: 15px;'>SKU<span>"}, 
	            { title: "<span style='font-size: 15px;'>Stock<span>"}, 
	            { title: "<span style='font-size: 15px;'>Precio<span>"}, 
	            { title: "<span style='font-size: 15px;'>Estado<span>"}, 
	            { title: "<span style='font-size: 15px;'>#ID<span>"}
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