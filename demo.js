var idu = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {

	var xmlHttp;

	if (window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsofot.XMLHTTP");
		} catch (e) {
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		} catch (e) {
			xmlHttp = false;
		}
	}

	if (!xmlHttp) {
		alert("Could not create XML Object");
	} else {
		return xmlHttp;
	}
}

function process() {


		var  usn= encodeURIComponent(document.getElementById("idusn").value);
		var status=document.getElementById("status")
		idu.open("GET", "demo.php?usn="+usn, true);
		idu.onreadystatechange = handleServerResponse;
		idu.send();

}

function handleServerResponse () {

	if ( idu.readyState==4 )
		if ( idu.status==200) {
		xmlResponse = idu.responseXML;
		xmlDocumentElement = xmlResponse.documentElement;
		message = xmlDocumentElement.firstChild.textContent;
		if(message=="Not uAvailable")
		{
			document.getElementById("status").innerHTML = '<span style="color:green">Available</span>';
		}
		else if(message=="uAvailable") 
		{
		document.getElementById("status").innerHTML ='<span style="color:red">Already Registered</span>' ;
		

		
		}
		//document.getElementById("status").innerHTML = message;
}}

		
