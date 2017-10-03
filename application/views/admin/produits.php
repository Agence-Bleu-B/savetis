<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo '../'.css_url('admin_style');?>" />
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION DES PRODUITS</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row pad-top">
          <div class="col-md-12">
          <a href="#new" data-lity >nouveau</a>
          <!-- debut bloc new textes -->
            <div id="new" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" ></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ></textarea></div>
                <div class="col-md-12" ><input type="submit" class="btn btn-default" name="new" value="Créer"></div>
              </form>
            </div>
             <h3>Drench</h3>
             <?php foreach ($drench_liste as $key => $value) { ?>
               
             <?php } ?>   
          </div>
          <div class="col-md-12">
             <h3>Cetose</h3>   
          </div>
          <div class="col-md-12">
             <h3>Macro-elements</h3>   
          </div>
          <div class="col-md-12">
             <h3>Digest</h3>   
          </div>
          <div class="col-md-12">
             <h3>Hygiene</h3>   
          </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>