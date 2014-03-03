<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-2">
  <?php
    $data['menu']="registerProduct";
    $this->load->view("include/menuProducts",$data); 
  ?>
  </div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <?php echo form_open ("Products/editProduct/{$product->idProducto}"); ?>
  <!-- formulario-->
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <input value="<?php echo $product->nombre; ?>" name="name" type="text" class="form-control" placeholder="Nombre de Producto" required autofocus >
    </div>
    <div class="form-group">
      <input value="<?php echo $product->codigo; ?>" name="codigo" type="text" class="form-control" placeholder="Codigo Producto ej. A24" required >
    </div>  
    <div class="form-group">
      <input value="<?php echo $product->valor_neto; ?>" name="valor_neto" type="number" class="form-control" placeholder="Valor Neto" min=1 >
    </div>  
    <div class="form-group">
      <input value="<?php echo $product->descripcion; ?>" name="descripcion" type="text" class="form-control" placeholder="Descripción del Producto" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Ingresar</button>
    </div>
  </form>
<!--Fin Formulario-->

  <?php echo form_close(); ?>
  

  </div>
</div>