<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Venecia</title>

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
                <h1 class="page-header">Venecia
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Venecia</li>
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
                <h3>07.05.2016 </h3>
                <p> Pas ngrenjes se mengjesit, nisemi per te dal perseri ne Milano, ose kemi mudesi per ta vizituar rruges Venecia-n.</p>
              <p>Vendet me te vizituara ne Venecia jane:</p>
			  <?php
$vendet = array("Interpreti Veneziani"=>"1987", "St. Mark's Square"=>"1174", "Doge's Palace"=>"1355", "Grand Canal"=>"XV");
krsort($vendet);

foreach($vendet as $x => $x_value) {
    echo $x . " e ndertuar ne vitin " . $x_value;
    echo "<br>";
}
class Vendet{
var $vizita;
var $viti;
function setvizita($par){
$this->vizita=$par;
}
function getvizita(){
echo $this->vizita ."e ndertuar nga:" ;
}
function setviti($par)
{
$this->viti=$par;
}
function getviti()
{
echo $this->viti ."<br>";
}
}
$vendi1= new Vendet;
$vendi2 = new Vendet;
$vendi3 = new Vendet;

$vendi1->setvizita("St. Mark's Square");
$vendi2->setvizita("Grand Canal");
$vendi3->setvizita("Doge's Palace");

$vendi1->setviti("Baldassarre Longhena.");
$vendi2->setviti("Ca' Foscari.");
$vendi3->setviti("Sebastiano Ziani.");
$vendi1->getvizita();
$vendi1->getviti();
$vendi2->getvizita();
$vendi2->getviti();
$vendi3->getvizita();
$vendi3->getviti();

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
