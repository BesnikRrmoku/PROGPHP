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
	<body id="page-top" class="index>
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
	</body>
	</html>
?>