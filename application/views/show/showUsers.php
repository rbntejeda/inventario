<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Creacion</th>
			<th>Modificado</th>
			<th>Contraseña</th>
			<th style="max-width:70px">Opciones</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->name.' '.$user->paterno.' '.$user->materno?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->role?></td>
			<td><?php echo $user->created ?></td>
			<td><?php echo $user->modified ?></td>
			<td><?php echo $user->password ?></td>			
			<td><center>
		      	<div class="btn-group">
	      		<div class="input-group">
				  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-cog"></span>
				  </button>
				  <ul class="dropdown-menu pull-right">
			          <li><a href="<?php echo site_url("Users/editUser/{$user->id}"); ?>">Editar Usuario</a></li>
			          <!--trigger Modal-->
			          <li data-toggle="modal" data-target="#questionDelete<?php echo $user->id?>"><a>Eliminar Usuario</a></li>
				  </ul>
				</div> 
				</div>
				</center>
			</td>
		</tr>
				<!-- Modal -->
		<div class="modal fade" id="questionDelete<?php echo $user->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Eliminar Ususario</h4>
		      </div>
		      <div class="modal-body">
		        Desea realmente eliminar a <?php echo $user->name.' '.$user->paterno.' '.$user->materno?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url("Users/deleteUser/{$user->id}"); ?>'">Eliminar de todas Formas</button>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endforeach; ?>
	</tbody>
</table>

