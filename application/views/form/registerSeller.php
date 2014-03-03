<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="registerSeller";
    $this->load->view("include/menuSellers",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
  <!-- formulario-->
  <?php echo form_open ('Sellers/registerSeller'); ?>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <input name="name" type="text" class="form-control" placeholder="Nombre Vendedor" required autofocus>
    </div>
    <div class="form-group">
      <input name="rut" type="text" class="form-control" placeholder="Rut ej. 18123456-K" required>
    </div>  
    <div class="form-group">
      <input name="telefono" type="text" class="form-control" placeholder="telefono" >
    </div>  
    <div class="form-group">  
      <input name="email" type="email" class="form-control" placeholder="e-mail" >
    </div>
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Fecha de Ingreso</span>
        <input name="fecha_ingreso" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="2014-02-01" max="<?php echo date('Y-m-d'); ?>"required>
      </div>    
    </div>  
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Estado</span>
        <select name="role" class="form-control" >
          <option value="SI" >Trabajando</option>
          <option value="NO" >No Trabajando</option>
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