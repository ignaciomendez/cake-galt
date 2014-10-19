<h1>Bienvenido a la seccion de Clientes!!</h1>
<br/>
<h2>Este es un listado con nuestros clientes</h2>
<a href="agregar">Agregar nuevo</a>
<!--<pre>
<?php print_r($clientes); ?>
</pre> -->
<table>
	<tr>
		<th>Id.</th>
		<th>Nombre</th>
	</tr>
<?php foreach($clientes as $k=>$cliente): ?>
	<tr>
		<td><?php echo $cliente['Cliente']['id'] ?></td>
		<td><?php echo $cliente['Cliente']['nombre'] ?></td>
	</tr>
<?php endforeach;?>
</table>