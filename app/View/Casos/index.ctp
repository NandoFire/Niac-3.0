<div class="casos index">
	<h2><?php echo __('Casos'); ?></h2>
	<table cellpadding="0" cellspacing="0">

<?php echo $this->Time->timeAgoInWords(
    'Oct 1, 2015',
    array('format' => 'F jS, Y')); ?>
	<thead>
	<tr>
	<!-- NÃO alterar valores dentro dos sort(),
		 pois alterá-los quebra o sort da tabela por aquilo que foi mudado. -->
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('chaveAntiga','Numero do Caso'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimaAtualizacao','Não atualizado a'); ?></th>
			<th><?php echo $this->Paginator->sort('dataAbertura','Data de Abertura'); ?></th>
			<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Ações'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($casos as $caso): ?>
	<tr>
		<!-- <td><?php echo h($caso['Caso']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($caso['Caso']['chaveAntiga']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['ultimaAtualizacao']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['dataAbertura']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $caso['Caso']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caso['Caso']['id'])); ?>
		<!--  É melhor tirarmos a opcao de deletar casos... A pedido do Niac, deletar será substituido por arquivamento de casos	$this->Form->postLink(__('Apagar'), array('action' => 'delete', $caso['Caso']['id']), array(), __('Tem certeza que quer deletar o caso # %s?', $caso['Caso']['id']));  ?> -->

		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} de um total de {:count} entradas, começando na entrada {:start} e terminando na entrada {:end}.')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Caso'), array('action' => 'add')); ?></li>
<li><?php
//Export de CSV
echo $this->Html->link('export', array(
	'controller' => 'casos', 
	'action' => 'export',

));
?></li>
	</ul>
</div>
