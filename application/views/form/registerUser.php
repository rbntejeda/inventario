<!--Formulario para Ingreso de Usuarios-->

<div>
	<center><h1>Registro Usuario</h1></center>
	<!--Primer formulario-->
	<?php echo form_open ('Users/registerUser'); ?>
	<div class="container">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<input name="name" type="text" class="form-control" placeholder="Nombres" required autofocus>
		</div>
		<div class="form-group">
			<input name="paterno" type="text" class="form-control" placeholder="Apellido Paterno" required>
		</div>	
		<div class="form-group">	 
			<input name="materno" type="text" class="form-control" placeholder="Apellido Materno" required>
		</div>
		<div class="form-group">	
			<input name="email" type="email" class="form-control" placeholder="Correo Electronico" required>
		</div>
		<div class="form-group">
			<input name="username" type="text" class="form-control" placeholder="Nombre de Usuario" required>
		</div>	
		<div class="form-group">
			<input name="password" type="password" class="form-control" placeholder="Contraseña" required>
		</div>
		<div class="form-group">
			<input name="password2" type="password" class="form-control" placeholder="Repetir contraseña" required>
		</div>
		<div class="form-group">
			<div class="input-group">
	        	<span class="input-group-addon">Tipo de Usuario</span>
				<select name="role" class="form-control" >
					<option value="user">Usuario</option>
					<option value="seller">Vendedor</option>
					<option value="cashier">Cajero</option>
					<option value="admin">Administrador</option>
				</select>
	      	</div> 
		</div>	
		<div class="form-group">
			<button type="submit" class="btn btn-default">Ingresar</button>
		</div>
	</form>
	</div>

	<?php echo form_close(); ?>
	

</div>
