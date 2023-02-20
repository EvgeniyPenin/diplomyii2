<?php

/** @var \yii\web\View $this */
/** @var string $content */


use frontend\assets\AppAsset;

use yii\bootstrap5\Html;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
<base href="/"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?=Html::encode ($this->title) ?></title>
<?php $this->head() ?>
   
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="public/css/preloader.css" type="text/css" media="screen, print"/>

    
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.css">
   
    <link rel="stylesheet" href="public/css/animate.css">

    
    <link href="public/css/bootstrap.min.css" rel="stylesheet">



    
    <link href="public/css/style.css" rel="stylesheet">

   
    <link href="public/css/responsive.css" rel="stylesheet">
   
</head>

<body>
<?php $this->beginBody() ?>         
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>

    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="/public/images/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/contact">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/about">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/klients2">Клиенты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/zakazs2">Заказы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/tovars2">Товары</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/site/uslugs2">Услуги</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?= yii\helpers\Url::to(['/admin'])?>">Администратор</a>
      <br>
      </li>
      <?php if(!Yii::$app->user->isGuest) : ?>
        <a class="nav-link" href="<?= yii\helpers\Url::to(['/site/logout'])?>"><?=Yii::$app->user->identity['username']?> (выход)</a>
        <?php else: ?>
            <a class="nav-link" href="<?= yii\helpers\Url::to(['/site/login'])?>">Вход</a>
            <br>
            <a class="nav-link" href="<?= yii\helpers\Url::to(['/site/signup'])?>">Регистрация</a>
        <?php endif; ?>
        <?php //debug(Yii::$app->user->identity) ?>
      </li>
    </ul>
  </div>
</nav>



	            <?= $content ?>

    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>Дизайн</h2>
                        <img src="/public/images/dz.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Развитие</h2>
                        <img src="/public/images/tel.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-camera"></i>
                        <h2>Маркетинг</h2>
                        <img src="/public/images/rem.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-magnifying-glass"></i>
                        <h2>Поисковая оптимизация</h2>
                        <img src="/public/images/izi.png" alt="">
                    </div>
                </div>
            </div>            
        </div>
    </section>
   
    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores<br/> eos qui ratione voluptatem sequi nesciunt.</p>
                    <h4>-JOHN DOE</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius<br/> modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <h4>-JOHN SMITH</h4>
                </div>
            </div>            
        </div>
    </section>


    <div class="fun_facts">
    	<section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
	        <div class="section_overlay">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 wow fadeInLeft animated">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-toolbox"></i>
	                                    <h3>300</h3>
	                                    <p>Project Done</p>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-clock"></i>
	                                    <h3>1700+</h3>
	                                    <p>Hours Worked</p>
	                                </div>                            
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-trophy"></i>
	                                    <h3>37</h3>
	                                    <p>Awards Won</p>
	                                </div>                            
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
	                        <div class="imac">
	                            <img src="images/imac.png" alt="">
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>
	    </section>    
    </div>
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Latest Works</h1>
                        <img src="images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w4.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w5.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
                        <img src="images/w6.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                        <p>Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. 
                        Integer non dapibus diam, ac eleifend lectus.</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
	                    <a href="#CONTACT">
	                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
	                    </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+88 00 123 456 01</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>Hello@abdullahnoman.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>216 Street Address, Barisal, BD</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="images/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href="http://www.facebook.com/abdullah.noman99"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/absconderm"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.dribbble.com/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2015.All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team</a></p>
                        <p>Made with love for creative people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.nicescroll.js"></script>
    <script src="public/js/owl.carousel.js"></script>
    <script src="public/js/wow.js"></script>
    <script src="public/js/script.js"></script>



    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage();