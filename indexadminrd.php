<?php
$conn = mysqli_connect('localhost','root','','projektiphp');
					if($conn->connect_error){die("Gabim ne lidhje me bazen e te dhenave: " .$conn->connect_error );}
					
					$result = $conn->query("SELECT UserName FROM admini1");
					if($result->num_rows>0){
							while($row = $result->fetch_assoc()){echo $row['UserName'] . '<br>';}
					}
					
				?>