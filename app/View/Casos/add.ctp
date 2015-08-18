<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Caso');?></legend>
	<?php

echo '<table> <tr> <td width=\'20%\'>	';


		echo '<div style="float: left;">';		
		echo $this->Form->input('chaveAntiga', array('style'=>'width:80px; height:20px;','label' =>'N&uacute;mero do Caso'));
		echo '</div>';

echo '</td><td>';

		echo '<div style="float: left;">';		
		echo $this->Form->input('permissaoPesquisa', array ('div' => false));
		echo '</div>'; 

echo '</td></tr></table>';

?>

		
		<h3><?php echo '<div>Dados do Usu&aacute;rio</div>'; ?> </h3>
		<?php echo '<table> <tr> <td width=\'20%\'>';
		echo $this->Form->input('nome',array('style'=>'width:500px; height:20px;'));
		echo '</td> <td>';
		echo __($this->Form->input('dataDeNascimento'));
		echo ' </td></tr> <tr></table>';
		echo '<table> <tr> <td width=\'5%\'>';
		echo $this->Form->input('naturalidade', array('style'=>'width:200px; height:20px;'));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("estado",array('type'=>'select','options'=>array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO')));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("estadoCivil",array('type'=>'select','options'=>array("solteiro" => "Solteiro", "casado" => "Casado", "divorciado" => "Divorciado", "viuvo" => "Viuvo", "uniaoEstavel" => "UniaoEstavel")));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("genero",array('type'=>'select','options'=>array('feminino','masculino','outros')));
		echo '</td></tr></table>';

		echo '<table> <tr> <td>';
//RG nao esta aceitando a regra de 9 digitos
		echo $this->Form->input('rg',array('style'=>'width:200px; height:20px;','rule' => array('minLength', 9, 'maxLength', 9)));
		echo '</td><td>';
		echo $this->Form->input('cpf',array('style'=>'width:200px; height:20px;','rule' => array('validaCPF')));
		echo '</td><td>';
		echo $this->Form->input("escolaridade",array('type'=>'select','options'=>array('fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo')));
		echo '</td></tr></table>';
		echo $this->Form->input('situacaoTrabalhista', array('style'=>'width:200px; height:20px;'));
?> 
		<h3><?php echo '<div>Contato e Localizacao</div>'; ?> </h3>
		<?php echo $this->Form->input('email',array('type' => 'email','style'=>'width:200px; height:20px;'));
		echo $this->Form->input('endereco',array('label' => 'Endere&ccedil;o','style'=>'width:800px; height:20px;'));
		echo $this->Form->input('bairro',array('type'=>'select','options'=>array('vila do joao', 'vila do pinheiro'))); //Atualizar com opcoes de bairros

		echo $this->Form->input('pontoDeReferencia',array('style'=>'width:800px; height:20px;'));
		echo '<table> <tr> <td>';
		echo $this->Form->input('contato1',array('type' => 'tel','style'=>'width:200px; height:20px;'));
		echo '</td><td>';
		echo $this->Form->input('contato2',array('style'=>'width:200px; height:20px;'));
		echo '</td><td>';
		echo $this->Form->input('contato3',array('style'=>'width:200px; height:20px;'));
		echo '</td></tr></table>';
		?>

		<h3><?php echo '<div>Dados do Primeiro Atendimento</div>';?> </h3>
		<?php echo $this->Form->input('dataAbertura');
		echo $this->Form->input('comoSoubeDoNiac');
		echo $this->Form->input('introducaoAoCaso',array('label' => 'Introdu&ccedil;&atilde;o ao Caso'));
		echo $this->Form->input('demanda');
		echo $this->Form->input('observacao');
		echo $this->Form->input('encaminhamentos');

	?>

	<h1><?php  echo  __('Equipe do Atendimento'); ?></h1>

	<?php
		echo $this->Form->input('equipeServicoSocial',array('style'=>'width:500px; height:20px;'));
		echo $this->Form->input('equipePsicologia',array('style'=>'width:500px; height:20px;'));
		echo $this->Form->input('equipeDireito',array('style'=>'width:500px; height:20px;'));

	?>
	<h3> <?php  echo __('Disponibilidade de hor&aacute;rio'); ?> </h3>
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
		//echo $this->Form->input('nomeDoEntrevistado');
		//echo $this->Form->input('nomeDoUsuario');

?>
		<h3><?php echo '<div>Configura&ccedil;&atilde;o Familiar</div>'; ?> </h3>

		<h1><?php echo '<div>Configura&ccedil;&atilde;o Familiar residencial</div>'; ?> </h1>
		

		<?php '<table style="width:100%"> <tr> ';
		echo '<td width=\'20%\'> Nome </td>';
		echo '<td width=\'20%\'> Idade </td>';
		echo '<td width=\'20%\'> Escolaridade </td>';
		echo '<td width=\'20%\'> Situacao de Trabalho </td>';
		echo '<td width=\'20%\'> Vinculo Familiar com o Usuario </td>';
		echo '</tr></table>';
		echo '<table> <tr> <td>';
		echo $this->Form->input('cfrPessoa1Nome',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1Idade',array('label' => false,'style'=>'width:80px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1Escolaridade',array('label' => false,'type'=>'select','options'=>array('fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo')));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1Trabalhista',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1VinculoFamiliar',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> </tr> </table>'; 
		?>




		<h1><?php echo '<div>Pessoas de refer&ecirc;ncia residentes em outro domicilio</div>'; ?> </h1>

		<?php '<table style="width:100%"> <tr> ';
		echo '<td width=\'20%\'> Nome </td>';
		echo '<td width=\'20%\'> Idade </td>';
		echo '<td width=\'20%\'> Escolaridade </td>';
		echo '<td width=\'20%\'> Situacao de Trabalho </td>';
		echo '<td width=\'20%\'> Vinculo Familiar com o Usuario </td>';
		echo '</tr></table>';
		echo '<table> <tr> <td>';
		echo $this->Form->input('pdrrodPessoa1Nome',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1Idade',array('label' => false,'style'=>'width:80px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1Escolaridade',array('label' => false,'type'=>'select','options'=>array('fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo')));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1Trabalhista',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1VinculoFamiliar',array('label' => false,'style'=>'width:200px; height:20px;'));
		echo '</td> </tr> </table>'; 
		
?>
	</fieldset>
<?php echo $this->Form->end(__('Fazer Adição De Caso')); ?>
</div>
<div class="familia form">
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>