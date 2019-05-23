<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Vienna</title>

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
                <h1 class="page-header">Vienna
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Vienna</li>
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
                            <img class="img-responsive" src="img/v1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/v2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/v3.jpg" alt="">
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
                <h3>30.04.2016 </h3>
                <p>Budapest(nata e dyte) dita e dyte ne Budapest, ku pas ngrenjes se mengjesit do te dalim nga hoteli rreth ores 10:00, 
				ku parashihet te vizitohet liqeni me I madh ne Hungari, Liqeni I Balatonit, dhe pastaj do te vazhdojme rrugen per ne Viene, Austri.</p>
				<p> Vendet me te vizituara ne Viene jane: </p>
              <?php
$vendet = array("Wiener Rathaus", "Graben", "Burggarten","Belvedere Complex","Schonbrunn Palace");
$arrlength = count($vendet);

for($x = 0; $x < $arrlength; $x++) {
    echo $vendet[$x];
    echo "<br>";
}
echo "<br>";
$viti = array("Burggarten"=>"1743 ", "Belvedere Complex"=>"1772", "Schonbrunn Palace"=>"1696");
echo "Schonbrunn Palace eshte ndertuar ne vitin " . $viti['Schonbrunn Palace'] . " dhe ne vitin 1712 me kerkesen e Emperor Leopold I  dhe u kthye ne imperial summer palace nga Maria Theresa .";
echo"<br>";
class Graben {
public $viti = "1327";
var $emri="Graben";
private $arkitekti="Karl Oettinger";
public $prejardhja = "Austria.";

public function printo()
{
echo $this->arkitekti;
}
}
$obj = new Graben();
print "Ne vitin ";
print $obj->viti;
print " u ndertua ";
print $obj->emri;
print " nga ";
print $obj->printo();
print " qe ishte me prejardhje nga ";
print $obj->prejardhja;

class Graben2 {
public function funk1()
{
return "Eshte nje nder rruget me te famshme te Vienes.";

}
function funk2()
{
return "Vizitohet nga mijera turiste gjate dites,";

}
public function funk3()
{
return "dhe veçohet per festivalet e ndryshme qe mbahen gjate veres.";
echo "<br>";
}
}
$obj = new Graben2();
print $obj->funk1();
print $obj->funk2();
print $obj->funk3();
print "<br>";
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
