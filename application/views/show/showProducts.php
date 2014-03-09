<div class="row">
<!--Layout 1.0Menu-->
  <div class="col-xs-12 col-sm-2 col-md-2">
	 <?php
	    $data['menu']="showProducts";
	    $this->load->view("include/menuProducts",$data); 
	 ?>
  </div>
<!--Layout 2.0 Contenido-->
  <div class="col-xs-12 col-sm-10 col-md-10">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>CODIGO</th>
				<th>Nombre Producto</th>
				<th>valor Neto</th>
				<th>Descripción</th>
				<th style="max-width:70px">Opciones</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($products as $product):?>
			<tr>
				<td><?php echo $product->codigo ?></td>
				<td><?php echo $product->nombre ?></td>
				<td><?php echo $product->valor_neto ?></td>
				<td><?php echo $product->descripcion ?></td>
				<td><center>
			      	<div class="btn-group">
					  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-cog"></span>
					  </button>
					  <ul class="dropdown-menu pull-right">
				          <li><a href="<?php echo site_url("Products/editProduct/{$product->idProducto}"); ?>">Editar Producto</a></li>
				          <li data-toggle="modal" data-target="#questionDelete<?php echo $product->idProducto?>"><a href="#">Eliminar Producto</a></li>
					  </ul>
					</div>
					</center>
				</td>
			</tr>
			<div class="modal fade" id="questionDelete<?php echo $product->idProducto?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">Eliminar Producto</h4>
			      </div>
			      <div class="modal-body">
			        Desea realmente eliminar el Producto <?php echo $product->nombre?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url("Products/deleteProduct/{$product->idProducto}"); ?>'">Eliminar de todas Formas</button>
			      </div>
			    </div>
			  </div>
			</div>
		<?php endforeach; ?>
		</tbody>
	</table>
  </div>
</div>
