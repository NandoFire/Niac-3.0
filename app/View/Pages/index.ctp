<!-- File: /app/View/Pages/index.ctp 
(edit links added) -->

<h3>Menu</h3>
<?php echo $this->Html->link(
	'Casos',
	array('controller' => 'casos', 'action' => 'index')
); ?>
<br>
<?php echo $this->Html->link(
	'Casos Arquivados',
	array('controller' => 'arquivados', 'action' => 'index')
); ?>
<br>
<?php echo $this->Html->link(
	'Equipe',
	array('controller' => 'funcionarios', 'action' => 'index')
); ?>


<h1><?php 
print utf8_encode('Plant�es e Contatos');
?></h1>


<h1> Perfil de membro da equipe</h1>

<h1>Biblioteca</h1>

<h1><?php 
print utf8_encode('Comunica��o');
?></h1>
<?php echo $this->Html->link('Logout',
					array('controller' => 'funcionarios',
						  'action' => 'logout')); ?>
</table>
