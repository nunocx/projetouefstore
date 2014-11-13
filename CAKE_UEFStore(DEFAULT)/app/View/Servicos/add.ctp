<!-- File: /app/View/Servicos/add.ctp -->

<h1>Add Serviços</h1>
<?php

echo $this->Form->create('Servico');
echo $this->Form->input('IdServico',array('type'=>'hidden'));
echo $this->Form->input('Bloqueado',array('type'=>'hidden','value' =>'0'));
echo $this->Form->input('Expirado',array('type'=>'hidden','value' =>'0'));

echo $this->Form->input('Nome', array('label' => 'Titulo do Serviço:'));
echo $this->Form->input('Categoria', array('label' => 'Categoria:'));
echo $this->Form->input('Descricao', array('label' => 'Descricao:'));
//echo $this->Form->input('Data_Nascimento',array('label' => 'Data de Nascimento:'));

echo $this->Form->input('Preco', array('label' => 'Preço:'));
echo $this->Form->input('Foto_Video', array('label' => 'Foto/Video:'));
echo $this->Form->input('Data_Publicacao',array('value' => date_create()));
echo $this->Form->input('Data_Vencimento',array('value' => date_create()));
echo $this->Form->input('Usuario_Email',array('label' => 'Confirme seu E-mail:'));
echo $this->Form->end('Concluir Cadastro');
