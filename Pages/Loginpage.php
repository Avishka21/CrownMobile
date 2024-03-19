
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
   <form action="phpLogin.php" method="post">
	
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
        <br><br>
<!-----------------------------Login------------------------------------->
<table width="330" height="131" border="0" align="center">
  <tbody>
    <tr>
	 
      <td><h2 align="center">Login Here </h2></td>
    </tr>
    <tr>
      <td><p>Email</p>
      <p>
		   <input type="text" name="txtEmail" id="txtEmail" placeholder="Enter UserName or  Email Address">
      </p></td>
    </tr>
    <tr>
      <td><p>Password</p>
      <p>
        <input type="text" name="txtPassword" id="txtPassword" placeholder="***********" formmethod="get">
		 
      </p>
		   <p class="Login-text" align="center"> Don't Have an account? <a href="Register.php" class="Login-text-1">Register Here</a></p>
       </td>
    </tr>
    <tr>
		 
      <td><p>
		  <button type="submit" id="submit" name="submit"> Login</button>
      </p></td>
    </tr>
  </tbody>
</table>
	
	</body>
</html>