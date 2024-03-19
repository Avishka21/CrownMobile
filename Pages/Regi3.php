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
				$FullName ='';
				$NIC ='';
				$PhoneNumber =0;
				$Email ='';
				$Password ='';
			

				$FullName = $_POST["txtFullName"];
				$NIC = $_POST["txtNIC"];
				$PhoneNumber = $_POST["txtNumber"];
				$Email = $_POST["txtEmail"];
				$Password = $_POST["txtPassword"];
	
			
                 $conn = OpenCon();
				
				if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}
 
               $sql = "INSERT INTO registration (FullName, NIC, PhoneNumber, Email, Password)
               VALUES ('$FullName', '$NIC' ,'$PhoneNumber','$Email','$Password')";

                 if ($conn->query($sql) === TRUE) {
                          header("Location:Loginpage.php");
                                  } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                         }

                              $conn->close();
	
				
				
			}
	
	?>
</html>