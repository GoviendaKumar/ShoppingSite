<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign in action</title>
</head>

<body>
<?php 
    include("connection.php");
	
	    $username=$_POST['username'];
		$username=trim($username);
		
		$password=$_POST['password'];
		$password=trim($password);
		
		$sql="SELECT *
		      FROM userloginid
			  WHERE username='$username' AND password='$password'";
		$result=mysql_query($sql);
		if(!$result)
		{
			die('Invalid Query' . mysql_error());
		}
		else
		{
			$row=mysql_fetch_array($result);
			$customerID=$row['customerID'];
			$username=$row['username'];
			//echo $customerID;
			if(isset($customerID))
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['customerID']=$customerID;
				if($username=="admin")
				{
					header("location:../Admin/ViewCustomer.php");
					exit;
				}
				else
				{
				//$customerID=$_SESSION['customerID'];
				//$username=$_SESSION['username'];
				  				  header("location:../index.php?");
				//header("location:../index.php?customerID=".$_SESSION['customerID'] ."&username=".$_SESSION['username']);
				exit;
				}
			}
			else
			{
				header("location:../Forms/signinForm.php?invalid_un_pwd");
				exit;
			}
		}
		
	?>
</body>
</html>