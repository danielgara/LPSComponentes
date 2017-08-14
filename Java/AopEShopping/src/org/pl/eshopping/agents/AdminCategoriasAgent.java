package org.pl.eshopping.agents;

import jade.core.Agent;

public class AdminCategoriasAgent extends Agent {
	
	 protected void setup() {
		 System.out.println("Bienvenido, el agente categoria esta listo.");
		 addBehaviour(new AdminCategoriasAgregar()); 
	 }
 }

