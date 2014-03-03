<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="rdc";
    $this->load->view("include/menuSellers",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <?php echo form_open (''); ?>

  <!-- formulario-->

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <input name="name" type="text" class="form-control" placeholder="Nombre de Cliente o Insitución" required autofocus>
    </div>
    <div class="form-group">
      <input name="rut" type="text" class="form-control" placeholder="Rut ej. 18123456-K" required>
    </div>  
    <div class="form-group">
      <input name="contacto" type="text" class="form-control" placeholder="Nombre de Contacto" >
    </div>  
    <div class="form-group">  
      <input name="email" type="email" class="form-control" placeholder="Correo Electronico" >
    </div>
    <div class="form-group">
      <input name="telefono" type="text" class="form-control" placeholder="Telefono" >
    </div>  
    <div class="form-group">
        <textarea name="observaciones" class="form-control" rows="3" placeholder="Observación" ></textarea>
    </div>  
    <div class="form-group">
      <button type="submit" class="btn btn-default">Ingresar</button>
    </div>
  </form>
<!--Fin Formulario-->

  <?php echo form_close(); ?>
  

  </div>
</div>