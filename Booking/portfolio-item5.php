<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Nice</title>

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
                <h1 class="page-header">Nice
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Nice</li>
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
                            <img class="img-responsive" src="img/n1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/n2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/n3.jpg" alt="">
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
                <h3>05.05.2016 </h3>
                <p> Nisja nga hoteli, per ta vizituar qytetin e Nices ose Kanes,
				dhe pastaj kthehemi ne Monaco per ta vizituar qytetin e Monacos, ku do te kemi mundesine per ta pare diten dhe naten kete qytet.</p>
               <p> Vendet me te vizituara ne Nice jane:</p>
			   <?php
			  $vendet = array("Nice Cathedral"=>"1650 ", "Musée des Beaux-Arts de Nice"=>"1878", "Notre-Dame de Nice"=>"1864", "Nice Observatory "=>"1879");
ksort($vendet);
$a=&$b;
$a=1;
foreach($vendet as $x => $x_value) {
    echo $b.  "." .$x . " e ndertuar ne vitin " . $x_value;
    echo "<br>";
	$b++;
	}
	$var = 0 ;
$num = NULL;
function &blah(){
$var = &$GLOBALS["var"];
$var++;
return $var;
}
$num = &blah();
echo "Vizita ne vendin $num do zgjat $num ore."; echo "<br>";
blah();
echo "Vizita ne vendin $num do zgjat $num ore." . "<br>";
class MyDestructableClass {
   function __construct() {
       print "Pastaj do vazhdohet ne ndalesat e ardhshme !\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
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
