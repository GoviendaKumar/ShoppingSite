<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php if(!isset($_GET['productID'])){?>Add Product<?php } else {?> Edit Product<?php } ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/Main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/ProductVal.js"></script>
<script type="text/javascript" src="../js/SearchVal.js"></script>
 <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
</head>
<body>

<?php  include ("../Header/header.php");?>
    
<form name="addproduct" method="post" <?php if(!isset($_GET['productID'])){?> action="../Actions/AddProductAction.php" <?php } else{?> action="../Actions/EditProductAction.php" <?php }?> onsubmit='return valid();' >                        
                             <!--  Product Information /-->
<table width="990px" border="0" align="center">
<tr>
<td>                                                      
<p class="formpurpose Productformpurpose"> Fill the following fields to add product, fields with * are must</p>
<hr class="hrLine"/>
                                   <?php include("CheckIsSignin.php");?>
                                   <?php include("Errorchecks_server_Product.php");?>
<p class="InfoCategory">Product Information</p> 
<hr class="hrLine"/>

<table  height="600px" border="0" class="marginFields">
<?php if(!isset($_GET['productID']))
	{
    ?>
<tr>
   <td width="200px"  class="fieldName">Name<sup>*</sup></td>
   <td  width="200px"><input type="text" name="pname" value="" size="30%" class="textfield" /></td>
   <td  width="250px" id="error_pn" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Category<sup>*</sup></td>
   <td>
   <select class="textfield PCategorysize" name="pcate" >
   <option value="">Select a category</option>
   <option value="shawl">Shawls</option>
   <option value="stole">Stoles</option>
   <option value="sweater">Sweaters</option>
   <option value="scarf">Scarfs</option>
   <option value="coats">Coats</option>
   <option value="shirt">Shirts</option>
   </select></td>
   <td id="error_pca" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">For </td>
   <td>
     <label class="fieldName"><input type="radio" name="pgender" value="Female" checked="checked" />Ladies</label>&nbsp;&nbsp; &nbsp;&nbsp; 
     <label class="fieldName"><input type="radio" name="pgender" value="Male"  />Gents</label>
   </td>
</tr>
<tr>
   <td  class="fieldName">Size<sup>*</sup> </td>
   <td><input type="text" name="psize" value="" size="30%" class="textfield" /></td>
   <td id="error_ps" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Colors</td>
   <td><input type="text" name="pcolor" value="" size="30%" class="textfield" /></td>
   <td id="error_pc" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Retail Price<sup>*</sup></td>
   <td><input type="text" name="pprice" value="" size="30%" class="textfield" /></td>
   <td id="error_pp" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Cost Price<sup>*</sup></td>
   <td><input type="text" name="pCprice" value="" size="30%" class="textfield" /></td>
   <td id="error_pcp" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Quantity</td>
   <td><input type="text" name="pqty" value="" size="30%" class="textfield" /></td>
   <td id="error_pq" class="errorfield"></td>
</tr>
<!--<tr>
   <td  class="fieldName">Date<sup>*</sup></td>
   <td><input type="text" name="pdate" value="" size="30%" class="textfield" /></td>
   <td id="error_pd" class="errorfield"></td>
</tr>-->
<tr>
   <td  class="fieldName"> Product Discription</td>
   <td><textarea name="pdisc" value="" cols="28px" class="textfield"></textarea></td>
</tr>
<tr>
   <td  class="fieldName"> Image<sup>*<sup></td>
   <td><input type="file" name="pimg" value="" class="textfield" size="17%"/></td>
   <td id="error_pimg" class="errorfield"></td>
</tr>
<tr>
   <td >&nbsp;</td>
   <td><input type="submit" name="submit" value="Add Product" class="buttonDesign ProductSubmitbutton mouseon_button" onClick="function valid()"/>
   <span><input type="reset" name="reset" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></span></td>
</tr>
<?php 
} 
  
else
  {  
	include("../Actions/connection.php");
	$id=$_GET['productID'];
		
	   $retrieve="SELECT *
	        FROM product
			WHERE productID='$id'";
  
	      $result=mysql_query($retrieve);
		   $row=mysql_fetch_array($result);
	      if(!$row)
	      {
		       header("location:../Admin/showproductdata.php?InvalidMove");
		  }
 ?>
 
 <input type="hidden" name="productID" value="<?php echo $row["productID"];?>"/>
      <tr>
   <td width="200px" class="fieldName">Name<sup>*</sup> </td>
   <td width="200px"><input type="text" name="pname" value="<?php echo $row["pname"];?>" size="30%" class="textfield" /></td>
   <td width="250px" id="error_pn" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Category<sup>*</sup></td>
   <td>
   <select class="textfield PCategorysize" name="pcate" value="<?php echo $row["pcate"];?>">
   <option value="">Select a category</option>
   <option value="shawl" <?php if($row["pcate"]=="shawl"){?> selected="selected"<?php }?>>Shawls</option>
   <option value="stole"  <?php if($row["pcate"]=="stole"){?> selected="selected"<?php }?>>Stoles</option>
   <option value="sweater"  <?php if($row["pcate"]=="sweater"){?> selected="selected"<?php }?>>Sweaters</option>
   <option value="scarf"  <?php if($row["pcate"]=="scarf"){?> selected="selected"<?php }?>>Scarfs</option>
   <option value="coats"  <?php if($row["pcate"]=="coats"){?> selected="selected"<?php }?>>Coats</option>
   <option value="shirt"  <?php if($row["pcate"]=="shirt"){?> selected="selected"<?php }?>>Shirts</option>
   </select></td>
   <td id="error_pca" class="errorfield"></td>
</tr>
   <tr>
   <td  class="fieldName">For</td>
   <td>
     <label class="fieldName"><input type="radio" name="pgender" value="Female" <?php if($row["pgender"]=="Female"){?>  checked="checked" <?php }?> />Ladies</label>&nbsp;&nbsp; &nbsp;&nbsp; 
     <label class="fieldName"><input type="radio" name="pgender" value="Male" <?php if($row["pgender"]=="Male"){?>  checked="checked" <?php }?> />Gents</label>
   </td>
</tr>
<tr>
   <td  class="fieldName">Size<sup>*</sup></td>
   <td><input type="text" name="psize" value="<?php echo $row["psize"];?>" size="30%" class="textfield" /></td>
   <td id="error_ps" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Colors</td>
   <td><input type="text" name="pcolor" value="<?php echo $row["pcolor"];?>" size="30%" class="textfield" /></td>
   <td id="error_pc" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Retail Price<sup>*</sup></td>
   <td><input type="text" name="pprice" value="<?php echo $row["pprice"];?>" size="30%" class="textfield" /></td>
   <td id="error_pp" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Cost Price<sup>*</sup></td>
   <td><input type="text" name="pCprice" value="<?php echo $row["pCprice"];?>" size="30%" class="textfield" /></td>
   <td id="error_pcp" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName">Quantity</td>
   <td><input type="text" name="pqty" value="<?php echo $row["pqty"];?>" size="30%" class="textfield" /></td>
   <td id="error_pq" class="errorfield"></td>
</tr>
<!--<tr>
   <td  class="fieldName">Date<sup>*</sup></td>
   <td><input type="text" name="pdate" value="" size="30%" class="textfield" /></td>
   <td id="error_pd" class="errorfield"></td>
</tr>-->
<tr>
   <td  class="fieldName"> Product Discription</td>
   <td><textarea name="pdisc" value="" cols="28px" class="textfield"><?php echo $row["pdisc"];?></textarea></td>
</tr>
<tr>
   <td  class="fieldName"> Image<sup>*<sup></td>
   <td><input type="file" name="pimg" value="<?php echo $row["pimg"];?>" class="textfield" size="17%" /></td>
   <td id="error_pimg" class="errorfield"></td>
</tr>
<tr>
   <td  >&nbsp;</td>
   <td><input type="submit" name="submit" value="Edit Product" class="buttonDesign ProductSubmitbutton mouseon_button" onClick="function valid()"/>
   <span><input type="reset" name="reset" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></span></td>
</tr>

<?php } ?>
</td></tr></table>
</form>
 <?php include("../Footer/footer.php");?>  
</body>
</html>