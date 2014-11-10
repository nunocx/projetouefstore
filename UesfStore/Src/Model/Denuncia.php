<?php
/**
* 
*/
class Denuncia
{	
    private $idUsuario;
    private $texto;
    private $idAnuncio;
    private $data;

    public function __construct($idUsuario,$texto,$idAnuncio)
    {
        $this->idUsuario = $idUsuario;
        $this->texto = $texto;
        $this->idAnuncio = $idAnuncio;
        //TODO: Pegar data do sistema.
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }
    public function setIdAnuncio($idAnuncio)
    {
        $this->idAnuncio = $idAnuncio;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    
    public function getIDUsuario()
    {
        return $this->idUsuario;
    }
    public function getTexto()
    {
        return $this->texto;
    }
    public function getIdAnuncio()
    {
        return $this->idAnuncio;
    }
    public function getData()
    {
        return $this->data;
    }
}
?>