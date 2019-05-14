<!DOCTYPE html>
<?php 
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
	</body>
	</html>
?>