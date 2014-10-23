<?php
	/**
	* 
	*/
	class Servico extends Anuncio
	{
		private $aCombinar;

		public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$aCombinar)
		{
			parent::__construct($titulo,$categoria,$preco,$fotoVideo,$descricao);
			$this->aCombinar = aCombinar;
		}
                public function __construct1($titulo,$categoria,$preco,$fotoVideo,
                        $descricao,$dataPublicacao,$dataVencimento,$aCombinar)
                {
                    parent::__construct1($titulo, $categoria, $preco, $fotoVideo, $descricao, 
                            $dataPublicacao, $dataVencimento);
                    $this->aCombinar = $aCombinar;
                }
		public function setACombinar($aCombinar)
		{
			$this->aCombinar = aCombinar;
		}
		public function getACombinar()
		{
			return aCombinar;
		}
	}

?>