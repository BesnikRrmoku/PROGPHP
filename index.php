<!DOCTYPE html>
<?php

session_start();
if(isset($_SESSION['numeruesi']))
{
	$_SESSION['numeruesi']+=1;
}
else
{
	$_SESSION['numeruesi']=1;
}
?>
<html lang="en">


<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}

</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage</title>

    
    <link href="css/file1.css" rel="stylesheet">

    
    <link href="css/agency.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
</head>

<body id="page-top" class="index">

    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bon Voyage</a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading"></div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

  
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
						<a href="Booking/index.php">
                        <i class="fa fa-bus fa-stack-1x fa-inverse"></i> </a>
                    </span>
                    <h4 class="service-heading">Booking</h4>
                    <p class="text-muted">Rezervime online te Eurotrip.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-spinner fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Hiking/Winter Trips</h4>
                    <p class="text-muted">Coming Soon...</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-spinner fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Albania Trips</h4>
                    <p class="text-muted">Coming soon..</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
					<br><br>
                   <h3 class="section-subheading text-muted">
				    <?php
                        $_SESSION["eja"] = "Let's make memories!";
                        echo " ".$_SESSION["eja"]." ";
                    ?>
					</h3> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2010</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2011</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2012</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2013</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2014</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/foto6.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>2015</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted"> 
                        <?php
                             $string = 'The world is a letter, and this who do not walk read only one page';
                             $patterns = array();
                             $patterns[0] = '/letter/';
                             $patterns[1] = '/this/';
                             $patterns[2] = '/walk/';
                             $replacements = array();
                             $replacements[2] = 'book';
                             $replacements[1] = 'those';
                             $replacements[0] = 'travel';
                             echo preg_replace($patterns, $replacements, $string);
                        ?>
                     </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/travel1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015-2016</h4>
                                    <h4 class="subheading">Fillimi Jonë</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Kompania “ Bon Voyage “  është themeluar në janar të vitit 2010 nga katër studenta te Fakultetit te Inxhinierisë Elektrike dhe Kompjuterike, të pasionuar pas udhëtimit dhe eksperiencave të reja. Është një ndër kompanitë e para në Kosovë që mirret me organizimin e shëtitjeve nëpë Europë(Eurotrip)!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/travel2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Shkurt 2010</h4>
                                    <h4 class="subheading">"Sharr Tours"</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ne shkurt te 2010-es Bon Voyage nenshkroi kontraten me linjen e famshme te autobusave per udhetime te gjata "Sharr Tours".</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/travel3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Janar 2011</h4>
                                    <h4 class="subheading">Kalimi Online</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ne janar te vitit 2011 u krijua website i pare per kompanine "Bon Voyage",me ç'rast u mundesua rezervimi(booking) online.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Journey!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <aside class="clients">

    </aside>
    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontakti</h2>
                    <h3 class="section-subheading text-muted">.....</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                      <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Emri *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email-i *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Numri i telefonit *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mesazhi *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Dergo email-in</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Bon Voyage 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/BonVoyage_16"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=100012172565469"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                   
                </div>
            </div>
        </div>
    </footer>

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>EuroTrip 2010</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Italy!</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto1.jpg" alt="">
                            <p>Ky ishte eurotripi i pare i organizuar nga ne,me 20 Prill te vitit 2010.Ne te morren pjese 25 student nga e gjithe Kosova.Udhetimi perfshiu viziten e 5 qyteteve : Zagreb,Viene,Berlin,Rome dhe Napoli. </p>
                            <strong>
                            <ul class="list-inline">
                                <li>Data: Prill 2010</li>
                                <li>EuroTripi i pare</li>
                                
                            </ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kthehu prapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>EuroTrip 2011</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Amsterdam!</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto2.jpg" alt="">
                            <p>Ne udhetimin e dyte i cili zgjati 14 dite,u perfshin qytetet: Zagreb,Viene,Berlin,Amsterdam,Paris dhe Milano.Ne te morren pjese 30 studente nga e gjithe Kosova.</p>
                            <strong><ul class="list-inline">
                                <li>Data: Prill 2011</li>
                                <li>EuroTripi i dyte</li>
                                
                            </ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kthehu Prapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>EuroTrip 2012</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Venecia</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto3.jpg" alt="">
                            <p>Ky ishte eurotripi i trete i organizuar nga ne,me 15 Prill te vitit 2011.Ne te morren pjese 30 student nga e gjithe Kosova.Udhetimi perfshiu viziten e 5 qyteteve : Zagreb,Viene,Berlin,Venedik dhe Rome. </p>
                            <strong>
                            <ul class="list-inline">
                                <li>Data: Prill 2012</li>
                                <li>EuroTripi i trete</li>
								</ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Kthehu Prapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>EuroTrip 2013</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Paris!</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto4.jpg" alt="">
                             <p>Ne udhetimin e katert i cili zgjati 18 dite,u perfshin qytetet: Zagreb,Viene,Berlin,Amsterdam,Paris dhe Rome.Ne te morren pjese 35 studente nga e gjithe Kosova.</p>
                            <strong><ul class="list-inline">
                                <li>Data: Prill 2013</li>
                                <li>EuroTripi i katert</li>
                                
                            </ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Amsterdam!</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto5.jpg ">
                            <p>Ky ishte eurotripi i peste i organizuar nga ne,me 18 Prill te vitit 2013.Ne te morren pjese 35 student nga e gjithe Kosova.Udhetimi perfshiu viziten e 5 qyteteve : Zagreb,Viene,Berlin,Venedik,Amsterdam dhe Rome. </p>
                            <strong>
                            <ul class="list-inline">
                                <li>Data: Prill 2013</li>
                                <li>EuroTripi i peste</li>
								</ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Kthehu prapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Vendi ne foto,Budapest</p>
                            <img class="img-responsive img-centered" src="img/portfolio/foto6.jpg" alt="">
                            <p>Ne udhetimin e gjashte i cili zgjati 18 dite,u perfshin qytetet: Zagreb,Budapest,Viene,Berlin,Amsterdam,Paris dhe Rome.Ne te morren pjese 35 studente nga e gjithe Kosova.</p>
                            <strong><ul class="list-inline">
                                <li>Data: Prill 2014</li>
                                <li>EuroTripi i gjashte</li>
                                
                            </ul></strong>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kthehu Prapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>

    <script src="js/file1.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <script src="js/file2.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/agency.js"></script>

</body>

</html>
