
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="Stylecss.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
	
	<!----------------News alert-------------->
	
	<script type="text/javascript">
		function validateEmail()
		{
			var email=document.getElementById("email").value;
			
			var at=email.indexOf("@");
			var dt=email.lastIndexOf(".");
			var len=email.length;
			if ((at<2) ||(dt-at<2)||(len-dt<2))
				{
					alert("Please enter a valid email address");
					return false;
				}
			alert("You have succesfully subscribed!");
			return true;
		}
	</script>
	
	
</head>

<body>
	
	<script>
function myFunction( ) {
  alert("register is completed!");
}
</script>
	
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
		<div class="row">
			<h1> Welcome! To Crown Mobiles</h1>
		</div>
	    </div>
	
<p>&nbsp; </p>
	
<table width="459" height="317" border="0" align="center">
  <tbody>
    <tr>
		<form action="Regi3.php" method="post">
      <td colspan="2"><h2 align="center">Register Here</h2></td>
    </tr>
    <tr>
		<div class="registerbox">
      <td width="142">Full Name</td>
      <td width="307"><input type="text" name="txtFullName" id="txtFullName"></td>
    </tr>
    <tr>
      <td>NIC</td>
      <td><input type="text" name="txtNIC" id="txtNIC"></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="txtNumber" id="txtNumber" max="10"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="txtEmail" id="txtEmail" placeholder="UserName or Email"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtPassword" id="txtPassword"></td>
    </tr>
    <tr>
      <td height="64" colspan="2">
		  <p>
			  <p class="Login-text" align="center"> Have an account? <a href="Loginpage.php" class="Login-text-1">Login Here</a></p>
		    </div>
		  
		 
		  </p>
        <p>
          <button onclick="myFunction()"id="submit" name="submit"> Register</button>  
		
        </p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
		<p><br>
		  <br>
		  </div>
		  <!---------------------Mobile section---------------------------->
		  
		  
		  
		  
		  
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
  