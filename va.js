 function formValidation() 
 {
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var usn = document.getElementById("idusn").value;
var email = document.getElementById("idemail").value;
var password1 = document.getElementById("pwd1").value;
var password2 = document.getElementById("pwd2").value;
var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
var c= 0;


	if (fname=="")
	{
		document.getElementById("fnamestatus").innerHTML="fill the firstname";
		c++;
		return false;
	}
		
	if (lname=="")
	{
		document.getElementById("lnamestatus").innerHTML="fill the last name";
		c++;
		return false;
	}
	if (usn=="")
	{
		document.getElementById("status").innerHTML="fill the usn";
		c++;
		return false;
		
	}
	if(usn.length!=10)
		{
		document.getElementById("status").innerHTML="enter 10 digit usn";
		c++;
		return false
		
		}
	if (email=="")
	{
		document.getElementById("emailstatus").innerHTML="fill the email";
		c++;
		return false;
	}
		
		
		if(!pattern.test(email)){         
		   
		 
    
		document.getElementById("emailstatus").innerHTML="enter valid email";
		c++;
		return false;
	}
	
	if (password1==""|| password1.length<=6)
	{
		document.getElementById("pwd1status").innerHTML="greater than 6 character";
		c++;
		return false;
	}
	if (password2=="")
	{
		document.getElementById("dis").innerHTML="enter";
		c++;
		return false;
	}
	if(password1!=password2)
	{
		document.getElementById("dis").innerHTML="password not matched";
		c++;
		return false;
	}
	if(c==0)
	return true;
	}

		
 