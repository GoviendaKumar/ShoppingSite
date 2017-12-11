<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searched Products</title>
 <link type="text/css" href="../css/Main.css" rel="stylesheet" />  
    <script type="text/javascript" src="../js/DeleteConfirmation.js"> </script> 
    <script type="text/javascript" src="../js/SearchVal.js"></script>
     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script> 
<style>

</style>
</head>
<body>
<?php  
   ob_start();
   include("connection.php");
   


          
	    $getproducts = "SELECT pcate,COUNT(productID) AS mycount
		                  FROM `product`
						  GROUP BY pcate
						  HAVING COUNT(productID)>1";
						  $result=mysql_query($getproducts);
						  while($row=mysql_fetch_array($result))
						  {
							  echo "<span>".$row["pcate"]."</span><span>".$row["mycount"]."</span><br/>";
						  }
						  
?>
   
	<?php include("../Footer/footer.php"); ?>
    
    </body>

</html>   