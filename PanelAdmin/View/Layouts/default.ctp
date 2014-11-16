<!DOCTYPE html>
<html lang="pt-br">
<?php echo $this->element('Header'); ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $this->Html->url('/');?>">Olá, Admin </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                           <a href=" <?php 
                            echo $this->Html->url('/usuarios/edit/1'); 
                            ?> ">

                            <i class="fa fa-fw fa-gear"></i> Editar Dados
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php echo $this->element('nav-side-left');?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

             <?php echo $this->Session->flash(); ?>
                   
             <?php echo $this->fetch('content'); ?>
        </div>
        <!-- /#page-wrapper -->
     <div class="Footer">
        <h6>
                    <?php echo $this->element('Footer'); ?>
        </h6>



    </div>
    </div>
    <!-- /#wrapper -->

   

</body>

</html>
