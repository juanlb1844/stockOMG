<?php 
   class db extends mysqli {

	    public function __construct() {

	        parent::__construct('www.laptopmexico.mx', 'juanlb', 'juanlb221', 'store_back');

 

	        if (mysqli_connect_error()) {

	            die('Error de Conexión (' . mysqli_connect_errno() . ') '

	                    . mysqli_connect_error());

	        }

	    }

	}

