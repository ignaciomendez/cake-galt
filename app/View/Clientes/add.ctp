<h3>Nuevo Cliente</h3>
<?php
	echo $this->Form->create('Cliente');
	echo $this->Form->input('nombre',array('label'=>'Nombre'));
	echo $this->Form->end('Guardar Cliente');
?>