<?php

include_once("../../config/db.php");
include_once("../../models/categoria.php");

class IndexController{
	
	public function index(){
		$c=new categoria();
		$categorias=$c->obtenerCategorias();	
		include_once("../../views/admincategorias/index.php");
	}
	
	public function agregar(){
		$c=new categoria();
		$c->setNombre($_POST['nombre']);
		$c->setDescripcion($_POST['descripcion']);
		$c->agregar();
		
		$mensaje="Categoria agregada satisfactoriamente";		
		include_once("../../views/general/mensaje.php");
	}
	
	public function modificar(){
		$c=new categoria();
		$categorias=$c->obtenerCategoriaPorId($_GET['id']);
		$categoria=$categorias[0];
		
		include_once("../../views/admincategorias/modificar.php");
	}
	
	public function guardar(){
		$c=new categoria();
		$c->setId($_POST['id']);
		$c->setNombre($_POST['nombre']);
		$c->setDescripcion($_POST['descripcion']);
		$c->modificar();
		
		$mensaje="Categoria modificada satisfactoriamente";		
		include_once("../../views/general/mensaje.php");
	}
	
	public function eliminar(){
		$c=new categoria();
		$c->setId($_GET['id']);
		$c->eliminar();
		
		$mensaje="Categoria eliminada satisfactoriamente";		
		include_once("../../views/general/mensaje.php");
	}
	
} 

$i = new IndexController();

if($_GET['option']=='agregar'){$i->agregar();}
else if($_GET['option']=='eliminar'){$i->eliminar();}
else if($_GET['option']=='modificar'){$i->modificar();}
else if($_GET['option']=='guardar'){$i->guardar();}
else {$i->index();}