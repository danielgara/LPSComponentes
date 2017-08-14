<?php

class categoria
{
	var $id="";
	var $nombre="";
	var $descripcion="";
	
	public function setId($i){$this->id=$i;}
	public function setNombre($n){$this->nombre=$n;}	
	public function setDescripcion($d){$this->descripcion=$d;}
	
	public function getId(){return $this->id;}
	public function getNombre(){return $this->nombre;}
	public function getDescripcion(){return $this->descripcion;}
	
	public function agregar(){
		$query="INSERT INTO categoria (nombre, descripcion) values ('$this->nombre', '$this->descripcion')";
		$db = new db();	$db->connect();
		$db->do_operation($query);
		$db->close();
	}
	
	public function modificar(){
		$query="UPDATE categoria SET nombre='$this->nombre', descripcion='$this->descripcion' WHERE id='$this->id'";
		$db = new db();	$db->connect();
		$db->do_operation($query);
		$db->close();
	}
	
	public function eliminar(){
		$query="DELETE FROM categoria WHERE id='$this->id'";
		$db = new db();	$db->connect();
		$db->do_operation($query);
		$db->close();
	}
	
	public function obtenerCategorias(){
		$query="SELECT * FROM categoria";
		$db = new db();	$db->connect();
		$data=$db->get_data($query);
		$db->close();
		
		return $data;
	}
	
	public function obtenerCategoriaPorId($id){
		$query="SELECT * FROM categoria WHERE id='$id'";
		$db = new db();	$db->connect();
		$data=$db->get_data($query);
		$db->close();
		
		return $data;
	}
}