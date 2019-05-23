<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Milano</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/file1.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bon Voyage</a>
            </div>
            
    </nav>

    <div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Milano
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Milano</li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="img/m1.jpg"alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/m2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/m3.jpeg"alt="">
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>06.05.2016</h3>
                <p>Pas ngrenjes se mengjesit heret ne Mengjes nisemi per ne Milano, ku do te kemi mundesine ta vizitojme qytetin Italian te Modes, qytet poashtu qe ofron shum per te pare dhe bere, ku perveq dites, do ta kalojme edhe naten ne kete qytet.</p>
              <p>Vendet me te vizituara ne Milano jane: </p>
			  				 <?php
$vendet = array("The Duomo"=>"1386", "The Last Supper"=>"XV", "La Scala"=>"1778", "Galleria Vittorio Emanuele"=>"XVIII");
arsort($vendet);

$a= &$b;
$a = 1;
foreach($vendet as $x => $x_value) {

    echo  $b . "." . $x . " e ndertuar ne vitin " . $x_value;
    echo "<br>";
	$b++;
}
?>
               
            </div>

        </div>


        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Bon Voyage 2016</p>
                </div>
            </div>
        </footer>

    </div>
    
    <script src="js/jquery.js"></script>

    <script src="js/file1.js"></script>

</body>

</html>
