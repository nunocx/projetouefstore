<?php
/**
* 
*/
class RelatorioUsuario extends Relatorio
{
    private $quantidadeUsuarios;
    private $quantidadeUsuarioAdvertidos;
    private $quantidadeUsuarioBloqueados;
    private $quantidadeUsuariosDenunciados;

    public function __construct($titulo,$corpo,$imagem,$quantidadeUsuarios,
            $quantidadeUsuarioAdvertidos,$quantidadeUsuarioBloqueados,$quantidadeUsuariosDenunciados)
    {
        parent::__construct(titulo,corpo,imagem);
        $this->quantidadeUsuarios = $quantidadeUsuarios;
        $this->quantidadeUsuarioAdvertidos = $quantidadeUsuarioAdvertidos;
        $this->quantidadeUsuarioBloqueados = $quantidadeUsuarioBloqueados;
        $this->quantidadeUsuariosDenunciados = $quantidadeUsuariosDenunciados;
    }
    public function setQuantidadeUsuarios($quantidadeUsuarios)
    {
        $this->quantidadeUsuarios = $quantidadeUsuarios;
    }
    public function setQuantidadeUsuariosAdvertidos($quantidadeUsuarioAdvertidos)
    {
        $this->quantidadeUsuarioAdvertidos = $quantidadeUsuarioAdvertidos;
    }
    public function setQuantidadeUsuariosBloqueados($quantidadeUsuarioBloqueados)
    {
        $this->quantidadeUsuarioBloqueados = $quantidadeUsuarioBloqueados;
    }
    public function setQuantidadeUsuariosDenunciados($quantidadeUsuariosDenunciados)
    {
        $this->quantidadeUsuariosDenunciados = $quantidadeUsuariosDenunciados;
    }
    public function getQuantidadeUsuarios()
    {
        return $this->quantidadeUsuarios;
    }
    public function getQuantidadeUsuariosAdvertidos()
    {
        return $this->quantidadeUsuariosAdvertidos;
    }
    public function getQuantidadeUsuariosBloqueados()
    {
        return $this->quantidadeUsuarioBloqueados;
    }
    public function getQuantidadeUsuariosDenunciados()
    {
        return $this->getQuantidadeUsuariosDenunciados;
    }
}
?>