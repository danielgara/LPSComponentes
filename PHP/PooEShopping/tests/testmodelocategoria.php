<?php

include_once("../models/categoria.php");

class TestModeloCategoria extends PHPUnit_Framework_TestCase{
	
	/**
     * @dataProvider additionProvider
     */
	public function testCategoria($n,$d){
		$c=new categoria();
		$c->setNombre($n);
		$c->setDescripcion($d);
		
		$this->assertAttributeNotEmpty("nombre",$c);
	}	
	
	public function additionProvider()
    {
        return array(
          array("", ""),
          array("Noticias", "Bla"),
          array("", "Bla"),
          array("Deportes", "")
        );
    }
} 