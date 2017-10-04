<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>ACCUEIL ADMINISTRATION</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/produits'); ?>" >
						<i class="fa fa-product-hunt fa-5x"></i>
	          			<h4>Produits</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/slider'); ?>" >
						<i class="fa fa-desktop fa-5x"></i>
	          			<h4>Slider</h4>
	          		</a>
          		</div>
          	</div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                  <a href="<?php echo site_url('admin/newsletter'); ?>" >
            <i class="fa fa-newspaper-o fa-5x"></i>
                  <h4>Newsletter</h4>
                </a>
              </div>
            </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>