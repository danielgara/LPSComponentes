package org.pl.eshopping.dto;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;

import org.pl.eshopping.bd.Conexion;

public class CategoriaDAO {
	
	Statement st = null;
	PreparedStatement ps = null;
	ResultSet rs = null;
	Connection conn = null;
	Conexion conexion = null;
	
	public void agregar(Categoria c){  
		
		try { conn = Conexion.getConexion();
			String query = "INSERT INTO categoria (nombre, descripcion) values (?, ?)";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getNombre()); ps.setString(2, c.getDescripcion());
			ps.executeUpdate();
		}
		catch(Exception e){	e.printStackTrace();}
		finally{
		    try { conn.close(); } catch (Exception e) { /* ignored */ }
		}
	}
	
	public void modificar(Categoria c){  
		try {
			conn = Conexion.getConexion();			
			String query = "UPDATE categoria set nombre=?,  descripcion=? WHERE id=?";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getNombre());	ps.setString(2, c.getDescripcion());
			ps.setString(3, c.getId().toString());
			ps.executeUpdate();			
		}
		catch(Exception e){	e.printStackTrace(); }
		finally{
		    try { conn.close(); } catch (Exception e) { /* ignored */ }
		}
	}
	
	public void eliminar(Categoria c){  
		
		try {
			conn = Conexion.getConexion();
			String query = "DELETE FROM categoria WHERE id=?";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getId().toString());
			ps.executeUpdate();
		}
		catch(Exception e){ e.printStackTrace(); }
		finally{
		    try { conn.close(); } catch (Exception e) { /* ignored */ }
		}
	}

}
