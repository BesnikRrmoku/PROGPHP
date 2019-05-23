<?php 
define ('DB_NAME','projektiphp');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($link)
{
echo "Shtimi eshte kryer me sukses";
}
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];





$q = "INSERT INTO admini (UserName,Password) VALUES ('$UserName','$Password')";
if(!mysqli_query($link,$q))
{
echo "errorr";
}
mysqli_close($link);

?>