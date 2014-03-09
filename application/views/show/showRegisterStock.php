<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
	 <?php
	    $data['menu']="showRegisterStock";
	    $this->load->view("include/menuProducts",$data); 
	 ?>
  </div>

  <div class="col-xs-12 col-sm-9 col-md-10">
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
</div>