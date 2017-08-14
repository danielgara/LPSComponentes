<?php

include_once("../../config/db.php");
include_once("../../models/categoria.php");
include_once("../../nusoap/nusoap.php");

function agregar($nombre, $descripcion)
{
	$c=new categoria();
	$c->setNombre($nombre);
	$c->setDescripcion($descripcion);
	$c->agregar();
	return  new soapval('return', 'xsd:string', "Categoria Registrada satisfactoriamente");
}

function modificar($id, $nombre, $descripcion)
{
	$c=new categoria();
	$c->setId($id);
	$c->setNombre($nombre);
	$c->setDescripcion($descripcion);
	$c->modificar();
	return  new soapval('return', 'xsd:string', "Categoria Modificada satisfactoriamente");
}

function eliminar($id)
{
	$c=new categoria();
	$c->setId($id);
	$c->eliminar();
	return  new soapval('return', 'xsd:string', "Categoria Eliminada satisfactoriamente");
}

$server = new soap_server();
$server->configureWSDL('agregar','http://localhost/WebServicesEShopping/services/admincategorias/AdminCategoriasWS.php');
$server->configureWSDL('modificar','http://localhost/WebServicesEShopping/services/admincategorias/AdminCategoriasWS.php');
$server->configureWSDL('eliminar','http://localhost/WebServicesEShopping/services/admincategorias/AdminCategoriasWS.php');
$server->register("agregar",array('nombre'=>'xsd:string', 'descripcion'=>'xsd:string'));
$server->register("modificar",array('id'=>'xsd:string', 'nombre'=>'xsd:string', 'descripcion'=>'xsd:string'));
$server->register("eliminar",array('id'=>'xsd:string'));
$server->service($HTTP_RAW_POST_DATA);