<?php
class Producto {
	var $id;
	var $codigo;
	var $nombre;
	var $descripcion;
	var $peso;
	var $ingredientes;
	var $contiene;
	var $ideal;
	var $evalor;
	var $epqpri;
	var $epqsec;
	var $codpri;
	var $codsec;
	var $pallet;
	var $cmanejo;
	var $vanaquel;
	var $tempcong;
	var $apint;
	var $apext;
	var $color;
	var $olor;
	var $sabor;
	var $reconstitucion;

	public function set_id($id){
		$this->id = $id;
	}
	public function set_codigo($codigo){
		$this->codigo = $codigo;
	}
	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	public function set_descripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	public function set_peso($peso){
		$this->peso = $peso;
	}
	public function set_ingredientes($ingredientes){
		$this->ingredientes = $ingredientes;
	}
	public function set_contiene($contiene){
		$this->contiene = $contiene;
	}
	public function set_ideal($ideal){
		$this->ideal=$ideal;
	}
	public function set_evalor($evalor){
		$this->evalor=$evalor;
	}
	public function set_empaqueprimario($primario){
		$this->epqpri=$primario;
	}
	public function set_empaquesecundario($secundario){
		$this->epqsec=$secundario;	
	}
	public function set_codPrimaria($codPrim){
		$this->codpri=$codPrim;
	}
	public function set_codSecundaria($codSecundaria){
		$this->codSecundaria=$codSecundaria;
	}
	public function set_pallet($pallet){
		$this->pallet=$pallet;
	}
	public function set_manejo($manejo){
		$this->cmanejo=$manejo;
	}
	public function set_vidaAnaquel($vAnaquel){
		$this->vanaquel=$vAnaquel;
	}
	public function set_congelacion($congelacion){
		$this->tempcong=$congelacion;
	}
	public function set_apInt($apint){
		$this->apint=$apint;
	}
	public function set_apext($apext){
		$this->apext+$apext;
	}
	public function set_color($color){
		$this->color=$color;
	}
	public function set_olor($olor){
		$this->olor=$olor;
	}
	public function set_sabor($sabor){
		$this->sabor=$sabor;
	}
	public function set_constitucion($constitucion){
		$this->reconstitucion=$constitucion;
	}

	public function saveNewProduct(){
		$server="162.144.32.74";
		$user="multimh2_tysnusr";
		$pass="Tyson4pp2015";
		$database="multimh2_tysonapp";

		$mysqli=new mysqli($server, $user, $pass, $database);
		
		$sql ="INSERT INTO `multimh2_tysonapp`.`productos` 
		(`id_producto`, `nombre`, `descripcion`, `codigo`, `peso`, `ingredientes`, `contiene`, `ideal`, `escalavalor`,
		 `vidaanaquel`, `temperaturacongelacion`, `aparienciainterna`, `aparienciaexterna`, `color`, `olor`, `sabor`, `metodosderecostitucion`,
		  `empaqueprimario`, `empaquesecundario`, `codificacionprimaria`, `codificacionsecundaria`, `pallet`, `condicionesmanejo`, `categoria`) 
		VALUES 
		('', $this->nombre , $this->descripcion, $this->codigo,$this->peso, $this->ingredientes, $this->contiene, $this->ideal,$this->evalor,
		 $this->vAnaquel, $this->tempcong, $this->apint, $this->apext, $this->color, $this->olor,$this->sabor, $this->reconstitucion,
		 $this->epqpri, $this->epqsec, $this->codpri, $this->codsec, $this->pallet, $this->cmanejo, '0')";

		if(!$result = $db->query($sql)){
    		die('There was an error running the query [' . $db->error . ']');
		}

	}
}
?>