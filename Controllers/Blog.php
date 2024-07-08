<?php 
	class Blog extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			getPermisos(PBLOG);
		}

		public function blog()
		{
			$pageContent = getPageRout('blog');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{
				$data['page_tag'] = NOMBRE_EMPESA;
				$data['page_title'] = NOMBRE_EMPESA." - ".$pageContent['titulo'];
				$data['page_name'] = $pageContent['titulo'];
				$data['page'] = $pageContent;
				$data['cantidad'] = $this->model->cantidadComentario();
				$data['comment1'] = $this->model->selectComentarios(1);
				$data['comment2'] = $this->model->selectComentarios(2);
				$data['comment3'] = $this->model->selectComentarios(3);
				$this->views->getView($this,"blog",$data);
			}

		}

		public function guardarComentario()
		{
			$nombre = $_POST['nombre'];
			$comentario = $_POST['comentario'];

			$requestInsert = $this->model->insertComentario($nombre, $comentario);

			echo json_encode($requestInsert,JSON_UNESCAPED_UNICODE);
		}
	}
?>
