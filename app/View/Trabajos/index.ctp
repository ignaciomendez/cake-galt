<h1>Bienvenido a la seccion de Trabajos!!</h1>
<br/>
<h2>Este es un listado con nuestros Trabajos</h2>
<a href="trabajos/agregar">Agregar nuevo</a>
<table>
	<tr>
		<th>Id.</th>
		<th>Descripción</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin Estimada</th>
		<th>Fecha Fin Real</th>
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