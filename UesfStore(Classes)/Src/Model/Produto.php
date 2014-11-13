<?php
/**
* 
*/
class Produto extends Anuncio
{
    private $quantidade;

    public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao, $idUsuario, $quantidade)
    {
        parent::__construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario);
        $this->quantidade = $quantidade;
    }

    public function __construct1($titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario,
            $dataPublicacao, $dataVencimento, $id, $quantidade)
    {
        parent::__construct1( $titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario, 
                    $dataPublicacao, $dataVencimento,$id);
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