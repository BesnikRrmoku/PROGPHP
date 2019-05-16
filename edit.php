 <?php  
 $connect = mysqli_connect("localhost", "root", "", "projektiphp");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE admini1 SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Te dhenat u azhuruan';  
 }  
 else{
	 echo 'Gabim gjate ekzekutimit te azhurimit';  
 }
 ?>  