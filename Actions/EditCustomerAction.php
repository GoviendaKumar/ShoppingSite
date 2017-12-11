<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update </title>
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
   
  // $username= $_POST['username'];
   //$password= $_POST['password'];
   /*
   if(!SameUsername($username))
	{
			echo "Username Already exist";
			//header("location:registerationForm.php");
	}
	*/
	//else
	//{
		
	 if(isset($_POST['customerID']))
	 {
		 $customerID=$_POST['customerID'];
		 
	      $Update="UPDATE `customer`
	          SET fname='$fname',lname='$lname',gender='$gender', paddress='$paddress',a_address='$a_address',city='$city',email='$email'              ,mobile='$mobile'
			  WHERE customerID='$customerID'";
			  if((!mysql_query($Update)))
			  {
				  
				  die('Invalid query: ' . mysql_error());
			       
			  }
			  else
			  {
				header("location:../Admin/ViewCustomer.php?CustomerEdited&Name=".$fname." ".$lname);    
			  }
			  ob_end_flush();
			   exit;
	 }
	//}
	/*		   
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
							   return false;
						   }
					   }
				   }
				   return true;
		}
		*/		   
	?>
</body>
</html>