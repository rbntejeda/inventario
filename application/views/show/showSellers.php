<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php  echo site_url("Contacts/registerContact");  ?>">Vendedores</a></li>
  <li class="active">Administrar Vendedores</li>
</ol>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>RUT</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Fecha de Ingreso</th>
			<th style="max-width:95px">Trabajando</th>
			<th style="max-width:70px">Opciones</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sellers as $seller):?>
		<tr>
			<td><?php echo $seller->nombre ?></td>
			<td><?php echo $seller->rut ?></td>
			<td><?php echo $seller->correo ?></td>
			<td><?php echo $seller->telefono ?></td>
			<td><?php echo $seller->fecha_ingreso ?></td>
			<td><center><?php echo $seller->trabajando ?></center></td>
			<td><center>
		      	<div class="btn-group">
				  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-cog"></span>
				  </button>
				  <ul class="dropdown-menu pull-right">
			          <li><a href="<?php echo site_url("Sellers/editSeller/{$seller->idVendedores}"); ?>">Editar Vendedor</a></li>
			          <li data-toggle="modal" data-target="#questionDelete<?php echo $seller->idVendedores?>"><a href="#">Eliminar Vendedor</a></li>
				  </ul>
				</div>
				</center>
			</td>
		</tr>
		<div class="modal fade" id="questionDelete<?php echo $seller->idVendedores?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Eliminar Ususario</h4>
		      </div>
		      <div class="modal-body">
		        Desea realmente eliminar a <?php echo $seller->nombre?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url("Sellers/deleteSeller/{$seller->idVendedores}"); ?>'">Eliminar de todas Formas</button>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endforeach; ?>
	</tbody>
</table>