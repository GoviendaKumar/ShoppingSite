<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/Main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/EditformVal.js"></script>
<script type="text/javascript" src="../js/SearchVal.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/menu.js"></script>
<title>Edit Customer account</title>

</head>

<body>

<?php 
      include("../Actions/connection.php");
  if(isset($_GET['customerID']))
  {	  
    $customerID=$_GET['customerID'];
	
	$retrieve="SELECT *
	        FROM customer
			WHERE  customerID='$customerID'";
  
	$result=mysql_query($retrieve);
	$row=mysql_fetch_array($result);
	if(!$row)
	{
		header("location:../Admin/ViewCustomer.php?InvalidMove");
	}
	
  }
?>
<?php  include ("../Header/header.php");?>
     
<form name="registeration" method="post"  action="../Actions/EditCustomerAction.php" onsubmit='return valid();' >  
<table width="990px" align="center">
<tr>
<td>
<p class="formpurpose Regformpurpose"> Use following fileds to edit customer information, fields with * are must</p>
      <hr class="hrLine"/>                      
                             <!--  Customer Name /-->
                             <?php include("CheckIsSignin.php"); ?>
<p class="InfoCategory">Personal Information </p> 
<hr class="hrLine"/>
<table  height="120px" border="0" class="marginFields">
<tr>
   <td width="200px" class="fieldName">First Name <sup>*</sup></td>
   <td width="200px"><input type="text" name="fname" value="<?php echo $row["fname"];?>" size="30%" class="textfield Alignment" readonly="readonly"/></td>
   <td  width="250px" id="error_fn" class="errorfield"></td>
</tr>

<tr>
   <td class="fieldName">Last Name <sup>*</sup></td>
   <td><input type="text" name="lname" value="<?php echo $row["lname"];?>" size="30%" class="textfield Alignment" readonly="readonly" /></td>
   <td id="error_ln" class="errorfield"></td>
</tr>
   <tr>
   <td  class="fieldName">Gender </td>
   <td>
     <label class="fieldName Alignment"><input type="radio" name="gender"<?php if($row["gender"]=="M"){?>  checked="checked" <?php }?> value="M"/>Male</label>&nbsp;&nbsp; &nbsp;&nbsp; 
     <label class="fieldName"><input type="radio" name="gender"  <?php if($row["gender"]=="F"){?>  checked="checked" <?php }?>value="F"  />
          Female</label>
   </td>
</tr>
</table>
                           <!--  Customer Adress /-->
<p class="InfoCategory">Address Information</p> 
   <hr class="hrLine"/>
<table border="0" height="270px" class="marginFields">
<tr>
   <td width="200px" class="fieldName"> Permanet Address <sup>*</sup></td>
   <td width="200px"> <textarea name="paddress" value="" cols="28%" class="textfield"><?php echo $row["paddress"];?></textarea></td>
   <td width="250px" id="error_pa" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Alternate Address </td>
   <td><!--<input type="text" name="a_address" value="" size="60%" class="textfield" />/--> <textarea name="a_address" value="" cols="28%" class="textfield"> <?php echo $row["a_address"];?></textarea></td>
</tr>
<tr>
   <td  class="fieldName">City <sup>*</sup> </td>
   <td><input type="text" name="city" value="<?php echo $row["city"];?>" size="30%" class="textfield"/></td>
   <td id="error_city" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Mobile number <sup>*</sup> </td>
   <td><input type="text" name="mobile" value="<?php echo $row["mobile"];?>" size="30%" class="textfield" /></td>
   <td id="error_mobile" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName"> E-mail <sup>*</sup>  </td>
   <td><input type="text" name="email" value="<?php echo $row["email"];?>" size="30%" class="textfield" readonly="readonly"/></td>
   <td id="error_email" class="errorfield"></td>
</tr>
</table>                             <!--  Customer ID/-->
     
 <br/><br/>
<table border="0" height="10px" class="marginFields" >
 <tr>
   <td width="200px">&nbsp;</td>
   <td><input type="submit" name="submit" value="Submit" class="buttonDesign RegSubmitbutton mouseon_button" onclick="function valid()"/></td>
   <td><input type="reset" name="cancel" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></td>
</tr>
</table></td></tr></table>
  <input type="hidden" name="customerID" value="<?php echo $row["customerID"];?>" size="30%"/>
</form>
 <?php include("../Footer/footer.php");?>  
</body>
</html>