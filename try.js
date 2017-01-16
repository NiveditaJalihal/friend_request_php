function process1()
{	

var pwd2=document.getElementById("pwd1").value;
var pwd3=document.getElementById("pwd2").value;
	
	if(pwd2==pwd3)
	{
		document.getElementById("dis").innerHTML='&#x2713;';
		
	}
	else
	{
		document.getElementById("dis").innerHTML='<span style="color:red">&#10006</span>';
		
	}
}


