
<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout ?>:
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(
            array(
                'shop-homepage',
                'bootstrap.min',
                'heroic-features',
                'sb-admin-2',
                'shop-homepage',
                'plugins/metisMenu/metisMenu',
                'plugins/metisMenu/metisMenu.min',
                'plugins/dataTables.bootstrap',
                'plugins/morris',
                'plugins/social-buttons',
                'plugins/timeline'
                )
            );
        echo $this->Html->script(
            array(
                'bootstrap',
                'bootstrap.min',
                'jquery',
                'plugins/dataTables/dataTables.bootstrap',
                'plugins/dataTables/jquery.dataTables',
                'plugins/flot/excanvas.min',
                'plugins/flot/flot-data',
                'plugins/flot/jquery.flot',
                'plugins/flot/jquery.flot.pie',
                'plugins/flot/jquery.flot.resize',
                'plugins/flot/jquery.flot.tooltip.min',
                'plugins/metisMenu/metisMenu',
                'plugins/metisMenu/metisMenu.min',
                'plugins/morris/morris',
                'plugins/morris/morris.min',
                'plugins/morris/morris-data',
                'plugins/morris/raphael.min'
                )
            );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>