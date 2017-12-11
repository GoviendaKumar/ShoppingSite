// JavaScript Document
function DeleteProduct(productID)
{
	var Confirm=confirm("Are you sure you want to delete this product?");
	if(Confirm)
	{
		window.location="../Actions/deleteproductAction.php?productID="+ productID;
	}
	
}