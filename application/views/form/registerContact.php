
<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="record_daily_contacts";
    $this->load->view("include/menuSellers",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <?php echo form_open (''); ?>

  <!-- formulario-->

  <form class="form-horizontal" role="form">
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Vendedor</span>
        <select name="vendedor" class="form-control" >
          <option value="1">Tienda</option>
          <?php foreach ($sellers as $seller):?>
          <option value="<?php echo $seller->idVendedores; ?>"><?php echo $seller->nombre; ?></option>
          <?php endforeach; ?>
        </select>
      </div> 
    </div>  
    <div class="form-group">
      <input name="name" type="text" class="form-control" placeholder="Nombre o Institución" required autofocus>
    </div>
    <div class="form-group">
      <input name="rut" id="rut" type="text" class="form-control" placeholder="Rut ej. 18123456-K" required>
    </div>
    <div class="form-group">
      <input name="direccion" type="text" class="form-control" placeholder="Dirección" required>
    </div> 
    <div class="form-group">
      <input name="contacto" type="text" class="form-control" placeholder="Contacto" >
    </div>  
    <div class="form-group">  
      <input name="email" type="email" class="form-control" placeholder="e-mail" >
    </div>
    <div class="form-group">
      <input name="telefono" type="text" class="form-control" placeholder="telefono" >
    </div>  
    <div class="form-group">
      <input name="factura" type="text" class="form-control" placeholder="N° Factura" >
    </div>
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Fecha de Ingreso</span>
        <input name="fecha_ingreso" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="2014-02-01" max="<?php echo date('Y-m-d'); ?>"required>
      </div>    
    </div>    
    <div class="form-group">
      <button type="submit" class="btn btn-default">Ingresar</button>
    </div>
  </form>
<!--Fin Formulario-->

  <?php echo form_close(); ?>
  

  </div>
</div>
