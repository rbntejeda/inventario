<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
	 <?php
	    $data['menu']="showStock";
	    $this->load->view("include/menuProducts",$data); 
	 ?>
  </div>

  <div class="col-xs-12 col-sm-9 col-md-6">
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
   </div>
</div>