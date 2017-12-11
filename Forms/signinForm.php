<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sign in</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link type="text/css" href="../css/Main.css" rel="stylesheet" />
<script type="text/javascript" src="../js/SigninformVal.js"></script>
<script type="text/javascript" src="../js/SearchVal.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>

</head>
<body>
          
            <?php include("../Header/header.php");?>
            
<form name="signin" method="post"  action="../Actions/SigninAction.php" onsubmit='return valid();' >     
                   
                             <!--  Customer Name /-->
   <table width="990px" border="0" align="center">
<tr>
<td>                              
<p class="InfoSignIn SignInformpurpose">If you have an account with us, please Sign in.<span class="formpurpose SignInformpurpose"> Fill the following fields to sign in, fields with * are must </span></p> 
<hr class="hrLine"/>

                  <?php
								 if(isset($_GET['invalid_un_pwd']))
								 {
							  ?>
                                   <p class="ServerSideMsgs">Invalid Username or Password</p>
                                 <?php
								 
								 }
								 else if(isset($_GET['signout']))
								 {
								?>
                                   <p class="ServerSideOkMsgs">You are Sign out successfully.</p>
                                 <?php
								 }
								 ?>
<table height="163px" border="0" class="marginFields">

<tr>
   <td  class="fieldName">User name<sup>*</sup> &nbsp; &nbsp;&nbsp;</td>
   <td><input type="text" name="username" value="" size="30%" class="textfield" /></td>
   <td id="error_un" class="errorfield"></td>
</tr>

<tr>
   <td  class="fieldName">Password <sup>*</sup> &nbsp; &nbsp;&nbsp;</td>
   <td><input type="password" name="password" value="" size="30%" class="textfield" /></td>
   <td id="error_pwd" class="errorfield"></td>
<tr>
   <td >&nbsp;</td>
   <td><input type="submit" name="submit" value="Sign in  " class="buttonDesign SignInbutton mouseon_button" onClick="function valid()"/>
   <span><input type="reset" name="cancel" value="Reset" class="buttonDesign Resetbutton mouseon_button" /></span></td>
</tr>
</table></td></tr></table>
</form>
       <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> 
        <?php  include ("../Footer/footer.php");?>
   
	
</body>
</html>
