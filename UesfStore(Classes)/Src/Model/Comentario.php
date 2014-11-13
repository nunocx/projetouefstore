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

    public function __construct($idUsuario,$anuncio,$texto,$data)
    {
        $this->idUsuario = $idUsuario;
        $this->anuncio = $anuncio;
        $this->texto = $texto;
        $this->data = $data;
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