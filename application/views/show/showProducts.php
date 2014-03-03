<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php  echo site_url("Products/registerProduct");  ?>">Productos</a></li>
  <li class="active">Administrar Productos</li>
</ol>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>CODIGO</th>
			<th>Nombre Producto</th>
			<th>valor Neto</th>
			<th>Descripción</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product):?>
		<tr>
			<td><?php echo $product->codigo ?></td>
			<td><?php echo $product->nombre ?></td>
			<td><?php echo $product->valor_neto ?></td>
			<td><?php echo $product->descripcion ?></td>
	<?php endforeach; ?>
	</tbody>
</table>