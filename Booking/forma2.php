<DOCTYPE html>
<html>
<head>
<title>Booking Online !</title>
<style>
.smart-green {
    margin-left:auto;
    margin-right:auto;
    max-width: 500px;
    background: #F8F8F8;
    padding: 30px 30px 20px 30px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.smart-green h1 {
    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
    padding: 20px 0px 20px 40px;
    display: block;
    margin: -30px -30px 10px -30px;
    color: #FFF;
    background: #9DC45F;
    text-shadow: 1px 1px 1px #949494;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-bottom:1px solid #89AF4C;
}
.smart-green h1>span {
    display: block;
    font-size: 11px;
    color: #FFF;
}
.smart-green label {
    display: block;
    margin: 0px 0px 5px;
}
.smart-green label>span {
    float: left;
    margin-top: 10px;
    color: #5E5E5E;
}
.smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
    color: #555;
    height: 30px;
    line-height:15px;
    width: 100%;
    padding: 0px 0px 0px 10px;
    margin-top: 2px;
    border: 1px solid #E5E5E5;
    background: #FBFBFB;
    outline: 0;
    -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    font: normal 14px/14px Arial, Helvetica, sans-serif;
}
.smart-green textarea{
    height:100px;
    padding-top: 10px;
}
.smart-green select {
    background: url('down-arrow.png') no-repeat right, -moz-linear-gradient(top, #FBFBFB 0%, #E9E9E9 100%);
    background: url('down-arrow.png') no-repeat right, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FBFBFB), color-stop(100%,#E9E9E9));
   appearance:none;
    -webkit-appearance:none; 
   -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width:100%;
    height:30px;
}
.smart-green .button {
    background-color: #9DC45F;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-border-radius: 5px;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    text-shadow: 1px 1px 1px #949494;
}
.smart-green .button:hover {
    background-color:#80A24A;
}
.error {color: #FF0000;}
</style>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "bankat.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<?php
$error_mesazhi="";
$emri="";
$mbiemri="";
$nrp="";
$nrk="";
$emrib="";
$nrtel="";
$email="";
$adresa="";
if(isset($_POST['submit'])){
	
include("connect.php");
include("secure_data.php");
	
	
$emri= secure_data($link, $_POST['emri']);
$mbiemri=secure_data($link,$_POST['mbiemri']);
$nrp=secure_data($link,$_POST['nrp']);
$nrk=secure_data($link,$_POST['nrk']);
$emrib=secure_data($link, $_POST['emrib']);
$adresa=secure_data($link, $_POST['adresa']);
$nrtel=secure_data($link, $_POST['nrtel']);
$email=secure_data($link, $_POST['email']);
if(empty($emri) || empty($mbiemri) || empty($nrp)|| empty($nrk) || empty($emrib) || empty($nrtel)|| empty($email) || empty($adresa))
{
	
	$error_mesazhi=" * Keni lene ndonje fushe pa plotesuar";
}
else {$nrtel=secure_data($link, $_POST['nrtel']);
if (!preg_match("/([0-9]{3}-)?[0-9]{3}-[0-9]{3}$/i", $nrtel))
	{
		$error_mesazhi="Ju lutem shkruani numrin ne formen valide";
	}
	else{ $email=secure_data($link, $_POST['email']);
if (!preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$email))
{
	$error_mesazhi="Ju lutem shkruani email ne forme valide";
}
else{
 
	
$q = "SELECT email FROM klientet1 WHERE email='$email'";
$result=mysqli_query($link,$q) or die (mysqli_error($link));
if(mysqli_num_rows($result)>0){
	$error_mesazhi="Me vjen keq, kjo email ekziston ne list";
}else{
$q = "INSERT INTO klientet1 (emri,mbiemri,nrpersonal,nrkarteles,emribankes,nrtel,email,adresa,data_reg) VALUES ('$emri','$mbiemri','$nrp','$nrk','$emrib','$nrtel','$email','$adresa',NOW())";
$result=mysqli_query($link,$q) or die (mysqli_error($link));
 if($result==1)
 {
	 
	 echo "<p><b>Keto te dhena keni shenuar:</b></p>";
     echo $emri . "<br>";
     echo $mbiemri . "<br>";
     echo $nrp . "<br>";
     echo $nrk . "<br>";
     echo $emrib . "<br>";
     echo $nrtel . "<br>";
     echo $email. "<br>";
     echo $adresa . "<br>";
	 echo"Rezervimi u pranua";
 }
 else{
	 echo"rezervimi nuk u krye me sukses";
 }
 }
}
}
 
 
}
mysqli_close($link);
}
?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="smart-green">
 <h1>Ju lutem mbushni the dhenat 
        <span>* tregon se fusha duhet te plotesohet patjeter.</span>
    </h1>
    <label>
<div>
<label for="emri"> Emri*: </label>
<input name="emri" type="text" value="<?php echo stripslashes($emri); ?>" /> <br>
</div>
<div>
<label for="mbiemri"> Mbiemri*: </label>
<input name="mbiemri" type="text" value="<?php echo stripslashes ($mbiemri); ?>" /> 
</div>
<div>
<label for="nrp"> Numri Personal*: </label>
<input name="nrp" type="text" value="<?php echo stripslashes($nrp); ?>" />
</div>
<div>
<label for="nrk"> Numri Karteles*: </label>
<input name="nrk" type="text" value="<?php echo stripslashes($nrk); ?>" />
</div>
<div>
<label for="emrib"> Emri Bankes*: </label>
<input name="emrib" type="text" onkeyup="showHint(this.value)" autocomplete="off"  value="<?php echo stripslashes( $emrib); ?>" />
<span id="txtHint"></span>
</div>
<div>
<label for="nrtel"> Numri Telefonit*: </label>
<input name="nrtel" type="text" value="<?php echo stripslashes($nrtel); ?>" />
</div>
<div>
<label for="email"> Email*: </label>
<input name="email" type="text" value="<?php echo stripslashes ($email); ?>" />
</div>
<div>
<label for="adresa"> Adresa*: </label>
<input name="adresa" type="text" value="<?php echo stripslashes ($adresa); ?>" />
</div>
<input name="submit" type="submit" value="Submit" />
</form>
<p><span class="error"><?php echo $error_mesazhi;?></span></p>
</body>
</html>