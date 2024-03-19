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
	
		<script>
function myFunction( ) {
  alert("Oder succsessful!");
}
</script>
	
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="../Images/crown-concept-logo-design-template-260nw-1939046308.jpg" width="100px">
		</div>
		<nav>
		  <ul>
			 <a href="Main.html"><img src="../Images/cart.png" width="30px" height="30px"></a>
			<li><a href="Main.html">Account|Home</a></li>
			<li><a href="MobilePhones.php">Mobile Phones</a></li>
			<li><a href="Cart.php">cart</a></li>
			<li><a href="Aboutus.html">About us</a></li>
			
			</ul>
		</nav>
	</div>
	  </div>
	    </div>

<!-----------------------------Cart products------------------------------------->
<table width="442" height="578" border="0" align="center">
  <tbody>
    <tr>
     <td colspan="2"><form action="Cart.php" method="post" enctype="multipart/form-data">
    </tr>
		 <h1>Billing Details</h1>
    <tr>
      <td width="126">Full Name</td>
      <td width="306"><label for="textfield"></label>
      <input type="text" name="txtName" id="txtName"></td>
    </tr>
    <tr>
      <td>Product Name</td>
      <td><input type="text" name="txtProduct" id="txtProduct"></td>
    </tr>
    <tr>
      <td>P-serial number</td>
      <td><input type="text" name="txtSerial" id="txtSerial" placeholder="Add product serial number"></td>
    </tr>
    <tr>
      <td>Street address</td>
      <td><input type="text" name="txtAddress" id="txtAddress"></td>
    </tr>
    <tr>
      <td>Postcode/zip</td>
      <td><input type="text" name="txtZip" id="txtZip"></td>
    </tr>
    <tr>
      <td>Phone number</td>
      <td><input type="text" name="txtNumber" id="txtNumber"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtEmail" id="txtEmail"></td>
    </tr>
		 
	     <?php
			  
			  if (isset($_POST["btnSubmit"])) {
				   $Name = $_POST["txtName"];
				   $Product = $_POST["txtProduct"];
				   $Serial = $_POST["txtSerial"];
				   $Address = $_POST["txtAddress"];
				   $Zip= $_POST["txtZip"];
				   $Number = $_POST["txtNumber"];
				   $Email = $_POST["txtEmail"];
				 
				  
				  $con = mysqli_connect("localhost", "root", "", "crownm");
				  if (!$con) {
                      die("Sorry");
                    }
				  
			
			      //DB code
				 $sql= "INSERT INTO `billing` (`id`, `FullName`, `ProductName`, `Serial`, `Address`, `Zip`, `PhoneNumber`, `Email`) VALUES (NULL, '".$Name."', '".$Product."', '".$Serial."', '".$Address."', '".$Zip."', '".$Number."', '".$Email."');";
				  
					if (mysqli_query($con, $sql)) {
                      echo  "Billing Details added, Have a Good day!";
                    } else 
                      echo 'Oops!!! Something went wrong';
                  }
				 
			  
			  ?>
			  
	  
    <tr>
  <td colspan="2">&nbsp;</td></td>
    </tr>
  </tbody>
</table>

	

<br><br>
<br>
<td colspan="2"><input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Place order" 
<br>
<br><br>
<!----------------------footer--------------------->
<div class="footer">
		  <div class="container">
</p>
		<div class="row">
			<div class="footer-col-1">
			<h3><b> Download Our App</b></h3>
			<p>Download App for Android and ios Mobile phone.</p>
			<div class="app-logo">
			<img src="../Images/app-store.png">
			<img src="../Images/play-store.png">
			</div>
		  </div>
			<div class="footer-col-2">
			<h3>CONTACT US</h3>
			<ul>
			<li>Colombo 07</li>
			<br>
			<li>011-2864495</li>
			<br>
			<li>CrownMobile@gmail.com</li>
			</ul>
			</div>
			<div class="footer-col-3">
			<h3>Follow us</h3>
			<ul>
				<li>Facebook</li>
				<li>Instagram</li>
				<li>TikTok</li>
			  </ul>
			</div>
			<div class="footer-col-4 footer-box">
			<h3>Subscribe Newsalert</h3>
			<input type="email" id="email" class="form-control" placeholder="Email Address">
			<button type="button" class="btn-submit" onClick="validateEmail()">Subscribe</button>
			</div>
</div>
		<hr>
		<p class ="copyright"><b>Webiste created by IT20760342</b></p>
    
		
			
	 
</body>
	
	
</html>
  