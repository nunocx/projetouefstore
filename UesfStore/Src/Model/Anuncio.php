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
     * Variável que recebe a foto ou o video de exemplo do anúncio.
     * @access private
     * @name $fotoVideo
     */
    private $fotoVideo;
    /**
     * Variável que recebe a descrição do anúncio.
     * @access private
     * @name $descricao
     */
    private $descricao;
    /**
     * Variável que recebe a data de publica do anúncio.
     * @access private
     * @name $descricao
     */
    private $idUsuario;
    
    private $dataPublicacao;
    /**
     * Variável que recebe a data de vencimento do anúncio.
     * @access private
     * @name $dataVencimento
     */
    private $dataVencimento;
    
    private $id;
    
    //TODO:arrumas phpdoc.
    
    /**
     * Construtor da classe para um novo anúncio
     * @param type $titulo O titulo do anúncio
     * @param type $categoria A categoria do anúncio
     * @param type $preco O preço do anúncio
     * @param type $fotoVideo A foto ou O video do anúncio
     * @param type $descricao A descrição do anuncio
     */
    public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario)
    {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->fotoVideo = $fotoVideo;
        $this->descricao = $descricao;
        $this->idUsuario = $idUsuario;
        // Gerar dataPublicacao;
        // Gerar dataVencimento;
        $this->id = null;
    }
    
    /**
     * Construtor da classe para os anúncios recuperados do bando de dados
     * @param type $titulo O titulo do anúncio
     * @param type $categoria A categoria do anúncio
     * @param type $preco O preço do anúncio
     * @param type $fotoVideo A foto ou O video do anúncio
     * @param type $descricao A descrição do anuncio
     * @param type $dataPublicacao A data de publicação do anúncio
     * @param type $dataVencimento A data de vencimentodo anúncio
     */
    public function __construct1($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,
            $dataPublicacao,$dataVencimento,$id)
    {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->fotoVideo = $fotoVideo;
        $this->descricao = $descricao;
        $this->idUsuario=$idUsuario;
        $this->dataPublicacao = $dataPublicacao;
        $this->dataVencimento = $dataVencimento;
        $this->id=$id;
    }
    
    /**
     * Método 
     * @name setTitulo
     * @param type $titulo
     */
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
    public function setIdUsuario()
    {
        $this->idUsuario=$idUsuario;
    }
    public function setdataPublicacao($dataPublicacao)
    {
        $this->dataPublicacao = $dataPublicacao;
    }
    public function setdataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;
    }
    public function setId($id)
    {
        $this->id=$id;
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
    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function getdataPublicacao()
    {
        return $this->dataPublicacao;
    }
    public function getdataVencimento()
    {
        return $this->dataVencimento;
    }
    public function getId()
    {
        return $this->id;
    }
}	
?>