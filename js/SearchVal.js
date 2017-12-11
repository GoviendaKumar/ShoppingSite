// JavaScript Document


function Cvalid()
{
  var form=document.Search;
  
   var Category=document.getElementById("Category");
   
    var Cvalue=Category.options[Category.selectedIndex].value;
	if(Cvalue=="")
	{
		document.getElementById("error_category").innerHTML="Please first select a category for search";
			form.Category.focus();
			return false;
	}
	else
	{
		document.getElementById("error_category").innerHTML="";
			form.Category.focus();
			return true;
	}
	return true;
}