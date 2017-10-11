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
          <!-- debut bloc new produit -->
            <div id="new" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;overflow: scroll;">
              <div class="container-fluid">
                <div class="row">
                 <div class="col-xs-12">
                  <form method="post">
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="nom">
                     nom
                    </label>
                    <input class="form-control" id="nom" name="nom" type="text"/>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="cat">
                     Cat&eacute;gorie
                    </label>
                    <select class="select form-control" id="cat" name="cat">
                     <option value="drench">
                      drench
                     </option>
                     <option value="cetose">
                      cetose
                     </option>
                     <option value="macro-elements">
                      macro-elements
                     </option>
                     <option value="digest">
                      digest
                     </option>
                     <option value="hygiene">
                      hygiene
                     </option>
                    </select>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="textfr">
                     Texte (fr)
                    </label>
                    <textarea class="form-control" cols="40" id="textfr" name="textfr" rows="10"></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="textdu">
                     texte (du)
                    </label>
                    <textarea class="form-control" cols="40" id="textdu" name="textdu" rows="10"></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="texten">
                     texte (en)
                    </label>
                    <textarea class="form-control" cols="40" id="texten" name="texten" rows="10"></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label ">
                     Affichage
                    </label>
                    <div class=" ">
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="FR"/>
                       FR
                      </label>
                     </div>
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="NL"/>
                       NL
                      </label>
                     </div>
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="EN"/>
                       EN
                      </label>
                     </div>
                    </div>
                   </div>
                   <div class="form-group">
                    <div>
                     <button class="btn btn-primary " name="new" type="new">
                      Cr&eacute;er
                     </button>
                    </div>
                   </div>
                  </form>
                 </div>
                </div>
               </div>
            </div>
            <!-- produits -->
             <h3>Produits</h3>
             <?php foreach ($produits_liste as $key => $value) { //echo $value['nom'].'-'.$value['categorie'].'<br>'; ?>
                   <!-- liens textes, photos et suppression -->
                <span class="col-md-2" ><?php echo $value['categorie']; ?></span><a class="col-md-2" href="#<?php echo $value['id']; ?>" data-lity ><?php echo $value['nom']; ?></a><a href="#image-<?php echo $value['id']; ?>" class="col-md-1"  data-lity >Images</a><a href="#pdf-<?php echo $value['id']; ?>" class="col-md-2" data-lity >Pdf</a><a href="#sup-<?php echo $value['id']; ?>" class="col-md-2" data-lity >Supprimer</a><br>
                <!-- debut bloc textes -->
                <div id="<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;overflow: scroll;">
                  <form method="post">
                  <input type="hidden" name="id" value="<?php echo $value['id'] ;?>" >
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="nom">
                     nom
                    </label>
                    <input class="form-control" id="nom" name="nom" type="text" value="<?php echo $value["nom"]; ?>" />
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="cat">
                     Cat&eacute;gorie
                    </label> <?php if($value['categorie'] == 'drench'){echo "selected";} ?>
                    <select class="select form-control" id="cat" name="cat">
                     <option value="drench" <?php if($value['categorie'] == 'drench'){echo "selected";} ?> >
                      drench
                     </option>
                     <option value="cetose" <?php if($value['categorie'] == 'cetose'){echo "selected";} ?> >
                      cetose
                     </option>
                     <option value="macro-elements" <?php if($value['categorie'] == 'macro-elements'){echo "selected";} ?> >
                      macro-elements
                     </option>
                     <option value="digest" <?php if($value['categorie'] == 'digest'){echo "selected";} ?> >
                      digest
                     </option>
                     <option value="hygiene" <?php if($value['categorie'] == 'hygiene'){echo "selected";} ?> >
                      hygiene
                     </option>
                    </select>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="textfr">
                     Texte (fr)
                    </label>
                    <textarea class="form-control" cols="40" id="textfr" name="textfr" rows="10"><?php echo $value['frtext']; ?></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="textdu">
                     texte (du)
                    </label>
                    <textarea class="form-control" cols="40" id="textdu" name="textdu" rows="10"><?php echo $value['dutext']; ?></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label " for="texten">
                     texte (en)
                    </label>
                    <textarea class="form-control" cols="40" id="texten" name="texten" rows="10"><?php echo $value['entext']; ?></textarea>
                   </div>
                   <div class="form-group form-group-sm">
                    <label class="control-label ">
                     Affichage
                    </label>
                    <div class=" ">
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="FR" <?php if($value['frapp'] == 1){echo "checked";} ?> />
                       FR
                      </label>
                     </div>
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="NL" <?php if($value['duapp'] == 1){echo "checked";} ?> />
                       NL
                      </label>
                     </div>
                     <div class="checkbox">
                      <label class="checkbox">
                       <input name="pays[]" type="checkbox" value="EN" <?php if($value['enapp'] == 1){echo "checked";} ?> />
                       EN
                      </label>
                     </div>
                    </div>
                   </div>
                   <div class="form-group">
                    <div>
                     <button class="btn btn-primary " name="modif" type="modif">
                      Modifier
                     </button>
                    </div>
                   </div>
                  </form>
                </div>
                <!-- fin bloc textes -->
                <!-- debut bloc pdf -->
                <div id="pdf-<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
                  <!-- form pdf -->
                  <form method="post" action="" enctype="multipart/form-data" >
                  
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                    <div>pdf anglais</div>
                    <div><?php echo $value['enpdf']; ?></div>
                    <a href="<?php echo base_url().'pdf/'.$value['enpdf']; ?>"><?php echo base_url().'pdf/'.$value['enpdf']; ?></a>
                    <input type="file" name="enpdf">
                    <div>pdf français</div>
                    <div><?php echo $value['frpdf']; ?></div>
                    <a href="<?php echo base_url().'pdf/'.$value['frpdf']; ?>"><?php echo base_url().'pdf/'.$value['frpdf']; ?></a>
                    <input type="file" name="frpdf">
                    <div>pdf hollandais</div>
                    <div><?php echo $value['dupdf']; ?></div>
                    <a href="<?php echo base_url().'pdf/'.$value['dupdf']; ?>"><?php echo base_url().'pdf/'.$value['dupdf']; ?></a>
                    <input type="file" name="dupdf">
                    <div class="col-md-12" ><input type="submit" class="btn btn-default" style="margin-top: 20px;" name="changepdf" value="envoyer"></div>
                  </form>
                </div>
                <!-- debut bloc pdf -->
                <!-- debut bloc photos -->
                <div id="image-<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
                  <!-- form photo -->
                  <form method="post" action="" enctype="multipart/form-data" >
                  <?php if($value['image'] != '' || $value['image'] != null){ if($value['categorie'] == 'macro-elements'){ $src = 'mElmts';}else{$src = $value['categorie'];} ?>
                    <img src="<?php echo base_url()."assets/images/".$src."/".$value["image"] ; ?>">
                    <div><?php echo $value['image']; ?></div>
                  <?php } ?>
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                    <input type="hidden" name="cat" value="<?php echo $value['categorie']; ?>">

                    <input type="file" name="photo">
                    <div class="col-md-12" ><input type="submit" class="btn btn-default" style="margin-top: 20px;" name="changephoto" value="envoyer"></div>
                  </form>
                </div>
                <!-- fin bloc photos -->
                <!-- debut bloc delete -->
                <div id="sup-<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
                  <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                    <div class="col-md-12" >Voulez vous vraiment supprimer cette entrée ?</div>
                    <div class="col-md-12" ><input type="submit" class="btn btn-default" name="delete" value="Supprimer"></div>
                  </form>
                </div>
                <!-- fin bloc delete -->
             <?php } ?>   
          </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>