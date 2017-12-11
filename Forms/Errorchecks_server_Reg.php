<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checks of Register</title>
</head>

<body>
                              
                              <?php
							     if(isset($_GET['sameusername']))
								 {
							  ?>
                                    <p class="ServerSideMsgs">User name already exist</p>
                                 <?php
								   
								 }
								 else if(isset($_GET['sameperson']))
								 {
								?>
                                     <p class="ServerSideMsgs">You are already registered in our website</p>
                                     <script>
									    window.history.back();
										</script>
                                <?php
								 }
								 else if(isset($_GET['Duplicate']))
								 {
								 ?>
                                      <p class="ServerSideMsgs">This user already exist</p>
                                      <?php 
								 }
								 ?>
</body>
</html>