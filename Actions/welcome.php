<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Online Store</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">/-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="css/styleTemp.css" rel="stylesheet" type="text/css">
  <link type="text/css" href="css/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
	<table width="990"  border="0" cellspacing="0" cellpadding="0" align="center">
	  <tr>
		<td height="531" align="left" valign="top">
				<table width="990"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                  <?php
				  session_start();
				  if(!isset($_SESSION['customerID'])&&!isset($_SESSION['username']))
				  {
				  ?>
                  <td width="245" align="right"> <a href="Forms/registerationForm.php" class="removeunderline"><span class="toplinks">Register</span></a>
                  <span class="toplinks">|</span>
                   <span><a href="Forms/signinForm.php" class="removeunderline"><span class="toplinks">Sign in</span></a></span>
                 </td>
                 <?php
				  }
				  else
				  {
					  $activecustomer=$_SESSION['username'];
				?>
                <td width="245" align="right"><span class="toplinks"><?php echo "Welcome "."<span class='activecustomer'>".$activecustomer."</span>"; ?></span>
                  <span class="toplinks">|</span>
                   <span><a href="Forms/registerationForm.php?acountedit" class="removeunderline"><span class="toplinks">Settings</span></a></span>
                   <span class="toplinks">|</span>
                   <span><a href="Actions/SignoutAction.php" class="removeunderline"><span class="toplinks">Sign out</span></a></span>
                 </td>
                 <?php 
				  }
				  ?>
                  
                  </tr>
				  <tr>
						<td height="85" align="left" valign="top" class="header">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<td width="20%" height="85">&nbsp;</td>
										<td width="80%">
                                           <table width="790"  border="0" cellspacing="0" cellpadding="0">
										  <tr>
											<td width="61" height="25" align="center"><a href="Forms/signinForm.php" id="wht">Sign in</a></td>
											<td width="10"><a href="http://www.templatesfreelance.com/"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></a></td>
											<td width="245" align="center" class="txt"> <a href="Forms/registerationForm.php" id="wht">Register</a> </td>
											<td width="14"><a href="http://www.templatesfreelance.com/"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></a></td>
											<td width="182" align="center" class="txt">Currency:&nbsp;
											  <select name="select" class="cls">
												<option value="1">US Dolars</option>
											  </select></td>
											<td width="14">&nbsp;</td>
											<td width="263" class="txt">
													<table width="100%"  border="0" cellspacing="0" cellpadding="0">
													  <tr>
														<td width="23%" class="txt">Search:</td>
														<td width="55%"><input name="textfield" type="text" class="int"></td>
														<td width="22%"><a href="http://www.templatesfreelance.com/"><img src="images/go.jpg" alt="" width="32" height="23" border="0"></a></td>
													  </tr>
													</table>
											</td>
										  </tr>
										</table></td>
									  </tr>
									</table>
						</td>
				  </tr>
                  <tr>
                  <td>
				     <?php 
			            if(isset($_SESSION['username']))
			            {   
			               if($_SESSION['username']=="admin"||$_SESSION['username']=="ADMIN")
				           {
					              include("Navigationmenu/DropDownMenu4admin.php");
				           }
				           else 
				           {
				                 include("Navigationmenu/DropDownMenu4index.php");
				           }
			            }
			            else
			            {
				             include("Navigationmenu/DropDownMenu4index.php");
			            }
			   
			  ?>
                    </td>
                  </tr>
		  </table>
		  <table width="990"  border="0" cellspacing="0" cellpadding="0">
					<tr align="left" valign="top">
					  <td width="136" height="363">&nbsp;</td>
					  <td width="607"><p>&nbsp;</p>
				      <p>&nbsp;</p>
				      <h1 class="welcome">Congratulations !!!!</h1>
				      <p class="white">You are now customer of our Online Store.</p>
				      <h3 class="welcome">Welcome</h3>
				      <p class="white">We welcome you to our Website. Here you can easily view our products and offers.</p>
				      <p class="white">You can search your favourite products and can easily buy them.</p>
				      <p class="white">DO visit our website to get new items as they arrive.</p></td>
					  <td width="247">&nbsp;</td>
					</tr>
		  </table></td>
	  </tr>
	</table>
    <?php include("Footer/footer.php");?> 

</body>
</html>
