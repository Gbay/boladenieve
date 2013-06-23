<div class="catalogos form">
<?php echo $this->Form->create('Catalogo');?>
	<fieldset>
		<legend><?php echo __('Edit Catalogo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('catalogo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Catalogo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Catalogo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Catalogos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
