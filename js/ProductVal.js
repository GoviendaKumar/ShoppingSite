// JavaScript Document
count=0;
function valid()
{
		 var form=document.addproduct;
		 testpname(form.pname.value);
		 testpcategory(form.pcate.value);
		 testpsize(form.psize.value);
		 testpcolor(form.pcolor.value);
		 testpprice(form.pprice.value);
		 testpCprice(form.pCprice.value);
		 testpqty(form.pqty.value);
	//	testpdate(form.pdate.value);
		 testpimg(form.pimg.value);
		 
		 if(count!=8)
		 {
			 count=0;
			 return false;
		  }
		  else
		  {
			  form.submit();
			  return true;
		  }                             	 
		 function testpname(pn)                //Conditions for product name
		 {
			 pn=Trim(pn);
			 if(pn=="")
		     {
				   document.getElementById("error_pn").innerHTML="Please fill out this field";
				   form.pname.focus();
		     }
		     else if(pn.length>26||pn.length<2)
		     {
			       document.getElementById("error_pn").innerHTML="Please enter valid name";
				    form.pname.focus();
		     }
		     else 
		     {
			       document.getElementById("error_pn").innerHTML="";
				   count++;
		     }
		 }
		 
		  function testpcategory(pcate)                     //Conditions for product category
	      {
		      if(pcate=="")
		      {
				  document.getElementById("error_pca").innerHTML="Please select any category";
				  form.pcate.focus();
		      }
		      else 
		      {
				  document.getElementById("error_pca").innerHTML="";
				  count++;
		      }
		  }
		  function testpsize(ps)
		  {
			 ps=Trim(ps);
		     if(ps=="")
		     {
			    document.getElementById("error_ps").innerHTML="Please fill out this field";
				form.psize.focus();
		     }
		     else 
		     {
			       document.getElementById("error_ps").innerHTML="";
				   count++;
		     }
		  }
		  function testpcolor(pc)
		  {
			  pc=Trim(pc);
			  
			  if(!isAlphaComma(pc))
			  {
				  document.getElementById("error_pc").innerHTML="Please write colors seperated with comma";
				  form.pcolor.focus();
			  }
		      else 
		      {
			       document.getElementById("error_pc").innerHTML="";
				   form.pcolor.focus();
				   count++;
		      }
		  }
		  function testpprice(pp)
		  {
			  pp=Trim(pp);
			  if(pp=="")
			  {
				  document.getElementById("error_pp").innerHTML="Please fill out this field";
				  form.pprice.focus();
			  }
			  else if(!isNumeric(pp))
			  {
				  document.getElementById("error_pp").innerHTML="Price contains only Numeric values";
				  form.pprice.focus();
			  }
		      else 
		      {
			      document.getElementById("error_pp").innerHTML="";
				  count++;
		      }
		  }
		  function testpCprice(pCprice)
		  {
			  pCprice=Trim(pCprice);
			  if(pCprice=="")
			  {
				  document.getElementById("error_pcp").innerHTML="Please fill out this field";
				  form.pCprice.focus();
			  }
			  else if(!isNumeric(pCprice))
			  {
				  document.getElementById("error_pcp").innerHTML="Cost price contains only Numeric values";
				  form.pCprice.focus();
			  }
		      else 
		      {
			       document.getElementById("error_pcp").innerHTML="";
				   count++;
		      }
		  }
		  function testpqty(pqty)
		  {
			  pqty=Trim(pqty);
			  if(pqty=="")
			  {
				  document.getElementById("error_pq").innerHTML="";
				  count++;
			  }
			  else
			  if(!isNumeric(pqty))
			  {
				  document.getElementById("error_pq").innerHTML="Quantity contains only Numeric values";
				  form.pqty.focus();
			  }
		      else 
		      {
			       document.getElementById("error_pq").innerHTML="";
				   count++;
		      }
		  }
		  /*
		  function testpdate(pdate)
		  {
			 pdate=Trim(pdate);
		     if(pdate=="")
		     {
			    document.getElementById("error_pd").innerHTML="Please fill out this field";
				form.pdate.focus();
		     }
		     else 
		     {
			       document.getElementById("error_pd").innerHTML="";
				   count++;
		     }
			 
		  }
		  */
		  function testpimg(pimg)                //Conditions for product name
		 {
			 pimg=Trim(pimg);
			 if(pimg=="")
		     {
				   document.getElementById("error_pimg").innerHTML="Please select an image for product";
				   form.pimg.focus();
		     }
			 else 
		     {
			       document.getElementById("error_pimg").innerHTML="";
				   count++;
		     }
		 }
}// end of valid() function

	 function isAlpha(n)
	 {
		 var i;
		 for(i=0;i<n.length;i++)
		 {
			 if(n[i]<"a"&&n[i]<"A"||n[i]>"z"&&n[i]>"Z")
			 {
				 return false;
			 }
		 }
		 return true;
	}
	function isAlphaComma(n)
	{
		 
		     n=n.toLowerCase(); 
		 var i;
		 for(i=0;i<n.length;i++)
		 {
			   var c=n.charCodeAt(i);
			    
			 if((c<97||c>122)&&c!=44)
			 {
				 return false;
			 }
		 }
		 return true;
	 }
	 function isNumeric(n)
	 {
		 var i;
		 for(i=0;i<n.length;i++)
		 {
			 if(n[i]<"0"||n[i]>"9")
			 {
				 return false;
			 } 
		 }
		   return true;
	}
	 function Trim(s)
     { 

        while (s.substring(0,1)==' ') // check for white spaces from beginning
        {
            s = s.substring(1,s.length);
        }
        while(s.substring(s.length-1,s.length)==' ') // check white space from end
        {
           s = s.substring(0,s.length-1);
        }
        return s;
    }