<?php
/**
* 
*/
class Servico extends Anuncio
{
    private $aCombinar;

    public function __construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
    {
        parent::__construct($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario);
            $this->aCombinar = $aCombinar;
    }
    public function __construct1($titulo,$categoria,$preco,$fotoVideo,
            $descricao,$idUsuario,$dataPublicacao,$dataVencimento,$id,$aCombinar)
    {
        parent::__construct1($titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario, 
                $dataPublicacao, $dataVencimento,$id);
        $this->aCombinar = $aCombinar;
    }
    public function setACombinar($aCombinar)
    {
        $this->aCombinar = $aCombinar;
    }
    public function getACombinar()
    {
        return $this->aCombinar;
    }
}
?>