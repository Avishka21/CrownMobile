<?php session_start(); 
if (!isset($_SESSION["userName"]))
{
	header('Location:Loginpage');

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="Stylecss.css">
</head>

<body>
<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td width="432"></td>
      <td width="468">
		 <ul>
         <a href="Main.html"><img src="../Images/cart.png" width="30px" height="30px"></a>
			<li><a href="Main.html">Account|Home</a></li>
			<li><a href="MobilePhones.php">Mobile Phones</a></li>
			<li><a href="">cart</a></li>
			<li><a href="Aboutus.html">About us</a></li>
      </ul></td>
    </tr>
    <tr>
		
		<?php
		$con = mysqli_connect("localhost","root","","crownm");
			if(!$con)
			{
				die("cannot connect to DB server");
			}
			$sql ="SELECT * FROM `products`` WHERE `productsID`='".$_GET['id']."'";
		    $image="";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result)> 0)
			{
				$row = mysqli_fetch_assoc($result);
			    $image  = $row['ImagePath'];
		?>
		
      <td colspan="2"><form action="editproducts.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
        ;
        <table width="438" border="0" align="center">
          <tr>
              <h1>Edit products</h1></td>
          </tr>
          <tr>
            <td width="146">Name</td>
            <td width="282"><input type="text" name="txtName" id="txtName" value="<?php echo $row['name']; ?>"/>
		  </td>
          </tr>
          <tr> 
             <td>Price</td>
		     <td><input type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['price']; ?>"/>
          </tr>
          <tr>
            <td>Quantity</td>
            <td><input type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $row['quantity'];?>" /></td>
          </tr>
          <tr>
			<td>Images</td>
            <td><input type="file" name="fileImage" id="fileImage" /></td>
			</tr>
             <tr>
			 <br>
				  
				  
				   <?php
				   if(isset($_POST['btnSubmit']))
				   {
					   if(is_uploaded_file($_FILES['fileImage']['tmp_name']))
					    {
						$image = "uploads/".basename($_FILES['fileImage'] ["name"]);
						move_uploaded_file($_FILES["fileImage"] ["tmp_name"],$image);
					    }
	
					  $name = $_POST["txtName"];
				      $price = $_POST["txtPrice"];
					  $quantity = $_POST["txtQuantity"];
					   
					  
				  $con = mysqli_connect("localhost","root","","crownm");
			      if(!$con)
			      {	
				   die("Cannot upload the file, Please choose another file");		
			      }
				  $sql = "UPDATE `products` SET `name` = '
			      ".$name."', `price` = '".$price."', `Quantity` = '".$quantity."', `ImagePath` = '".$image."' WHERE `products`.`productsID` = ".$_GET['id'].";";
	           
				  
				  // rest of the DB code
				  
			if(  mysqli_query($con,$sql))
	        {
		        echo "Product is updated Successfully";
	        }
	        else
		        echo "Opps something is wrong, Please select the file again";
			
					    
				    }
				    ?>
				 
                <br />
              </label></td>
          </tr>
          <tr>
            <td colspan="2"><blockquote> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"   />
              <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
            </blockquote></td>
			  
			  <?php }
			  
		 ?>
          </tr>
        </table>
      </form></td>
    </tr>
  </tbody>
</table>
</body>
</html>
