package org.pl.eshopping.dto;

public class Categoria {
	
	public Integer id;
	public String nombre;
	public String descripcion;
	public String getNombre() {	return nombre;	}
	public void setNombre(String nombre) { this.nombre = nombre; }
	public Integer getId() { return id;	}
	public void setId(Integer id) { this.id = id; }
	public String getDescripcion() { return descripcion; }
	public void setDescripcion(String descripcion) { this.descripcion = descripcion; }

}
