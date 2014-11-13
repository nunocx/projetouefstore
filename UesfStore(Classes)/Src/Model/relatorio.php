<?php
/**
* 
*/
class relatorio
{
    private $titulo;
    private $corpo;
    private $imagem;	

    public function __construct($titulo,$corpo,$imagem)
    {
        $this->titulo = $titulo;
        $this->corpo = $corpo;
        $this->imagem = $imagem;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo; 
    }
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;
    }
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }
    public function getTitulo()
    {
        return $this->titulo; 
    }
    public function getCorpo()
    {
        return $this->corpo;
    }
    public function getImagem()
    {
        return $this->imagem;
    }
}
?>