<?php
$cookie_name = "a";
$cookie_value = "Maybe the best moment of your life will be on your next big adventure!";
setcookie($cookie_name, $cookie_value, time()+3600);

session_start();
                $_SESSION['variabla']='
                <?php
                function ruajtja()
                {
                	echo "Per me shum detaje,klikoni fotot poshte.";
                }
                ?>';

                eval('?>'.$_SESSION['variabla']);
				?>
<!DOCTYPE html>
<html lang="en">

<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
 
<style> 
 #flip {
    padding: 5px;
    text-align: center;
    background-color: g;
    border: solid 1px #c3c3c3;
	width:350px;
}


</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage</title>

    <link href="css/file1.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
	


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
                <a class="navbar-brand page-scroll" href="../index.php">Bon Voyage </a>
            </div>
        </div>
    </nav>

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="ce" > <img src="img/1.png"></div>
                <div class="carousel-caption">
                    <h2>Miresevini ne Eurotrip 2016</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" > <img src="img/2.png"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" > <img src="img/3.jpg"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
			
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Eurotrip 2016!
                </h1>
        </div>
           
                
                    <div class="panel-heading">
             
                   
                    <div class="panel-body">

                        <p>Edhe kete vite <cite>Bon Voyage</cite> do te organizoje nje shetitje neper europe. Shetitja do te ndodhe ne daten 8 prill deri me 20 prill.
						Kete vite parashikohen te vizitohen rreth 12 vende. Me posht perveq itinirarit do te mund te shihni edhe qytetet qe do vizitojme dhe sa do te 
						qendrojme ne secilin vend. <br> Cmimi per kete udhetime do te jete <?php $x=500; $y=95; echo $z=$x+$y; ?>€ ku perfshihen:<br>
        <?php

$arr = [1,2,3];
{
echo current($arr).".Transporti" . "<br>";
echo next ($arr).".Hotelet me mengjes" . "<br>";
echo next ($arr) . ".Sigurimi shendetsor ne udhetim" . "<br>";
}
?>
					
						<br>
						Nisja nga Prishtina:

						Budapest(2 nete), vizite Liqenit te Balatonit - Bratislave - Viene - Prage - Amsterdam(2 nete) - Bruksel - Paris - Nice - Milano- Monaco- Venecia - Prishtine.

						</p>
                      
                    </div>
                </div>
            
           
            
        </div>
            <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Itinerari i Euro Trip Maj 2016</h2>
            </div>
            <div class="col-md-6">
			
			<p><b>Eurotrip <?php
function foo1(&$var)
{
$var++;
echo $var;
}

function &bar(){
$a = 2015;
return $a;
}
foo1(bar());
?> perfshine keto vende:</b></p>
                <ul>
                   
                    <li>28.04.2016 nisja nga Prishtina ne ora 20:00 (Prishtine - Budapest).</li>
                    <li>29.04.2016 - Budapest(nata e pare).</li>
                    <li>30.04.2016 - Budapest(nata e dyte).</li>
                    <li>01.05.2016 - Prage.</li>
                    <li>02.05.2016 - Amsterdam(nata e pare).</li>
					<li>03.05.2016 - Amsterdam(nata e dyte).</li>
					<li>04.05.2016 - Pairs</li>
					<li>05.05.2016 - Vizite Monacos dhe qytetit te Nices </li>
					<li>06.05.2016 - Milano</li>
					<li>07.05.2016 - Vizite Venecias</li>
					<li>08.05.2016 - Mberritja ne Prishtine</li>
					<br>
					
					
	
					
                </ul>
				<?php
                
                ruajtja();
                ?>
				
                
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/4.jpg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Informacione Shtese</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item1.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/6.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item2.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/7.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item3.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/8.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item4.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/9.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item7.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/12.jpg" alt="">
                </a>
            </div>
			<div class="col-md-4 col-sm-6">
                <a href="portfolio-item5.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/10.jpg"alt="">
                </a>
            </div>
			<div class="col-md-4 col-sm-6">
                <a href="portfolio-item6.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/14.jpg" alt="">
                </a>
            </div>
			<div class="col-md-4 col-sm-6">
                <a href="portfolio-item8.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/13.jpg" alt="">
                </a>
            </div>
        </div>
       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                 Dokumentet e nevojshme per pjesemarrje ne Eurotrip.
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Dokumentet:</h4>
                    </div>
                    <div class="panel-body">
					<p>Keto dokumente nevojiten per te gjitha kategorite qe aplikojne ne ambasade:</p>
                        <ul>
						<li>1.Pasaporta valide; jo me pak se 6 muaj afat vlefshmerie. </li>
						<li>2. Dy fotografi per vize italiane( jo me te vjetra se 3 muaj).</li>
						<li>3.Sigurimin shendetsor ( sigurohet nga ne, vetem duhet ten a i dergoni kopjet e pasaportes ne e-mail). </li>
						<li>4.Llogarine bankare(qarkullimin bankar) 6 maujt e fundit(per student nese nuk e kane personale mund ta sjellin te prindit.</li>
						<li>5. Certifikaten e bashkesise familjare -Keto dokumente nevojiten per te gjitha kategorit qe aplikojne ne ambasad. </li>
						
						</ul>

                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> Dokumentet Shtese:</h4>
                    </div>
                    <div class="panel-body">
                        <p>A) Per te punesuarit nevojiten:</p>
						<ul>
						<li>1.Kontarta e punes.</li>
						<li>2.Vertetimi per shfrytezimin e pushimit vjetor.</li>
						<li>3.Vertetimin e ATK-se dhe trustit.</li>
				
						</ul>
						
						<p>B) Per persona te cilet kane Biznes:</p>
						<ul>
						<li>1.Çertifikata e Biznesit dhe Informata e Biznesit.</li>
						<li>2. Vertetimi i ATK-se dhe llogaria bankare e kompanise.</li>
						
						</ul>
						
						<p>C) Per lidhjet farefisnore (te martuarit apo vella e moter):</p>
						<ul>
						<li>1.Certifikata e te lindurve dhe certifikata e bashkesise familjare (per motra apo vellezer).</li>
						<li>2.Certifikata e kurorezimit (per çiftet.)</li>
				        </ul>
						
						<p>D) Per studente:</P>
						<ul>
						<li>1.Vertetimi nga fakulteti.</li>
						</ul>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Dokumentet e nevojshme per aplikim ne ambasaden Hungareze:</h4>
                    </div>
                    <div class="panel-body">
                        <?php
                        $myfile = fopen("KushtetperUdhetim.txt", "r") or die("Unable to open file!");
                        while(!feof($myfile)) {
                        echo fgets($myfile) . "<br>";
                        }
                        fclose($myfile);
                        ?>
						<p>- Nese keni pasur viza me heret, i sjellni kopjet. </p>
                      
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="well">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                   <a href="forma2.php"><button id="flip"><h1>Rezervo Tani !</h1></button> </a>

                </div>
            </div>
        </div>

        <hr>
		<div class="container">

       
        
        <footer>
          <?php include 'mapi.php';?>
        </footer>

    </div>
   
    <script src="js/jquery.js"></script>

    <script src="js/file1.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
