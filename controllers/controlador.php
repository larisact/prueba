<?php 
	require_once('../models/modelo.php');

	$servicio1 = new Service();
	$datos = $servicio1->getServicios();
    require_once("../views/vista.php");
 ?>