<!-- File: /app/View/Usuarios/add.ctp -->

<h1>Add Usuarios</h1>
<?php
echo $this->Form->create('Usuario');
echo $this->Form->input('Email', array('label' => 'E-mail:'));
echo $this->Form->input('Nome', array('label' => 'Nome Completo:'));
echo $this->Form->input('Telefone1', array('label' => 'Celular:'));
echo $this->Form->input('Telefone2', array('label' => 'Telefone (Opcional):'));
//echo $this->Form->input('Data_Nascimento',array('label' => 'Data de Nascimento:'));
echo $this->Form->input('Data_Nascimento',array( 'label' => 'Data de Nascimento:'
                           , 'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));
echo $this->Form->radio('Sexo', array('M'=>'Masculino','F'=>'Feminino'));
echo $this->Form->input('Senha',array('value'=>''));
echo $this->Form->input('Senha_confirme',array('value'=>'','type'=>'Senha',));
echo $this->Form->end('Concluir Cadastro');

