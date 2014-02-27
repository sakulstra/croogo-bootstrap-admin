<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
        <?php
        $link = $this->Html->link(
            __d('croogo', 'Croogo %s', strval(Configure::read('Croogo.version'))),
            'http://www.croogo.org'
        );
        ?>
        Powered by <?php echo $link; ?>
        <?php echo $this->Html->image('http://assets.croogo.org/powered_by.png'); ?>
    </div>
</nav>
