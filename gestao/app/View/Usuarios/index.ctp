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
			foreach ($usuarios as $usuarios) {
				$class = null;
				if($i++ % 2 == 0){
					$class = ' class="altrow"';
				}
				
			}
		 ?>
	</table>
</div>