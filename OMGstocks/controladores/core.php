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
		    //printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
		    //echo mysqli_num_rows($resultado); 
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	$rows[] = $row;
			    }
			} else {
			    echo "0 results";
			}
			echo json_encode($rows); 
		    //mysqli_free_result($resultado);
   		}
	    mysqli_close($db); 