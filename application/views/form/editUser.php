<div>
	<center><h1>Editar Usuario</h1></center>
	<!--Primer formulario-->
	<?php echo form_open ("Users/editUser/{$user->id}"); ?>
	<div class="container">
	<ol class="breadcrumb">
	  <li><a href="#">Home</a></li>
	  <li><a href="<?php echo site_url("Users/showUsers"); ?>">User</a></li>
	  <li class="active">Editar Usuario</li>
	</ol>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<input value="<?php echo $user->name; ?>" name="name" type="text" class="form-control" placeholder="Nombres" required autofocus>
		</div>
		<div class="form-group">
			<input value="<?php echo $user->paterno; ?>" name="paterno" type="text" class="form-control" placeholder="Apellido Paterno" required>
		</div>	
		<div class="form-group">	 
			<input value="<?php echo $user->materno; ?>" name="materno" type="text" class="form-control" placeholder="Apellido Materno" required>
		</div>
		<div class="form-group">	
			<input value="<?php echo $user->email; ?>" name="email" type="email" class="form-control" placeholder="Correo Electronico" required>
		</div>
		<div class="form-group">
			<input value="<?php echo $user->username; ?>" name="username" type="text" class="form-control" placeholder="Nombre de Usuario" required>
		</div>	
		<div class="form-group">
			<input name="password" type="password" class="form-control" placeholder="Nueva Contraseña                                               *Solo si desea cambiarla">
		</div>	

		<div class="form-group">
			<div class="input-group">
	        	<span class="input-group-addon">Tipo de Usuario</span>
				<select name="role" class="form-control" >
					<option <?php if ($user->role=="user") echo "selected"; ?> value="user">Usuario</option>
					<option <?php if ($user->role=="seller") echo "selected"; ?> value="seller">Vendedor</option>
					<option <?php if ($user->role=="cashier") echo "selected"; ?> value="cashier">Cajero</option>
					<option <?php if ($user->role=="admin") echo "selected"; ?> value="admin">Administrador</option>
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
