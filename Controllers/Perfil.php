<?php 
	class Perfil extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function Perfil()
		{
			$pageContent = getPageRout('inicio');
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "tienda_virtual";
			$data['page'] = $pageContent;



			$this->views->getView($this,"perfil",$data); 
		}

	}
 ?>
