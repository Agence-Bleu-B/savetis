<body id="page-top" class="index">
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo img_url('logo-th.png') ?> " alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li style="margin-right:50px;">
                        <a class="page-scroll" style="margin-top:-18px;" href="mailto:<?php echo lang('mail') ?>"> <?php echo lang('num') ?><br><?php echo lang('mail') ?></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#page-top"><?php echo lang('acc') ?></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#produits"><?php echo lang('prod') ?></a>

                    </li>

                     <li>
                        <a class="page-scroll" href="#gammes"><?php echo lang('prod_range') ?></a>

                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                     <li>
                        <a class="page-scroll" href="#newsletter">Newsletter</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <ul id="languages_bar">
        	<li>
                <a class="page-scroll" href="<?php echo site_url('page/switchLang/french'); ?>" id="lg_fr">FR</a>
            </li>

            <!-- <li>
                <a class="page-scroll" href="<?php //echo site_url('page/switchLang/english'); ?>" id="lg_en">EN</a>
            </li> -->

            <li>
                <a class="page-scroll" href="<?php echo site_url('page/switchLang/dutch'); ?>" id="lg_nl">NL</a>
            </li>
        </ul>
        <!-- /.container-fluid -->
    </nav>