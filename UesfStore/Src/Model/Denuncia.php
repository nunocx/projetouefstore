<?php
	/**
	* 
	*/
	class Denuncia
	{	
		private $usuario;
		private $data;
		private $texto;
		private $anuncio;
		
		public function __construct($usuario,$texto,$anuncio)
		{
			$this->usuario = usuario;
			setData(dataSistema);
			$this->texto = texto;
			$this->anuncio = anuncio;
		}

		public function setUsuario($usuario)
		{
			$this->usuario = usuario;
		}
		public function setData($data)
		{
			$this->data = data;
		}
		public function setTexto($texto)
		{
			$this->texto = texto;
		}
		public function setAnuncio($anuncio)
		{
			$this->anuncio = anuncio;
		}

		public function getUsuario()
		{
			return $this->usuario;
		}
		public function getData()
		{
			return $this->data;
		}
		public function getTexto()
		{
			return $this->texto;
		}
		public function getAnuncio()
		{
			return $this->anuncio;
		}

	}


?>