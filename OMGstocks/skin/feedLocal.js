

// datos generales 
// ID de la categoría seleccionada | para editar / borrar  
// ID de la categoría por defecto 

var dataLocalCategory = {
			idCatSelected : 1
	};  

var F2 = []; 

$(document).ready( function(){


/* FILTRO OBJECTS ---------------------------------------  */ 
function filterFee(config) {
	this.config = config ; 
	this.brand = 'brandAction'; 

	this.initFilter = function() {
		$(this.config.selector).html('');  
		$(this.config.selector).parent().find('.filter-n-res').text(config.response.length); // indicador de cantidad
  		for(i in config.response) {
			var element = '<p class="'+this.brand+'">'+config.response[i].varchar_value+'</p>'; 
  			$(this.config.selector).append(element); 
  		}
  		// Subscribir eventos 
  		$(this.config.selector).off('.'+this.brand); 
  		filterSec = this.config.selector;
  		$(filterSec).off('click', '.'+this.brand);  
  		$(filterSec).on('click', '.'+this.brand, this.actionFilter); 
	}
	this.actionFilter = function (event) {
		var string = null; 
		string = $(event.target).text();  
		// cargar los productos FILTRADOS 
		initFeedWindow('controladores/getProductByBrand.php', { attrName : config.attrName , attrValue : string }); 
		var element =  '<p class="brandResult">'+string+  
							'<span class="close-filter">&times</span>'+ 
						'</p>'; 
		$(config.selector).html(element);   
		$(config.selector +' .brandResult').on('click', '.close-filter', function() {
			getFilters('controladores/getMarcas.php', {attrName : config.attrName, filterType : 0}, config.selector);  //mostrar TODAS las marcas 
		}); 
	}
	this.restartFilter = function() {
		$(this.config.selector).html(''); 
	}
}
/* FILTRO OBJECTS ---------------------------------------  */


	initFeedWindow('controladores/getProductsByCat.php', { idCat : 57 });  
	getCategories(); 
	filterStack = []; 
	getFilters('controladores/getMarcas.php', {attrName : 'marca', filterType: 0}, '.filter-brand');
	getFilters('controladores/getMarcas.php', {attrName : 'familia', filterType: 0}, '.filter-family');

	// obtiene y renderiza los filtros || marca | stock | grupo por defecto desde el WS | etc.. 
	function getFilters(url, data, selector) {
			$.ajax({
		 	url: url, 
		 	method: 'POST', 
		 	data: data , 
		 	success: function(response){
		 		  if( response != 'sin datos' ) {
		 		  		// añadir elementos del filtro 
		 		  		response = JSON.parse(response);
		 		  		console.log('................'); 
		 		  		console.log(response);   
						F1 = new filterFee({response : response, selector : selector, attrName : data.attrName }); 
						F1.initFilter(); 
						filterStack.push(F1);
						F2.push(F1);  
		 		  } else {  
		 		  			$('.filter-content').html(''); 
		 		  			$('.filter-n-res').text('0');
		 		  			$('.filter-content').append('<p> . . . </p>');
		 		  		 } 
		 		}
		    });
	}
 

	var globalLocation = window.location.href; 

	//Cambiar categoría seleccionada 
	$('.tree-categories').click(function(event){
		$('.tree-categories li').css('font-weight', '400');
		$('.tree-categories li').css('color', '#333333');
		$(event.target).css('font-weight', 'bold'); 
		$(event.target).css('color', '#337ab7'); 
		$(event.target).addClass('selected-category');
		var cadIdCat = $(event.target).attr('id');
		cadIdCat = cadIdCat.substr( 5, cadIdCat.length );
		dataLocalCategory.idCatSelected = cadIdCat; 
		if( cadIdCat == 58) {
				$('#tableFeed').html('<h2>Selecciona un filtro</h2>');
				getFilters('controladores/getMarcas.php', {attrName : 'marca', filterType: 0}, '.filter-brand');
				getFilters('controladores/getMarcas.php', {attrName : 'familia', filterType: 0}, '.filter-family');
		} else if( cadIdCat == 1) {
				initFeedWindow('controladores/core.php', { url : '', type: 'user-view' }); 
		} else {
				initFeedWindow('controladores/getProductsByCat.php', { idCat : cadIdCat });  
				window.history.pushState('page2', 'Feed Local', globalLocation+'/categorie/'+cadIdCat); 				
				getFilters('controladores/getAttrsByCat.php', { idCat : cadIdCat, attrName : 'marca' }, '.filter-brand'); 
				getFilters('controladores/getAttrsByCat.php', { idCat : cadIdCat, attrName : 'familia' }, '.filter-family'); 
		}
	});


	$('body').off('click', '.tree-categories ul'); 
	$('body').on('click', '.tree-categories ul', function (event) { 
		console.log($(event.target).find('ul').first().css('display')+'--'); 
		if( $(event.target).find('ul').first().css('display') == 'block') 
			$(event.target).find('ul').slideUp(); 
		else 
			$(event.target).find('ul').slideDown(); 
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





}); 