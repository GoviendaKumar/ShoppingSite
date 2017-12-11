<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Product</title>
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
   /*
  if ($_FILES["pimg"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["pimg"]["error"] . "<br>";
    }
  else
  {
    echo "Upload: " . $_FILES["pimg"]["name"] . "<br>";
    echo "Type: " . $_FILES["pimg"]["type"] . "<br>";
    echo "Size: " . ($_FILES["pimg"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["pimg"]["tmp_name"] . "<br>";

    if (file_exists("images/" . $_FILES["pimg"]["name"]))
      {
      echo $_FILES["pimg"]["name"] . " already exists. ";
      }
    else
      {
         move_uploaded_file($_FILES["pimg"]["tmp_name"],
      "images/ProductsImgs/" . $_FILES["pimg"]["name"]);
      echo "Stored in: " ."images/ProductsImgs/" . $_FILES["pimg"]["name"];
      }
  }
   */
        if(sameproduct($pname,$pcate,$pgender,$psize))
		{
			header("location:../Forms/productform.php?sameproduct");
		}
		else
		{
   
			   $addproduct = "INSERT INTO `product`
			   (`pname`,`pcate`,`pgender`,`psize`,`pcolor`,`pprice`,`pCprice`,`pqty`,`pdate`,`pdisc`,`pimg`)
			    VALUES('$pname','$pcate','$pgender','$psize','$pcolor','$pprice','$pCprice','$pqty',now(),'$pdisc','$pimg')";
											 
				$result1=mysql_query($addproduct);  //execute 1st query
				 
				if(!$result1)
				{
						die('IaaHello query: ' . mysql_error());
						//$flag=false;
						
				}
					else
					{
											 					 
						header("location:../Admin/showproductdata.php?ProductAdded&Name=".$pname);
					}
			   ob_end_flush();
			   exit;
			   
		
		}
		
		function sameproduct($pname,$pcate,$pgender,$psize)
		{
			$sql="SELECT `pname`,`pcate`,`pgender`,`psize`
				   FROM product";
				   $result=mysql_query($sql);
				   if(!$result)
				   {
					   die('Hello query' . mysql_error());
				   }
				   else
				   {
					   while($row=mysql_fetch_array($result))
					   {
						   if($row["pname"]==$pname&&$row["pcate"]==$pcate&&$row["pgender"]==$pgender&&$row["psize"]==$psize)
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