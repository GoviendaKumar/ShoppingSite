<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Customer</title>
</head>

<body>

   <?php
      include("connection.php");
    if(isset($_GET['customerID']))
	{
		 $customerID= $_GET['customerID'];
		 $getCustomerName="SElECT `fname`,`lname` FROM customer WHERE customerID='$customerID'";
	
	  $delete1="DELETE FROM customer WHERE customerID='$customerID'";
	  $delete2="DELETE FROM userloginid WHERE customerID='$customerID'";
	  $result1=(mysql_query($getCustomerName));
	  $result2=(mysql_query($delete1));
	  $result3=(mysql_query($delete2));
	  
	  if(!($result1)||(!$result2)||(!$result3))
	  {
		  die('Invalid query: ' . mysql_error());
	  }
		 
	  else
	  {
		  $row=(mysql_fetch_array($result1));
		   header("location:../Admin/ViewCustomer.php?CustomerDeleted&Name=".$row["fname"]." ".$row["lname"]);
		         
	  }
}
?>
		  
</body>
</html>