<?php 
define ('DB_NAME','projektiphp');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($link)
{
	$emri = $_POST['emri'];
$mbiemri =$_POST['mbiemri'];
$nrp = $_POST['numripersonal'];
$nrk = $_POST['numrikarteles'];
$emrib= $_POST['emribankes'];
$nrtel = $_POST['numritelefonit'];
$email= $_POST['email'];
$adresa=$_POST['adresa'];
	
	$q = "INSERT INTO klientet1 (emri,mbiemri,nrpersonal,nrkarteles,emribankes,nrtel,email,adresa,data_reg) VALUES ('$emri','$mbiemri','$nrp','$nrk','$emrib','$nrtel','$email','$adresa',NOW())";

	
echo "Te dhenat u futen ne databaze !";
}






if(!mysqli_query($link,$q))
{
echo "errorr";
}


?>