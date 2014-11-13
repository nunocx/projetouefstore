<?php
/**
* 
*/
class Mensagem
{
    private $titulo;
    private $destinatario;
    private $remetente;
    private $texto;
    private $data;
    private $id;

    public function __construct($titulo,$destinatario,$remetente,$texto)
    {
        $this->titulo = $titulo;
        $this->destinatario = $destinatario;
        $this->remetente = $remetente;
        $this->texto = $texto;
        //TODO: pegar data do sistema.
        $this->id = null;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;
    }
    public function setRemetente($remetente)
    {
        $this->remetente = $remetente;
    }
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getDestinatario()
    {
        return $this->destinatario;
    }
    public function getRemetente()
    {
        return $this->remetente;
    }
    public function getTexto()
    {
        return $this->texto;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getId()
    {
        return $this->id;
    }
}
?>