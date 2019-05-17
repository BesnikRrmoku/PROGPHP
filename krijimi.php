<?php 

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
	die('Could now connect' .mysqli_connect_error());
}
echo "Connected successfully";
$sql='Create Database projektiphp';
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
	die('could not create database:'.mysqli_connect_error());
}
echo "Database projektiphp created successfully\n";


$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db = 'projektiphp';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn)
{
	die('Could now connect' .mysqli_connect_error());
}
$sql='CREATE TABLE admini(

UserNameID integer,
UserName varchar(40),
Password varchar(40),
PRIMARY KEY (UserNameID)
)';
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
	die('could not create table:'.mysqli_connect_error());
}
echo "Table admini created successfully\n";




$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'projektiphp';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

$sql ="INSERT INTO admini(UserName,Password) 
VALUES ('Drinqe','admin')";
$retval = mysqli_query($conn,$sql);
if(!$retval)
{
die('Could not enter data:' . mysqli_connect_error());
}
echo "Te dhenat u mbushen";
mysqli_close($conn);
?>







