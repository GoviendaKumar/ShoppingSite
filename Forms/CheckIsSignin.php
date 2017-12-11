<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checks of Register</title>
</head>

<body>
                              
                              <?php
							    
								  if(!isset($_SESSION['CustomerID'])&&!isset($_SESSION['username']))
								 {
						     ?>
                                    <script>
									     var Confirm=confirm("Do you want to Sign in again?");
										 if(Confirm)
										 {
											 window.location="../Forms/signinForm.php";
										 }
										 else
										 {
											 window.location="../index.php";
										 }
									</script>
                                 <?php
								 }
								 ?>
</body>
</html>