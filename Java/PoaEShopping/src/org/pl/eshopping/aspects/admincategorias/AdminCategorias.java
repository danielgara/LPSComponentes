package org.pl.eshopping.aspects.admincategorias;

import org.pl.eshopping.dto.Categoria;
import org.pl.eshopping.dto.CategoriaDAO;

public class AdminCategorias {
	
	public static CategoriaDAO cdao = new CategoriaDAO();
	
	public static void main(String[] args)
	{
		agregar("Ventanas","Ventanas de todos los tipos");
	}
	
	public static void agregar(String n, String d) {  
		Categoria c = new Categoria();
		c.setNombre(n);
		c.setDescripcion(d);
		cdao.agregar(c);
	}

}
