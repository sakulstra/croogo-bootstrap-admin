<?php
echo $this->Croogo->adminMenus(CroogoNav::items(), array(
    'htmlAttributes' => array(
        'id' => 'sidebar-menu',
        'class' => 'nav nav-sidebar'
    ),
));
?>