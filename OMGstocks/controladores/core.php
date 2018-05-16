<?php 
	include_once 'database.php'; 

	$db = new db(); 
		 

   		$query = "SELECT * FROM ( (SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_varchar AS A1) 
				UNION 
				( SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_text AS A2 )
				UNION 
				( SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
				   product_entity AS E INNER JOIN distributor AS DIS
				   ON E.`id_distributor` = DIS.`id_distributor`) ) AS S1 ORDER BY ID ASC "; 

		if ($resultado = mysqli_query($db, $query)) {
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	$rows[] = $row;
			    }
			} else {
			    echo "sin datos";
			    return; 
			}
			echo json_encode($rows); 
   		}
	    mysqli_close($db); 

	    /* 
	    SELECT * FROM ( (SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
			FROM entity_value_varchar AS A1) 
		  UNION 
		( SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
			FROM entity_value_text AS A2 )
		  UNION 
		( SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
			 product_entity AS E INNER JOIN distributor AS DIS
			 ON E.`id_distributor` = DIS.`id_distributor`)
		  UNION 
		 ( SELECT SS.flag_status AS value_attr, 'flag_status' AS type_attr, SS.id_entity AS ID FROM 
			 product_entity AS SS)
			 ) AS S1  
			 WHERE ID IN (
					SELECT PD.id_entity FROM product_entity AS PD 
					  INNER JOIN entity_value_varchar AS ATR 
						ON PD.id_entity = ATR.product_entity_id
					  WHERE (ATR.name_attribute = 'sku') AND (PD.flag_status = 'aprovado')
					
					)
						ORDER BY ID ASC; */ 