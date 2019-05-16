 <?php  
 $connect = mysqli_connect("localhost", "root", "", "projektiphp");  
 $sql = "INSERT INTO admini1(UserName, Password) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  