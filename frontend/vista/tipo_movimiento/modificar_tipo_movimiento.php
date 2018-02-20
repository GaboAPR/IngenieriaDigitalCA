<?php
require("../../../backend/clase/tipo_movimiento.class.php");
require("../../../backend/clase/permiso.class.php");

$obj=new tipo_movimiento;
$objPermiso=new permiso;


$permiso=$objPermiso->validar_acceso($opcion=7,$fky_usuario=1,$token=md5("12345"));
$acceso=$objPermiso->extraer_dato($permiso);

if($acceso["est_per"]=="A")
{

foreach($_REQUEST as $nombre_campo => $valor){
  	$obj->asignar_valor($nombre_campo,$valor);
} 

$resultado=$obj->filtrar($obj->cod_tip_mov,$nom_tip_mov="",$est_tip_mov="");
$datos=$obj->extraer_dato($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Tipo de Movimiento</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../bootstrap-4.0/css/bootstrap.min.css">
</head>
<body>

<form action="../../../backend/controlador/tipo_movimiento.php" method="POST">

	<div class="container">
	<div class="row justify-content-center">
	<div class="col-8 text-center ">


	 <div class="row bg-primary text-white">
	 	 <div class="col-12 text-center">
	  	<h3>Datos del Tipo de Movimiento</h3>
	 	 </div>
	  </div>

	  <div class="row mt-2">

		<div class="col-md-2 col-12 align-self-center">
		     <label for="">Nombre:</label>
		</div>
		<div class="col-md-8 col-12">
		    <input type="text" name="nom_tip_mov" id="nom_tip_mov" required="required" maxlength="25" class="form-control" placeholder="Nombre del Tipo de Movimiento" onkeyup="return solo_numeros();" 
		    value="<?php echo $datos['nom_tip_mov']; ?>">
		</div>

	  </div> 

	  <div class="row mt-2">
	     <div class="col-md-2 col-12 align-self-center">
		     <label for="">Tipo:</label>
		</div>
	  <div class="col-md-4 col-12">
	     <select name='tip_tip_mov' id='tip_tip_mov' class='form-control'>
		 <?php
		 $selected = ($datos['tip_tip_mov']=='I') ? "selected":"";
		 echo "<option value='I' $selected>Ingreso</option>";
		 $selected = ($datos['tip_tip_mov']=='E') ? "selected":"";
		 echo "<option value='E' $selected>Egreso</option>";	
		 ?>
		</select>
	   </div>
	  </div>



	  <div class="row mt-2">
	     <div class="col-md-2 col-12 align-self-center">
		     <label for="">Estatus:</label>
		</div>
	  <div class="col-md-4 col-12">
	     <select name='est_tip_mov' id='est_tip_mov' class='form-control'>
		 <?php
		 $selected = ($datos['est_tip_mov']=='A') ? "selected":"";
		 echo "<option value='A' $selected>Activa</option>";
		 $selected = ($datos['est_tip_mov']=='I') ? "selected":"";
		 echo "<option value='I' $selected>Inactiva</option>";
		 ?>
		</select>
	   </div>
	  </div>


	  <div class="row mt-2 bg-light">
	  	 <div class="col-12  text-center">
		     <input type="submit" class="btn btn-primary btn-lg" value="Modificar Tipo de Movimiento">
		</div>
	   </div>	
	  
	   </div>
	 </div>  	  
	</div> <!-- Fin Container -->
	<input type="hidden" name="accion" id="accion" value="modificar">
	<input type="hidden" name="cod_tip_mov" id="cod_tip_mov" value="<?php echo $datos['cod_tip_mov']; ?>">			
</form>	
</body>
</html>

<?php
}else{
	$obj->mensaje("danger","No tienes permiso de accesar a esta p&aacute;gina");
}
?>