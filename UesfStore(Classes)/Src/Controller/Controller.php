<?php
require_once dirname(__FILE__).'/../Model/User.php';
require_once dirname(__FILE__).'/../Model/Usuario.php';
require_once dirname(__FILE__).'/../Model/Anuncio.php';
require_once dirname(__FILE__).'/../Model/Servico.php';
require_once dirname(__FILE__).'/../Model/Produto.php';
require_once dirname(__FILE__).'/../DAO/UsuarioDAO.php';
require_once dirname(__FILE__).'/../DAO/ProdutoDao.php';
require_once dirname(__FILE__).'/../DAO/ServicoDao.php';
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
        $produtoTemp = new Produto($titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario, $quantidade);
       
                
        if(!inserirProduto($produtoTemp->getTitulo(), $produtoTemp->getPreco(),$produtoTemp->getfotoVideo(), 
                $produtoTemp->getDescricao(), $produtoTemp->getIdUsuario(),$produtoTemp->getQuantidade(),$produtoTemp->getCategoria()))
        {
            $mensagem ="Produto,";
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
        $servicoTemp = new Servico($titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario, $aCombinar);
        if(!inserirServico($servicoTemp->getTitulo(), $servicoTemp->getCategoria(), $servicoTemp->getPreco(), $servicoTemp->getfotoVideo(),
                $servicoTemp->getDescricao(), $servicoTemp->getIdUsuario(), $servicoTemp->getACombinar()))
        {
            throw new CampoPreenchidoErradoException("Serviço");
        }
    }
    public function editarServico($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
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
        
        $produtoTemp = new Servico($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar);
       
                
        if(!atualizarServico($produtoTemp->getTitulo(), $produtoTemp->getPreco(),$produtoTemp->getfotoVideo(), 
                $produtoTemp->getDescricao(), $produtoTemp->getIdUsuario(),$produtoTemp->getQuantidade(),$produtoTemp->getCategoria()))
        {
            $mensagem ="Produto,";
            throw new CampoPreenchidoErradoException($mensagem);
        }
    }
    
    public function editarProduto($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$quantidade)
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
        
        $produtoTemp = new Produto($titulo, $categoria, $preco, $fotoVideo, $descricao, $idUsuario, $quantidade);
       
                
        if(!atualizarProduto($produtoTemp->getId(),$produtoTemp->getTitulo(), $produtoTemp->getPreco(),$produtoTemp->getfotoVideo(), 
                $produtoTemp->getDescricao(), $produtoTemp->getIdUsuario(),$produtoTemp->getQuantidade(),$produtoTemp->getCategoria()))
        {
            $mensagem ="Produto,";
            throw new CampoPreenchidoErradoException($mensagem);
        }
    }
    public function recuperarServico($id)
    {
        
    }
    public function recuperarProduto($idUsuario)
    {
        $produtoLista =  recuperarProduto($idUsuario);
        foreach ($produtoLista as $anuncioString) 
        {
            $produto = new Produto($anuncioString['name'], $anuncioString['category_id'], $anuncioString['Preco'], $anuncioString['Foto_Video']
                    , $anuncioString['Descricao'], $anuncioString['usuario_id'], $anuncioString['Quantidade']);
            $produto->setId($anuncioString['id']);
            $produto->setdataPublicacao($anuncioString['Data_Publicacao']);
            $produto->setdataVencimento($anuncioString['Data_Vencimento']);
        }
        return $produto;
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
        $usuarioString = recuperarUsuario($email);
        
         $usuario = new Usuario(
                $usuarioString['name'],
                $usuarioString['Email'],
                $usuarioString['Sexo'],
                $usuarioString['Telefone1'],
                $usuarioString['Telefone2'],
                $usuarioString['Senha'],
                $usuarioString['Foto'],
                $usuarioString['Status']);
         
         $usuario->setId($usuarioString['id']);
         echo $usuario->getId() or die();
         
        return  $usuario;
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
        
        $usuarioAtual = new Usuario($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status);
        
        if(!inserirUsuario($usuarioAtual->getNome(),$usuarioAtual->getEmail(),$usuarioAtual->getSexo(),$usuarioAtual->getTelefone(),$usuarioAtual->getCelular(),
                $usuarioAtual->getSenha(),$usuarioAtual->getFoto(),$usuarioAtual->getStatus()))
        {
            $mensagem ="Usuario,";
            throw new CampoPreenchidoErradoException($mensagem);
        }
    }
    public function editarCadastro($nome,$email,$sexo,$telefone,$celular,$senhaAntiga,$senhaNova,$foto,$status)
    {
        $usuario = recuperarUsuario($email);
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
        if($usuario['Senha'] != $senhaAntiga)
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
        if(!atualizarUsuario($usuarioAtualizado->getNome(), $usuarioAtualizado->getEmail(), $usuarioAtualizado->getSexo(),$usuarioAtualizado->getTelefone(), 
                $usuarioAtualizado->getCelular(), $usuarioAtualizado->getSenha(), $usuarioAtualizado->getFoto(), $usuarioAtualizado->getStatus()))
        {
        //    throw new ErroAtualizacaoException("Usuário");
        }
        
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
    public function CadastrarAnuncioTerceiro($nome,$nomeDaEmpresa,$foto,$valorPago,$link,$idAdministrador)
    {
        
        $mensagem="";
        $exception=0;
        if($nome=="")
        {
            $mensagem.="Nome,";
            $exception=1;
        }
        if($nomeDaEmpresa=="")
        {
            $mensagem.="Nome Da Empresa,";
            $exception=1;
        }
        if($foto=="")
        {
            $mensagem.="Foto,";
            $exception=1;
        }
        if($valorPago=="")
        {
            $mensagem.="Valor Pago,";
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
        //TODO: pegar data do sistema
        $usuarioAtual = new Usuario($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status);
        if(!inserirUsuario($usuarioAtual->getNome(),$usuarioAtual->getEmail(),$usuarioAtual->getSexo(),$usuarioAtual->getTelefone(),$usuarioAtual->getCelular(),
                $usuarioAtual->getSenha(),$usuarioAtual->getFoto(),$usuarioAtual->getStatus()))
        {
            $mensagem ="Usuario,";
            throw new CampoPreenchidoErradoException($mensagem);
        }
    
        
    }
}
?>