
var checkDbCount      =  null; 
var checkDbCountFlat  =  null; 


$(document).ready(function() {

	// CREATE NOTIFIER 
	function notifier() {
		this.container = $('<div>'); 
		this.styles_notifier =  {
		'width': '400px', 
		'height' : '80px', 
		'background-color' : 'gray', 
		'position' : 'fixed', 
		'bottom' : '10px', 
		'right' : '10px', 
		'border-radius' : '4px'
		}
		this.iniciar = function() { 
			$(this.container).click(function(event){ $(event.target).fadeOut(); }); 
			$(this.container).html('<span>Se están cargando...</span>'); 
			$('body').append(this.container.css(this.styles_notifier)); 
		}
	}
 
	(new notifier()).iniciar();


	initModal(); 
	function initModal() {
		var grouposCva = ["TODO", "ACCESORIOS", "AIRE ACONDICIONADO", "ALARMAS", "ALMACENAMIENTO", "ANTENAS", 
						"  AUDIFONOS Y MICRO",  "AUDIO Y SONIDO", "BACK PACK (MOCHILA)", "BOCINAS",  "CABLEADO ESTRUCTURADO", 
						"  CABLES", "CAMARAS", "CONMUTADORES", "CONSUMIBLES",  "CONTROL DE ACCESO Y ASISTENCIA", 
						"  CONTROLES", "COPIADORA", "DIGITALIZADOR", "DISCOS DUROS", " EMPAQUES", "ENERGIA", 
						"  EQUIPOS DE AUDIO", "FAX", "FUNDAS", "GABINETES", "GAMES", "HERRAMIENTAS", "IMPRESORA DE AMPLIO FORMATO (PLOTTER)", 
						"  IMPRESORAS", "INSUMOS", "INSUMOS GHIA", "INTERFON", "JUGUETES", "KIOSKO", "LINEA BLANCA",
						"  MALETINES", "MAQUINAS DE COSER", "MAQUINAS DE ESCRIBIR", "MATERIALES PARA PRODUCCION GHIA", 
						"  MEMORIAS", "MONITORES", "MOUSE", "MUEBLES PARA OFICINA", 
						"  MULTIFUNCIONALES", "OPTICOS", "PARTES", "GAMERS", "PC'S", "PIZARRON", "POLIZA DE SERVICIO", 
						"  POLIZAS DE GARANTIA", "PORTA RETRATO DIGITAL", "PORTATILES", "PRESENTADOR", "PROCESADORES", 
						"  PRODUCTOS DE LIMPIEZA", "PROMOCIONALES", "PUNTO DE VENTA", "RACK", "RADIO RELOJ", "REDES", 
						"  REFACCIONES GHIA / HAIER", "RELOJES", "REPRODUCTORES", "SCANNER", "SERVICIOS METROCARRIER↵", 
						"  SERVIDORES", "SMART HOME", "SOFTWARE", "SOLUCION INTERWRITE", "SOLUCIONES GSM", 
						"  SOPORTES Y BASES ", "TABLETAS", "TARJETA CONTROLADORA", "TARJETA MADRE", 
						"  TECLADO Y MOUSE", "TECLADOS", "TELEFONIA", "TELEVISOR", "TIPO DE CONECTIVIDAD", 
						"  TRITURADORA DE DOCUMENTOS", "VENTILADORES", "VIDEO", "VIDEOCONFERENCIA", "VIDEOGRABADORES", "VIDEOPROYECTOR"]; 

		// Agregar a modal select 
		grouposCva.forEach(function(value, index) {
			$('#CVAgroups').append('<option>'+value.trim()+'</option>'); 
		}); 
		// Agregar a tabla select 
		grouposCva.forEach(function(value, index) {
			$('#CVAgroupsFlat').append('<option>'+value.trim()+'</option>'); 
		}); 
	}

	// REINICIAR  | Delete all related products 
	$('#deleteDataDB').click( function deleteAll() {
   		$.ajax({
			 	url: 'controladores/dataController.php', 
			 	method: 'POST', 
			 	data: { type: 'restart', 
			 		      WS: 'CVA' }, 
			 	success: function(mensaje){
				 		 	 alert(mensaje); 
					 	}
				});
   });

	// Compare FEED FLAT 
	$('#updateCompare').click(function() {
		$.ajax({
			 	url: 'controladores/compareFeedFlat.php', 
			 	method: 'POST', 
			 	data: { }, 
			 	success: function(response){
			 				if(response != 'sin datos') {
					 		 	 var comparedProducts = JSON.parse(response); 
					 		 	 console.log(comparedProducts); 
					 		 	 $('#comparedBody').html(''); 
					 		 	 for(i in comparedProducts) {
					 		 	 	$('#comparedBody').append('<tr>' + 
					 		 	 			'<td>'+ comparedProducts[i].sku  +'</td>'+ 
					 		 	 			'<td>'+ comparedProducts[i].precio  +'</td>'+ 
					 		 	 			'<td>'+ comparedProducts[i].name_product  +'</td>'+ 
					 		 	 		'</tr>'); 
					 		 	 }
			 				}
			 	}
			});
	}); 

	// Restart FLAT by attr WS button 
	$('.restart-flat').click(function(event){
		var name_flat = $(event.target).attr("ws"); 
		$(event.target).addClass('btn-loading').text(''); 
		$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'flat', action : 'restart', ws : name_flat}, 
						 	success: function(response){
							 		 	 console.log(response);
							 		 	 $(event.target).removeClass('btn-loading').text('Reiniciar'); 
						 	}
					});
	}); 

	// Export FLAT
	$('#exportCVAFlat').click(function(event) {
		checkDbCountFlat = setInterval(getFlatCount, 2000); 
		$('#countFlatCVA').append('<img class="respCVA" src="media/users/loading.gif" style="width:25px;">');
		var groupFlatCVA = $('#CVAgroupsFlat').val(); 
		var urlCva 		 = 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=%&grupo='+groupFlatCVA+'&clave=%&codigo=%&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0&dt=1&dc=1&upc=1';  
		console.log(urlCva); 
		$(event.target).addClass('btn-loading').text(''); 
		$.ajax({
			 	url: 'controladores/dataController.php', 
			 	method: 'POST', 
			 	data: {  type: 'flat', action : 'import', ws : 'CVA', url : urlCva}, 
			 	success: function(response){
			 				clearInterval(checkDbCountFlat);
			 				$('.respCVA').remove(); 
							$(event.target).removeClass('btn-loading').text('Actualizar'); 
							console.log(response);
							getFlatCount(); 
						}
				});
	});  

	$('#exportIngram').click(function(event) {
		$('#countFlatIngramMicro').append('<img class="respFlatIngram" src="media/users/loading.gif" style="width:25px;">');
		checkDbCountFlat = setInterval(getFlatCount, 2000); 
		$(event.target).addClass('btn-loading').text(''); 
		$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'flat', action : 'import', ws : 'Ingram'}, 
						 	success: function(response){	
							 		 	clearInterval(checkDbCountFlat);
										$(event.target).removeClass('btn-loading').text('Reiniciar'); 
							 		 	console.log(response);
							 		 	getFlatCount(); 
							 		 	$('.respFlatIngram').remove(); 
						 	}
					});
	});  

	$('#exportFlatTD').click(function(event) {
		$('#countFlatTD').append('<img class="respFlatTD" src="media/users/loading.gif" style="width:25px;">');
		checkDbCountFlat = setInterval(getFlatCount, 2000); 
		$(event.target).addClass('btn-loading').text('');
		$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'flat', action : 'import', ws : 'TechData'}, 
						 	success: function(response){
						 			 	 $(event.target).removeClass('btn-loading').text('Actualizar');
							 		 	 console.log(response);
							 		 	 clearInterval(checkDbCountFlat); 
										 $('.respFlatTD').remove(); 
										 getFlatCount(); 
						 	}
					});
	}); 

	// Get flat count 
	getFlatCount(); 
	getRelatedCount(); 
	function getRelatedCount() {
		console.log('inicio..'); 
		$.ajax({
			 	url: 'controladores/getFlatCount.php', 
			 	method: 'POST', 
			 	data: { type : 'related' }, 
			 	success: function(response){ 
			 				if(response != 'sin datos') {
			 				 	 var countRelated = JSON.parse(response); 
					 		 	 for(i in countRelated) {
					 		 	 	 var provider = countRelated[i].provider_name;
					 		 	 	 var provider_c = countRelated[i].cant_entities;
					 		 	 	 switch(provider) {
					 		 	 	 	case 'Tech Data' : $('#countTD').html(provider_c);  
					 		 	 	 	break; 
					 		 	 	 	case 'CVA' : $('#countCVA').html(provider_c); 
					 		 	 	 	break; 
					 		 	 	 	case 'Ingram micro' : $('#countIngramMicro').html(provider_c); 
					 		 	 	 	break; 
					 		 	 	 }
					 		 	 }
			 				}
			 		}
				});
	}

	function getFlatCount() {
		$.ajax({
			 	url: 'controladores/getFlatCount.php', 
			 	method: 'POST', 
			 	data: { type : 'flat' }, 
			 	success: function(response){ 
			 				if(response != 'sin datos') {
			 				 var countFlat = JSON.parse(response); 
				 		 	 for(i in countFlat) {
				 		 	 	 var provider = countFlat[i].provider_name;
				 		 	 	 var provider_c = countFlat[i].count_providers;
				 		 	 	 switch(provider) {
				 		 	 	 	case 'Tech Data' : $('#nFlatTD').html(provider_c);  
				 		 	 	 	break; 
				 		 	 	 	case 'CVA' : $('#nFlatCVA').html(provider_c); 
				 		 	 	 	break; 
				 		 	 	 	case 'Ingram Micro' : $('#nFlatIngram').html(provider_c); 
				 		 	 	 	break; 
				 		 	 	 }
				 		 	 }
			 				}
			 	}
		});
	}

	// Import Flat 
	function importTechDataFlat() {
				alert('Importar tech data'); 
				$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'flat'}, 
						 	success: function(mensaje){
							 		 	 console.log(mensaje);
						 	}
					});
	}

	// EXPORT 
	$('#importIngram').click( function() { 
		checkDbCount = setInterval(getRelatedCount, 2000);
		$('#countRelatedIngramMicro').append('<img class="responseIngramMicro" src="media/users/loading.gif" style="width:25px;">');

			$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'export_from_flat', ws : 'Ingram'}, 
						 	success: function(response){
						 		 console.log(response);
					 		 	 getRelatedCount(); 
					 		 	 $('.responseIngramMicro').remove(); 
					 		 	 clearInterval(checkDbCount); 
						 	}
					});
	});


	$('#importTechData').click( function importTechData() { 
		checkDbCount = setInterval(getRelatedCount, 2000); 
		$('#countRelatedTD').append('<img class="responseTD" src="media/users/loading.gif" style="width:25px;">');
			$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'export_from_flat', ws : 'TD'}, 
						 	success: function(response){
						 			 getRelatedCount(); 
						 			 console.log(response); 
						 		 	 clearInterval(checkDbCount); 
						 		 	 $('.responseTD').remove(); 
						 	}
					}); 
   });

	var checkDbCount = null; 

    $('#importCVA').click( function importCVA() {
    	checkDbCount = setInterval(getRelatedCount, 2000); 
    	$('#countRelatedCVA').append('<img class="responseCVA" src="media/users/loading.gif" style="width:25px;">');
    	var groupCvaSelected = $('#CVAgroups').val(); 
    	var urlCva = 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=%&grupo='+groupCvaSelected+'&clave=%&codigo=%&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0&dt=1&dc=1'; 
    	console.log(urlCva); 

					$.ajax({
						 	url: 'controladores/dataController.php', 
						 	method: 'POST', 
						 	data: {  type: 'export_from_flat', ws : 'CVA'}, 
						 	success: function(response){
						 				 getRelatedCount(); 
							 		 	 console.log(response);
							 		 	 $('.responseCVA').remove(); 
							 		 	 clearInterval(checkDbCount);
						 	}
					});
       }); 

}); 