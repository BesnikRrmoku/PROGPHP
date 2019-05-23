<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Budapest</title>

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
                <h1 class="page-header">Budapest 
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Budapest</li>
                </ol>
            </div>
        </div>
        <
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
                            <img class="img-responsive" src="img/b1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/b2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/b3.jpg" alt="">
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
                <h3>29.04.2016 </h3>
                <p> Budapest(nata e pare) arrihet heret ne mengjes rreth ores 8:00, akomodimi ne hotel, dhe pastaj ne forme te organizuar dalim se bashku rreth ores 10:00 per ta pare qytetin e bukur te Budapestit, me pase per tu kthyer ne hotel rreth ores 17:00 per te pushuar, 
				dhe ne mbremje te dilet perseri rreth ores 21:00, pasi Budapesti njihet si njeri nder qytetet me jeten e nates me te miren ne Europe.
				</p>
				<p>Vendet me te vizituara ne Budapest jane:</p>
				<?php
				$vendet = array("Szentendre", "Matthias Church", "Budapest Opera House","Bock Bistro","Chain Bridge","Palace of Miracles");
sort($vendet);

$clength = count($vendet);
for($x = 0; $x < $clength; $x++) {
echo "<ul>";
    echo "<li>" .$vendet[$x] ."</li>" ;
	echo "</ul>";
}
class person 
{
var $vendi,$viti;
function __get($vendi)
{
return $this->vendi;
}
function __set($vendi,$value)
{
$this->vendi = $value;
}
}
$personi = new person();
$personi->vendi ="Szentendre eshte ndalesa e fundit per kete qytet.";
print $personi->vendi;

class A {
var $atributi_A;
function funk_A()
{
print "<br>" . $this->atributi_A;
}}
class B extends A
{
var $atributi_B;
function funk_B()
{
print "<br>" . $this->atributi_B;
}
}
$Obj_B = new B();
$Obj_B->atributi_A ="Bock Bistro eshte vendi me i bukur i qytetit te Budapestit.";
$Obj_B->funk_A();
$Obj_B->atributi_B="Ky vend vizitohet nga se paku 20 mije persona ne dit!";
$Obj_B->funk_B();
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
