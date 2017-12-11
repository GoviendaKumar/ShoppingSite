<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Customer Data</title>
             <!-- CSS files attachment /-->
  <!-- <link href="CSS/mystylessheet.css" type="text/css" media="screen" rel="stylesheet"/>
   <link href="CSS/menu.css" type="text/css" media="screen" rel="stylesheet"/>
   <link href="CSS/subMenu.css" type="text/css" media="screen" rel="stylesheet"/>
                    <!-- JAVA Script files attachment 
   <script type="text/javascript" src='JavaS/jquery.js'></script>
    <script type="text/javascript" src='JavaS/menu.js'></script>  /-->
    
    <link type="text/css" href="../css/Main.css" rel="stylesheet" />  
    <script type="text/javascript" src="../js/DeleteConfirmation.js"> </script> 
    <script type="text/javascript" src="../js/SearchVal.js"></script>
     <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script> 
<!--	
	function DeleteCustomer(customeriD)
    {
	   // alert(customeriD);
		
	    var Confirm=confirm("Are you sure you want to delete this customer?");
	   if(Confirm)
	   {
		     window.location='deletecustomer.php?customerID='+ customeriD;
	   }
	   
    }
	/-->
   
    <style type="text/css">
	  .white
	  {
		  color:white;
	  }
	  .red
	  {
		  color:red;
	  }
	</style>     
</head>
<body>

<?php
    include("connection.php");
?>
                 <?php  include ("../Header/header.php");?>
<table width="990px" border="0" align="center">
<tr>
<td>                 
<br/>
  <center><h1 class="white">Registered Customer</h1></center>
                            <?php include("Errorchecks_server_ViewCus.php"); ?>
   <table border="1"  cellpadding="0px" cellspacing="0" align="center">
        <tr>
    <th  class="white">Sr.No </th>
    <th  class="white">CustomerID </th>
    <th class="white">First name</th>
    <th  class="white">Last name</th>
    <th  class="white">Gender</th>
     <th  class="white">Peremanet address</th>
      <th  class="white">City</th>
      <th  class="white">Mobile number</th>
      <th  class="white">Email</th>
      <th  class="white">User name</th>
      <th  class="white">Actions</th>
       </tr>

       <?php
	      
		  $i=1;
		  $sql= "SELECT *
		         FROM customer c, userloginid l WHERE c.customerID=l.customerID";
				 $recset=mysql_query($sql);
				 while($row= mysql_fetch_array($recset))
				 {
			
	   ?>
          <tr>
            <td class="white" align="center" >  <?php echo $i; ?> </td>
            <td class="white" align="center">  <?php echo $row["customerID"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["fname"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["lname"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["gender"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["paddress"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["city"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["mobile"]; ?> </td>
            <td class="white" align="center">  <?php echo $row["email"]; ?> </td>
            <td class="white" align="center">  <?php  if($row["username"]=="admin")
			{
			?>
               <span style="color:#0F0;"> <?php echo $row["username"]; ?></span>
            <?php      
			}
			else
			{
				echo $row["username"];
			}
		?>
          </td>
            <td class="white" align="center"> <a href="../Forms/EditCustomerForm.php?customerID=<?php echo $row["customerID"];?>">Edit </a> &nbsp;| <a href="javascript:DeleteCustomer(<?php echo $row["customerID"];?>)">Delete</a></td>
          </tr>
          <?php
		       $i++;
		}
		   ?> 
</table></td></tr></table>
<br/><br/><br/><br/>
<?php include("../Footer/footer.php");?>  

</body>
</html>