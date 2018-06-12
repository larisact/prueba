<?php 
	class Service {
		private $servicio;
		private $db;

		function __construct(){
			$this->servicio = array();
			$this->db = new mysqli("localhost:3306","root","","taller");
					if ($this->db->connect_error){
						die("Error: " . $db->connect_error);
					}
		}

		function getServicios(){
			$res = $this->db->query("SELECT id, nombre, precio FROM servicio");
				if ($res->num_rows > 0){
						while($row = $res->fetch_assoc()){
							$this->servicio[] = $row;
						}
				}	
			return $this->servicio;		
		}

		public function setServicio($nombre, $precio) {

        	$sql = "INSERT INTO servicio(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
        	$res = $this->db->query($sql);

        		if ($res) {
            		return true;
        		} else {
           			 return false;
        		}
    	}

    	function get_price($nombre) {
		$res = $this->db->query("SELECT id, nombre, precio FROM servicio WHERE nombre='".$nombre."'");
			$precio = $res->fetch_assoc();
        	return $precio;
        
		}
	}
 ?>