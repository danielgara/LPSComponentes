package tiendavirtual.m_complete.org.pl.eshopping.dto;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import tiendavirtual.m_complete.org.pl.eshopping.bd.Conexion;
/*** added by dCategoriaDAO* modified by dAgregarCategoria* modified by
dModificarCategoria* modified by dEliminarCategoria
 */
public class CategoriaDAO {
	Statement st = null;
	PreparedStatement ps = null;
	ResultSet rs = null;
	Connection conn = null;
	Conexion conexion = null;
	/*** added by dAgregarCategoria
	 */
	public void agregar(Categoria c) {
		try {
			conn = Conexion.getConexion();
			String query = "INSERT INTO categoria (nombre, descripcion) values (?, ?)";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getNombre());
			ps.setString(2, c.getDescripcion());
			ps.executeUpdate();
		}
		catch(Exception e) {
			e.printStackTrace();
		}
		finally {
			try {
				conn.close();
			}
			catch(Exception e) {
			}
		}
	}
	/*** added by dModificarCategoria
	 */
	public void modificar(Categoria c) {
		try {
			conn = Conexion.getConexion();
			String query = "UPDATE categoria set nombre=?,  descripcion=? WHERE id=?)";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getNombre());
			ps.setString(2, c.getDescripcion());
			ps.setString(3, c.getId().toString());
			ps.executeUpdate();
		}
		catch(Exception e) {
			e.printStackTrace();
		}
		finally {
			try {
				conn.close();
			}
			catch(Exception e) {
			}
		}
	}
	/*** added by dEliminarCategoria
	 */
	public void eliminar(Categoria c) {
		try {
			conn = Conexion.getConexion();
			String query = "DELETE FROM categoria WHERE id=?)";
			ps = conn.prepareStatement(query);
			ps.setString(1, c.getId().toString());
			ps.executeUpdate();
		}
		catch(Exception e) {
			e.printStackTrace();
		}
		finally {
			try {
				conn.close();
			}
			catch(Exception e) {
			}
		}
	}
}