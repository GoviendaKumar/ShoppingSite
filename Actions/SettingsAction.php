<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
   $password=md5($password);
   
   if(isset($_POST['customerID']))
   {
	   $customerID=$_POST['customerID'];
	   if(SameUsername($username,$customerID))
	   {
		   header("location:../Forms/registerationForm.php?acountedit&sameusername");
	   }
	   else if(DuplicateCustomer($customerID,$fname,$lname,$email))
	   {
		   header("location:../Forms/registerationForm.php?acountedit&Duplicate");
	   }   
	   else
	   {
	   session_start();
	   $_SESSION['username']=$username;  // we do this b/c customer can change his/her username so it also apply change on session variable.
	   
	   $Update1="UPDATE `customer`
	          SET fname='$fname',lname='$lname',gender='$gender', paddress='$paddress',a_address='$a_address',city='$city',email='$email'              ,mobile='$mobile'
			  WHERE customerID='$customerID'";
			  
			  
	  $Update2="UPDATE `userloginid`
	          SET username='$username',password='$password'
			  WHERE customerID='$customerID'";
			  $result1=mysql_query($Update1);
			 $result2=mysql_query($Update2);
			 if(!$result1||!$result2)
			 {
				 die('Invalid query' . mysql_error());
			 }
			 else
			 {
				 header("location:../index.php");
			 }
	   }
   }
   
      function SameUsername($username,$customerID)
	  {
				   $sql="SELECT `username`,`customerID` FROM userloginid";
				   $result=mysql_query($sql);
				   if(!$result)
				   {
					   die('Invalid query' . mysql_error());
				   }
				   else
				   {
					   while($row=mysql_fetch_array($result))
					   {
						   if($row["username"]==$username&&$row["customerID"]!=$customerID)
						   {
							   return true;
						   }
					   }
				   }
				   return false;
		}
    function DuplicateCustomer($customerID,$fname,$lname,$email)
    {
				   $sql="SELECT `customerID`,`fname`,`lname`, `email`
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
						   if($row["fname"]==$fname&&$row["lname"]==$lname&&$row["email"]==$email&&$row["customerID"]!=$customerID)
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