<?php
$crumbs = $this->Html->getCrumbs('</li><li>');
?>
<?php if ($crumbs): ?>
<div id="breadcrumb-container" class="span12 visible-desktop">
	<ol class="breadcrumb">
		<?php echo "<li>".$crumbs."</li>"; ?>
	</ol>
</div>
<?php endif; ?>