<?php
	/**
	* 
	*/
	class Comentario
	{	
		private $comentarista;
		private $anuncio;
		private $texto;
		private $data;
		
		public function __construct($comentarista,$anuncio,$texto,$data)
		{
			$this->comentarista=comentarista;
			$this->anuncio=anuncio;
			$this->texto=texto;
			$this->data=data;
		}

		public function setComentarista($comentarista)
		{
			$this->comentarista=comentarista;
		}

		public function setAnuncio($anuncio)
		{
			$this->anuncio=anuncio;
		}

		public function setTexto($texto)
		{
			$this->texto=texto;
		}

		public function setData($data)
		{
			$this->data=data;	
		}

		public function getComentarista()
		{
			return $this->comentarista;
		}

		public function getAnuncio()
		{
			return $this->anuncio;
		}

		public function getTexto()
		{
			return $this->texto;
		}

		public function getData()
		{
			return $this->data;	
		}
	}
?>