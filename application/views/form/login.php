<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Inventario Ruben ;)</title>
  <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
</head>
<body>

<style type="text/css">
      body 
      {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .container 
      {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #379BBF;
        border: 1px solid #e5e5e5;
        border-radius: 20px;
        box-shadow: 0 1px 2px rgba(0,0,0,.0.5);
      }

      .form-control
      {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .text
      {
        color: #fff;
      }
</style>       

 <?php echo form_open ('Users/index'); ?>
<div class="container">

<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Iniciar Sesíon</h2>
        <input name="username" type="text" class="form-control" placeholder="username" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="contraseña" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recuerdame

        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ingresar</button>
        <a class="text" href="<?php echo site_url("Users/register/"); ?>">no tienes cuenta,Registrate</a>

</form>




</div>
          <?php echo form_close(); ?>
