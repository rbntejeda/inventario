    <ul class="nav nav-pills nav-stacked" >
      <li <?php if($menu=="showClients")echo 'class="active"'; ?>><a href="<?php echo site_url("Clients/showClients"); ?>">Informacion de Clientes</a></li>
      <li <?php if($menu=="registerClient")echo 'class="active"'; ?>><a href="<?php echo site_url("Clients/registerClient"); ?>">Añadir Cliente</a></li>
      <li><a href="<?php echo site_url(""); ?>">Administrar Clientes</a></li>
    </ul>