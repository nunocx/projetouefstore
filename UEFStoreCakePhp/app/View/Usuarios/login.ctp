<h3><?php echo __('Coloque seu login e senha para acessar o portal'); ?></h3>
    <?php echo $this->Form->create('Usuario', array('url' => array('controller' => 'usuarios', 'action' => 'login')));?>
        <fieldset></br>
        <?php
            echo $this->Form->input('username',array('label'=>'E-mail','class'=>'form-control'));
            echo $this->Form->input('password',array('label'=>'Senha','class'=>'form-control'));
        ?>
                  <p>	</br><button type="submit" class="btn btn-inverse">Entrar</button></p>
        </fieldset>

    <?php echo $this->Form->end();?>