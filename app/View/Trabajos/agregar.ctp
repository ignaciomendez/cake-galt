<h3>Nuevo Trabajo</h3>
<?php
	echo $this->Form->create('Trabajo');
	echo $this->Form->input('descripcion',array('label'=>'Descripción'));
	echo $this->Form->input('fecha_inicio',array('label'=>'Fecha Inicio'));
	echo $this->Form->input('fecha_est_fin',array('label'=>'Fecha de Finalización estimada'));
	echo $this->Form->input('Cliente',array('label'=>'Cliente'));
	echo $this->Form->end('Registrar Trabajo');
?>