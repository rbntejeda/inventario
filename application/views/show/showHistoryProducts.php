<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="showHistoryProducts";
    $this->load->view("include/menuProducts",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
  <!-- formulario-->
 <?php echo form_open ('Products/showHistoryProducts'); ?>
  <form class="form-horizontal" role="form">
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Inicio</span>
        <input name="inicio" type="date" class="form-control" value="<?php echo "$inicio" ?>" required>
        <span class="input-group-addon">Termino</span>
        <input name="termino" type="date" class="form-control" value="<?php echo "$termino" ?>" required>
      </div>    
    </div>  
    <div class="form-group">
	     <div class="input-group">
	     	<label class="checkbox-inline">
			  <input type="checkbox" name="stock" <?php if(isset($products)) echo "checked" ?>>Stock
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" name="ventas" <?php if(isset($ventas)) echo "checked" ?>>Ventas
			</label>
	    </div> 
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Busca</button>
    </div>
  </form>
 <?php echo form_close(); ?>
<!--Fin Formulario-->
<?php if (isset($products)):?> 
	<h3 style="text-decoration:underline">Ingresos de Stock </h3><h5> <?php echo $inicio ?> Hasta <?php echo $termino ?> </h5>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>Nombre Producto</th>
				<th>Ingreso Total Stock</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($products as $product):?>
			<tr>
				<td><?php echo $product->codigo ?></td>
				<td><?php echo $product->nombre ?></td>
				<td><?php echo $product->stock_total ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php  endif; ?>

<?php if (isset($ventas)):?> 
	<h3 style="text-decoration:underline">Ventas de Stock </h3><h5> <?php echo $inicio ?> Hasta <?php echo $termino ?> </h5>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>Nombre Producto</th>
				<th>Ventas Total Stock</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($ventas as $venta):?>
			<tr>
				<td><?php echo $venta->codigo ?></td>
				<td><?php echo $venta->nombre ?></td>
				<td><?php echo $venta->stock_total*-1 ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php  endif; ?>

  </div>
</div>