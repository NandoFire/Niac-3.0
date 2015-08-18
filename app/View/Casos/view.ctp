<div class="casos view">
<h2><?php echo __('Caso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chave Antiga'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['chaveAntiga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permissao para Pesquisa'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['permissaoPesquisa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato 1'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['contato1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato 2'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['contato2']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Data de Abertura'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataAbertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Fechamento'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataFechamento']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['observacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Como soube do Niac'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['comoSoubeDoNiac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demanda'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['demanda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encaminhamentos'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['encaminhamentos']); ?>
			&nbsp;
		</dd>



		<dt><?php echo __('Serviço Social'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['equipeServicoSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Psicologia'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['equipePsicologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direito'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['equipeDireito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segunda'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['horariosSegunda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terça'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['horariosTerca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quarta'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['horariosQuarta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quinta'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['horariosQuinta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexta'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['horariosSexta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome do Entrevistado'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['nomeDoEntrevistado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome do Usuário'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['nomeDoUsuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Nascimento'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataDeNascimentoEntrevistado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Naturalidade'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['naturalidadeEntrevistado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['estadoCivilEntrevistado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Caso'), array('action' => 'edit', $caso['Caso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Caso'), array('action' => 'delete', $caso['Caso']['id']), array(), __('Tem certeza que quer deletar o caso # %s?', $caso['Caso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Caso'), array('action' => 'add')); ?> </li>
		<br>
		<li><?php echo $this->Html->link(__('Criar PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $caso['Caso']['id'])); ?></p>
	</ul>
</div>
