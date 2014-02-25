<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?></title>
    <?php

    echo $this->Html->css(array(
        'bootstrap.min',
        'admin'
    ));
    echo $this->Layout->js();
    echo $this->Html->script(array(
        'jquery-1.11.0.min',
        'bootstrap.min',
        'admin'
    ));
    echo $this->fetch('script');
    echo $this->fetch('css');

    ?>
</head>
<body>
<div id="wrapper">
    <?php echo $this->element('admin/header'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?php echo $this->element('admin/navigation'); ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id="content" class="clearfix">
                    <?php echo $this->element('admin/breadcrumb'); ?>
                    <div id="inner-content" class="span12">
                        <?php echo $this->Layout->sessionFlash(); ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('admin/footer'); ?>
<?php
echo $this->Blocks->get('scriptBottom');
echo $this->Js->writeBuffer();
?>
</body>
</html>
