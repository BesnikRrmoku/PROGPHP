<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bon Voyage,Paris</title>

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
                <h1 class="page-header">Paris
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Paris</li>
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
                            <img class="img-responsive" src="img/pr1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/pr2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/pr3.jpg" alt="">
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
                <h3>03.05.2016 </h3>
                <p> Amsterdam(nata e dyte) Pas ngrenjes se mengjesit, do te mund te vizitohen pjeset te tjera te Amsterdamit te cilat nuk keni mundur ti shihni gjate dites se pare, dhe pasdite nisja per ta vizituar kryeqytetin e Europes - Brukselin, ku do te vizitohet Parlamenti Europian, 
				Selia e NATOS, dhe pjese te tjera te ketij qyteti, per te vazhduar me pas rrugen per ne Paris.
				Ne Paris arrihet ne mbremje vone, ku do te vendosemi ne hotel,mbremje e lire.</p>

			   <html>
<head>
<script>
function showCD(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","vendet.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
Vendet qe ne do te vizitojme:
<select name="cds" onchange="showCD(this.value)">
<option value="">Zgjidhni vendin:</option>
<option value="Eiffel Tower">Eiffel Tower</option>
<option value="Notre Dame Cathedral ">Notre Dame Cathedral </option>
<option value="Louvre Museum ">Louvre Museum </option>
<option value="Champs Elysées">Champs Elysées</option>
</select>
</form>
<div id="txtHint"><b>Informatat per vendin qe zgjedhet do te shfaqen ketu...</b></div>

</body>
</html>
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