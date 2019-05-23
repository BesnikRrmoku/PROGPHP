<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Monaco</title>

  
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
            <
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Monaco
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Monaco</li>
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
                            <img class="img-responsive" src="img/mo1.jpg"alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/mo2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/mo3.jpg" alt="">
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
                <h3>04.05.2016 </h3>
                <p> Pas ngrenjes se mengjesit, do te dalim se bashku me grup per ta vizituar kryeqytetin e botes, dihet qe Parisi eshte qyteti me I vizituar ne bote, pike ndalesa e pare do te jete tek Kulla Eiffel, per te vazhduar tutje me ndonje tour apo me kembe per ta vizituar Sheshin me te madh ne bote(shaan se lise), muzeun me te madh ne bote(muzen e Luvrit),
				dhe shum e shum vende te bukura qe I ofron Parisi. Ne mbremje vone rreth ores 23:00 nisja per ne mbreterine e Monaco-Monte Carlo(Las Vegas i Europes)..</p>
				<p> Vendet me te vizituara ne Monaco jane: </p>
				 <?php
$vendet = array("Monte-Carlo Casino and Opera House"=>"1893", "Monaco Cathedral"=>"1875", "Prince's Palace"=>"1215", "Fort Antoine"=>"XVIII");
asort($vendet);


foreach($vendet as $x => $x_value) {
echo "<ul>";
    echo "<li>" . $x . " e ndertuar ne vitin " . $x_value . "</li>";
    
echo "</ul>";
}
echo "Monte-Carlo vizitohet nga perreth ";
$a=0;
$b =array(1,2);
$arr=array(&$a,&$b[0],&$b[1]);
$arr[0]++;
$arr[1]++;
$arr[2]++;
echo $a .  $b[0] . $b[1] ;
echo " mije turiste ne muaj.";

$a=1;
$b=&$a;
$c=$b;
$c=7;
$arr=array(1);
$a=&$arr[0];
$arr2=$arr;
$arr2[0]++;
echo $arr[0];
echo $arr2[0];
echo" vite me pare eshte bere rindertimi i Prince's Palace qe eshte nje nder pallatet me te bukura ne Europe.";
$a="Ne kete qytet vlen te veçohet edhe vizita ne Katedrale.";
$b=&$a;
unset($a);
echo $b;
echo var_dump($a);
?>
   <?php

    $red = "";
    $blue = "";
    $green = "";
    $gold = "";
    $silver = "";
    $purple = "";

    $hour = time() + 3600;

  
    if (isset($_POST['order']))
    {
        $color = $_POST['order'];
        $$color = " selected";
        setcookie("Free_cookies", $color, $hour);
    }
    
    else if(isset($_COOKIE['Free_cookies']))
    {
        $color = $_COOKIE['Free_cookies'];
        $$color = " selected";
    } 
  
    else
    {
        $color = "red";
        $red = " selected";
    }

?>

<form method='post' <?php echo "STYLE='background-color:".$color.";'";?> ><p id='txtorder'  >color: </p>
    <select name='order' id='order'>
        <option value="red" <?php echo $red; ?> >red</option>
        <option value="blue" <?php echo $blue; ?> >blue</option>
        <option value="green" <?php echo $green; ?> >green</option>
        <option value="gold" <?php echo $gold; ?> >gold</option>
        <option value="silver" <?php echo $silver; ?> >silver</option>
        <option value="purple" <?php echo $purple; ?> >purple</option>
    </select>
    <input type='submit' value='sort'/>
</form>
               
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
