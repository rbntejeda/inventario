    <ul class="nav nav-pills nav-stacked" >
      <li <?php if($menu=="registerProduct")echo 'class="active"'; ?>><a href="<?php echo site_url("Products/registerProduct"); ?>">Añadir Producto</a></li>
      <li <?php if($menu=="registerStock")echo 'class="active"'; ?>><a href="<?php echo site_url("Products/registerStock"); ?>">Añadir Stock</a></li>
      <li><a href="<?php echo site_url("Products/showProducts"); ?>">Administrar Productos</a></li>
      <li><a href="<?php echo site_url("Products/showStock"); ?>">Stock de Productos</a></li>
      <li><a href="<?php echo site_url("Products/showRegisterStock"); ?>">Mostrar Registros de Sotck</a></li>
      <li <?php if($menu=="showStatisticsProducts")echo 'class="active"'; ?>><a href="<?php echo site_url("Products/showStatisticsProducts"); ?>">Estadisticas de Productos</a></li>
    </ul>