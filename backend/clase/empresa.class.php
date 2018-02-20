<?php
//==============================================================================
//===   empresa: Nombre de la empresa organizadora del curso.
/*
cod_emp int 				(Código de la empresa)
rif_emp varchar-15 		    (Rif de la empresa)
nom_emp varchar-50 		    (Nombre de la Empresa)
dom_emp varchar-255 		(Domicilio Fiscal)
est_emp char 				(Estatus de la empresa)
A: Activa
I: Inactiva
*/

//==============================================================================
//===	Campos B.D: cod_emp, rif_emp, nom_emp, dom_emp, est_emp

class empresa extends utilidad
{

//==============================================================================
   public function agregar(){

    	$sql="insert into ______()values();";
    	return $this->ejecutar($sql);
   }//Fin Agregar
//==============================================================================

   public function modificar(){
   		$sql="update _______ set where _______;";
   		return $this->ejecutar($sql);
   	
   }//Fin Modificar  
//==============================================================================

   public function listar(){
   		$sql="select * from _________ where ;";
   		return $this->ejecutar($sql);
   	
   }//Fin Listar 
//==============================================================================

   public function eliminar(){
   		$sql="delete from ______ where ;";
   		return $this->ejecutar($sql);  	
   }//Fin Eliminar  
//==============================================================================

   public function cambio_estatus(){
   		$sql="update _________ set where ;";
   		return $this->ejecutar($sql);  
   	
   }//Fin Cambio Estatus   
//==============================================================================

   public function filtrar(){

   		$sql="select * from __________ where ;";
   	    return $this->ejecutar($sql);  

   }// Fin Filtrar
//==============================================================================

}//Fin de la Clase
?>