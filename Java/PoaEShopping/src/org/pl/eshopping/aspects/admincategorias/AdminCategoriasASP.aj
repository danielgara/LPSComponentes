package org.pl.eshopping.aspects.admincategorias;

public aspect AdminCategoriasASP {

	pointcut agregarPC(String n, String d) : execution(void AdminCategorias.agregar(..)) && args (n,d);
	
	before(String n, String d) : agregarPC(n, d){
		System.out.println("Chequeando que estes logueado");
		//checklogin
	}
}
	

