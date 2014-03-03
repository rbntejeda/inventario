<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php  echo site_url("Products/registerProduct");  ?>">Productos</a></li>
  <li class="active">Stock de los Productos</li>
</ol>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>CODIGO</th>
			<th>Nombre Producto</th>
			<th>Balance</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product):?>
		<tr <?php 
			if($product->balance<10) echo 'class="danger"' ;
			else if($product->balance<50) echo 'class="warning"' ;
		?>>
			<td><?php echo $product->codigo ?></td>
			<td><?php echo $product->nombre ?></td>
			<td><?php echo $product->balance ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>