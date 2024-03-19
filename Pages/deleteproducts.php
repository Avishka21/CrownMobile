<?php

$con = mysqli_connect("localhost", "root", "", "crownm");
				  if (!$con) 
				   {
                     die("Sorry,Cannot upload the file, choose another file");
                   }
			
			         //DB code
			          $sql= "DELETE FROM `products` WHERE `products`.`productsID` = ".$_GET["id"];
				  
				
				  
					  mysqli_query($con, $sql);
			          header('Location:productView.php');
                      
					
			  
			        ?>
			  















