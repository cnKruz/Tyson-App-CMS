<?php
include_once("producto.class.php");

	//$mysqli = new mysqli("ejemplo.com", "usuario", "contraseña", "basedatos");


	$producto= new Producto();

	$producto->set_codigo($_REQUEST["pCodigo"]);
	$producto->set_nombre($_REQUEST["pName"]);
	$producto->set_descripcion($_REQUEST["pDesc"]);
	$producto->set_peso($_REQUEST["pPeso"]);
	$producto->set_ingredientes($_REQUEST["pIng"]);
	$producto->set_contiene($_REQUEST["pCont"]);
	$producto->set_ideal($_REQUEST["pIdeal"]);
	$producto->set_evalor($_REQUEST["pValor"]);
	$producto->set_empaqueprimario($_REQUEST["pPaqPrim"]);
	$producto->set_empaquesecundario($_REQUEST["pPaqSec"]);
	$producto->set_codPrimaria($_REQUEST["pCodPrim"]);
	$producto->set_codSecundaria($_REQUEST["pCodSec"]);
	$producto->set_pallet($_REQUEST["pPallet"]);
	$producto->set_manejo($_REQUEST["pManejo"]);
	$producto->set_vidaAnaquel($_REQUEST["pVdAnaqul"]);
	$producto->set_congelacion($_REQUEST["pTemp"]);
	$producto->set_apInt($_REQUEST["pApInt"]);
	$producto->set_apext($_REQUEST["pApExt"]);
	$producto->set_color($_REQUEST["pColor"]);
	$producto->set_olor($_REQUEST["pOlor"]);
	$producto->set_sabor($_REQUEST["pSabor"]);
	$producto->set_constitucion($_REQUEST["pMetRec"]);

	$producto->saveNewProduct();
	//function saveNewProducto()
	//{
	//}
?>
