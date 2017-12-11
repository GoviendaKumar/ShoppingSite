<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searched Products</title>
 <link type="text/css" href="../css/Main.css" rel="stylesheet" />  
    <script type="text/javascript" src="../js/DeleteConfirmation.js"> </script> 
    <script type="text/javascript" src="../js/SearchVal.js"></script>
     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script> 
<style>

</style>
</head>
<body>
<?php  
   ob_start();
   include("connection.php");
   
?>
                                 <?php  include ("../Header/header.php");?>
<br/>
  
    <table width="990px" align="center"  border="0" >
    
            <tr>
            <td>
            <p class="InfoSearch">Products</p>
    <hr/>
                <table width="120px" border="0" cellspacing="15px"  cellpadding="10px" align="center" > 
   <?php                     
          $pname="";$pprice=""; $getproducts; $name=false; $price=false;  
		  if(isset($_GET['Menu'])&&isset($_GET['Category']))
		  {
			   $Category= $_GET['Category'];
		  }
		  else
		  {
			  
              $Category= $_POST['Category'];
              $pname=$_POST['pname'];
	          $pname=trim($pname);
	
              $pprice=$_POST['pprice'];
	          $pprice=trim($pprice);
          }
   if($pname!="")
   {
	   $pname=ucfirst(strtolower($pname));
	   $name=true;
	    $getproducts = "SELECT `productID`,`pname`,`pprice`,`pimg`,`pgender`,`pqty`
		                  FROM `product`
						  WHERE pcate='$Category' AND pname LIKE '%$pname%'";
			
   }
   if($pprice!="")
   {
	   $price=true;
	   if($name) 
	   {
		    $getproducts = "SELECT `productID`,`pname`,`pprice`,`pimg`,`pgender`,`pqty`
		                  FROM `product`
						  WHERE pcate='$Category' AND pname='$pname' AND pprice='$pprice'";
	   }
	   else
	   {
                   $getproducts = "SELECT `productID`,`pname`,`pprice`,`pimg`,`pgender`,`pqty` 
		                  FROM `product`
						  WHERE pcate='$Category' AND pprice='$pprice'";
	   }
   }
   else if(!$name&&!$price)
   {
	   $getproducts = "SELECT `productID`,`pname`,`pprice`,`pimg`,`pgender`,`pqty`
		                  FROM `product`
						  WHERE pcate='$Category'";
	   
   }
   
  /*
   $pcate= $_POST['pcate'];
   $pgender= $_POST['pgender'];
   $psize= $_POST['psize'];
   $pcolor= $_POST['pcolor'];
   $pprice= $_POST['pprice'];
   $pCprice= $_POST['pCprice'];
   $pqty= $_POST['pqty'];
   $pdate= $_POST['pdate'];
   $pdisc=$_POST['pdisc'];
   $pimg= $_POST['pimg'];
   */
   		   
											 
				$result=mysql_query($getproducts);  
				if(!$result)
				{
						die('Invalid query' . mysql_error());
				}
				else
			    {
					       $row=mysql_fetch_array($result);
					       if(!$row)
					       {
							?>
                            <script>
							 alert("No result found");
							 </script>
                         <?php   
						    // header("location:../index.php");
					       }
						 else
						{
					
	                      echo "<tr>";  
				          $counter=0;
				        do
				        {
				 ?>
                        
	                         <td class="white">
                             <table border="0" align="center">
                             <tr><td class="white">
                               <a href="ProductDetail.php?productID=<?php echo $row["productID"];?>"><img src="<?php echo $row["pimg"]; ?>" width="120px" height="120px" /></a> 
                              </td></tr>
                             <tr><td class="white"><span class="pink">Name :</span> <?php echo " ".$row["pname"]; ?></td></tr>
                             <tr><td class="white"><span class="pink">Price :</span><?php echo " Rs. ".$row["pprice"]; ?></td></tr>
                             <tr><td class="white"><span class="pink">For :</span><?php echo " ".$row["pgender"]; ?></td></tr>
                             <tr><td class="white"><span class="availibilty"><?php if($row["pqty"]==0){ echo "<span class='Notavailibilty'>"." Not Available"."</span>";}else{ echo " Available";}  ?></span></td></tr>
                             <tr><td class="white"><?php if($row["pqty"]!=0){?><form action='../Paypal/index.php' METHOD='POST'>
												<input type="hidden" name="amount" value="<?php echo $row["pprice"];?>"><br>
												<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt=							'Check out with PayPal'/>
												</form></td></td><?php }else{ echo "&nbsp;";}?></td></tr> 
                             <tr><td><a href="ProductDetail.php?productID=<?php echo $row["productID"];?>">Details</a> </td></tr>
                              </table>
                             </td>
                        <?php
						$counter++;
						if($counter==4)
						{
							echo "</tr>"; echo "<tr>";
							$counter=0;
						}
				      }while($row=mysql_fetch_array($result));
				    }
				}// end of else block
			   ob_end_flush();
	      ?> 
      </table>
      </td>
     </tr>
     </table>
    
    <br/><br/><br/><br/><br/><br/>
   
	<?php include("../Footer/footer.php"); ?>
    
    </body>

</html>   