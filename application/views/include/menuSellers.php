    <ul class="nav nav-pills nav-stacked" >
      <li <?php if($menu=="record_daily_contacts")echo 'class="active"'; ?>><a href="<?php echo site_url("Contacts/registerContact"); ?>">Resgistro de Contactos Diarios</a></li>
      <li <?php if($menu=="registerSeller")echo 'class="active"'; ?>><a href="<?php echo site_url("Sellers/registerSeller"); ?>">Añadir Vendedor</a></li>
      <li><a href="<?php echo site_url("Sellers/showSellers"); ?>">Administrar Vendedor</a></li>
      <li><a href="<?php echo site_url("Contacts/showContacts"); ?>">Ver Contactos Diarios</a></li>
    </ul>

    <!--
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administración de Vendedores  <span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url("Sellers/registerSeller"); ?>">Añadir Vendedor</a></li>
          <li><a href="#">Detalle de Vendedores</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Resultados <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url("/"); ?>">Informacion Ventas de Vededores</a></li>
          <li><a href="<?php echo site_url("Sellers/showSellers"); ?>">Administrar</a></li>
          <li><a href="#">Detalles</a></li>
        </ul>
      </li>


    -->