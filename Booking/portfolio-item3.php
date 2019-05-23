<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Amsterdam</title>

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
                <h1 class="page-header">Amsterdam
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Amsterdami</li>
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
                            <img class="img-responsive" src="img/a1.jpeg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/a2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/a3.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>02.05.2016 </h3>
                <p>Amsterdam(nata e pare).Pas vizites se qytetit te Prages, ne mbremje nisemi rruges per ne Amsterdam, ku do te mberrijme heret ne mengjes per tu vendosur ne hotel dhe pastaj shetitje e lire neper Amsterdam 
do te vizitohen shum vende ne kete qytet te bukur, ku ka shum muzeume te ndryshme, dhe ture te ndryshme, siq jane Anne Frank Museum, Sheshi Dam(Dame Square), simboli I Amsterdamit IAMSTERDAM dhe mund te vizitohet edhe prodhuesi me i madh i birres ne bote Heineken(Heineken Experience)
Turi me i pelqyer nga vizitoret ne Amsterdam eshte me bicikleta, pasi Amsterdami njihet ndryshe si Kryeqyteti I Bicikletave. 
 gjithashtu do te keni mundesi ta shikoni edhe jeten e nates deri ne oret e vonshme ku do te dilet se bashku me grup(ardhja ne grup, jo-obligative), bujtje ne Amsterdam..</p>
              <?php
$favplace = "Leidseplein";

switch ($favplace) {
    case "Dam Square":
        echo "Vendi me i vizituar ne Amsterdam eshte Dam Square.";
        break;
    case "Rijksmuseum":
        echo "Vendi me i vizituar ne Amsterdam eshte Rijksmuseum.";
        break;
    case "Leidseplein":
        echo "Vendi me i vizituar ne Amsterdam eshte Leidseplein." . "<br>";
        break;
    default:
        echo "Vendi me i vizituar nuk eshte perfshire !";
}

class Vendet
{

public $emri;
public $viti;
public $arkitekti;


public function themeluar()
{
echo $this->emri. " eshte themeluar ne vitin "  . $this->viti ." nga arkitekti me fame boterore " . $this->arkitekti ;
}

}
$proj= new Vendet;

$proj->emri="Leidseplein";
$proj->viti=1925;
$proj->arkitekti="Jonathan Holland";
$proj->themeluar();

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
