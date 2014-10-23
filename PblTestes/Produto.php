<?php
	/**
	* 
	*/
	class Produto extends Anuncio
	{
		private $quantidade;

		public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$quantidade)
		{
			parent::__construct($titulo,$categoria,$preco,$fotoVideo,$descricao);
			$this->quantidade = $quantidade;
		}
                
                public function __construct1( $titulo, $categoria, $preco, $fotoVideo, $descricao,
                        $dataPublicacao, $dataVencimento, $quantidade)
		{
			parent::__construct1($titulo, $categoria, $preco, $fotoVideo, $descricao, 
                                $dataPublicacao, $dataVencimento);
			$this->quantidade = $quantidade;
		}
		public function setQuantidade($quantidade)
		{
			$this->quantidade = $quantidade;
		}
		public function getQuantidade()
		{
			return $this->quantidade;
		}
	}

?>