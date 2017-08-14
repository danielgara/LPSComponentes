package org.pl.eshopping.services.admincategorias;

import org.pl.eshopping.dto.Categoria;
import org.pl.eshopping.dto.CategoriaDAO;

public class AdminCategoriasWS {
	
	CategoriaDAO cdao = new CategoriaDAO();
	
	public void agregar(String n, String d) {  
		Categoria c = new Categoria();
		c.setNombre(n);
		c.setDescripcion(d);
		cdao.agregar(c);
	}
	
	public void modificar(Integer id, String n, String d) {  
		Categoria c = new Categoria();
		c.setId(id);
		c.setNombre(n);
		c.setDescripcion(d);
		cdao.modificar(c);
	}
	
	public void eliminar(Integer id) {  
		Categoria c = new Categoria();
		c.setId(id);
		cdao.eliminar(c);
	}
}
