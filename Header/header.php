<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>header</title>
</head>

<body>
 <table width="990px"  border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                  <?php
				    include("Toplinks/links.php");
				  ?>
                  </tr>
	 <tr>
		<td height="85px" align="left" valign="top" class="header">
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<tr>
					   <td width="20%" height="85px">&nbsp;</td>
					   <td width="80%">
                         <form name="Search" method="post" action="../Actions/SearchAction.php" onsubmit='return Cvalid();'>
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
			      if($_SESSION['username']=="admin"||$_SESSION['username']=="ADMIN")
				  {
					  include("../Navigationmenu/DropDownMenu4admin.php");
				  }
				  else 
				  {
				     include("../Navigationmenu/DropDownMenu.php");
				  }
			   }
			   else
			   {
				   include("../Navigationmenu/DropDownMenu.php");
			   }
			   
			  ?>
             </td>
           </tr> 
          </table>
</body>
</html>