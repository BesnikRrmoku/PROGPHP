<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Prague</title>

  
    <link href="css/file1.css" rel="stylesheet">

 
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
                <h1 class="page-header">Prague
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Prague</li>
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
                            <img class="img-responsive" src="img/p1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/p2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/p3.jpg" alt="">
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
                <h3>01.05.2016 </h3>
                <p>Prage akomodimi ne hotel, ku te nesermen pas ngrenjes se mengjesit do te dalim ne forme te organizuar se bashku per ta vizituar qytetin e bukur te Prages,
				nje qytet qe ofron shume per te pare, siq njihet ndryshe me emrin Praga e Magjishme..</p>
				<p>Vendet me te vizituara ne Prage jane: </p>
				<?php
$vendet = array("Prague Castle", "Charles Bridge", " The Old Town Square and the Astronomical Clock","St. Vitus Cathedral","The Municipal House");
rsort($vendet);
echo"<ol>";

$clength = count($vendet);
for($x = 0; $x < $clength; $x++) {
    echo "<li>" .$vendet[$x] . "<br>" ."</li>";

}
echo"<br>";
class Vendi {
public $vizita;
public $viti;
public $arkitekti;

public function __construct()
{
$this->vizita ="Prague castle";
$this->viti = 1472;
$this->arkitekti = "Ladislaus II Jagello.";
}
}

?>
<?php
$vendi1 = new Vendi;
$vendi1->vizita  =  "Prague Castle ";
echo $vendi1->vizita ."eshte krijuar ne vitin " . $vendi1->viti . " nga arkitekti " . 
$vendi1->arkitekti;          
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
