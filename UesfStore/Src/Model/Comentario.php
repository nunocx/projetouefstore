<?php
/**
* 
*/
class Comentario
{	
    private $idUsuario;
    private $anuncio;
    private $texto;
    private $data;
    private $id;

    public function __construct($idUsuario,$anuncio,$texto,$data)
    {
        $this->idUsuario = $idUsuario;
        $this->anuncio = $anuncio;
        $this->texto = $texto;
        //TODO:Pegar data do sistema
        $this->id=null;
    }
    
    public function __constructor1($idUsuario,$anuncio,$texto,$data,$id)
    {
        $this->idUsuario = $idUsuario;
        $this->anuncio = $anuncio;
        $this->texto = $texto;
        $this->data = $data;
        $this->id = $id;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function setAnuncio($anuncio)
    {
        $this->anuncio = $anuncio;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function setData($data)
    {
        $this->data = $data;	
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getAnuncio()
    {
        return $this->anuncio;
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