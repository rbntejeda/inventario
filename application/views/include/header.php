<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inventario Ruben ;)</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
</head>
<body>

<style type="text/css">
  .input-group-addon 
  {
    min-width:136px;
    text-align:left;
  }
</style>

<!--MENU -->
<nav class="navbar navbar-default" role="navigation">
	  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".button-accion-navbar">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Sistema de Inventario</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="navbar-collapse button-accion-navbar collapse">
    <ul class="nav navbar-nav">
      <li <?php if (isset($menu))if($menu=="Products")echo 'class="active"'; ?>><a href="<?php echo site_url("Products/registerProduct"); ?>">Productos</a></li>
      <li <?php if (isset($menu))if($menu=="Contacts")echo 'class="active"'; ?>><a href="<?php echo site_url("Contacts/registerContact"); ?>">Vendedores</a></li>
      <li <?php if (isset($menu))if($menu=="Suppliers")echo 'class="active"'; ?>><a href="<?php echo site_url("Suppliers/registerSupplier"); ?>">Proveedores</a></li>
      <li <?php if (isset($menu))if($menu=="Clients")echo 'class="active"'; ?>><a href="<?php echo site_url("Clients/registerClient"); ?>">Clientes</a></li>
      <li <?php if (isset($menu))if($menu=="Business")echo 'class="active"'; ?>><a href="<?php echo site_url("Business/registerBusiness"); ?>">Ventas</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo " ".$this->session->userdata('name')?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url("Users/showUsers"); ?>">Ver Usuarios</a></li>
          <li><a href="<?php echo site_url("Users/registerUser"); ?>">Registrar Usuario</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url('Users/closeSession'); ?>">Cerrar Sesíon</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<!--Fin Menu-->
