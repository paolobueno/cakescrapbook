<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('imagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>

<?php
	$this->start('css');
	echo $this->Html->css("batatinha");
	$this->end();
	$this->start('script');
	echo $this->Html->script("jquery");
	$this->end();
?>

<?php
	$this->start('footer');
?>
<p class="legal">Este é o footer de Categories#add!</p>
<?php
	$this->end();
?>
<!-- Exibido em $this->fetch('meta'); -->