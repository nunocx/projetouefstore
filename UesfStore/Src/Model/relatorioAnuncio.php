<?php
	/**
	* 
	*/
	class RelatorioAnuncio extends Relatorio
	{
		private $quantidadeTotal;
		private $quantidadeExpirados;
		private $quantidadeDenunciados;
		private $quantidadeBloqueados;

		public function __construct($titulo,$corpo,$imagem,$quantidadeTotal,$quantidadeExpirados,$quantidadeDenunciados,$quantidadeBloqueados)
		{
			parent::__construct(titulo,corpo,imagem);
			$this->quantidadeTotal=quantidadeTotal;
			$this->quantidadeExpirados = quantidadeExpirados;
			$this->quantidadeDenunciados = quantidadeDenunciados;
			$this->quantidadeBloqueados = quantidadeBloqueados;
		}

		public function setQuantidadeTotal($quantidadeTotal)
		{
			$this->quantidadeTotal = quantidadeTotal;
		}

		public function setQuantidadeExpirados()
		{
			$this->quantidadeExpirados = quantidadeExpirados;
		}

		public function setQuantidadeDenunciados($quantidadeDenunciados)
		{
			$this->quantidadeDenunciados = quantidadeDenunciados;
		}

		public function setQuantidadeBloqueados($quantidadeBloqueados)
		{
			$this->quantidadeTotal = quantidadeBloqueados;
		}

		public function getQuantidadeTotal()
		{
			return $this->quantidadeTotal;
		}

		public function getQuantidadeExpirados()
		{
			return $this->quantidadeExpirados;
		}

		public function getQuantidadeDenunciados()
		{
			return $this->quantidadeDenunciados;
		}

		public function getQuantidadeBloqueados()
		{
			return $this->quantidadeTotal;
		}	
	}
?>