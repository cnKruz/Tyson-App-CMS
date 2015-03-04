<?php
class Producto {
	var $id;
	var $nombre;
	var $descripcion;
	var $imagen;
	var $reconstitucion;

	public function set_id($id){
		$this->id = $id;
	}
	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	public function set_descripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	public function set_imagen($imagen){
		$this->imagen = $imagen;
	}
	
	public function saveNewCategory(){
		$server="162.144.32.74";
		$user="multimh2_tysnusr";
		$pass="Tyson4pp2015";
		$database="multimh2_tysonapp";

		$mysqli=new mysqli($server, $user, $pass, $database);
		
		$sql ="INSERT INTO `multimh2_tysonapp`.`categorias` (`id_cat`, `nombre`, `descripcion`, `imagen`) 
		VALUES ('', $this->nombre, $this->descripcion,$this->imagen)";

		if(!$result = $db->query($sql)){
    		die('There was an error running the query [' . $db->error . ']');
		}

	}
}
?>