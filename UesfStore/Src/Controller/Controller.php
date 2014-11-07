<?php
require_once dirname(__FILE__).'/../Model/User.php';
require_once dirname(__FILE__).'/../Model/Usuario.php';
require_once dirname(__FILE__).'/../Model/Anuncio.php';
require_once dirname(__FILE__).'/../Model/Servico.php';
require_once dirname(__FILE__).'/../Model/Produto.php';
require_once dirname(__FILE__).'/../DAO/UsuarioDAO.php';
/**
* 
*/
class Controller
{
    public function __construct()
    {
        

    }
    
    public function buscarAnuncio($nome,$categoria,$decricao)
    {
        //TODO: Buscar no banco de dados e retornar uma lista de anúncios.
    }
    
    public function recuperarAnuncio($id)
    {
        //TODO: Buscar no banco de dados o anuncio com o id.
    }
    public function cadastrarProduto($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$quantidade)	
    {
        $mensagem="";
        $exception=0;
        if($titulo=="")
        {
            $mensagem.="Titulo,";
            $exception=1;
        }
        if($categoria=="")
        {
            $mensagem.="Categoria,";
            $exception=1;
        }
        if($preco=="")
        {
            $mensagem.="Preco,";
            $exception=1;
        }
        if($descricao=="")
        {
            $mensagem.="Descricao,";
            $exception=1;
        }
        if($idUsuario=="")
        {
            $mensagem.="Usuario,";
            $exception=1;
        }
        if($quantidade=="")
        {
            $mensagem.="Quantidade,";
            $exception=1;
        }
       
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        //TODO:Mandar Para o bano de dados. Pode lançar uma exceção (FalhaEnvioException)
    }
    public function cadastrarServico($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)	
    {   
        $mensagem="";
        $exception=0;
        if($titulo=="")
        {
            $mensagem.=",Titulo";
            $exception=1;
        }
        if($categoria=="")
        {
            $mensagem.="Categoria,";
            $exception=1;
        }
        if($preco=="")
        {
            $mensagem.="Preco,";
            $exception=1;
        }
        if($descricao=="")
        {
            $mensagem.="Descrição,";
            $exception=1;
        }
        
        if($idUsuario=="")
        {
            $mensagem.="Usuario,";
            $exception=1;
        }
        if($aCombinar=="")
        {
            $mensagem.="aCombinar,";
            $exception=1;
        }
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        //TODO:Mandar Para o bano de dados. Pode lançar uma exceção (FalhaEnvioException)
    }
    public function editarServico($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
    {

    }
    
    public function editarProduto($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$quantidade)
    {

    }
    public function autenticarAnuncio($anuncio)
    {

    }
    public function checarAnuncio()
    {

    }
    public function enviarAlerta()
    {

    }
    public function buscarUsuario($nome)
    {
        
    }
    
    public function recuperarUsuario($email)
    {
        //TODO: Buscar no banco de dados o usuário com o id.
    }
    
    public function cadastrarUsuario($nome,$email,$sexo,$telefone,$celular,$senha,$senhaConfirmacao,$foto,$status)
    {
        $mensagem="";
        $exception=0;
        if($nome=="")
        {
            $mensagem.="Nome,";
            $exception=1;
        }
        if($email=="")
        {
            $mensagem.="Email,";
            $exception=1;
        }
        //TODO: Checar e-mail e(throw new EmailInvalidoException);

        if($sexo=="")
        {
            $mensagem.="Sexo,";
            $exception=1;
        }
        if(strlen($telefone)!=11)
        {
            $mensagem.="Telefone,";
            $exception=1;
        }
        if(strlen($celular)!=11)
        {
            $mensagem.="Celular,";
            $exception=1;
        }
        if(strlen($senha)<6 | $senha != $senhaConfirmacao)
        {
            $mensagem.="Senha,";
            $exception=1;
        }        
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        
        $usuario = new Usuario($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status);
        if(!(inserir($usuario->getNome(),$usuario->getEmail(),$usuario->getSexo(),$usuario->getTelefone(),$usuario->getCelular()
                ,$usuario->getSenha(),$usuario->getFoto(),$usuario->getStatus())))
        {
            $mensagem="Usuario,";
            throw new CampoPreenchidoErradoException($mensagem);
        }    
    }
    public function editarCadastro($nome,$email,$sexo,$telefone,$celular,$senhaAntiga,$senhaNova,$foto,$status)
    {
        $usuario = recuperarUsuario($Email);
        $mensagem="";
        $exception=0;
        if($nome=="")
        {
            $mensagem.="Nome,";
            $exception=1;
        }
        if($sexo=="")
        {
            $mensagem.="Sexo,";
            $exception=1;
        }
        if(strlen($telefone)!=11)
        {
            $mensagem.="Telefone,";
            $exception=1;
        }
        if(strlen($celular)!=11)
        {
            $mensagem.="Celular,";
            $exception=1;
        }
        if($usuario->getSenha() != $senhaAntiga)
        {
            throw new SenhaErradaException;
        }
        if(strlen($senhaNova) < 6)
        {
            $mensagem.="Senha,";
            $exception=1;
        }
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        $usuarioAtualizado = new Usuario($nome, $email, $sexo, $telefone, $celular, $senhaNova, $foto, $status);
        
    }
    public function autenticarUsuario($idUsuario)
    {

    }
    public function login($email,$senha)
    {
       //TODO: Verificar Como fazer login.
    }
    public function logout($email)
    {

    }
    public function recuperarSenha($email)
    {
        //Envia um email com a senha para o usuário;
    }
    public function exportarRelatorio()
    {

    }
    public function enviarMensagem($titulo,$destinatario,$remetente,$texto)
    {

    }
    public function excluirMensagem($idUsuario,$idMensagem)
    {

    }
    public function doacao()
    {
 
    }
    public function conectarBancoDeDados()
    {

    }
    public function CadastrarAnuncioTerceiro($nome,$nomeDaEmpresa,$foto,$valorPago,$dataDeInicio,
            $idAdministrador,$link,$banner)
    {
        
    }
}
?>