<?php require_once("/../general/header.php"); ?>

<h3>Modificar Categoría</h3>

<form method="POST" action="index.php?option=guardar">
<input type="hidden" name="id" value="<?php echo $categoria->id; ?>" />
    Nombre: <input type="text" name="nombre" value="<?php echo $categoria->nombre; ?>" /><br>
     Descripción: <input type="text" name="descripcion" value="<?php echo $categoria->descripcion; ?>" />
    <br><br><input type="Submit" value="Registrar" >
   </form>   

<?php require_once("/../general/footer.php"); ?>