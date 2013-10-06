<div class="usuarios index">
	<h2>Listar</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>id</th>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Email</th>
			<th class="funcoes">Funções</th>
		</tr>
		<?php 
			$i = 0;
			foreach ($usuarios as $usuario) {
				$class = null;
				if($i++ % 2 == 0){
					$class = ' class="altrow"';
				}
				
			
		 ?>
		 <tr <?php echo $class ?>>
		 	<td><?php echo $usuario['Usuario']['id']; ?></td>
		 	<td><?php echo $usuario['Usuario']['nome'] ?></td>
		 	<td><?php echo $usuario['Usuaario']['sobrenome'] ?></td>
		 	<td><?php echo $usuario['Usuario']['email'] ?></td>
		 	<td><?php  ?></td>
		 	<td class="funcoes">
		 		<?php 
		 			echo $this->Html->link('Visualizar', array('action'=> 'visualizar'), $usuario['Usuario']['id']);
					echo $this->Html->link('Editar', array('action'=>'editar'), $usuario['Usuario']['id']);
					echo $this->Form-postlink('Deletar', array('action' => 'deletar'), $usuario['Usuario']['id']), array('confirm'=> 'Deseja realmente excluir esse usuário?');
		 		 ?>
		 		 
		 	</td>
		 </tr>
		 <?php }  ?>
	</table>
	<div class="funcoes">
		<h3>Funções</h3>
		<ul>
			<li><?php $this->Html->link('Adicionar', array('action'=> 'adicionar')); ?></li>
		</ul>
	  
	</div>
</div>