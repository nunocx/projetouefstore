<?php
/**
 * 
 */
class Anuncio 
{
    /**
     * Variável que recebe o título do anúncio.
     * @access private
     * @name $titulo
     */
    private $titulo;
    /**
     * Variável que recebe a categoria do anúncio.
     * @access private
     * @name $categoria
     */
    private $categoria;
    /**
     * Variável que recebe o preco do anúncio.
     * @access private
     * @name $preco
     */
    private $preco;
    /**
     * Variável que recebe a foto ou o video de exemplo para o anúncio.
     * @access private
     * @name $fotoVideo
     */
    private $fotoVideo;
    /**
     * Variável que recebe a descrição de um anúncio.
     * @access private
     * @name $descricao
     */
    private $descricao;
    /**
     * Variável que recebe a data de publica de um anúncio.
     * @access private
     * @name $descricao
     */
    private $dataPublicacao;
    /**
     *
     * @access private
     * @name 
     */
    private $dataVencimento;
    
    public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao)
    {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->fotoVideo = $fotoVideo;
        $this->descricao = $descricao;
        // Gerar dataPublicacao;
        // Gerar dataVencimento;
    }
    public function __construct1($titulo,$categoria,$preco,$fotoVideo,$descricao,
            $dataPublicacao,$dataVencimento)
    {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->fotoVideo = $fotoVideo;
        $this->descricao = $descricao;
        $this->dataPublicacao = $dataPublicacaoerar;
        $this->dataVencimento = $dataVencimento;
    }
    public function setTitulo($titulo)
    {
            $this->titulo = $titulo;
    }
    public function setCategoria($categoria)
    {
            $this->categoria = $categoria;
    }
    public function setPreco($preco)
    {
            $this->preco = $preco;
    }
    public function setfotoVideo($fotoVideo)
    {
            $this->fotoVideo = $fotoVideo;
    }
    public function setDescricao($descricao)
    {
            $this->descricao = $descricao;
    }
    public function setdataPublicacao($dataPublicacao)
    {
            $this->dataPublicacao = $dataPublicacao;
    }
    public function setdataVencimento($dataVencimento)
    {
            $this->dataVencimento = $dataVencimento;
    }

    public function getTitulo()
    {
            return $this->titulo;
    }
    public function getCategoria()
    {
            return $this->categoria;
    }
    public function getPreco()
    {
            return $this->preco;
    }
    public function getfotoVideo()
    {
            return $this->fotoVideo;
    }
    public function getDescricao()
    {
            return $this->descricao;
    }
    public function getdataPublicacao()
    {
            return $this->dataPublicacao;
    }
    public function getdataVencimento()
    {
            return $this->dataVencimento;
    }
}	
?>