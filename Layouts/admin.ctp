<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?></title>
		<?php

		echo $this->Html->css(array(
			'bootstrap.min'
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
            'bootstrap.min'
        ));
		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body>
		<div id="wrap">
			<?php echo $this->element('admin/header'); ?>
			<?php echo $this->element('admin/navigation'); ?>
			<div id="push"></div>
			<div id="content-container" class="container-fluid">
				<div class="row-fluid">
					<div id="content" class="clearfix">
						<?php echo $this->element('admin/breadcrumb'); ?>
						<div id="inner-content" class="span12">
							<?php echo $this->Layout->sessionFlash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
					</div>
					&nbsp;
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
