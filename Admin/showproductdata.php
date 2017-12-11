<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Product Data</title>
    <link href="../css/Main.css" rel="stylesheet" type="text/css">  
    <script type="text/javascript" src="../js/DeleteProduct.js"> </script>
    <script type="text/javascript" src="../js/SearchVal.js"></script>
     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
   
    <style type="text/css">
	  .white
	  {
		  color:white;
	  }
	  .red
	  {
		  color:red;
	  }
	</style>     
</head>
<body>

<?php
    include("connection.php");
?>
<?php  include ("../Header/header.php");?>
<table width="990px" border="0" align="center">
<tr>
<td> 
<br/>
  <center><h1 class="white">Products</h1></center>
  <?php include("Errorchecks_server_ViewProduct.php"); ?>
   <table height="100px" border="1"  cellpadding="0" cellspacing="0" align="center">
        <tr>
    <th  class="white">Sr.No </th>
    <th class="white">ProductID</th>
    <th class="white">Name</th>
    <th  class="white">Category</th>
    <th  class="white">For</th>
     <th  class="white">Size</th>
      <th  class="white">Color</th>
      <th  class="white">Retail Price</th>
      <th  class="white">Cost Price</th>
      <th  class="white">Quantity</th>
      <th  class="white">Date</th>
      <th  class="white">Image</th>
      <th  class="white">Actions</th>
       </tr>
       
       <?php
	      
		  $i=1;
		  $sql= "SELECT *
		         FROM product";
				 $recset=mysql_query($sql);
				 while($row= mysql_fetch_array($recset))
				 {	
	   ?>
          <tr>
            <td class="white" align="center" >  <?php echo $i; ?> </td>
            <td class="white" align="center" >  <?php echo $row["productID"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pname"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pcate"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pgender"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["psize"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pcolor"]; ?> </td>
            <td class="white" align="center" > <?php echo $row["pprice"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pCprice"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pqty"]; ?> </td>
            <td class="white" align="center" >  <?php echo $row["pdate"]; ?> </td>
            <td class="white" align="center" ><img src="<?php echo $row["pimg"]; ?>" width="100px" height="100px" /> </td>
            <td class="white" align="center" ><a href="../Forms/productForm.php?productID=<?php echo $row["productID"];?>">Edit</a> | <a href="javascript:DeleteProduct(<?php echo $row["productID"];?>)">Delete</a></td>
          </tr>
          <?php
		       $i++;
		}
		   ?> 
</table></td></tr></table>
<?php include("../Footer/footer.php");?>  

</body>
</html>