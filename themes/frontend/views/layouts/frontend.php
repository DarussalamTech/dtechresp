<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="D-tech Systems is a creative and collaborative platform of professional designers and developers full packed with a wide range of promising expertise.">
        <meta name="keywords" content="D-Tech,Android Development,Internet Marketing Consultant,SEO Services,Web Design,Digital Marketing,Social Media Marketing,iOS Development,Internet Marketing Company, App Development, Mobile App Development, Digital Marketing Agency" />

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/packages/jui/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/dtech.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/packages/jui/js/jquery-ui1.10.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/packages/jui/css/jquery-ui1.10.css">
        <meta charset="utf-8">

        <meta name="author" content="">



        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/dtech.js"></script>

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/carousel.css" rel="stylesheet">


        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.custom.79639.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.nav.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.scrollTo.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/lightbox/js/lightbox-2.6.min.js"></script>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/lightbox/css/lightbox.css" media="screen"/>

        <script type="text/javascript">

            jQuery(function() {

                dtech.registerScrollUsingPluggin();
                dtech.closeServiceOnlick();

            })
        </script>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div id="loading" align="center">
            Please Wait

        </div>
        <div class="navbar-wrapper">
            <div class="container">

                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#myCarousel">
                                <?php
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/logo_03.png", '');
                                ?>
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="#myCarousel">HOME</a></li>
                                <li><a href="#about">ABOUT US</a></li>
                                <li><a href="#services">OUR SERVICES</a></li>
                                <li><a href="#portfolio">OUR WORK</a></li>
                                <li><a href="#contact_us">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">

                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/01.jpg", 'First slide');
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="slider_two_content">

                                <?php
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/make_smarter_03.png");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/02.jpg");
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="carousel-text">
                                <h1>Interactive</h1>
                                <h2>Games</h2>
                                <p>We create educational entertainment for children.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">

                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/03.jpg");
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="carousel-text-1">
                                <h1>Design</h1>
                                <h2>We are D-tech!</h2>
                                <p>Making start-up life easier</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/04.jpg");
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="carousel-text-2">
                                <h1>Design</h1>
                                <h2>Applications</h2>
                                <p>We make mobile worth your while.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/05.jpg");
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="carousel-text-3">
                                <h1>Content Management System</h1>
                                <h2>Applications</h2>
                                <p>User friendly dashboard for managing content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left">

                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/left_arrow_03.png");
                    ?>
                </span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right">

                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/right_arrow_03.png");
                    ?>
                </span>
            </a>
        </div><!-- /.carousel -->
        <div id="about">
            <div class="container marketing">
                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="<?php echo Yii::app()->theme->baseUrl ?>/images/settings_03.png" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">

                        <h2 class="featurette-heading">About Us</h2>
                        <div style="height: 480px">
                            <div id="first_abt">
                                <h3 class="featuring-heading">we make<br /><span>relationships!</span> Not<br />business deals</h3>
                                <h4 class="features-heading">Our Company</h4>
                                <p class="lead">D-tech Systems is a creative and collaborative platform of professional designers and developers full (fully) packed with a wide range of promising expertise. We are one of the premium companies in the world of advanced technology. We are a software-based company aspiring to offer services in web and mobile applications along (with) the facilities provided in digital marketing.</p>
                                <h4 class="features-heading">OUR IDEA OF A MISSION</h4>
                                <p class="lead">D-tech innovates through passion. We offer one-stop solution services through our enthusiastic professional workforce. We use latest technology trends to delight our clients by providing high quality services.</p>
                                <h4 class="features-heading">OUR IDEA OF VALUE</h4>
                                <p class="lead">D-tech aims to provide all the quality services with probity, integrity and the ability to stand out successfully in an era of advanced technology.</br>It's a pleasure for us to share our services with you. Visit our services and our work page to learn (know) more about our services, designs and ideas.</br>Lets create together! Drop us an email to get started!</p>
                            </div>
                            <div id="second_abt" style="display:none">
                                <h4>Our Expertise</h4>
                                <p>Our software development wing holds expertise in:</p>
                                <p>PHP (Yii, zend, codeigniter, cake php, core php, Wordpress, Joomla, sugar crm), Javascript (Jquery, protype js, angular js), Python (django), JAVA, .NET (asp.net, c#, vb.net).</p>
                                <p>Our mobile application and game development wing comprises of both iOS and Android development teams and specializes in Cocoa Touch, Cocos2d-x, Unity 3d and Engine.</p>
                                <h3>WHY US?</h3>
                                <ul>
                                    <li>We are reliable as we dedicate a resource for just your project.</li>
                                    <li>We are young and thrive for the best.</li>
                                    <li>We guarantee consistent and cost effective quality results every time.</li>
                                    <li>We say, "We are done", only when you are satisfied with the work.</li>
                                    <li>We follow the latest trends of technology and strive for the perfection.</li>
                                    <li>Our team consists on happy people and always wants to see the smile on the faces of our clients.</li>
                                    <li>Free consultation on exceptional cases!</li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    <div class="right_about_arrows">

                        <a id='left_a_image' href='javascript:void(0)' class='paging_arrows' onclick="dtech.showAboutUs('first_abt', 'second_abt', this)">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/right_about_arrow_03.png", '', array(
                                "class" => "aboutPaging",));
                            ?>  
                        </a>

                        <a  id='right_a_image' href='javascript:void(0)' class='paging_arrows hover_page' onclick="dtech.showAboutUs('first_abt', 'second_abt', this)">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/leftt_about_arrow_03.png", '', array(
                                "class" => "aboutPaging",)
                            );
                            ?> 
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <div id="services">
            <div class="container marketing">
                <div class="our_services left_part">
                    <div class="services_text">
                        <h1>Our Key Services</h1>
                    </div>
                </div>

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="services_img">
                        <div class="col-lg-3">
                            <div class="cirlce cirlce2">
                                <a href="javascript:void(0)" onclick="dtech.loadServices(this, '_web', '<?php echo $this->createUrl("/web/default/service") ?>')">

                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/lcd_03.png");
                                    ?>
                                </a>
                                <p>Interactive Web design</p>
                            </div>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-3">
                            <div class="cirlce cirlce2">
                                <a  href="javascript:void(0)" onclick="dtech.loadServices(this, '_ios', '<?php echo $this->createUrl("/web/default/service") ?>')">

                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/pad_img_03.png");
                                    ?>
                                </a>
                                <p>iOS &amp; Android Applications</p>
                            </div>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-3">
                            <div class="cirlce cirlce2">
                                <a href="javascript:void(0)" onclick="dtech.loadServices(this, '_web_cms', '<?php echo $this->createUrl("/web/default/service") ?>')">

                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/brush_img_03.png");
                                    ?>
                                </a>
                                <p>Web Based (CMS)</p>
                            </div>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-3">
                            <div class="cirlce cirlce2">
                                <a href="javascript:void(0)" onclick="dtech.loadServices(this, '_social_media', '<?php echo $this->createUrl("/web/default/service") ?>')">

                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/comments_img_03.png");
                                    ?>
                                </a>
                                <p>Social Media Marketing</p>
                            </div>
                        </div><!-- /.col-lg-4 -->
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
        <div id="service_position">

        </div>
        <div id="portfolio">
            <div class="container marketing">
                <div class="left_port">
                    <h1>Our Portfolio</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 thumbs overall">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-1.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->

    
                    <div class="col-lg-3 thumbs overall-0">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-2.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 thumbs overall-1">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-3.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 thumbs overall-2">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-4.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div>
                    <div class="col-lg-3 thumbs overall-3">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-5.png"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 thumbs overall-4">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-6.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 thumbs overall-5">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-7.png"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 thumbs overall-6">
                        <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port/large-8.jpg"; ?>' rel="lightbox[_default]"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/opacity_03.png" max-height="250px" max-width="242px" style="opacity:0; padding: 0; margin-left: -15px !important;" class="bottom" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $content; ?>
        <div id="loaded_servces">
            <?php
            $this->renderPartial("//default/_ios");
            $this->renderPartial("//default/_social_media");
            $this->renderPartial("//default/_web");
            $this->renderPartial("//default/_web_cms");
            ?>
        </div> 


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/holder.js"></script>
        <script>

            $(window).load(function() {

                $("body").children().eq(0).hide();
                $("#loaded_servces").hide();
            });
        </script>
    </body>
</html>