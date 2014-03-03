<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="registerSeller";
    $this->load->view("include/menuSellers",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
  <center><h1>Editar Vendedor</h1></center>
  <!-- formulario-->
  <?php echo form_open ("Sellers/editSeller/{$seller->idVendedores}"); ?>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <input value="<?php echo $seller->nombre; ?>" name="name" type="text" class="form-control" placeholder="Nombre Vendedor" required autofocus>
    </div>
    <div class="form-group">
      <input value="<?php echo $seller->rut; ?>" name="rut" type="text" class="form-control" placeholder="Rut ej. 18123456-K" required>
    </div>  
    <div class="form-group">
      <input value="<?php echo $seller->telefono; ?>" name="telefono" type="text" class="form-control" placeholder="telefono" >
    </div>  
    <div class="form-group">  
      <input value="<?php echo $seller->correo; ?>" name="email" type="email" class="form-control" placeholder="e-mail" >
    </div>
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Fecha de Ingreso</span>
        <input  value="<?php echo $seller->fecha_ingreso; ?>"name="fecha_ingreso" type="date" class="form-control" min="2014-02-01" max="<?php echo date('Y-m-d'); ?>"required>
      </div>    
    </div>  
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Estado</span>
        <select name="role" class="form-control" >
          <option <?php if ($seller->trabajando=="SI") echo "selected"; ?> value="SI" >Trabajando</option>
          <option <?php if ($seller->trabajando=="NO") echo "selected"; ?> value="NO" >No Trabajando</option>
        </select>
      </div> 
    </div>  
    <div class="form-group">
      <button type="submit" class="btn btn-default">Ingresar</button>
    </div>
  </form>
  <?php echo form_close(); ?>
  <!--Fin Formulario-->  
  </div>
</div>