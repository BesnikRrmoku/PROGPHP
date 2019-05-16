<!DOCTYPE html>



<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="tabelajs.js"></script>
<script> 


$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("slow");
    });
});
</script>
 
<script type="text/javascript">
		$(document).ready(function(){
			$('#insert').click(function(event){
				event.preventDefault();
				$.ajax({
				url : "shtoadmin.php",
				method: "post",
				data: $('form').serialize(),
				dataType: "text",
				success: function(strMessage){
					$('#message1).text(strMessage)
				}
			})
			})
				
		})
</script>
 
 <script type="text/javascript" src="jquery.js"></script>
 
<style> 

#f1 
{
 margin:0 auto;
 width:250px;
 }
#panel, #flip, #panel1, #flip1, #panel2, #flip2, #panel3, #flip3, #panel4, #flip4, #panel5, #flip5, #panel6, #flip6 {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel, #panel1 , #panel2 , #panel3, #panel4, #panel5, #panel6 {
    padding: 50px;
    display: none;
	    text-align: center;
}
<?php
session_start();
?>
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Bon Voyage,Admin</title>

    
    <link href="css/file1.css" rel="stylesheet">

    <link href="css/agency.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    

</head>

<body id="page-top" class="index "> 

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bon Voyage - Admin Panel</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Klientet</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Admin users</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Miresevini ne panelin e Administartorit!</div>
                <div class="intro-heading"></div>
                <a href="#services" class="page-scroll btn btn-xl">Shiko/shto klientet</a>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Klientet</h2>
                    <h3 class="section-subheading text-muted">Ne kete seksion, ju si administartor i web-it tuaj mund te shtoni, fshini, ndryshoni apo edhe vetem te lexoni te dhena mbi klientet tuaj.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div id="flip"><h1>Shiko te gjithe klientet</h1></div> <div id="panel">
				
				
				
				<?php
					define('DB_HOSTI', 'localhost'); 
					define('DB_NAMEI', 'projektiphp');
					define('DB_USERI','root'); 
					define('DB_PASSWORDI','');
					$con=mysqli_connect(DB_HOSTI,DB_USERI,DB_PASSWORDI,DB_NAMEI);
					$db=mysqli_select_db($con,DB_NAMEI);
					
					$sql = mysqli_query($con, "SELECT * FROM klientet1 ORDER BY id ASC");
					
					$id = 'id';
					$emri = 'emri';
					$mbiemri = 'mbiemri';
					$nrpersonal = 'nrpersonal';
					$nrkarteles = 'nrkarteles';
					$emribankes = 'emribankes';
					$nrtel = 'nrtel';
					$email = 'email';
					while ($rows = mysqli_fetch_assoc($sql))
						{
							
						
					
					echo 'ID: ' . $rows[$id] . '<br/>' . 'Emri: ' . $rows[$emri] . '<br/>' . 'Mbiemri: ' . $rows[$mbiemri] 
							. '<br/>' . 'Nr. Personal: ' . $rows[$nrpersonal] . 
							'<br/>' . 'Nr Karteles: ' . $rows[$nrkarteles] . '<br/>' . 'Emri i Bankes: ' . $rows[$emribankes] 
							. '<br/>' . 'Telefoni: ' . $rows[$nrtel] . '<br/>' . 'E-Mail: ' . $rows[$email] . "<br><br>";
						}
					
					?>
				
				

				</div><br>
				<div id="flip1" ><h1>Regjistro klient te rinj</h1></div><div id="panel1" >
				
						<form action ="boook2.php" name="Book Form" id="f1";  method ="post">
							<table>
								<tr><td><label style="text"> Emri: </label></td>
									<td><input type="text" name="emri" /> <br></td></tr>
								<tr><td><label> Mbiemri: </label> </td> 
									<td><input type="text" name="mbiemri" />  <br></td></tr>
								<tr><td><label> Numri Personal: </label> </td>
									<td><input type="text" name="numripersonal" />  <br></td></tr>
								<tr><td><label> Numri Karteles: </label> </td>
									<td><input type="text" name="numrikarteles" />  <br></td></tr>
								<tr><td><label> Emri Bankes: </label> </td>
									<td><input type="text" name="emribankes" />  <br></td></tr>
								<tr><td><label> Numri Telefonit: </label></td>
									<td><input type="text" name="numritelefonit" />  <br></td></tr>
								<tr><td><label> Email: </label></td>
									<td><input type="text" name="email" />  <br></td></tr>
								<tr><td><label> Adresa: </label></td>
									<td><input type="text" name="adresa" />  <br></td></tr>
								<tr ><td > </td> <td><br><br><input type ="submit" style="font-size:30px;" value ="Regjistro"/></td></tr>
							</table>
						</form>
				
				</div><br>
				<div id="flip3"><h1>Modifiko/Fshij te dhenat</h1></div>
					<div id="panel3">
					
						<?php

							$con1=mysqli_connect(DB_HOSTI,DB_USERI,DB_PASSWORDI,DB_NAMEI);
							
							
							if(isset($_POST['update1'])){
								$updatequery = "UPDATE klientet1 SET id='$_POST[id]', 
																	emri='$_POST[emri]', 
																	mbiemri='$_POST[mbiemri]', 
																	nrpersonal='$_POST[nrpersonal]',
																	nrkarteles='$_POST[nrkarteles]',
																	emribankes='$_POST[emribankes]',
																	nrtel='$_POST[nrtel]',
																	email='$_POST[email]',
																	adresa='$_POST[adresa]',
																	data_reg='$_POST[data_reg]' 
																	WHERE id='$_POST[hidden]'";
								mysqli_query($con, $updatequery);
								};
								
							if(isset($_POST['delete1'])){
								$updatequery = "DELETE FROM klientet1 WHERE id='$_POST[id]'";
								mysqli_query($con1, $updatequery);
								};
						
							
							
							
							$sql = "SELECT * FROM klientet1";
							$tedhenat = mysqli_query($con1, $sql);
							echo "<table border=1>
									<tr>
									<th>ID</th>
									<th>Emri</th>
									<th>Mbiemri</th>
									<th>Nr Personal</th>
									<th>Nr Karteles</th>
									<th>Emri Bankes</th>
									<th>Nr Telefonit</th>
									<th>Email</th>
									<th>Adresa</th>
									<th>Data</th>
									</tr>";
									
							while($record = mysqli_fetch_array($tedhenat)){
								echo "<form action=indexadmin.php method=post>";
								echo "<tr>";
								echo "<td>" . "<input type=text style=width:30px name=id value=" . $record['id'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=emri value=" . $record['emri'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=mbiemri value=" . $record['mbiemri'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=nrpersonal value=" . $record['nrpersonal'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=nrkarteles value=" . $record['nrkarteles'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=emribankes value=" . $record['emribankes'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=nrtel value=" . $record['nrtel'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=email value=" . $record['email'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=adresa value=" . $record['adresa'] . "></td>";
								echo "<td>" . "<input type=text style=width:105px name=data_reg value=" . $record['data_reg'] . "></td>";
								echo "<td>" . "<input type=hidden name=hidden value=" . $record['id'] . "></td>";
								echo "<td>" . "<input type=submit name=update1 value='Modifiko Te Dhenat'" . "></td>";
									echo "<td>" . "<input type=submit name=delete1 value='Fshij Te Dhenat'" . "></td>";
								echo "</form>";
									}
									
							echo "</table>";
										
					

					?>
					
					</div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Administratoret</h2>
					<h3 class="section-subheading text-muted">Ne kete seksion, ju si administartor i web-it tuaj mund te shtoni, fshini, ndryshoni apo edhe vetem te lexoni te dhena mbi administratoret e faqes.</h3>
					<br><br>
                </div>
            </div>
            <div class="row">
                
                
                <div class="row text-center">
                <div id="flip4"><h1>Shiko te gjithe Administartoret</h1></div> <div id="panel4">

					</div><br>
					<script type="text/javascript">
						$(document).ready(function(){
							setInterval(function(){							
							$('#panel4').load('indexadminrd.php')}, 100);
						});
					</script>
				
					<!--
					$con=mysqli_connect(DB_HOSTI,DB_USERI,DB_PASSWORDI,DB_NAMEI);
					$db=mysqli_select_db($con,DB_NAMEI);
					
					$sql = mysqli_query($con, "SELECT * FROM admini ORDER BY UserNameID ASC");
					
					$UserNameID = 'UserNameID';
					$UserName = 'UserName';
					$Password='Password';
					
					while ($rows = mysqli_fetch_assoc($sql))
						{
							
						
					
					echo 'UserNameId: ' . $rows[$UserNameID] . '<br/>' . 'UserName: ' . $rows[$UserName] 
							. '<br/>' . 'Password: ' . $rows[$Password] . 
							 "<br><br>";
						}
				-->
				
				
				<div id="flip5" ><h1>Regjistro administator te ri</h1></div><div id="panel5" >
						
						
						<form id="myForm" action="userInfo.php" method="post">
						<table><tr><td>Username: </td><td><input type="text" id="u1" name="name" /></td></tr><br/>
						<tr><td>Password: </td><td><input type="text" id="u2" name="age" /></td></tr><br/>
						<tr><td colspan="2"><button id="sub" type="submit">Shto Admin</button></td></tr>
						</table>
						</form>
						
						<p id="result"></p>
						<script src="jquery.js" type="text/javascript"></script>
						<script src="my_script.js" type="text/javascript"></script>
						<!--
						<form id="formaperinsert" method ="post">
							<table>
								
								<tr><td><label> UserName: </label> </td> 
									<td><input type="text" name="UserName" id="UserName" />  <br></td></tr>
								<tr><td><label> Password: </label> </td>
									<td><input type="text" name="Password" id="Password" />  <br></td></tr>
								<tr ><td > </td> <td><br><br><input type ="submit" name="insert" id="insert" style="font-size:30px;" value ="Regjistro"/></td></tr>
							</table>
							
							
						</form>
				-->
				</div><br>
				
				<div id="flip6"><h1>Modifiko/fshij administatoret</h1></div>
					<div id="panel6">
					
					
					<div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
					
					<!--			
						<?php

							
							if(!$con){echo "cannot connect";}

							
							
							if(isset($_POST['update'])){
								

								$updatequery = "UPDATE admini SET UserNameID='$_POST[UserNameID]', UserName='$_POST[UserName]', Password='$_POST[Password]' WHERE UserNameID='$_POST[hidden]'";
								mysqli_query($con, $updatequery);
							
							
							};
								if(isset($_POST['delete'])){
								$updatequery = "DELETE FROM admini WHERE UserNameID='$_POST[UserNameID]'";
								mysqli_query($con, $updatequery);
							
							};
							
							
							
							$sql = "SELECT * FROM admini";
							$tedhenat = mysqli_query($con, $sql);
							echo "<table border=1>
									<tr>
									<th>UserNameID</th>
									<th>UserName</th>
									<th>Password</th>
									</tr>";
									
							while($record = mysqli_fetch_array($tedhenat)){
								echo "<form action=indexadmin.php id=f1 method=post>";
								echo "<tr>";
								echo "<td>" . "<input type=text style=width:100px name=UserNameID value=" . $record['UserNameID'] . "></td>";
								echo "<td>" . "<input type=text style=width:110px name=UserName value=" . $record['UserName'] . "></td>";
								echo "<td>" . "<input type=text style=width:110px name=Password value=" . $record['Password'] . "></td>";
								echo "<td>" . "<input type=hidden name=hidden value=" . $record['UserNameID'] . "></td>";
								echo "<td>" . "<input type=submit name=update value=update" . "></td>";
								echo "<td>" . "<input type=submit name=delete value=delete" . "></td>";
								echo "</form>";
									}
									
							echo "</table>";
										
					?>
					
					-->
					</div>
            </div>
                
                
              
            </div>
        </div>
    </section>

    
    

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
				<?php include('error.php');?>

            <span class="copyright"> 
 </span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/BonVoyage_16 " target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=100012172565469" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div> 
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li> <?php  echo"Faqja jone eshte vizituar ";
echo  $_SESSION['numeruesi'].  " here.";?> </li>
						<li><a href="logout.php">Log out</a></li>
						
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  
    </div>

   
    <script src="js/jquery.js"></script>

    
    <script src="js/file1.js"></script>

   
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    
    <script src="js/file2.js"></script>
    <script src="js/contact_me.js"></script>

    
    <script src="js/agency.js"></script>

</body>

</html>



<script>
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.first_name', function(){  
           var id = $(this).data("id1");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "first_name");  
      });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      
	  
	  
	  $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>  