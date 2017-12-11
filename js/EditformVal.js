// JavaScript Document
function valid()
{
		 var form=document.registeration;
		// var fname=form.fname.value;
		// var lname=form.lname.value;
		 var okfn=okln=okpaddress=okcity=okmobile=okemail/*=okusername=okpassword=okCpassword*/=true;

		 
		 okfn=testfname(form.fname.value);
		 okln=testlname(form.lname.value);
		 okpaddress=testpaddress(form.paddress.value);
		 okcity=testcity(form.city.value);
		 okmobile=testmobile(form.mobile.value);
		 okemail=testemail(form.email.value);
		 //okusername=testusername(form.username.value);
		 //okpassword=testpassword(form.password.value);
		 //okCpassword=testCpassword(form.password.value,form.Cpassword.value);
		 
		 if(!okfn||!okln||!okpaddress||!okcity||!okmobile||!okemail)//||!okusername||!okpassword||!okCpassword)
		  {
			 
			 return false;
		  }
		  else
		  {
			  form.submit();
			  return true;
		  }
	//Conditions for First name	 
		 function testfname(fn)
		 {
			 fn=Trim(fn);
		 
			 if(fn=="")
		     {
				   document.getElementById("error_fn").innerHTML="Please fill out this field";
				   form.fname.focus();
				   return false;
		     }
		     else if(!validNames(fn))
		     {
			       document.getElementById("error_fn").innerHTML="Enter only first name";
				    form.fname.focus();
				   return false;
		     }
		     else if(!isAlpha(fn))
		     {
			       document.getElementById("error_fn").innerHTML="Name contain only alpha values";
				    form.fname.focus();
				   return false;
		     }
		     else if(fn.length>20||fn.length<3)
		     {
			       document.getElementById("error_fn").innerHTML="Please enter valid name";
				    form.fname.focus();
				   return false;
		     }
		     else 
		     {
			       document.getElementById("error_fn").innerHTML="";
				   return true;
		     }
		 }
//Conditions for Last name
		  function testlname(ln)
	      {
			  ln=Trim(ln);
		      if(ln=="")
		      {
				  document.getElementById("error_ln").innerHTML="Please fill out this field";
				  form.lname.focus();
				  return false;
		      }
		      else if(!validNames(ln))
		      {
				  document.getElementById("error_ln").innerHTML="Enter only last name";
				   form.lname.focus();
				  return false;
		      }
		      else if(!isAlpha(ln))
		      {
				  document.getElementById("error_ln").innerHTML="Name contain only alpha values";
				  form.lname.focus();
				  return false;
		      }
		      else if(ln.length>20||ln.length<3)
		      {
				  document.getElementById("error_ln").innerHTML="Please enter valid name";
				  form.lname.focus();
				  return false;
		      }
		      else 
		      {
				  document.getElementById("error_ln").innerHTML="";
				  return true;
		      }
		  }
		  function testpaddress(pa)
		  {
			  pa=Trim(pa);
		     if(pa=="")
		     {
			    document.getElementById("error_pa").innerHTML="Please fill out this field";
				form.paddress.focus();
				return false;
		     }
		     else 
		     {
			       document.getElementById("error_pa").innerHTML="";
				   return true;
		     }
		  }
		  function testcity(city)
		  {
			  city=Trim(city);
		      if(city=="")
		      {
			      document.getElementById("error_city").innerHTML="Please fill out this field";
				  form.city.focus();
				  return false;
		      }
			  else if(!isAlpha(city))
			  {
				   document.getElementById("error_city").innerHTML="City name contains only alpha values";
				   form.city.focus();
				   return false;
			  }
		      else 
		      {
			       document.getElementById("error_city").innerHTML="";
				   return true;
		      }
		  }
		  function testmobile(mobile)
		  {
			  mobile=Trim(mobile);
		      if(mobile=="")
		      {
			      document.getElementById("error_mobile").innerHTML="Please fill out this field";
				  form.mobile.focus();
				  return false;
		      }
			  else if(!isNumeric(mobile))
			  {
				   document.getElementById("error_mobile").innerHTML="Mobile number must be of numerics characters";
				   form.mobile.focus();
				   return false;
			  }
		      else 
		      {
			       document.getElementById("error_mobile").innerHTML="";
				   return true;
		      }
		  }
		  function testemail(email)
		  {
			  email=Trim(email);
			  if(email=="")
		      {
			      document.getElementById("error_email").innerHTML="Please fill out this field";
				  form.email.focus();
				    return false;
		      }
			  
			  else if(!findAtchar(email))
			  {
				document.getElementById("error_email").innerHTML="Invalid Email"; 
				 form.email.focus();
				return false; 
			  }
			  else if(email[0]=="@")
			  {
				 document.getElementById("error_email").innerHTML="Invalid Email";
				  form.email.focus(); 
				 return false; 
			  }
			  else
			  {
				  document.getElementById("error_email").innerHTML=""; 
				  return true;
			  }
		  }
		/*  
		  function testusername(un)
		  {
			  un=Trim(un);
		      if(un=="")
		      {
			    document.getElementById("error_un").innerHTML="Please fill out this field";
				 form.username.focus();
				return false;
		      }
			  else if(!NumericAlpha(un))
			  {
				   document.getElementById("error_un").innerHTML="Not allowed such characters \"+,-,#,$,%,\"etc.";
				   form.username.focus();
				   return false;
			  }
		      else 
		      {
			       document.getElementById("error_un").innerHTML="";
				   return true;
		      }
		  }
		  function testpassword(pwd)
		  {
			 // var set_pwd=set_Cpwd=true;
			  pwd=Trim(pwd);
			 
		      if(pwd=="")
		      {
			     document.getElementById("error_pwd").innerHTML="Please fill out this field";
				 form.password.focus();
				 return false;
		      }
			  else if(pwd.length<8||pwd.length>16)
			  {
				   document.getElementById("error_pwd").innerHTML="Password length should be from 8 upto 16 characters";
				   form.password.focus();
				   return false;
			  }
			  else if(!NumericAlpha(pwd))
			  {
				   document.getElementById("error_pwd").innerHTML="Not allowed such characters \"+,-,#,$,%,\"etc.";
				   form.password.focus();
				   return false;
			  }
			  /*
		      else 
		      {
			       document.getElementById("error_pwd").innerHTML="";
				 //  set_correct=true;
		      }
			  
			  else if(pwd!=Cpwd)
			  {
				  document.getElementById("error_Cpwd").innerHTML="Password and Confirm password doesn't matched";
				  form.Cpassword.focus();
				  return false;
			  }
			  
			  
		      else 
		      {
			   //    document.getElementById("error_Cpwd").innerHTML="";
				   document.getElementById("error_pwd").innerHTML="";
				   return true;
		      }
			  /*
			  if(Cpwd=="")
		      {
			     document.getElementById("error_Cpwd").innerHTML="Please fill out this field";
				 form.Cpassword.focus();
				 return false;
		      }
			 
		  }
		  function testCpassword(pwd,Cpwd)
		  {
			   pwd=Trim(pwd);
			   Cpwd=Trim(Cpwd);
			  if(Cpwd=="")
		      {
			     document.getElementById("error_Cpwd").innerHTML="Please fill out this field";
				 form.Cpassword.focus();
				 return false;
		      }
			  else if(pwd!=Cpwd)
			  {
				  document.getElementById("error_Cpwd").innerHTML="Password and Confirm password doesn't matched";
				  form.Cpassword.focus();
				  return false;
			  }
			  else
			  {
				  document.getElementById("error_Cpwd").innerHTML="";
				  return true;
			  }
		  }
		  */
		  
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
	function findAtchar(email)
	{
		var i;
		for(i=0;i<email.length;i++)
		{
			if(email[i]=="@")
			{
				return true;
			}
		}
		return false;
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
	function validNames(n)
	{
			 var i;
		     for(i=0;i<n.length;i++)
		     {
			      if(n[i]==" ")
			      {
				      return false;
			      }
		     }
		     return true;
	 }
	 function NumericAlpha(n)
	 {
		 var i;
		 for(i=0;i<n.length;i++)
		 {
			 if(n[i]<"a"&&n[i]<"A"&&n[i]<"0"||n[i]>"z"&&n[i]>"Z">n[i]>"9")
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