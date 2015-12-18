<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Editar Caso'); ?></legend>
	<?php
		echo '<table> <tr> <td width=\'20%\'>	';


		
		echo $this->Form->input('chaveAntiga', array('style'=>'width:80px; height:20px;','label' =>'N&uacute;mero do Caso'));
	?>


	<!--	<?php 
		echo '</td><td>';


		echo $this->Form->input('numeroProcesso', array('style'=>'width:100px; height:20px;','label' =>'N&uacute;mero do Processo(Externo ao NIAC)'));
		echo '</td><td>';		
		echo $this->Form->input('permissaoPesquisa', array ('div' => false));

		echo '</td></tr></table>';
	//Numero do processo ainda nao implementado no banco de dados
		

		?> 
		-->

		
		<h3><?php echo '<div>Dados do Usu&aacute;rio</div>'; ?> </h3>
		<?php echo '<table> <tr> <td width=\'20%\'>';
		echo $this->Form->input('nome',array('style'=>'width:500px; height:20px;'));
		echo '</td> <td>';
		echo $this->Form->input('pessoaNomeSocial', array('label' =>'Nome Social','style'=>'width:500px; height:20px;'));

		echo ' </td></tr> <tr><td>';
		//Nome social ainda nao implementado no banco de dados
		
		echo $this->Form->input('pessoaNomeResponsavel', array('label' =>'Nome dos Pais/Responsável'));
		echo '</td></tr></table>'; 
		?>

	<!-- <?php
		echo '</td><td>';
		echo __($this->Form->input('dataDeNascimento'));
		echo'</td></tr><tr></table>';
		echo '<table> <tr> <td width=\'5%\'>';
		echo $this->Form->input('naturalidade', array('style'=>'width:200px; height:20px;'));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("estado",array('type'=>'select','options'=>array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO')));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("estadoCivil",array('type'=>'select','options'=>array("solteiro(a)" => "Solteiro(a)", "casado(a)" => "Casado(a)", "divorciado(a)" => "Divorciado(a)", "viuvo(a)" => "Viuvo(a)", "uniaoEstavel" => "União Estável")));
		echo '</td><td width=\'5%\'>';
		echo $this->Form->input("genero",array('type'=>'select','options'=>array('feminino','masculino','outros')));
		echo '</td></tr></table>';
			
		echo $this->Form->input("pessoaCor",array('type'=>'select','label'=>'Cor/Raça','options'=>array('branca','preta','amarela','parda','indígena')));

		echo '<table> <tr> <td>';
//RG nao esta aceitando a regra de 9 digitos
		echo $this->Form->input('rg',array('style'=>'width:200px; height:20px;','rule' => array('minLength', 9, 'maxLength', 9)));
		echo '</td><td>';
		echo $this->Form->input('cpf',array('style'=>'width:200px; height:20px;','rule' => array('validaCPF')));
		echo '</td><td>';
		echo $this->Form->input("escolaridade",array('type'=>'select','options'=>array('analfabeto','fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo',"pos graduacao incompleta"=>"Pós Graduação incompleta","pos graduacao completa"=>"Pós Graduação completa","mestrado incompleto"=>"Mestrado incompleto","mestrado completo"=>"Mestrado completo","doutorado incompleto"=>"Doutorado incompleto","doutorado completo"=>"Doutorado completo")));
		echo '</td></tr></table>';
		echo $this->Form->input('situacaoTrabalhista', array('type'=>'select','options'=>array ('Empregado com Carteira', 'Empregado Informal','Desempregado', 'Aposentado','Servidor público','Militar', 'Trabalhador Rural' , 'Outros')));
?> 
		<h3><?php echo '<div>Contato e Localizacao</div>'; ?> </h3>
		<?php //* Cep ainda não implementado no banco de dados, o mesmo sera quando refizermos a base de dados
		echo '<table><tr><td>';		
		echo $this->Form->input('endereco',array('label' => 'Endere&ccedil;o','style'=>'width:800px; height:20px;'));
		echo '</td><td>';		
		echo $this->Form->input('cep',array('type' => 'email','style'=>'width:200px; height:20px;'));		
		echo '</td></tr></table>';
		echo '<table><tr><td>';
		echo $this->Form->input('bairro',array('type'=>'select','options'=>array('vila do joao', 'vila do pinheiro'))); //Atualizar com opcoes de bairros
		echo '</td><td>';
		echo $this->Form->input('localidade',array('style'=>'width:200px; height:20px;'));
		echo '</td></tr></table>';

		echo $this->Form->input('pontoDeReferencia',array('style'=>'width:800px; height:20px;'));
		echo '<table> <tr> <td>';
		echo $this->Form->input('contato1',array('type' => 'tel','style'=>'width:200px; height:20px;'));
		echo '</td><td>';
		echo $this->Form->input('contato2',array('style'=>'width:200px; height:20px;'));
		echo '</td><td>';
		echo $this->Form->input('contato3',array('style'=>'width:200px; height:20px;'));
		echo '</td></tr></table>';
		echo $this->Form->input('email',array('type' => 'email','style'=>'width:200px; height:20px;'));		
?>

		<h3><?php echo '<div>Dados do Primeiro Atendimento</div>';?> </h3>
		<?php echo $this->Form->input('dataAbertura',array('label' => 'Data de abertura'));
		echo $this->Form->input('comoSoubeDoNiac');
		echo $this->Form->input('introducaoAoCaso',array('label' => 'Descri&ccedil;&atilde;o do Primeiro Atendimento'));
		echo $this->Form->input('demanda',array('label' => 'Demanda Trazida Pelo Usuario'));
		echo $this->Form->input('observacao',array('label' => 'Observa&ccedil;&atilde;o'));
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
		echo $this->Form->input('cfrPessoa1Escolaridade',array('label' => false,'type'=>'select','options'=>array('analfabeto','fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo',"pos graduacao incompleta"=>"Pós Graduação incompleta","pos graduacao completa"=>"Pós Graduação completa","mestrado incompleto"=>"Mestrado incompleto","mestrado completo"=>"Mestrado completo","doutorado incompleto"=>"Doutorado incompleto","doutorado completo"=>"Doutorado completo")));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1Trabalhista',array('label' => false,'type'=>'select','options'=>array ('Empregado com Carteira', 'Empregado Informal','Desempregado', 'Aposentado','Servidor público','Militar', 'Trabalhador Rural' , 'Outros')));
		echo '</td> <td>';
		echo $this->Form->input('cfrPessoa1VinculoFamiliar',array('label' => false,'type'=>'select','options'=>array ('Pai', 'Mae','Filho', 'Filha','Tio','Tia','Primo','Prima','Avô','Avó','Neto','Neta','Esposo(a)', 'Namorado(a)','Companheiro(a)', 'Amigo(a)','Outros')));
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
		echo $this->Form->input('pdrrodPessoa1Escolaridade',array('label' => false,'type'=>'select','options'=>array('analfabeto','fundamental incompleto','fundamental completo','medio incompleto','medio completo','superior incompleto','superior completo',"pos graduacao incompleta"=>"Pós Graduação incompleta","pos graduacao completa"=>"Pós Graduação completa","mestrado incompleto"=>"Mestrado incompleto","mestrado completo"=>"Mestrado completo","doutorado incompleto"=>"Doutorado incompleto","doutorado completo"=>"Doutorado completo")));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1Trabalhista',array('label' => false,'type'=>'select','options'=>array ('Empregado com Carteira', 'Empregado Informal','Desempregado', 'Aposentado','Servidor público','Militar', 'Trabalhador Rural' , 'Outros')));
		echo '</td> <td>';
		echo $this->Form->input('pdrrodPessoa1VinculoFamiliar',array('label' => false,'type'=>'select','options'=>array ('Pai', 'Mae','Filho', 'Filha','Tio','Tia','Primo','Prima','Avô','Avó','Neto','Neta','Esposo(a)', 'Namorado(a)','Companheiro(a)', 'Amigo(a)','Outros')));
		echo '</td> </tr> </table>'; 

		//echo $this->Form->saveField('ultimaAtualizacao',date(DATE_ATOM));
		//$this->data['Caso']['ultimaAtualizacao'] = date('Y-m-d H:i:s');
		 //$this->Form->save($this->Form->data, false);


		
		//echo $this->Form->hidden('ultimaAtualizacao');
		//$this->Form->date('ultimaAtualizacao');
		//$this->Form->save('ultimaAtualizacao');
		$this->request->data['Caso']['ultimaAtualizacao'] = date('Y-m-d H:i:s'); 

		//$dataAtual = date('Y-m-d H:i:s'); 
		//$this->save( 
    		//	array(
        	//		'ultimaAtualizacao' => $dataAtual,
        	//		
        	//		)
    		//	);
?> -->

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
