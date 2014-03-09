    <ul class="nav nav-pills nav-stacked" >
      <li <?php if($menu=="showSuppliers")echo 'class="active"'; ?>><a href="<?php echo site_url("Suppliers/registerSupplier"); ?>">Informacion de Proveedores</a></li>
      <li <?php if($menu=="registerSupplier")echo 'class="active"'; ?>><a href="<?php echo site_url("Suppliers/registerSupplier"); ?>">Añadir Proveedor</a></li>
      <li><a href="<?php echo site_url("Sellers/showSellers"); ?>">Administrar Proveedires</a></li>
      <li><a href="<?php echo site_url("Contacts/showContacts"); ?>">Ver Contactos Diarios</a></li>
    </ul>