<h1>Bienvenido a la seccion de Trabajos!!</h1>
<br/>
<h2>Este es un listado con nuestros Trabajos</h2>
<a href="trabajos/add">Agregar nuevo</a>
<table>
	<tr>
		<th>Id.</th>
		<th>Descripción</th>
		<th>Cliente</th>
	</tr>
<?php foreach($trabajos as $k=>$trabajo): ?>
	<tr>
		<td><?php echo $trabajo['Trabajo']['id'] ?></td>
		<td><?php echo $trabajo['Trabajo']['descripcion'] ?></td>
		<td><?php echo $trabajo['Trabajo']['cliente_id'] ?></td>
	</tr>
<?php endforeach;?>
</table>
<?php
	echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
?>
<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
</div>