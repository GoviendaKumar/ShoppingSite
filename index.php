<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Paras Handicrafts</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">/-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="css/Main.css" rel="stylesheet" type="text/css">
  <link type="text/css" href="css/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/SearchVal.js"></script>
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
                                          <form name="Search" method="post" action="Actions/SearchAction.php?DDD" onsubmit='return Cvalid();'>
                           <table width="790px"  border="0" cellspacing="0" cellpadding="0">
							   <tr>
								  <td width="61px" height="25px" align="center" class="Title"></td>
											<td width="10px">&nbsp;</td>
											<td width="245px" align="left"> 
                                                <span class="Search Title">Category<sup>*</sup></span>&nbsp;
											  <select name="Category" id="Category" class="Searchfield">
												<option value="">Select a category</option>
                                                <option value="shawl">Shawls</option>
                                                <option value="stole">Stoles</option>
                                                <option value="sweater">Sweaters</option>
                                                <option value="scarf">Scarfs</option>
                                                <option value="coats">Coats</option>
                                                <option value="shirt">Shirts</option>
											  </select> 
                                              </td>
									
											<td width="182px" align="center" class="txt">
                                               <span class="Search Title">Name</span>&nbsp;
                                                <input type="text" name="pname" value="" class="Searchfield"/>                                              
                                              </td>
											
											<td width="263px">
                                            &nbsp;&nbsp;&nbsp;
												<span class="Search Title">Price</span>&nbsp;
                                                <input type="text" name="pprice" value="" class="price"/>	
                                                <input type="submit" name="Search" value="GO" class="buttonDesign go mouseon_button" onclick="function Cvalid()"/>
											</td>
										  </tr>
										</table>
                                        </form></td>
									  </tr>
									</table>
						</td>
				  </tr>
                  <tr>
           <td id="error_category" class="errorfield" style="text-align:right;"></td>
           </tr> 
                  <tr>
                  <td>
				     <?php 
			            if(isset($_SESSION['username']))
			            {   
			               if($_SESSION['username']=="admin")
				           {
							      
					              include("Navigationmenu/DropDownMenu4admin.php");
								  header("location:Admin/ViewCustomer.php");
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
					  <td width="209" height="363">
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19">Categories</div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=shawl" class="parent">Shawl</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=stole" class="parent">Stoles</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=sweater" class="parent">Sweaters</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=scarf" class="parent">Scarfs</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=coats" class="parent">Coats</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"><a href="Actions/SearchAction.php?Menu&Category=shirt" class="parent">Shirts</a></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"></div>
						<div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"></div>
					  <div class="button1"><img src="images/spacer.gif" alt="" width="25" height="19"></div>		  </td>
					  <td width="534"><img src="images/shop.jpg" width="590" height="373" border="0"></td>
					  <td width="247">
							  <table width="246"  border="0" cellspacing="0" cellpadding="0">
								<tr>
								  <td><a href="http://www.templatesfreelance.com/"><img src="images/banner1.jpg" alt="" width="247" height="205" border="0"></a></td>
								</tr>
								<tr>
								  <td><img src="images/banner2.jpg" alt="" width="247" height="166" border="0"></td>
								</tr>
							  </table>
					  </td>
					</tr>
				  </table>
		  
				  <table width="990"  border="0" cellspacing="0" cellpadding="0">
					<tr>
						  <td height="649" align="left" valign="top" class="tbody">
						  <table width="990" height="636"  border="0" cellpadding="0" cellspacing="0">
							<tr align="left" valign="top">
							  <td width="209" height="636"><img src="images/paypal.jpg" width="211" height="258"></td>
							  <td width="781">
							  <table width="780" height="644"  border="0" cellpadding="0" cellspacing="0">
									<tr align="left" valign="top">
									  <td width="23" height="382"><a href="http://www.templatesfreelance.com/"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></a></td>
									  <td width="735">
											  <table width="734"  border="0" cellspacing="0" cellpadding="0">
												<tr>
												  <td>&nbsp;</td>
												</tr>
												<tr>
												  <td><span class="style1"><h4 class="justify">Experts in Pashmina</h4></span></td>
												</tr>
												<tr>
												  <td><img src="images/hr.jpg" alt="" width="731" height="12"></td>
												</tr>
												<tr>
												  <td height="62"><p class="justify">Pashmina shawls have been manufactured in Nepal and Kashmir for thousands of years. The test for a quality pashmina is warmth and feel. Pashmina and Cashmere are derived from mountain goats. One distinct difference between Pashmina and Cashmere is the fiber diameter. Pashmina fibers are finer and thinner than cashmere fiber, therefore, it is ideal for making light weight apparel like fine scarves.</p></td>
												</tr>
											  </table>
												<table width="734"  border="0" cellspacing="0" cellpadding="0">
												  <tr>
													<td><img src="images/a1.jpg" width="731" height="25"></td>
												  </tr>
												  <tr>
													<td>
														<table width="734"  border="0" cellspacing="0" cellpadding="0">
														  <tr>
															<td width="58"><img src="images/a2.jpg" alt="" width="58" height="268" border="0"></td>
															<td width="198"><img src="images/Gucci1.jpg" width="178" height="269" border="0"></td>
															<td width="10"><img src="images/fendi1.jpg" width="199" height="257" border="0"></td>
															<td width="366"><img src="images/coat1.jpg" width="198" height="247" border="0"></td>
															<td width="102"><img src="images/a6.jpg" alt="" width="63" height="268" border="0"></td>
														  </tr>
														</table>
													</td>
												  </tr>
												  <tr>
													<td><img src="images/a7.jpg" width="731" height="26"></td>
												  </tr>
												</table>
												<table width="734"  border="0" cellspacing="0" cellpadding="0">
												  <tr>
													<td height="22"><a href="http://www.templatesfreelance.com/"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></a></td>
												  </tr>
												</table>
												<table width="734" height="188"  border="0" cellpadding="0" cellspacing="0">
												  <tr>
													<td width="303"><h2 class="justify">King of Shawls</h2>
													  <p class="justify"><b>Shahtoosh</b> is the most expensive wool in the world and is used to make articles of clothing such as shawls and scarves. It is extremely lightweight and soft, yet is surprisingly warm. The fibers are extremely thin – approximately six times thinner than the size of a human hair. Generally, the wool comes from Tibetan antelope fur, specifically the very fine undercoat; the animal is also known as the Chiru.<br>
											        </p></td>
													<td width="39" align="center"><img src="images/as.gif" alt="" width="9" height="150"></td>
													<td width="392"><img src="images/shahtoosh.jpg" width="371" height="240" alt=""></td>
												  </tr>
												</table>
									  </td>
									  <td width="22"><a href="http://www.templatesfreelance.com/"><img src="images/spacer.gif" alt="" width="10" height="10" border="0"></a></td>
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
