<?php

$dashboardUrl = array(
	'admin' => true,
	'plugin' => 'settings',
	'controller' => 'settings',
	'action' => 'dashboard',
);
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link(Configure::read('Site.title'), $dashboardUrl, array('class' => 'navbar-brand')); ?>
            <?php echo $this->Html->link(__d('croogo', 'Dashboard'), $dashboardUrl, array('class' => 'navbar-brand')); ?>
        </div>
        <div class="navbar-collapse collapse">
                <?php
                echo $this->Croogo->adminMenus(CroogoNav::items('top-left'), array(
                    //'type' => 'dropdown',
                    'htmlAttributes' => array(
                        'id' => 'top-left-menu',
                        'class' => 'nav navbar-nav navbar-left',
                    ),
                ));
                if ($this->Session->read('Auth.User.id')){
                    echo $this->Croogo->adminMenus(CroogoNav::items('top-right'), array(
                        'type' => 'dropdown',
                        'htmlAttributes' => array(
                            'id' => 'top-right-menu',
                            'class' => 'nav navbar-nav navbar-right',
                        ),
                    ));
                }
                ?>
        </div>
    </div>
</div>