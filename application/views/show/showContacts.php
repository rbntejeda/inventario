<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php  echo site_url("Contacts/registerContact");  ?>">Vendedores</a></li>
  <li class="active">Ver Contactos</li>
</ol>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>RUT</th>
			<th>Contacto</th>
			<th>Telefono</th>
			<th>Dirección</th>
			<th>Correo</th>
			<th>Factura</th>
			<th>Fecha de Ingreso</th>
			<th>Vendedor</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($contacts as $contact):?>
		<tr>
			<td><?php echo $contact->nombre ?></td>
			<td><?php echo $contact->rut ?></td>
			<td><?php echo $contact->contacto ?></td>
			<td><?php echo $contact->telefono ?></td>
			<td><?php echo $contact->direccion ?></td>
			<td><?php echo $contact->correo ?></td>
			<td><?php echo $contact->factura ?></td>
			<td><?php echo $contact->fecha_ingreso ?></td>
			<td><?php echo $contact->Vendedor ?></td>

	<?php endforeach; ?>
	</tbody>
</table>