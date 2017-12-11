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
   
   $fname= $_POST['fname'];
   $fname=trim($fname);
   $fname=ucfirst(strtolower($fname));
   
   $lname= $_POST['lname'];
   $lname=trim($lname);
   $lname=ucfirst(strtolower($lname));
   
   $gender= $_POST['gender'];
   
   $paddress= $_POST['paddress'];
   $paddress=trim($paddress);
   
   $a_address= $_POST['a_address'];
   $a_address=trim($a_address);
   
   $city= $_POST['city'];
   $city=trim($city);
   $city=ucfirst(strtolower($city));
   
   $mobile= $_POST['mobile'];
   $mobile=trim($mobile);

   $email= $_POST['email'];
   $email=trim($email);
   
   $username= $_POST['username'];
   $username=trim(strtolower($username));
   
   $password= $_POST['password'];
   $password=trim($password);
  
   //else
   //{
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
			   $addcustomer = "INSERT INTO `customer`
			   (`fname`,`lname`,`gender`,`paddress`,`a_address`,`city`,`mobile`,`email`)
			                             VALUES('$fname','$lname','$gender','$paddress','$a_address','$city','$mobile','$email')";
				$getcustomer="SELECT customerID
					              FROM `customer`
								  WHERE email='$email' AND fname='$fname'AND lname='$lname'";
											 
				$result1=mysql_query($addcustomer);  //execute 1st query
				 
				if(!$result1)
				{
						die('Invalid query: ' . mysql_error());
						//$flag=false;
						
				}
				else
				{
					$result2=mysql_query($getcustomer); //execute 2nd query	
					if(!$result2)
					{
							die('Invalid query: ' . mysql_error());
						   //$flag=false;
					}
					else
					{
						$record=mysql_fetch_array($result2);  //fetch record
						$customerID=$record["customerID"];
						
						$customerloginid="INSERT INTO `userloginid`
			            (`username`,`password`,`customerID`)
			                             VALUES('$username','$password','$customerID')";
										 					 
						$result3=mysql_query($customerloginid);  //execute 3rd query
						if(!$result3)
				        {
							die('Invalid query: ' . mysql_error());
						}
						else
						{
							header("location:../Forms/welcome.php");
						}
					}
			    }
			   ob_end_flush();
			   exit;
		}
   //}
		
			   function SameUsername($username)
			   {
				   $sql="SELECT `username` FROM userloginid";
				   $result=mysql_query($sql);
				   if(!$result)
				   {
					   die('Invalid query' . mysql_error());
				   }
				   else
				   {
					   while($row=mysql_fetch_array($result))
					   {
						   if($row["username"]==$username)
						   {
							   return true;
						   }
					   }
				   }
				   return false;
			   }
			    function Sameperson($fname,$lname,$email)
			   {
				   $sql="SELECT `fname`,`lname`, `email`
				    FROM customer";
				   $result=mysql_query($sql);
				   if(!$result)
				   {
					   die('Invalid query' . mysql_error());
				   }
				   else
				   {
					   while($row=mysql_fetch_array($result))
					   {
						   if($row["fname"]==$fname&&$row["lname"]==$lname&&$row["email"]==$email)
						   {
							   return true;
						   }
					   }
				   }
				   return false;
			   }
 ?>
</body>
</html>   