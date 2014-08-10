<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gépjármű Szervíz</title>
    <link href="vendor/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  <div class="menu">
	<ul class="nav nav-pills">
		<li><a href="index.php?controller=index&action=index">Főoldal</a></li>
		<?php
			if( isset($_SESSION['client_id']) )
			{
		?>
			<li><a href="index.php?controller=client&action=index">Adataim</a></li>
			<li><a href="index.php?controller=vehicle&action=index">Gépjárművem</a></li>
			<li><a href="index.php?controller=login&action=logout">Kijelentkezés</a></li>
		<?php
			}
			else
			{
		?>
			<li class="active"><a href="index.php?controller=login&action=signin">Regisztráció</a></li>
			<li><a href="index.php?controller=login&action=login">Bejelentkezés</a></li>
			<li><a href="index.php?controller=order&action=order">Megrendelés</a></li>
		<?php
			}
		?>
		
	</ul>
   </div>
