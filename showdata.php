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
    <link href="cs/styleTemp.css" rel="stylesheet" type="text/css">  
    <script type="text/javascript" src="js/DeleteConfirmation.js"> </script>  
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
<br/>
  <center><h1 class="white">Customer Data</h1></center>
  <center><h2 class="white"><a href="Forms/registerationForm.php">Registeration</a></h2></center>
<br/><br/><br/>
   <center> <table width="74%" height="127%" border="1"  cellpadding="5px" cellspacing="0">
        <tr>
    <th  class="white">Sr.No </th>
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
            <td class="white" >  <?php echo $i; ?> </td>
            <td class="white">  <?php echo $row["fname"]; ?> </td>
            <td class="white">  <?php echo $row["lname"]; ?> </td>
            <td class="white">  <?php echo $row["gender"]; ?> </td>
            <td class="white">  <?php echo $row["paddress"]; ?> </td>
            <td class="white">  <?php echo $row["city"]; ?> </td>
            <td class="white">  <?php echo $row["mobile"]; ?> </td>
            <td class="white">  <?php echo $row["email"]; ?> </td>
            <td class="white">  <?php echo $row["username"]; ?> </td>
            <td class="white"> <a href="Forms/editcustomerForm.php?customerID=<?php echo $row["customerID"];?>">Edit</a>| <a href="javascript:DeleteCustomer(<?php echo $row["customerID"];?>)">Delete</a>| Details</td>
          </tr>
          <?php
		       $i++;
		}
		   ?> 
</table></center>
</body>
</html>