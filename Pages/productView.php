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
			<li><a href="Cart.php">cart</a></li>
			<li><a href="Aboutus.html">About us</a></li>
			
		  </ul>
		</nav>
	</div>
</div>
	<form action="" method="post">
<table width="728" height="177" border="0" align="center">
       <tbody>
         <tr>
           <td height="173"><p><h1>View All Products</h1></p>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
		       
		   <?php
		   $con = mysqli_connect("localhost","root","","crownm");
		   if(!$con){
			   die("cannot connect to db server");
		   }
		   $sql = "SELECT * FROM `products`";
		   $result = mysqli_query($con, $sql);
		   if(mysqli_num_rows($result) > 0){
			   
			   while ($row = mysqli_fetch_assoc($result)) {
				   
		   ?>
		   
		   <div class="image"><a href="<?php echo $row['ImagePath'];?>">
			   
			    <img src="<?php echo $row['ImagePath'];?>" width="135" height="129"></a>
				<div class="desc"> <?php echo $row['name'];?> <br>
				<a href="editproducts.php?id=<?php	
				echo $row['productsID']; ?>">edit</a> | <a href="deleteproducts.php?id=<?php
			    echo $row['productsID']; ?>">delete</a>
			    
											 
				</div>				 			 
		  </div>
		   
		   <?php
		    
		    }
		 }
		   mysqli_close($con);
		   ?>
             
            
	       </td>
         </tr>
       </tbody>
</table>
</body>
</html>