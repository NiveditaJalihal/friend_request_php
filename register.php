<?php
session_start();
include('config.php');


if(isset($_POST['submit']))
{
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$usn = mysql_real_escape_string($_POST['usn']);
$email = mysql_real_escape_string($_POST['email']);	
$password1 = mysql_real_escape_string($_POST['password1']);
$password2 = mysql_real_escape_string($_POST['password2']);
$sem = mysql_real_escape_string($_POST['sem']);
	$counter=0;
  $_SESSION['error']=null;
  $_SESSION['error']['fname']=null;
  $_SESSION['error']['password1']=null;
  $_SESSION['error']['lname']=null;
  $_SESSION['error']['usn'] =null;
  $_SESSION['error']['email']=null;
  $_SESSION['error']['password2']=null;
  $_SESSION['error']['databse']=null;
  
if(empty($fname)){  
$_SESSION['error']['fname'] = "first Name is required.";
$counter++;
}
if(empty($lname)){ 
$_SESSION['error']['lname'] = "last Name is required.";
$counter++;
 }
if(empty($usn)){  
$_SESSION['error']['usn'] = "Usn  is required.";
$counter++;
}
if(empty($email)){ 
$_SESSION['error']['email'] = " email is required.";;
 $counter++;
 }
 if (empty($password1)){
$_SESSION['error']['password1'] = " password is required."; 
$counter++;
 }
if(empty($password2)){  
$_SESSION['error']['password2'] = "retype password is required.";
$counter++;
}

$sql = "SELECT `email` FROM `signup` WHERE `email` = '$email'";
$myquery = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($myquery) !=0)
	{
$_SESSION['error']['email'] = "$email already registered.";
	$counter++;
	}
$sql = "SELECT `usn` FROM `signup` WHERE `usn` = '$usn' && `valid`=1";
$myquery = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($myquery) !=0)
	{
		$_SESSION['error']['usn'] = "$usn is already registered.";
	$counter++;
	}
 
 if($counter)
 {
	
  header("Location: index.php");
  exit;
 }
else
{
$keyi=md5(uniqid(rand()));	
$add = mysql_query("INSERT INTO `signup` VALUES(NULL,'$fname','$lname','$usn','$email','$password2','$sem','$keyi','NULL','default.jpg')");

}         
if($add)
  {
   $to = $email;
   $subject = "Confirmation from SDMCET_CONNECT";
   $header = "SDMCET_CONNECT: Confirmation from admin";
   $message = "Please click the link to verify and activate your account. rn";
   $message .= "http://www.sdmcetconnect.in/confirm.php?passkey=$keyi&&usn=$usn";
   $message.="                                                                                            
  
  
   For any query mail at sk.niraj3128@gmail.com";
   				

   $sentmail = mail($to,$subject,$message,$header);

   if($sentmail)
            {
   echo "Your Confirmation link Has Been Sent To Your Email Address.
   Please also check spam folder.";
   }
   else
         {
    echo "Cannot send Confirmation link to your e-mail address";
   }
 }
}
?>













