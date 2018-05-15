$(document).ready(function() {
	
	//   [[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]][[[[]]]]
	//   [[[[[[[[[[[[[[[[[   SHOW DATA    ]]]]]]]]]]]]]]]]]
	//   [[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]][[[]]] Tab Size: 2 
 

//cargaCVA(); 
//techDataFun(); 
ingramFun();  

 // INGRAM ------------------------------

 var ingramDataTable = null;
 var inn 						 = null; 
 vari 				 			 = null; 
 var datosIng 		   = [];

function appendTableIngram(objJson){ 
		obj  = objJson; 
		arr  = new Array(); 
		arr2 = new Array(); 
		vari =  objJson; 
         
		// SKU, PROVEEDOR, NOMBRE, PRECIO, STOCK, EAN
		for(x in objJson) {
			datosIng.push(Array(vari[x][1], 
								vari[x][3], 
								vari[x][4], 
								'$'+parseFloat(vari[x][14]), 
								parseFloat(vari[x][25]), 
								vari[x][9]));  
		}  

		if(ingramDataTable != null){ ingramDataTable.destroy(); }

		ingramDataTable = $('#ingram').DataTable( {
	        data: datosIng,
	        columns: [
	            { title: "SKU" },
	            { title: "Proveedor" }, 
	            { title: "Nombre" },
	            { title: "Precio" },
	            { title: "Stock" },
	            { title: "EAN"}
	          ], 
	       	initComplete: function () {
	            	var api = this.api();
	            	api.$('td').click( function (target) { 
		            	elems = $(event.target).parent().find('td'); 
		              cf = elems[2].innerHTML;  
									console.log(cf); 
		    					$("#nombre-producto").html(elems[2].innerHTML);
					 		    $('#sku-producto').html(elems[0].innerHTML);
					 		    $('#precio-producto').html((elems[4].innerHTML));
					 		    $('#property-info-mod').html('Descripción');
					 		    $('#grupo-producto').html(elems[3].innerHTML);
					 		    $('#marca-producto').html(elems[1].innerHTML); 
					 		    $('#stock-producto').html(parseInt(elems[5].innerHTML)); 
					 		    $('#loading').css('display', 'none'); 
		              modal.style.display = "block";
		              $('#prodImagen').attr('src', 'https://www.pronorte.es/_files/product/1556/image/imagen-no-disponible.jpg'); 
	            });
          }
	    });
	}


	var ing = null; 
	function ingramFun(){
	  	$('#loading').css('display', 'block'); 
	  		$.ajax({
				 	url: 'controladores/dataController.php', 
				 	method: 'POST', 
				 	data: { url : urli, type: 'zip' }, 
				 	success: function(mensaje){
							 $('#loading').css('display', 'none'); 
							 console.log(JSON.parse(mensaje));  
							 console.log(mensaje); 
							 ing = JSON.parse(mensaje); 
							 appendTableIngram(JSON.parse(mensaje)); 
				 	  }
				 });  
	 }

	// TECH DATA ---------------------

	function techDataFun(){
	  	$('#loading').css('display', 'block'); 
	  		$.ajax({
				 	url: 'controladores/dataController.php', 
				 	method: 'POST', 
				 	data: { url : 'xx', type: 'techData' }, 
				 	success: function(mensaje){
				 		 	 appendTableTechData(JSON.parse(mensaje)); 
							 $('#loading').css('display', 'none');
							 console.log(mensaje); 
				 	  }
			});  
	 }


	var techDataTable = null; 

	function appendTableTechData(objJson){ 
		obj  = objJson; 
		arr  = new Array(); 
		arr2 = new Array(); 

    for( var x in objJson){
		      arr = new Array();  
	        arr.push(objJson[x].codigo);  
				  arr.push(objJson[x].partNumber); 
				  arr.push(objJson[x].descripcion); 
				  arr.push(objJson[x].stockTotal);  
				  arr.push(objJson[x].precio); 
				  arr.push(objJson[x].moneda); 
				  arr.push(objJson[x].categoria);  
				  arr.push(objJson[x].fabricante); 
				  arr.push(objJson[x].stockCentral); 
		      arr2.push(arr);
	     }

		 // si la tabla ya está iniciada se destruye 
		 if(techDataTable != null){ techDataTable.destroy(); }
		
		 // iniciar tabla 
	     techDataTable = $('#techData').DataTable( {
	        data: arr2,
	        columns: [
	            { title: "Codigo" },
	            { title: "Numero de parte" },
	            { title: "Descripcion" }, 
	            { title: "StockTotal" }, 
	            { title: "Precio" }, 
	            { title: "Moneda" }, 
	            { title: "Categoria" }, 
	            { title: "Fabricante" }, 
	            { title: "StockCentral" }
	          ], 

	        initComplete: function () {
		            var api = this.api();
		            api.$('td').click( function (target) { 
		            		   elems = $(event.target).parent().find('td'); 
		                	 cf = elems[2].innerHTML; 
		                	 modal.style.display = "block";
		                	 $('#prodImagen').attr('src', 'https://www.pronorte.es/_files/product/1556/image/imagen-no-disponible.jpg'); 
											 $('#property-info-mod').html('Modelo');
					    				 $("#nombre-producto").html(elems[2].innerHTML);
								 		   $('#sku-producto').html(elems[1].innerHTML);
								 		   $('#precio-producto').html(elems[4].innerHTML);
								 		   $('#grupo-producto').html(elems[6].innerHTML);
								 		   $('#marca-producto').html(elems[7].innerHTML); 
								 		   $('#stock-producto').html(elems[8].innerHTML); 
								 		   $('#loading').css('display', 'none'); 
						           console.log(cf); 
		            	  });
                 }
	    	     }	    	
	     );  // fin initDataTable 
	}
	
	// CVA  --------------------- 
	  
	var urli = 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=HP&grupo=PORTATILES%&clave=%&codigo=%&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0'; 

 	function cargaCVA(){
	  	$('#loading').css('display', 'block'); 
				 $.ajax({
				 	url: 'controladores/dataController.php', 
				 	method: 'POST', 
				 	data: { url : 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=HP&grupo=PORTATILES%&clave=%&codigo=%&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0', type: 'search' },  
				 	success: function(mensaje){
				 			 console.log(urli); 
							 console.log(JSON.parse(mensaje)); 
							 appendTableCVA(JSON.parse(mensaje)); 
							 $('#loading').css('display', 'none'); 
				 	}
				 }); 
	 }


 /* 
	* 	 A P P E N D - C V A 
	*/ 
 	
	var table = null; 
	var me 	  = null; 

	function appendTableCVA(objJson) { 
		
		obj  = objJson; 
		arr  = new Array(); 
		arr2 = new Array(); 

		for( var x in objJson) {
			    arr = new Array();  
		      arr.push(objJson[x].marca);  
				  arr.push(objJson[x].disponible); 
				  arr.push(objJson[x].grupo); 
				  arr.push(objJson[x].precio);   
				  arr.push(objJson[x].disponibleCD ); 
				  arr.push(objJson[x].descripcion);
				  arr.push(objJson[x].codigo_fabricante); 
			    arr2.push(arr);
		}

		if(table != null){ table.destroy(); }

	    table = $('#example').DataTable( {
	        data: arr2,
	        columns: [
	            { title: "marca" },
	            { title: "disponible" },
	            { title: "grupo" },
	            { title: "precio"}, 
	            { title: "disponibleCD"}, 
	            { title: "descripcion"}, 
	            { title: "SKU"} 
	          ], 
	        initComplete: function () {
            	var api = this.api();
            	api.$('td').click( function (target) {
	                elems = $(event.target).parent().find('td'); 
	                $('#modal-headerText').html(elems[9].innerHTML); 
	                cf = elems[10].innerHTML; 
	                alert(cf); 
	                modal.style.display = "block";
							  cadSearchCF = 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=HP&grupo=%&clave=%&codigo='+cf+'&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0'; 
							  	console.log("esperando respuesta..."); 
							  	$('#loading').css('display', 'block'); 
							  	   		urli = $('#cad-search').val(); 
										 $.ajax({
										 	url: '../core/dataController.php', 
										 	method: 'POST', 
										 	data: { url: cadSearchCF, type: 'search'}, 
										 	success: function(mensaje){
										 		    me = JSON.parse(mensaje); 
										 		    $('#property-info-mod').html('Modelo');
										 		    $("#nombre-producto").html(me[""].descripcion);
										 		    $('#sku-producto').html(me[""].codigo_fabricante);
										 		    $('#precio-producto').html('$'+me[""].precio);
										 		    $('#grupo-producto').html(me[""].grupo);
										 		    $('#marca-producto').html(me[""].marca); 
										 		    $('#stock-producto').html(me[""].disponibleCD); 
										 		    $('#promo-clave').html(me[""].ClavePromocion); 
										 		    $('#promo-descripcion').html(me[""].DescripcionPromocion); 
										 		    $('#promo-disponibilidad').html(me[""].DisponibleEnPromocion); 
										 		    $('#promo-descuento').html('$'+me[""].PrecioDescuento); 
										 		    $('#promo-totalDescuento').html('$'+me[""].TotalDescuento); 
										 		    $('#promo-vencimiento').html(me[""].VencimientoPromocion); 
										 		    $('#loading').css('display', 'none'); 
										 		    urlImg = me[""].imagen; 
										 		     if(urlImg.length < 2 ){
									                	$('#prodImagen').attr('src', 'https://www.pronorte.es/_files/product/1556/image/imagen-no-disponible.jpg'); 
									                }else{
									                	$('#prodImagen').attr('src', urlImg); 
									                }
										 		   }
										   }); 
            	    });  
        	  }
 				}); 
			}
}); 