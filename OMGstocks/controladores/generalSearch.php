<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$attr_val = isset($_POST['attr_val']) ? $_POST['attr_val'] : 0; 
 
	$query = "SELECT * FROM ( (SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_varchar AS A1) 
				UNION 
				( SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_text AS A2 )
				UNION 
				( SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
				   product_entity AS E INNER JOIN distributor AS DIS
				   ON E.`id_distributor` = DIS.`id_distributor`) ) AS S1 
				   WHERE ID IN ( SELECT product_entity_id FROM entity_value_varchar WHERE name_attribute = 'SKU' AND varchar_value = '$attr_val')
				   ORDER BY ID ASC LIMIT 13"; 
 
	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $rows[] = $row;
			  }
			} else {
			    echo "sin datos";
			    return; 
			}
			print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 