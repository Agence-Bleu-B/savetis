<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title>admin</title>
	<META NAME="robots" CONTENT="noindex,nofollow">
	<meta name="description" content="admin"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('admin_style');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('lity.min');?>" />
</head>
<body>
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
		    <div class="adjust-nav">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">
		                <img class="img-responsive" src="<?php echo img_url("logo.jpg"); ?>" style="max-width: 50px;" />
		            </a>
		        </div>
		      
		         <span class="logout-spn" >
		          <a href="<?php echo site_url('admin?deco'); ?>" style="color:#fff;">Se déconnecter</a>  

		        </span>
		    </div>
		</div>
		       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 					<li <?php if ($pagecours == 'index') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin'); ?>" ><i class="fa fa-desktop "></i>Accueil</a>
                    </li>
                    <li <?php if ($pagecours == 'produits' || $pagecours == 'creation' || $pagecours == 'modifactu'  ) {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/produits'); ?>"><i class="fa fa-product-hunt "></i>Produits</a>
                    </li>
                    <li <?php if ($pagecours == 'slider'||$pagecours == 'modifperso') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/gestionpersonnel'); ?>"><i class="fa fa-desktop "></i>Slider</a>
                    </li>
                    <li <?php if ($pagecours == 'newsletter'||$pagecours == 'modifperso') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/gestionpersonnel'); ?>"><i class="fa fa-newspaper-o "></i>Newsletter</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->