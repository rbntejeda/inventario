<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="rdc";
    $this->load->view("include/menuSellers",$data); 
  ?> ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <?php echo form_open (''); ?>

  <!-- formulario-->

  <form class="form-horizontal" role="form">
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Proveedor</span>
        <select multiple name="Vendedor" class="form-control" >
          <option value="user">3M ltda.</option>
          <option value="seller">Vendedor</option>
          <option value="cashier">Cajero</option>
          <option value="admin">Administrador</option>
        </select>
      </div> 
    </div>  
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Producto</span>
        <select multiple name="Vendedor" class="form-control" >
          <option value="user">A32 Goma de borrar Lapizlopes</option>
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
<!--Fin Formulario-->

  <?php echo form_close(); ?>
  

  </div>
</div>