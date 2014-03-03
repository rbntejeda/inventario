<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="registerStock";
    $this->load->view("include/menuProducts",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <?php echo form_open (''); ?>

  <!-- formulario-->

  <form class="form-horizontal" role="form">
    <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Stock</span>
          <input name="cantidad" type="number" class="form-control"  min=1  placeholder="Cantidad" required autofocus>
        </div> 

    </div>
    <div class="form-group">
     <div class="input-group">
        <span class="input-group-addon">Producto</span>
        <select multiple name="producto" class="form-control" required >
          <?php foreach ($products as $product):?>
          <option value="<?php echo $product->idProducto; ?>"><?php echo $product->codigo.' '.$product->nombre; ?></option>
          <?php endforeach; ?>
        </select>
      </div> 
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
