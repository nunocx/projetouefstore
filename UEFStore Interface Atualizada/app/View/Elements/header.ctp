
<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('bootstrap.min','easy-responsive-tabs','etalage','style'));
                
        echo $this->Html->script(
            array('bootstrap','bootstrap.min','jquery','jquery.openCarousel','jquery.etalage.min','easyResponsiveTabs','easing','move-top','navigation','star-rating','jquery-1.9.0.min')
            );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    
</head>