    <ul class="nav nav-pills nav-stacked" >
      <li><a href="<?php echo site_url("Contacts/showContacts"); ?>">Ver Contactos Diarios</a></li>
      <li <?php if($menu=="record_daily_contacts")echo 'class="active"'; ?>><a href="<?php echo site_url("Contacts/registerContact"); ?>">Resgistro de Contactos Diarios</a></li>
      <li <?php if($menu=="registerSeller")echo 'class="active"'; ?>><a href="<?php echo site_url("Sellers/registerSeller"); ?>">Añadir Vendedor</a></li>
      <li><a href="<?php echo site_url("Sellers/showSellers"); ?>">Administrar Vendedor</a></li>
      <li <?php if($menu=="showHistorySellers")echo 'class="active"'; ?>><a href="<?php echo site_url("Sellers/showHistorySellers"); ?>">Historial Vendedores</a></li>
    </ul>
