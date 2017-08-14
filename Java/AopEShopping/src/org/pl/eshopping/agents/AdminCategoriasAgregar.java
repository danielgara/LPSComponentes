package org.pl.eshopping.agents;

import org.pl.eshopping.dto.Categoria;
import org.pl.eshopping.dto.CategoriaDAO;

import jade.core.behaviours.CyclicBehaviour;
import jade.lang.acl.ACLMessage;

public class AdminCategoriasAgregar extends CyclicBehaviour {
	
	String result;
	CategoriaDAO cdao = new CategoriaDAO();
	
	public void action() {
		ACLMessage msg= getAgent().receive();
        if(msg!=null){
        	System.out.println("Iniciando proceso para adicionar una categoria.");
			
			result=msg.getContent();
			String[] datos =  result.split(",");
			
			Categoria c = new Categoria();
			c.setNombre(datos[0]);
			c.setDescripcion(datos[1]);
			
			cdao.agregar(c);
        }else{
       	 block();
        }
	}

}
