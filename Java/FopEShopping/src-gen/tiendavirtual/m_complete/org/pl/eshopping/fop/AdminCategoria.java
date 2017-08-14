package tiendavirtual.m_complete.org.pl.eshopping.fop;

import tiendavirtual.m_complete.org.pl.eshopping.dto.Categoria;
import tiendavirtual.m_complete.org.pl.eshopping.dto.CategoriaDAO;
/*** added by dAdminCategorias* modified by dAgregarCategoria* modified by
dModificarCategoria* modified by dEliminarCategoria
 */
public class AdminCategoria {
	CategoriaDAO catDAO = new CategoriaDAO();
	Categoria cat = new Categoria();
	/*** added by dAgregarCategoria
	 */
	public void agregar(String n, String d) {
		Categoria c = new Categoria();
		c.setNombre(n);
		c.setDescripcion(d);
		catDAO.agregar(c);
	}
	/*** added by dModificarCategoria
	 */
	public void modificar(Integer id, String n, String d) {
		Categoria c = new Categoria();
		c.setId(id);
		c.setNombre(n);
		c.setDescripcion(d);
		catDAO.modificar(c);
	}
	/*** added by dEliminarCategoria
	 */
	public void eliminar(Integer id) {
		Categoria c = new Categoria();
		c.setId(id);
		catDAO.eliminar(c);
	}
}