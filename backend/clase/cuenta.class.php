<?php
//==============================================================================
//===   cuenta: Número de Cuenta donde el Alumno debe Depositar o Transferir el Dinero  
/*
cod_cue int 							(Código de la Cuenta Bancaria. Auto Incremental.)
num_cue varchar-20 						(Número de Cuenta Bancaria. Son 20 Dígitos, sin guiones.)
rif_cue varchar-15						(Rif de la cuenta Bancaria: Inicia con la Letra: V,J,G y luego solo números.)
nom_cue varchar-25 						(Nombre del titular de la cuenta bancaria.)
fky_banco banco(cod_ban) 				(Banco asociado a la cuenta bancaria)
tip_cue char 							(Tipo de Cuenta Bancaria.)
										A: Ahorro
										C: Corriente
fky_empresa empresa(cod_emp)			(Empresa asociada a la cuenta Bancaria: Ingeniería Digital CA, Ingeniería Web F.P.)
*/                       
//==============================================================================
//===	Campos B.D:  cod_cue, num_cue, rif_cue, nom_cue, fky_banco, tip_cue

class cuenta extends utilidad
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