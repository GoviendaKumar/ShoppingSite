// JavaScript Document
function DeleteCustomer(customerID)
{
	//alert(customerID);
	
	
	if(customerID!=43)
	{
		var Confirm=confirm("Are you sure you want to delete this customer?");
		if(Confirm)
		{
		   window.location="../Actions/DeleteCustomerAction.php?customerID="+customerID;
		}
	}
	else
	{
		alert("You are not able to delete Admin account");
		window.location="../Admin/ViewCustomer.php";
	}
	
}