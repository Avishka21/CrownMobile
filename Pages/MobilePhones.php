<?php session_start(); ?>
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
			alert("You have succesfully subscribed!!");
			return true;
		}
	</script>
	
	
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
			<li><a href="Cart.php">cart</a></li>
			<li><a href="Aboutus.html">About us</a></li>
			
			</ul>
		</nav>
	</div>
		<div class="row">
			<h1> Welcome! To Crown Mobiles</h1>
		</div>
	    </div>
		<br>
		<br>
	
<!---------------------Mobile section---------------------------->

	<div class="small-container">
		
		<h2 class="ftitle">All products</h2>
		<div class ="row">
		   <div class="col-4">
			   <img src="../Images/note20.jpg">
			   <h4 align="center">Samsung Galaxy Note </h4>
			   <h5>S-101</h5>
			   <p align="center">Rs.155,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			               
		   </div>
		   <div class="col-4">
			   <img src="../Images/xiaomi_redmi_note10_002.png">
			   <h4 align="center">redmi note 10</h4>
			   <h5>S-102</h5>
			   <p align="center">Rs.42,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			<div class="col-4">
			   <img src="../Images/apple watch series 4.jpg">
			   <h4 align="center">Apple watch series 4</h4>
			   <h5>S-103</h5>
			   <p align="center">Rs.92,450.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			<div class="col-4">
			   <img src="../Images/galaxys21.jpg">
			   <h4 align="center">Samsung Galaxy s21</h4>
			   <h5>S-104</h5>
			   <p align="center">Rs.168,390.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/185328-300x300.jpg">
			   <h4 align="center">iphone 11 128GB</h4>
			   <h5>S-105</h5>
			   <p align="center">Rs.145,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/iphone-11-pro-512.png">
			   <h4 align="center">iphone 11 pro 512GB</h4>
			   <h5>S-106</h5>
			   <p align="center">Rs.255,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/iphone-12-pro-256.jpg">
			   <h4 align="center">iphone 12 pro 256GB</h4>
			   <h5>S-107</h5>
			   <p align="center">Rs.269,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/iPhone12mini-Blue-1-e1609148876185.jpg">
			   <h4 align="center">iphone 12 Mini 12GB</h4>
			   <h5>S-108</h5>
			   <p align="center">Rs.168,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/xiaomipocom128gb.jpg">
			   <h4 align="center">Xiaomi poco 128GB</h4>
			   <h5>S-109</h5>
			   <p align="center">Rs.32,500.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/SMG_SMG-SM-S21U-B-01-300x300.jpg">
			   <h4 align="center">Samsung Galaxy 21 Ultra</h4>
			   <h5>S-110</h5>
			   <p align="center">Rs.225,000.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/530276-1.jpg">
			   <h4 align="center">Samsung Galaxy Active 2</h4>
			   <h5>S-111</h5>
			   <p align="center">Rs.40,900.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
			 <div class="col-4">
			   <img src="../Images/2663a5164730a265ed3ebabf17f691c2.jpg">
			   <h4 align="center">Samsung Galaxy Tab s7+</h4>
			   <h5>S-112</h5>
			   <p align="center">Rs.198,990.00</p>
			   <a href="Cart.php"><button type="submit" class="btn btn-info">Add To cart</button>
			   </form></a>
			</div>
		  </div>
		</div>
	
	   <div class="page-bttn">
		   <span>1</span>
		   <span>2</span>
		   <span>3</span>
		   <span>4</span>
		   <span>&#8594;</span>
	</div>
	

		
<!----------------------footer--------------------->
	<div class="footer">
		<div class="container">
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
  