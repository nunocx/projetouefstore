<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
  */
?>
<!DOCTYPE html>
<html lang="pt-br">

<!--  HEADER-->
<?php
	echo $this->element('header');
?>
<body>
	<!-- Head -->
	<?php
		echo $this->element('header');		
	?>
   <!--  Nav Menu top  -->

   <?php echo $this->element('navbar-top'); ?>
    <!-- Page Content -->
    
    <div class="container">
    <div>
    <?php
       echo $this->Html->image('logo.png');
    ?>

                <p> <?php //echo $this->Form->input('Login'); ?></p>
                <p> <?php  // echo $this->Form->input('Senha');?></p>
    </div>
        <div class="row">

           <!-- nav Side Left -->
           <?php echo $this->element('navbar-side-left'); ?>

            <div class="col-md-9">
                <div class="row">

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
		<?php
			echo $this->element('footer');
		?>       

    </div>
    <!-- /.container -->

   
</body>

</html>
