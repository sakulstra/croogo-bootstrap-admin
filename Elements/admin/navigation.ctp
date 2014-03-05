<?php
    echo $this->Croogo->adminMenus(CroogoNav::items(),array(
        'data-target'=>true,
        'hasChild'=>array('class'=>'hasChild collapsed'),
        'iconPrefix' => 'fa fa-',
        'root' => array(
            'ul' => array(
                'class' => 'nav nav-sidebar nav-stacked',
            ),
            'a' => array(
                'data-toggle' => 'collapse',
            ),
            'li' => array()
        ),
        'node' => array(
            'ul' => array(
                'class' => 'nav collapse',
            ),
            'a' => array(
                'data-toggle' => 'collapse',
            ),
            'li' => array()
        ),
        'leaf' => array(
            'ul' => array(
                'class' => 'nav collapse',
            ),
            'a' => array(),
            'li' => array()
        )
    ));
?>