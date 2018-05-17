(function() {

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

	
$(document).ready(function() {
	$('#generalSearch').click(function() {
	var val_to_search = $('#attr_val_search').val(); 
	initFeedWindow('controladores/generalSearch.php', { attr_val : val_to_search });  
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


	// Envíar datos para nueva categoría  
	$('#newCategoryBtn').click(function() {
		alert('..'); 
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

	// Modal editar Categoria 
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
				window.location.href = "?p=feedLocal"; 
			} 
		}); 
	}); 
}); 


// -- Obtener productos para la tabla 

	function initFeedWindow(url, dataService) {
		 $('#tableFeed').html('<div style="text-align: center; padding-top:150px; padding-bottom: 150px;"> <img src="media/users/loading.gif" style="width:70px;"> <div>');
		 $.ajax({
			 	url: url, 
			 	type: 'post', 
			 	data: dataService, 
			 	success: function(mensaje){
			 			console.log(mensaje); 
			 			 if(mensaje == 'sin datos') {
			 			 	$("#tableFeed").html('<h2>Sin datos</h2>'); 
			 			 	return; 
			 			 }
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
		            	window.location.href = "?p=producto&idProducto="+idProd;   
		            }); 
	        } 
	    });		 
	}   
