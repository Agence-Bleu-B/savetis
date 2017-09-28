<!-- Portfolio Grid Section -->
    <section id="produits" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <h2><?php echo lang('titre') ?></h2>
                <br>
                  <div class="col-md-12 text-center" style="margin-bottom:50px;">
                    <center><img src="<?php echo img_url("site_presentation.png") ?>" alt="Products Savetis"></center>
           
           
                 </div>

            </div>

        </div>
    </section>

    <section id="gammes" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2 style="text-align:left;"><?php echo lang('desc_gamme')?></h2>

            <div id="exTab1" class="container"> 
                <ul  class="nav nav-pills row">
                    <li class="active col-md-2">
                        <a  href="#1a" data-toggle="tab" >Drench</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#2a" data-toggle="tab">Cetose</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#3a" data-toggle="tab">Macro-Elements</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#4a" data-toggle="tab">Digest</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#5a" data-toggle="tab">Hygiene</a>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active row" id="1a">
                       <div class="col-md-6">
                       <?php foreach ($drench_liste as $key => $value) { ?>
                           <div class="row">
                                <?php if ($value['image'] != null && $value['image'] != '') { ?>
                                    <div class="col-md-4"><img src="<?php echo img_url("drench/".$value['image']); ?>" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } else { ?>
                                    <div class="col-md-4"><img src="http://via.placeholder.com/150x150" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } ?>
                                <div class="col-md-8">
                                    <h3><?php echo $value['nom']; ?></h3>
                                    <p><?php echo $value['text']; ?></p>
                                    <?php if ($value['pdf'] != null && $value['pdf'] != '') { ?>
                                        <a href="../pdf/<?php echo $value['pdf'] ;?>" style="float:right;"><?php echo lang('readmore')?></a>
                                    <?php } ?>
                                </div>
                            </div> 
                       <?php } ?>   
                        </div>
                        <div class="col-md-6 text-center" style="margin-bottom:50px;" >
                            <center>
                                <a href="../pdf/DRENCH_POMPE-EN-2015.pdf">
                                    <img src="<?php echo img_url("pompe.jpg") ?>" alt="Products Savetis" style="height:400px;width:auto;">
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="tab-pane row" id="2a">
                       <div class="col-md-6">
                       <?php foreach ($cetose_liste as $key => $value) { ?>
                           <div class="row">
                                <?php if ($value['image'] != null && $value['image'] != '') { ?>
                                    <div class="col-md-4"><img src="<?php echo img_url("cetose/".$value['image']); ?>" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } else { ?>
                                    <div class="col-md-4"><img src="http://via.placeholder.com/150x150" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } ?>  
                                <div class="col-md-8">
                                    <h3><?php echo $value['nom']; ?></h3>
                                    <p><?php echo $value['text']; ?></p>
                                    <?php if ($value['pdf'] != null && $value['pdf'] != '') { ?>
                                        <a href="../pdf/<?php echo $value['pdf'] ;?>" style="float:right;"><?php echo lang('readmore')?></a>
                                    <?php } ?>
                                </div>
                            </div> 
                       <?php } ?>   
                        </div>
                    </div>
                    <div class="tab-pane row" id="3a">
                        <div class="col-md-6">
                        <?php foreach ($macro_liste as $key => $value) { ?>
                           <div class="row">
                                <?php if ($value['image'] != null && $value['image'] != '') { ?>
                                    <div class="col-md-4"><img src="<?php echo img_url("mElmts/".$value['image']); ?>" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } else { ?>
                                    <div class="col-md-4"><img src="http://via.placeholder.com/150x150" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } ?>    
                                <div class="col-md-8">
                                    <h3><?php echo $value['nom']; ?></h3>
                                    <p><?php echo $value['text']; ?></p>
                                    <?php if ($value['pdf'] != null && $value['pdf'] != '') { ?>
                                        <a href="../pdf/<?php echo $value['pdf'] ;?>" style="float:right;"><?php echo lang('readmore')?></a>
                                    <?php } ?>
                                </div>
                            </div> 
                       <?php } ?> 
                        </div>                        
                        <div class="col-md-6 text-center" style="margin-bottom:50px;" >
                            <center>
                                <a href="../pdf/DRENCH_POMPE-EN-2015.pdf">
                                    <img src="<?php echo img_url("mElmts/9-r.png") ?>" alt="Products Savetis" style="height:400px;width:auto;">
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="tab-pane row" id="4a">
                        <div class="col-md-6">
                         <?php foreach ($digest_liste as $key => $value) { ?>
                           <div class="row">
                                <?php if ($value['image'] != null && $value['image'] != '') { ?>
                                    <div class="col-md-4"><img src="<?php echo img_url("digest/".$value['image']); ?>" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } else { ?>
                                    <div class="col-md-4"><img src="http://via.placeholder.com/150x150" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } ?>
                                <div class="col-md-8">
                                    <h3><?php echo $value['nom']; ?></h3>
                                    <p><?php echo $value['text']; ?></p>
                                    <?php if ($value['pdf'] != null && $value['pdf'] != '') { ?>
                                        <a href="../pdf/<?php echo $value['pdf'] ;?>" style="float:right;"><?php echo lang('readmore')?></a>
                                    <?php } ?>
                                </div>
                            </div> 
                        <?php } ?>    
                        </div>   
                    </div>
                    <div class="tab-pane row" id="5a">
                       <div class="col-md-6">
                        <?php foreach ($hygiene_liste as $key => $value) { ?>
                           <div class="row">
                                <?php if ($value['image'] != null && $value['image'] != '') { ?>
                                    <div class="col-md-4"><img src="<?php echo img_url("hygiene/".$value['image']); ?>" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } else { ?>
                                    <div class="col-md-4"><img src="http://via.placeholder.com/150x150" alt="Products Savetis" style="height:150px;width:auto;"></div>
                                <?php } ?>    
                                <div class="col-md-8">
                                    <h3><?php echo $value['nom']; ?></h3>
                                    <p><?php echo $value['text']; ?></p>
                                    <?php if ($value['pdf'] != null && $value['pdf'] != '') { ?>
                                        <a href="../pdf/<?php echo $value['pdf'] ;?>" style="float:right;"><?php echo lang('readmore')?></a>
                                    <?php } ?>
                                </div>
                            </div> 
                        <?php } ?> 
                        </div>   
                    </div>
                </div>

            </div>
    </section>


    <section id="slider" style="padding:0;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <h3><?php echo lang('slidetitre1'); ?></h3>
              <img src="<?php echo img_url('cow.jpg');?>" alt="...">
              <div class="carousel-caption">
                <?php echo lang('slidetitre1'); ?>
              </div>
            </div>
            <div class="item">              
                <div class="row">
                    <ul class="container">
                        <h4 style="padding: 75px 0 0 0;font-size: 26px;"><?php echo lang('slidetitre2'); ?></h4>
                        <li class="col-md-3">
                            <img src="<?php echo img_url("mElmts/1.png") ?>" alt="Products Savetis">
                            <h4>C for Cal</h4>
                            <p>Bolus de calcium et magnésium pour la gestion des fièvres vitulaires.</p>
                            <a href="#">En savoir plus</a>
                        </li>
                        <li class="col-md-3">
                            <img src="<?php echo img_url("mElmts/2.png") ?>" alt="Products Savetis">
                            <h4>C for Phos</h4>
                            <p>Capsule pour la gestion du déficit en phosphore chez la vache.</p>
                            <a href="#">En savoir plus</a>
                        </li>
                        <li class="col-md-3">
                            <img src="<?php echo img_url("mElmts/3.png") ?>" alt="Products Savetis">
                            <h4>C for Kalium</h4>
                            <p>Capsule pour la gestion du déficit en potassium chez la vache.</p>
                            <a href="#">En savoir plus</a>
                        </li>
                        <li class="col-md-3">
                            <img src="<?php echo img_url("mElmts/9-r.png") ?>" alt="Products Savetis">
                            <h4>C for Lance Bolus</h4>
                            <p>Gel homogène pour la gestion des hypocalcémies et hypophosphatémies chez les ruminants.</p>
                            <a href="#">En savoir plus</a>
                        </li>
                    </ul>
                </div>
            </div>
            ...
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo lang('formu_titre'); ?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-8 row">
                               <div class="col-md-8">
                                   <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo lang('nom')?> *" id="lname" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo lang('prenom')?> *" id="fname" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo lang('email')?> *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <select>
                                        <option>Alcyon Aras</option>
                                        <option>Alcyon Landerneau</option>
                                        <option>Alcyon Lyon</option>
                                        <option>Alcyon Pau</option>
                                        <option>Centravet Plancoët</option>
                                        <option>Centravet Lapalisse</option>
                                        <option>Centravet Castelnaudary</option>
                                        <option>Centravet Nancy</option>
                                        <option>Hyppocampe Caen</option>
                                        <option>Hyppocampe Bressuire</option>
                                        <option>Hyppocampe Nevers</option>
                                        <option>Coveto</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo lang('msg')?> *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" style="margin: 0 35%"><?php echo lang('btn_envoie')?></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo img_url("logo-th.png") ?>">
                                <p>10 rue du Jardin</p>
                                <p>22100 Quévert</p>
                                <p>France</p>
                                <p style="margin: 40px 0 0 0">Tél. <?php echo lang('num') ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

         <!-- Portfolio Grid Section -->
    <section id="newsletter" class="bg-light-gray">
        <div class="container">
            <h2><?php echo lang('newsletter_titre')?></h2>
            <div style="margin-top:5%;" class="row">                
                <div class="col-md-8 col-md-offset-4 text-center row"> 
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                        
                         /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup" class="col-md-6">
                        <form action="//bleu-b.us4.list-manage.com/subscribe/post?u=cfe34b832b0792f168535121f&amp;id=f8510d350a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="indicates-required"><span class="asterisk">*</span> <?php echo lang('ind_req')?></div>
                              
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo lang('email')?>*" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                            </div>   
                    

                            <div class="col-md-12">
                                
                                <div style="position: absolute; left: -5000px;"><input type="text" name="b_cfe34b832b0792f168535121f_f8510d350a" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="<?php echo lang('btn_abon')?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                    
                        </form>
                    </div>

                        <!--End mc_embed_signup-->
                        <!-- -->
                </div>


            </div>


        </div>
    </section>

     <!-- jQuery -->
    <script src="<?php echo js_url("jquery") ?>"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo js_url("bootstrap.min") ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo js_url("classie"); ?>"></script>
    <script src="<?php echo js_url("cbpAnimatedHeader") ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo js_url("jqBootstrapValidation") ?>"></script>
    <script src="<?php echo js_url("contact_me") ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo js_url("agency") ?>"></script>

    <script>
    $(document).ready(function(){

        /*alert("jQuery est prêt !");*/

        $(".digest").hide();

        $("#hide").click(function(){
            $(".digest").hide();
            /*$(".drench").show();*/
        });

        $("#hide2").click(function(){
            $(".digest").hide();
            /*$(".drench").show();*/
        });

        $("#hide3").click(function(){
            $(".digest").hide();
            /*$(".drench").show();*/
        });

        $("#hide4").click(function(){
            $(".digest").hide();
            /*$(".drench").show();*/
        });

        $("#show").click(function(){
            $(".digest").show();
            /*$(".drench").hide();*/
        });

    });
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17072023-19', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>