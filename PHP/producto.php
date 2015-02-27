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
		$tthis->vanaquel=$vAnaquel;
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
		$this->sabor=$saber;
	}
	public function set_constitucio($constitucion){
		$this->reconstitucion=$constitucion;
	}
}
?>