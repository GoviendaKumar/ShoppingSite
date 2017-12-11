<?php
if ($_POST['amount'])
{
session_start();
$_SESSION["Payment_Amount"] = $_POST['amount'];
$_SESSION["Payment_Option"] = "PayPal";
header('Location: billing.php');
}
?>
