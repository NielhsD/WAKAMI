<?php

    class BlogModel extends Mysql
    {

        public function __construct()
		{
			parent::__construct();
		}

        public function selectComentarios(int $imagen){
			$sql = "SELECT p.id, p.nombre, p.comentario, p.status, p.imagen, p.fecha 
            FROM comentarios p 
            WHERE p.status != 0 AND p.imagen = $imagen ORDER BY p.fecha DESC";
					$request = $this->select_all($sql);
			return $request;
		}

        public function cantidadComentario() {
            
            return $cantidad;
        }

        public function insertComentario(string $nombre, string $comentario){
			$this->intId = null;
			$this->strNombre = $nombre;
			$this->strComentario = $comentario;
			$this->intStatus = 1;
			$this->intImagen = 1;
			$return = 0;
            $query_insert  = "INSERT INTO comentarios(id,
                                                    nombre,
                                                    comentario,
                                                    status,
                                                    imagen,
                                                    fecha) 
                                VALUES(?,?,?,?,?,now())";
            $arrData = array($this->intId,
                            $this->strNombre,
                            $this->strComentario,
                            $this->intStatus,
                            $this->intImagen);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;

	        return $return;
		}
    }
?>