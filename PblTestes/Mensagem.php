<?php
	/**
	* 
	*/
	class Mensagem
	{
		private $titulo;
		private $destinatario;
		private $texto;
		private $data;

		public function __construct($titulo,$destinatario,$texto,$data)
		{
			$this->titulo = titulo;
			$this->destinatario = destinatario;
			$this->texto = texto;
			$this->data=data;
		}

		public function setTitulo($titulo)
		{
			$this->titulo = titulo;
		}

		public function setDestinatario($destinatario)
		{
			$this->destinatario = destinatario;
					
		}

		public function setTexto($texto)
		{
			$this->texto = texto;
			
		}

		public function setData($data)
		{
			$this->data=data;
		}

		public function getTitulo()
		{
			return $this->titulo;
		}

		public function getDestinatario()
		{
			return $this->destinatario;
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