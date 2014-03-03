<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php  echo site_url("Products/registerProduct");  ?>">Productos</a></li>
  <li class="active">Registros de Stock</li>
</ol>
<div class="col-md-6 col-md-offset-3">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Cantidad</th>
				<th>Codigo</th>
				<th>Nombre de Producto</th>
				<th>Fecha de Ingreso</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($stocks as $stock):?>
			<tr <?php 
				if($stock->cantidad<0) echo 'class="success"' ;
				else  echo 'class="warning"' ;
			?>>
				<td><?php echo $stock->cantidad ?></td>
				<td><?php echo $stock->codigo ?></td>
				<td><?php echo $stock->nombre ?></td>
				<td><?php echo $stock->fecha_ingreso ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>