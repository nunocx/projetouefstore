
<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout ?>:
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(
            array('bootstrap',
                'shop-homepage',
                'bootstrap.min' 
                )
            );
        /*

                'heroic-features'
                'sb-admin-2',
                'shop-homepage',
                'metisMenu',
                'metisMenu.min',
                'dataTables.bootstrap',
                'morris',
                'social-buttons',
                'timeline'
                js
                'dataTables.bootstrap',
                'jquery.dataTables',
                'excanvas.min',
                'flot-data',
                'jquery.flot',
                'jquery.flot.pie',
                'jquery.flot.resize',
                'jquery.flot.tooltip.min',
                'metisMenu',
                'metisMenu.min',
                'morris',
                'morris.min',
                'morris-data',
                'raphael.min'
        */
        echo $this->Html->script(
            array(
                'bootstrap',
                'bootstrap.min',
                'jquery'
                )
            );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>