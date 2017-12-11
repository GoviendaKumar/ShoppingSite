<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RegisterCustomer</title>
</head>

<body>
<?php
   
   ob_start();
   include("connection.php");
   
   $comment= $_POST['comment'];
   $comment=trim($comment);
   $comment=ucfirst(strtolower($comment));
   /*
		if(SameUsername($username))
		{
			//echo "Username Already exist";
			header("location:../Forms/registerationForm.php?sameusername");
		}
		else if(Sameperson($fname,$lname,$email))
		{
			header("location:../Forms/registerationForm.php?sameperson");
		}
		else
		{
			*/
			if(isset($_POST['customerID'])&&isset($_POST['productID']))
			{
				$customerID=$_POST['customerID'];
				$productID=$_POST['productID'];
				
			   $postcomment = "INSERT INTO `comments`
			   (`comment`,`customerID`,`productID`)
			                             VALUES('$comment','$customerID','$productID')";							 
				  $result=mysql_query($postcomment);  //execute 1st query
				 
				if(!$result)
				{
						echo "<span style='color:white;'>"."Invalid query". mysql_error(). "</span>";
						
				}
				else
				{
							header("location:ProductDetail.php?productID=".$productID);
				}
					
			   ob_end_flush();
			   exit;
		   } 
   //}
		
			   
 ?>
</body>
</html>   