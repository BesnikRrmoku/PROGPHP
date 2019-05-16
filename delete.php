 <?php  
 $connect = mysqli_connect("localhost", "root", "", "projektiphp");  
 $sql = "DELETE FROM admini1 WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  