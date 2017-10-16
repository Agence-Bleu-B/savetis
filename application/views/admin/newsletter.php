<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
      	<div class="row text-center pad-top">
          <div class="col-md-7 col-md-offset-2">
            <table class="table table-bordered">
              <thead>
                <tr><th>n°</th><th>mail</th></tr>
              </thead>
              <tbody>
                <?php foreach ($liste as $key => $value) { 
                  echo "<tr> <th>".$value['id']."</th> <td>".$value['mail']."</td></tr>";
                  } ?>
              </tbody>
            

            </table>

          </div>
        
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>