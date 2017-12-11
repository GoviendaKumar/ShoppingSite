<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Product Detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

 <link type="text/css" href="../css/Main.css" rel="stylesheet" />
     <script type="text/javascript" src="../js/RegformVal.js"></script>
     <script type="text/javascript" src="../js/SearchVal.js"></script>
     <script type="text/javascript" src="../js/CommentVal.js"></script>
     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    
    
    
</head>
<body>


                          <?php  include ("../Header/header.php");?>
<?php
     include("connection.php");
    if(isset($_GET['productID']))
	{
		$productID=$_GET['productID'];
		
		$query="SELECT * FROM product WHERE productID='$productID'";
		$result=mysql_query($query);
		 $row=mysql_fetch_array($result);
		if(!$result)
		{
		   echo "<span style='color:white;'>"."Invalid query". mysql_error(). "</span>";
		}
		else
		{
?>
                          
                          
                             <!--  Customer Name /-->  
     <table width="990px" border="0" align="center">
     <tr>
     <td>                                  
      <!--<p class="formpurpose Regformpurpose"> Fill the following fields to register, fields with * are must</p>
      <hr class="hrLine"/>-->
    
<p class="InfoCategory">Product detail</p> 
<hr class="hrLine"/>
    
<table width="600px" border="0" align="center">
<tr>
   <td align="center"><img src="<?php echo $row["pimg"];?>" width="600px" height="400px" ></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td class="ProductProperties" align="center"><h3>Description</h3></td>
</tr>
<tr>
<td class="ProductDescription" align="left"><?php echo $row["pdisc"];?></td>
</tr>
<tr>
   <td>
       <table width="100%" border="0" align="center">
       <tr>
         <td>
            <table width="400px" border="1" align="center" style="table-layout:groove;">
              <tr>
                <td class="ProductProperties">Category</td>
                <td class="ProductDescription"><?php echo ucfirst($row["pcate"]);?></td>
             </tr>
             <tr>
                <td class="ProductProperties">Name</td>
                <td class="ProductDescription"><?php echo $row["pname"];?></td>
             </tr>
             <tr>
                <td class="ProductProperties">Size</td>
                <td class="ProductDescription"><?php echo $row["psize"];?></td>
             </tr>
              <tr>
                <td class="ProductProperties">Colors</td>
                <td class="ProductDescription"><?php echo $row["pcolor"];?></td>
             </tr>
              <tr>
                <td class="ProductProperties">Price</td>
                <td class="ProductDescription"><?php echo "Rs. ".$row["pprice"];?></td>
             </tr>
              <td>&nbsp;</td>
                <td class="ProductDescription"><?php if($row["pqty"]!=0) {?><form action='../paypal/index.php' METHOD='POST'>
												<input type="hidden" name="amount" value="<?php echo $row["pprice"];?>"><br>
												<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt=							'Check out with PayPal'/>
												</form><?php }else { echo "&nbsp;"; }?></td></td>


             <tr>
             </tr>
             </table>
         </td>
      </tr> 
      </table>         
   </td>
</tr>
<tr>
<td>
    <table width="80%" height="3%" border="0" align="left">
      <?php
	       $showcomments=true;
	      $query="SELECT * FROM comments WHERE productID='$productID'";
		   $result=mysql_query($query);
		   if(!$result)
		   {
		        echo "<span style='color:white;'>"."Invalid query". mysql_error(). "</span>";
		   }
		   else
		   {
		                   $row=mysql_fetch_array($result);   
					       if(!$row)
					       { 
							   $showcomments=false;
						   }
						   
				if($showcomments)
				{
				   do
				   {		   
		                   $customerID=$row['customerID'];
						   $query="SELECT `fname`,`lname` FROM customer WHERE customerID='$customerID'";
						    $result1=mysql_query($query);
							$row1=mysql_fetch_array($result1);
	       
                          echo "<tr>";
                               echo "<td class='CustomerName'>".$row1['fname']." ".$row1['lname']." : "."<span class='ProductDescription'>".$row['comment']."</span>"."</td>";
							   echo "</tr>"; 
				   }while($row=mysql_fetch_array($result));
				}
		   }
		 ?>
        </table>
      </td>
</tr>
<tr>
<td align="center"><br/><hr />
<?php 
if(isset($_SESSION['customerID'])&&isset($_SESSION['username']))
{
?>
  <form name="comments" method="post" action="CommentAction.php" onSubmit="return CommentVal();">
     <input name="customerID" type="hidden" value="<?php  echo $_SESSION["customerID"];?>" class="textfield"/></span>
     <input name="productID" type="hidden" value="<?php  echo $productID; ?>" class="textfield"/></span>
     <span > <input name="comment" type="text" class="PlaceHolder" size="25%" placeholder="Write a comment"/></span>
     <span> <input type="submit" value="Comment" class="buttonDesign mouseon_button" onClick="function CommentVal()" /></span>
     </form>
<?php }
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
<?php 
             }//end of inner else
} // end of outer if ?>
   <?php  include ("../Footer/footer.php");?>
</body>
</html>
