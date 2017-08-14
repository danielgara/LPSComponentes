<?php

namespace aspects\admincategorias;

include_once("../../config/db.php");
include_once("../../models/categoria.php");

class AdminCategorias{
	
	public function agregar($n, $d){
		$c=new \categoria();
		$c->setNombre($n);
		$c->setDescripcion($d);
		//$c->agregar();
	}
}
