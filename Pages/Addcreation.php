<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="Stylecss.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body>
	
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<a href="Main.html"><img src="../Images/crown-concept-logo-design-template-260nw-1939046308.jpg" width="100px"></a>
		</div>
		<nav>
		  <ul>
			  <a href="Main.html"><img src="../Images/cart.png" width="30px" height="30px"></a>
			<li><a href="Main.html">Account|Home</a></li>
			<li><a href="MobilePhones.php">Mobile Phones</a></li>
			<li><a href="">cart</a></li>
			<li><a href="Aboutus.html">About us</a></li>
			
		  </ul>
		</nav>
	</div>
</div>
		<br>
		<br>
		<table width="371" height="161" border="0" align="center">
		  <td width="151"><tbody>
		    <tr>
		      <td colspan="2"><form action="Addcreation.php" method="post" enctype="multipart/form-data">
	          <p>&nbsp;</p>
	          <p><div align="center"><img src="../Images/crown-concept-logo-design-template-260nw-1939046308.jpg" width="200" height="180" alt=""/></p>
	           <h1>Add Products</h1></td>
	        </tr>
		    <tr>
		      <td colspan="2">&nbsp;</td>
	        </tr>
		    <tr>
		      <td>Name</td>
		      <td width="210"><input type="text" name="txtName" id="txtName"></td>
	        </tr>
		    <tr>
		      <td>Price</td>
		      <td><input type="text" name="txtPrice" id="txtPrice"></td>
	        </tr>
		    <tr>
		      <td>Quantity</td>
		      <td><input type="text" name="txtQuantity" id="txtQuantity"></td>
	        </tr>
		    <tr>
		      <td>Images</td>
		      <td><input type="file" name="fileImage" id="fileImage" /></td>
	        </tr>
			   
			  <?php
			  
			  if (isset($_POST["btnSubmit"])) {
				   $Name = $_POST["txtName"];
				   $Price = $_POST["txtPrice"];
				   $Quantity = $_POST["txtQuantity"];
				  
				   $image = "uploads/" . basename($_FILES["fileImage"]["name"]);
                   move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);
				  
				  $con = mysqli_connect("localhost", "root", "", "crownm");
				  if (!$con) {
                      die("Sorry,Cannot upload the file, choose another file");
                    }
				  
			
			     //DB code
			     $sql= "INSERT INTO `products` (`productsID`, `name`, `price`, `Quantity`, `ImagePath`) VALUES (NULL, '".$Name."', '".$Price."', '".$Quantity."', '".$image."');";
				  
					if (mysqli_query($con, $sql)) {
                      echo "Product uploaded Successfully!";
                    } else 
                      echo 'Oops!!! Something went wrong';
                  }
				 
			  
			  ?>
			  
			
		
			  
		    <tr>
		      <td colspan="2"><input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add" /></td>
	        </tr>
	      </tbody>
</table>
	
	
	
	
</body>
</html>