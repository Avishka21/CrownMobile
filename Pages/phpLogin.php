<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
	<?php
			if(isset($_POST['submit']))
			{
				include 'Regi1.php';
				
				 $Email ='';
				 $Password ='';
			
				
				
			
			    $Email = $_POST["txtEmail"];
				$Password = $_POST["txtPassword"];
				
				
				
                 $conn = OpenCon();
				
				if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);}
				
				$sql = "SELECT id FROM registration WHERE Email = '$Email' and Password = '$Password'";
                $result = mysqli_query( $conn,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['active'];
		        $count = mysqli_num_rows($result);		
				
				if($count == 1) {
					
                header("Location:MobilePhones.php");
                }else{
					
					echo '<script>
					if(confirm("Your password or Email Address Worng")){
                       window.open("http://localhost/CrownMob/Pages/Loginpage.php");
						
                     }
					
					</script>';
					

				}
                               $conn->close();
	
				
			}
	
	?>
</html>