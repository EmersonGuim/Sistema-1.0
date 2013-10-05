<div class="usuarios form">
	<?php echo $this->Form->create('Usuario') ?>
	<fieldset>
		<legend>Adicionar</legend>
		<?php	
			echo $this->Form->input('nome');
			echo $this->Form->input('sobrenome');
			echo $this->Form->input('email');
	 	?>
	</fieldset>
	<?php echo $this->Form->end('ENVIAR'); ?>
</div>
<div class="funcoes">
	<h3>Funções</h3>
	<ul>
		<li>
			<?php echo $this->html->link('Listar',array('action' => 'index')); ?>
		</li>
	</ul>	
</div>