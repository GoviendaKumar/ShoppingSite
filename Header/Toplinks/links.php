<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
                <?php
				    session_start();
				  if(!isset($_SESSION['customerID'])&&!isset($_SESSION['username']))
				  {
				  ?>
                  <td width="245" align="right"> <a href="../Forms/registerationForm.php" class="removeunderline"><span class="toplinks">Register</span></a>
                  <span class="toplinks">|</span>
                   <span><a href="../Forms/signinForm.php" class="removeunderline"><span class="toplinks">Sign in</span></a></span>
                 </td>
                 <?php
				  }
				  else
				  {
					   $activecustomer=$_SESSION['username'];
				?>
                <td width="245" align="right"><span class="toplinks"><?php echo "Welcome "."<span class='activecustomer'>".$activecustomer."</span>"; ?></span>
                  <span class="toplinks">|</span>
                   <span><a href="../Forms/registerationForm.php?acountedit" class="removeunderline"><span class="toplinks">Settings</span></a></span>
                   <span class="toplinks">|</span>
                   <span><a href="../Actions/SignoutAction.php" class="removeunderline"><span class="toplinks">Sign out</span></a></span>
                 </td>
                 <?php 
				  }
				  ?>
</body>
</html>