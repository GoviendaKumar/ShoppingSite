<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Product</title>
</head>

<body>
<?php
   
   ob_start();
   include("connection.php");
   $imglink="../images/ProductsImgs/";
   $pname= $_POST['pname'];
   $pname=trim($pname);
   $pname=ucfirst(strtolower($pname));
   
   $pcate=trim($_POST['pcate']);
   $pgender=trim($_POST['pgender']);
   $psize= trim($_POST['psize']);
   $pcolor=trim($_POST['pcolor']);
   $pprice=trim($_POST['pprice']);
   $pCprice=trim($_POST['pCprice']);
   $pqty=trim($_POST['pqty']);
  // $pdate=trim($_POST['pdate']);
   $pdisc=trim($_POST['pdisc']);
   $pimg= $_POST['pimg'];
   $pimg=$imglink.$pimg;
   $pimg=trim($pimg);
   
   if(isset($_POST['productID']))
   {
	   $productID=$_POST['productID'];
	   if(duplicateproduct($productID,$pname,$pcate,$pgender,$psize))
	   {
		   header("location:../Forms/productForm.php?productID=".$productID."&Duplicate");
	   }
	   else
	   {
		     
	   
	   $Update="UPDATE `product`
	          SET pname='$pname',pcate='$pcate',pgender='$pgender',psize='$psize',pcolor='$pcolor',pprice='$pprice',pCprice='$pCprice',pqty='$pqty',pdisc='$pdisc',pimg='$pimg'
			  WHERE productID='$productID'";
			  
			  $result=mysql_query($Update);
			  if(!$result)
			  {
				 die('Invalid query' . mysql_error());
			  }
			 else
			 {
				 header("location:../Admin/showproductdata.php?ProductEdited&Name=".$pname);
			 }
			 ob_end_flush();
	  }
	  // else
	  // alert(" already exists");
   }
   function duplicateproduct($productID,$pname,$pcate,$pgender,$psize)
    {
				   $sql="SELECT `productID`,`pname`,`pcate`,`pgender`,`psize`
				    FROM product";
				   $result=mysql_query($sql);
				   if(!$result)
				   {
					   die('Invalid query' . mysql_error());
				   }
				   else
				   {
					   while($row=mysql_fetch_array($result))
					   {
						   if($row["pname"]==$pname&&$row["pcate"]==$pcate&&$row["pgender"]==$pgender&&$row["psize"]==$psize&&$row["productID"]!=$productID)
						   {
							   return true;
						   }
					   }
				   }
				   return false;
	 }
    ob_end_flush();
?>
</body>
</html>