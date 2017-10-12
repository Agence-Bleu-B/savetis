<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION DU SLIDER</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
          <form method="post" >
            <div class="form-group" >
              <h2>Français</h2>
              <select name="sl1fr">
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl1fr == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select> 
              <select name="sl2fr" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl2fr == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl3fr" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl3fr == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl4fr" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl4fr == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group" >
              <h2>Hollandais</h2>
              <select name="sl1du" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl1du == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select> 
              <select name="sl2du" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl2du == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl3du" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl3du == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl4du" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl4du == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group" >
              <h2>Anglais</h2>
              <select name="sl1en" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl1en == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select> 
              <select name="sl2en" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl2en == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl3en" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl3en == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
              <select name="sl4en" >
                <?php foreach ($produits_liste as $key => $value) { ?>
                <option value="<?php echo $value['id'] ;?>" <?php if( $selection_sl4en == $value['id'] ){ echo "selected";}  ?> ><?php echo $value['nom'] ;?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group" >
              <input type="submit" name="modifslide" value="modifier">
            </div>
          </form>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>