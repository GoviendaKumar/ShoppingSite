<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php if(!isset($_GET['acountedit'])){?> Registeration<?php } else {?> Update settings<?php } ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

 <link type="text/css" href="../css/Main.css" rel="stylesheet" />
<script type="text/javascript" src="../js/RegformVal.js"></script>
<script type="text/javascript" src="../js/SearchVal.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
</head>
<body>

                          <?php  include ("../Header/header.php");?>
    
<form name="registeration" method="post"  <?php if(!isset($_GET['acountedit'])) { ?> action="../Actions/AddCustomerAction.php" <?php } else { ?> action="../Actions/SettingsAction.php" <?php } ?> onsubmit='return valid();' >                        
                             <!--  Customer Name /-->  
       <table width="990px" border="0" align="center">
     <tr>
     <td>                                  
      <p class="formpurpose Regformpurpose"> Fill the following fields to register, fields with * are must</p>
      <hr class="hrLine"/>
                              <?php include("Errorchecks_server_Reg.php");?>
    
<p class="InfoCategory">Personal Information</p> 
<hr class="hrLine"/>

<?php if(!isset($_GET['acountedit']))
	{
    ?>
<table  height="120px" border="0" class="marginFields">
<tr>
   <td width="200px"  class="fieldName">First Name<sup>*</sup> </td>
   <td width="200px" ><input type="text" name="fname" value="" size="30%" class="textfield" /></td>
   <td width="250px" id="error_fn" class="errorfield"></td>
</tr>

<tr>
   <td class="fieldName">Last Name <sup>*</sup></td>
   <td><input type="text" name="lname" value="" size="30%" class="textfield" /></td>
   <td   id="error_ln" class="errorfield"></td>
</tr>
   <tr>
   <td   class="fieldName">Gender</td>
   <td>
     <label class="fieldName"><input type="radio" name="gender" value="M"  checked="checked" />Male</label>&nbsp;&nbsp; &nbsp;&nbsp; 
     <label class="fieldName"><input type="radio" name="gender" value="F"  />
          Female</label>
   </td>
</tr>
</table>
                           <!--  Customer Adress /-->
<p class="InfoCategory">Address Information</p> 
   <hr class="hrLine"/>
<table  border="0" height="270px" class="marginFields">
<tr>
   <td width="200px"  class="fieldName"> Permanet Address <sup>*</sup></td>
   <td width="200px" ><!--<input type="text" name="paddress" value="" size="60%" class="textfield" />/--> <textarea name="paddress" value="" cols="28%" class="textfield"></textarea></td>
   <td width="250px"  id="error_pa" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Alternate Address </td>
   <td ><!--<input type="text" name="a_address" value="" size="60%" class="textfield" />/--> <textarea name="a_address" value="" cols="28%" class="textfield"></textarea></td>
</tr>
<tr>
   <td class="fieldName">City <sup>*</sup></td>
   <td><input type="text" name="city" value="" size="30%" class="textfield"/></td>
   <td id="error_city" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Mobile number <sup>*</sup></td>
   <td ><input type="text" name="mobile" value="" size="30%" class="textfield" /></td>
   <td id="error_mobile" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> E-mail <sup>*</sup></td>
   <td ><input type="email" name="email" value="" size="30%" class="textfield" /></td>
   <td id="error_email" class="errorfield"></td>
</tr>
</table>
                             <!--  Customer ID -->
<p class="InfoCategory">Account Information</p> 
   <hr class="hrLine"/>
   
   
<table border="0" height="180px" class="marginFields">
<tr>
   <td  width="200px" class="fieldName"> User name <sup>*</sup></td>
   <td width="200px" ><input type="text" name="username" value="" size="30%" class="textfield"/></td>
   <td  width="250px" id="error_un" class="errorfield"></td>
</tr>

<tr>
   <td class="fieldName"> Password <sup>*</sup></td>
   <td ><input type="password" name="password" value="" size="30%" class="textfield" /></td>
   <td id="error_pwd" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Confirm Password <sup>*</sup></td>
   <td ><input type="password" name="Cpassword" value="" size="30%" class="textfield"/></td>
   <td id="error_Cpwd" class="errorfield"></td>
</tr>
<tr>
   <td >&nbsp;</td>
   <td ><input type="submit" name="submit" value="Create an Account" class="buttonDesign RegSubmitbutton mouseon_button" onClick="function valid()"/>
   <span><input type="reset" name="cancel" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></span></td>
</tr>
</table>
<?php
}
else
{ 
     include("CheckIsSignin.php");  
	include("../Actions/connection.php");
	  
	if(isset($_SESSION['customerID']))
    {	  
	   // we don't start session for access session variables b/c it is already started at header page.
       $id=$_SESSION['customerID'];	
	   $retrieve="SELECT *
	        FROM customer c ,userloginid l
			WHERE  c.customerID=l.customerID AND c.customerID='$id'";
  
	         $result=mysql_query($retrieve);
	      if(!$result)
	      {
		        die('Invalid query'. mysql_error());
	      }
	     else
	     {
		       $row=mysql_fetch_array($result);
	     }
     }
	
?>                           
<table  height="120px" border="0" class="marginFields">
<tr>
   <td width="200px" class="fieldName">First Name <sup>*</sup></td>
   <td width="200px"><input type="text" name="fname" value="<?php echo $row["fname"];?>" size="30%" class="textfield" /></td>
   <td width="250px" id="error_fn" class="errorfield"></td>
</tr>

<tr>
   <td  class="fieldName">Last Name <sup>*</sup></td>
   <td><input type="text" name="lname" value="<?php echo $row["lname"];?>" size="30%" class="textfield" /></td>
   <td id="error_ln" class="errorfield"></td>
</tr>
   <tr>
   <td  class="fieldName">Gender </td>
   <td>
     <label class="fieldName Alignment"><input type="radio" name="gender" value="M" <?php if($row["gender"]=="M"){?>  checked="checked" <?php }?> />Male</label>&nbsp;&nbsp; &nbsp;&nbsp; 
     <label class="fieldName"><input type="radio" name="gender" value="F" <?php if($row["gender"]=="F"){?>  checked="checked" <?php }?>  />
          Female</label>
   </td>
</tr>
</table>
                           <!--  Customer Adress /-->
<p class="InfoCategory">Address Information</p> 
   <hr class="hrLine"/>
<table border="0" height="270px" class="marginFields">
<tr>
   <td width="200px" class="fieldName"> Permanet Address <sup>*</sup> &nbsp; &nbsp;&nbsp;</td>
   <td width="200px"><!--<input type="text" name="paddress" value="" size="60%" class="textfield" />/--> <textarea name="paddress" value="" cols="28%" class="textfield"><?php echo $row["paddress"];?></textarea></td>
   <td width="250px" id="error_pa" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Alternate Address </td>
   <td><!--<input type="text" name="a_address" value="" size="60%" class="textfield" />/--> <textarea name="a_address" value="" cols="28%" class="textfield"><?php echo $row["a_address"];?></textarea></td>
</tr>
<tr>
   <td  class="fieldName">City <sup>*</sup></td>
   <td><input type="text" name="city" value="<?php echo $row["city"];?>" size="30%" class="textfield"/></td>
   <td id="error_city" class="errorfield"></td>
</tr>
<tr>
   <td class="fieldName"> Mobile number <sup>*</sup> </td>
   <td><input type="text" name="mobile" value="<?php echo $row["mobile"];?>" size="30%" class="textfield" /></td>
   <td id="error_mobile" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName"> E-mail <sup>*</sup></td>
   <td><input type="email" name="email" value="<?php echo $row["email"];?>" size="30%" class="textfield" /></td>
   <td id="error_email" class="errorfield"></td>
</tr>
</table>
                             <!--  Customer ID /-->
<p class="InfoCategory">Account Information</p> 
   <hr class="hrLine"/>
   
   
<table border="0" height="180px" class="marginFields">
<tr>
   <td width="200px"  class="fieldName"> User name <sup>*</sup></td>
   <td width="200px"><input type="text" name="username" value="<?php echo $row["username"];?>" size="30%" class="textfield" <?php if($_SESSION['username']=="admin"){?> readonly="readonly" <?php } ?>/></td>
   <td width="250px" id="error_un" class="errorfield"></td>
</tr>

<tr>
   <td  class="fieldName"> Password <sup>*</sup></td>
   <td><input type="password" name="password" value="<?php echo $row["password"];?>" size="30%" class="textfield" /></td>
   <td id="error_pwd" class="errorfield"></td>
</tr>
<tr>
   <td  class="fieldName"> Confirm Password <sup>*</sup></td>
   <td><input type="password" name="Cpassword" value="<?php echo $row["password"];?>" size="30%" class="textfield"/></td>
   <td id="error_Cpwd" class="errorfield"></td>
</tr>
<tr>
   <td >&nbsp;</td>
    <input type="hidden" name="customerID" value="<?php echo $row["customerID"];?>" size="30%"/>
   <td><input type="submit" name="submit" value="Submit settings" class="buttonDesign RegSubmitbutton mouseon_button" onClick="function valid()"/>
   <span><input type="reset" name="cancel" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></span></td>
</tr>
</table></td></tr></table>
<?php
}
?>
</form>
  <?php include("../Footer/footer.php");?>  
</body>

</html>
