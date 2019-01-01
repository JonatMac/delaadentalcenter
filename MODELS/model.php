<?php	

class EnlacePaginas{
	public function enlacesPaginasModel($enlaces){
			if ($enlaces == "Nosotros" || 
				$enlaces == "Servicios" || 
				$enlaces == "Contactenos") {

				$module="VIEWS/modulos/".$enlaces.".php";
			}
			else if($enlaces == "index"){
				$module="VIEWS/modulos/Inicio.php";	
			}
			else{
				$module="VIEWS/modulos/Inicio.php";		
			}
			return $module;
	}
}

?>