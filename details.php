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
	<table width="990px"  border="0" cellspacing="0" cellpadding="0" align="center">
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
											<td width="10"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></td>
											<td width="245" align="center" class="txt"> <a href="Forms/registerationForm.php" id="wht">Register</a> </td>
											<td width="14"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></td>
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
														<td width="22%"><img src="images/go.jpg" alt="" width="32" height="23" border="0"></td>
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
					  <td width="150" height="363">
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19">WHY TO BUY</div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://junaid-handicrafts.blogspot.com/2011/11/kashmiri-embroidery-shawls.html" id="wht2">Kingri</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.creationnepal.com/categories.php?cat_id=116" id="wht2">Sweaters</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">Pull Overs</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.bestofkashmir.com/coats.html" id="wht2">Kashmiri Coats</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">Nepali Scarfs</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">Burrberry</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.gucci.com/us/category/m/scarves" id="wht2">Gucci</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.polyvore.com/fendi_scarves/shop?brand=Fendi&category_id=105" id="wht2">Fundi</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">Search</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">Contact us</a></div>
					  <div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="http://www.templatesfreelance.com/" id="wht2">FAQ</a></div>		  </td>
					  <td width="593">&nbsp;</td>
					  <td width="247">
							  <table width="246"  border="0" cellspacing="0" cellpadding="0">
								<tr>
								  <td><img src="images/banner1.jpg" alt="" width="247" height="205" border="0"></td>
								</tr>
								<tr>
								  <td><img src="images/banner2.jpg" alt="" width="247" height="166" border="0"></td>
								</tr>
							  </table>
					  </td>
					</tr>
				  </table>
		  
				  <table background="images/gradient" width="990"  border="0" cellspacing="0" cellpadding="0">
					<tr>
						  <td height="497" align="left" valign="top" class="tbody">
						  <table width="990" height="574"  border="0" cellpadding="0" cellspacing="0">
							<tr align="left" valign="top">
							  <td width="209" height="574"><img src="images/paypal.jpg" width="211" height="258"></td>
							  <td width="781">
							  <table width="780" height="571"  border="0" cellpadding="0" cellspacing="0">
									<tr align="left" valign="top">
									  <td width="24" height="571"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></td>
									  <td width="734">
											  <table width="734"  border="0" cellspacing="0" cellpadding="0">
												<tr>
												  <td>&nbsp;</td>
												</tr>
												<tr>
												  <td><span class="style1">
												  <h4 class="justify">&lt;name here&gt;</h4></span></td>
												</tr>
												<tr>
												  <td><img src="images/hr.jpg" alt="" width="731" height="12"></td>
												</tr>
												<tr>
												  <td height="62"><p class="justify">&lt;details here&gt;</p></td>
												</tr>
											  </table>
									    <table width="734"  border="0" cellspacing="0" cellpadding="0">
										      <tr>
													<td height="22"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></td>
										  </tr>
												</table>
											   <table align="right" width="606" height="492" border="0">
											    <tr>
											      <td width="187" height="53" class="detail">Size</td>
											      <td width="409">&nbsp;</td>
										        </tr>
											    <tr>
											      <td height="46" class="detail">Colors</td>
											      <td>&nbsp;</td>
										        </tr>
											    <tr>
											      <td height="53" class="detail">Quantity</td>
											      <td>&nbsp;</td>
										        </tr>
											    <tr>
											      <td height="56" class="detail">Price</td>
											      <td>&nbsp;</td>
										        </tr>
											    <tr>
											      <td height="156">&nbsp;</td>
											      <td><a href="index.php"><img src="images/buy.jpg" width="127" height="41"></a></td>
										         </tr>
											    <tr>
											      <td height="114">&nbsp;</td>
											      <td>&nbsp;</td>
										         </tr>
									    </table></td>
									  <td width="22"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></td>
									</tr>
							  </table>
							  </td>
							</tr>
						  </table>
						  </td>
					</tr>
					<tr>
					  <td height="58" class="footer">
						  <table width="989"  border="0" cellspacing="0" cellpadding="0">
							<tr>
							  <td width="458" height="25" align="right" class="txt">Payments by Paypal &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Administrator&nbsp; |&nbsp;Registered Customer&nbsp;&nbsp;|&nbsp;&nbsp;</td>
							  <td width="125" class="txt">New Customer</td>
							  <td width="406" align="center" class="txt">Copyright &copy; <a href="#" id="wht2">Hammad & Govinda corporation</a>. All Rights Reserved</td>
							</tr>
						  </table>
					  </td>
					</tr>
				  </table>
		  
		  </td>
	  </tr>
	</table>

</body>
</html>
