<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
	 <?php
	    $data['menu']="showHistorySellers";
	    $this->load->view("include/menuSellers",$data); 
	 ?>
  </div>

  <div class="col-xs-12 col-sm-9 col-md-10">
	   	<div class="panel-group" id="acordion">
	    <?php foreach ($sellers as $seller): ?>
	    	<div class="panel panel-default">
		    	<div class="panel panel-default">
			        <div class="panel-heading">
			          <h4 class="panel-title">
			            <a data-toggle="collapse" data-parent="#acordion" href="#collapse<?php echo $seller->idVendedores ?>" class="collapsed">
			              <?php echo $seller->nombre ?>
			            </a>
			          </h4>
			        </div>
			        <div id="collapse<?php echo $seller->idVendedores ?>" class="panel-collapse collapse" style="height: auto;">
			          <div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>RUT</th>
									<th>Contacto</th>
									<th>Telefono</th>
									<th>Fecha de Ingreso</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$count = 1 ;
								foreach( $contacts["id_$seller->idVendedores"] as $contact):
							?>
								<tr>
									<td><?php echo $count++; ?></td>
									<td><?php echo $contact->nombre ?></td>
									<td><?php echo $contact->rut ?></td>
									<td><?php echo $contact->contacto ?></td>
									<td><?php echo $contact->telefono ?></td>
									<td><?php echo $contact->fecha_ingreso ?></td>
							<?php endforeach; ?>
							</tbody>
						</table>
			          </div>
			        </div>
				</div>
	    	</div>	
	   	<?php endforeach; ?>
	    </div>
   </div>
</div>