<?php
require("../../../backend/clase/universidad.class.php");
require("../../../backend/clase/permiso.class.php");

$obj=new universidad;
$objPermiso=new permiso;

$permiso=$objPermiso->validar_acceso($opcion=5,$fky_usuario=1,$token=md5("12345"));
$acceso=$objPermiso->extraer_dato($permiso);

if($acceso["est_per"]=="A")
{

foreach($_REQUEST as $nombre_campo => $valor){
  	$obj->asignar_valor($nombre_campo,$valor);
} 

$resultado=$obj->filtrar($obj->cod_uni,$nom_uni="",$est_uni="");
$datos=$obj->extraer_dato($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ver Universidad</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../bootstrap-4.0/css/bootstrap.min.css">
</head>
<body>

<form action="../../../backend/controlador/universidad.php" method="POST">

  <div class="container">

	<div class="row justify-content-center">
	<div class="col-8 text-center ">

	 <div class="row bg-primary text-white">
	 	 <div class="col-12 text-center">
	  	<h3>Datos de la Universidad</h3>
	 	 </div>
	  </div>

	  <div class="row mt-2">

		<div class="col-md-2 col-12 align-self-center">
		     <label for="">Código:</label>
		</div>
		<div class="col-md-4 col-12">
		    <input type="text" class="form-control" value="<?php echo $datos['cod_uni']; ?>" readonly>
		</div>

	  </div> 

	  <div class="row mt-2 bg-light">

		<div class="col-md-2 col-12 align-self-center">
		     <label for="">Nombre:</label>
		</div>
		<div class="col-md-4 col-12">
		    <input type="text"  class="form-control" value="<?php echo $datos['nom_uni']; ?>" size="35" readonly >
		</div>

	  </div>

	  <div class="row mt-2">
	     <div class="col-md-2 col-12 align-self-center">
		     <label for="">Estatus:</label>
		</div>
	  <div class="col-md-4 col-12">
	  <fieldset disabled>
	     <select class='form-control'>
	     <option value="X">Seleccione...</option>
		 <?php
		 $selected = ($datos['est_uni']=='A') ? "selected":"";
		 echo "<option value='A' $selected>Activa</option>";
		 $selected = ($datos['est_uni']=='I') ? "selected":"";
		 echo "<option value='I' $selected>Inactiva</option>";	
		 ?>
		</select>
		</fieldset>
	   </div>
	  </div>
  	 </div>
   </div>
  </div> <!-- Fin Container -->
</form>	
</body>
</html>

<?php
}else{
	$obj->mensaje("danger","No tienes permiso de accesar a esta p&aacute;gina");
}
?>