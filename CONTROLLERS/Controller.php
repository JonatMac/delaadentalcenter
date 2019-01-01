<?php 
class MvcController{
	public function plantilla(){
		include "VIEWS/template.php";
	}

	public function enlacesPaginasController(){
		if(isset($_GET["action"])){
			$enlace = $_GET["action"];
		}else{
			$enlace = "index";	
		}
		
		//echo $enlace;

		$respuesta = EnlacePaginas::enlacesPaginasModel($enlace);

		include $respuesta;
	}
}

?>