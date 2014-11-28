<div class="usuarios form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Para logar, insira o nome de usuário e senha:'); ?></legend>
        <?php echo $this->Form->input('Usuário');
        echo $this->Form->input('Senha');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>