<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Editar Caso'); ?></legend>
	<?php
		
echo '<table> <tr> <td width=\'20%\'>';


		echo '<div style="float: left;">';		
		echo $this->Form->input('chaveAntiga', array('style'=>'width:50px; height:20px;'));
		echo '</div>';

echo '</td><td>';

		echo '<div style="float: left;">';		
		echo $this->Form->input('permissaoPesquisa', array ('div' => false));
		echo '</div>'; 

echo '</td></tr></table>';

?>

		
		<h3><?php echo '<div>Dados do Usuario</div>'; ?> </h3>
		<?php echo $this->Form->input('nome',array('style'=>'width:500px; height:20px;'));
		echo $this->Form->input('dataDeNascimento');
		echo $this->Form->input('naturalidade', array('style'=>'width:200px; height:20px;'));
		echo $this->Form->input("estado",array('type'=>'select','options'=>array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO')));

		echo $this->Form->input("estadoCivil",array('type'=>'select','options'=>array("solteiro" => "Solteiro", "casado" => "Casado", "divorciado" => "Divorciado", "viuvo" => "Viuvo", "uniaoEstavel" => "UniaoEstavel")));
		echo $this->Form->input("genero",array('type'=>'select','options'=>array('feminino','masculino','outros')));
		echo $this->Form->input('rg',array('style'=>'width:200px; height:20px;'));
		echo $this->Form->input('cpf',array('style'=>'width:200px; height:20px;'));
		echo $this->Form->input("escolaridade",array('type'=>'select','options'=>array('fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo')));
		echo $this->Form->input('situacaoTrabalhista', array('style'=>'width:200px; height:20px;')); ?>

		<h3><?php echo '<div>Contato e Localizacao</div>'; ?> </h3>
		<?php echo $this->Form->input('email',array('type' => 'email','style'=>'width:200px; height:20px;'));
		echo $this->Form->input('endereco',array('label' => 'Endere&ccedil;o','style'=>'width:800px; height:20px;'));
		echo $this->Form->input('bairro',array('type'=>'select','options'=>array('vila do joao', 'vila do pinheiro'))); //Atualizar com opcoes de bairros

		echo $this->Form->input('pontoDeReferencia',array('style'=>'width:800px; height:20px;'));
		echo $this->Form->input('contato1',array('type' => 'tel','style'=>'width:200px; height:20px;'));
		echo $this->Form->input('contato2',array('style'=>'width:200px; height:20px;'));
		echo $this->Form->input('contato3',array('style'=>'width:200px; height:20px;'));
		?>

		<h3><?php echo '<div>Dados do Primeiro Atendimento</div>';?> </h3>
		<?php echo $this->Form->input('dataAbertura');
		echo $this->Form->input('comoSoubeDoNiac');
		echo $this->Form->input('introducaoAoCaso',array('label' => 'Introdu&ccedil;&atilde;o ao Caso'));
		echo $this->Form->input('demanda');
		echo $this->Form->input('observacao');
		echo $this->Form->input('encaminhamentos');

	?>

	<h4><?php  echo  __('Equipe do Atendimento'); ?></h4>

	<?php
		echo $this->Form->input('equipeServicoSocial');
		echo $this->Form->input('equipePsicologia');
		echo $this->Form->input('equipeDireito');
?>
	<h4> <?php  echo __('Horarios'); ?> </h4>
	<?php 
		echo '<table style="width:100%">  <tr>';
		echo '<td> </td>';
		echo '<td> Segunda </td>';
		echo '<td> Ter&ccedil;a </td>';
		echo '<td> Quarta </td>';
		echo '<td> Quinta </td>';
		echo '<td> Sexta </td>';
		echo '</tr>';
		echo '<tr> <td> Manh&atilde; </td>';
		echo '<td>';
		echo $this->Form->input('horariosSegundaManha',array('label' => false));
		echo '</td>';
		echo '<td>';
		echo $this->Form->input('horariosTercaManha',array('label' => false));
		echo '</td>';
		echo '<td>';
		echo $this->Form->input('horariosQuartaManha',array('label' => false));
		echo '</td> <td>';
		echo $this->Form->input('horariosQuintaManha',array('label' => false));
		echo '</td><td>';
		echo $this->Form->input('horariosSextaManha',array('label' => false));
		echo '</td> </tr>';

		echo '<tr> <td> Tarde </td><td>';		
		echo  $this->Form->input('horariosSegundaTarde',array('label' => false));
		echo '</td><td>';
		echo $this->Form->input('horariosTercaTarde',array('label' => false));
		echo '</td> <td>';
		echo $this->Form->input('horariosQuartaTarde',array('label' => false));
		echo '</td> <td>';
		echo $this->Form->input('horariosQuintaTarde',array('label' => false));
		echo '</td> <td>';
		echo $this->Form->input('horariosSextaTarde',array('label' => false));
		echo '</td> </tr> </table>';
		echo $this->Form->input('nomeDoEntrevistado');
		echo $this->Form->input('nomeDoUsuario');




	?>
	</fieldset>
<?php echo $this->Form->end(__('Executar Mudanças')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar Caso'), array('action' => 'delete', $this->Form->value('Caso.id')), array(), __('Tem certeza que quer deletar o caso # %s?', $this->Form->value('Caso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>
