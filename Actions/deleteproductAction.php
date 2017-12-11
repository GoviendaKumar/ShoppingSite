<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DeleteProduct</title>
</head>

<body>

   <?php
    include("connection.php");
    if(isset($_GET['productID']))
	{
		 $productID= $_GET['productID'];
		 $getProductName="SElECT `pname` FROM product WHERE productID='$productID'";
	
	  $delete="DELETE FROM product WHERE productID='$productID'";
	  $result1=(mysql_query($getProductName));
	  $result2=(mysql_query($delete));
	  
	  if(!($result1)||!($result2))
	  {
		  die('Invalid query: ' . mysql_error());
	  }
	  else
	  {
		  $row=mysql_fetch_array($result1);
		  
		  header("Location: ../Admin/showproductdata.php?ProductDeleted&Name=".$row["pname"]);
		     
	  }
}
?>
		  
</body>
</html>