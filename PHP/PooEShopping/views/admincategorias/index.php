<?php require_once("/../general/header.php"); ?>

<h3>Agregar Categorías</h3>

<form method="POST" action="index.php?option=agregar">
    Nombre: <input type="text" name="nombre" /><br>
     Descripción: <input type="text" name="descripcion" />
    <br><br><input type="Submit" value="Registrar">
   </form>   
   
<br /><hr />

<h3>Lista de Categorías</h3>
<table class="tabla_general">
<tr>
<td>Id</td><td>Nombre</td><td>Descripción</td><td>Editar</td><td>Borrar</td>
</tr>
<?php
$i=0;
for($i;$i<count($categorias);$i++)
{
	echo "<tr><td>".$categorias[$i]->id."</td><td>".$categorias[$i]->nombre."</td>";
	echo "<td>".$categorias[$i]->descripcion."</td><td><a href=\"./index.php?option=modificar&id=".$categorias[$i]->id."\">Editar</a></td>";
	echo "<td><a href=\"./index.php?option=eliminar&id=".$categorias[$i]->id."\">Borrar</a></td></tr>";
}
?>
</table>

<?php require_once("/../general/footer.php"); ?>