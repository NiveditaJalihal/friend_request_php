<!doctype html>
<html>
<head>
<title>SDMCET CONNECT</title>
<meta charset="utf-8">
<link rel="stylesheet" style="text/css" href="index_page.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="demo.js"> </script>
<script type="text/javascript" src="va.js"></script>
<script type="text/javascript" src="try.js"></script>


</head>
<body>
<div class="container-fluid">
<div class="row id="logo">
<div class="cl-xs-12"></div>
</div>
<div class="row" id="logo">
<div class="col-xs-7" > <img src="LOGO.png" alt="sdmcet logo" height="100px" width="750px" ></div>
 <div class="col-xs-2">
  <form role="form" action="loginverify.php" method="post" id="login-form" autocomplete="off" >
                        <div class="form-group">
						<br>
                            <label for="usn" >USN</label>
                            <input type="usn" name="usn" id="usn" class="form-control" placeholder="USN">
                        </div></div>
						 <div class="col-xs-2">
                        <div class="form-group">
						<br>
                            <label for="key" >Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
							<a href="forgotpassword.html" class="forget" >Forgot your password?</a>
                        </div></div>
						<br>
						<br>
						 <div class="col-xs-1">
                        <input name="submit" type="submit" id="btn-login" class="btn btn-md btn-info btn-block " value="Log in">
                    </div>
					</form>
 
 </div>
 <div class="row" id="partition1">
 <div class="col-xs-7">
 <img src="mind_map.JPG" width="795px" height="500px">
 </div>
 <div class="col-xs-5">

 <div class="col-xs-11" >
			<div class="form-wrap">
			<br>
            <form  onSubmit="return formValidation()" action="register.php" name="registration "method="post" accept-charset="utf-8" class="form" role="form" >   
			<legend><b>Sign Up</b></legend>
<?php 
 session_start();
 if(isset($_SESSION['error']))
 {
	echo '<p>'.$_SESSION['error']['fname'].'</p>';
	echo '<p>'.$_SESSION['error']['lname'].'</p>';
	echo '<p>'.$_SESSION['error']['usn'].'</p>';
	echo '<span style="color:red;">'.$_SESSION['error']['email'].'</span>';
	echo '<p>'.$_SESSION['error']['password1'].'</p>';
	echo '<p>'.$_SESSION['error']['password2'].'</p>';	
	session_unset($_SESSION['error']);
	}
?>
					
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
						<div class="input-group">
                            <input type="text" name="fname" id="fname" value="" class="form-control input-lg" placeholder="First Name"  /> <span class="input-group-addon"><span id="fnamestatus"></span></span>                       </div>
						</div>	
						<div class="col-xs-6 col-md-6">
						<div class="input-group">
                            <input type="text" name="lname" id="lname" value="" class="form-control input-lg" placeholder="Last Name"  /><span class="input-group-addon"><span id="lnamestatus"></span></span>                        </div>
                    </div></div>
                    <div class="row">
                        <div class="col-xs-12">
					<div class="input-group">
					<input type="text" name="usn" value="" id="idusn"  onblur="process()" class="form-control input-lg" maxlength="10" placeholder="Your Usn"  />
					
					<span class="input-group-addon"><span id="status"></span></span>
					</div></div></div>
					<div class="row">
                        <div class="col-xs-12">
					<div class="input-group">
					
					<input type="text" name="email"  id="idemail" value="" class="form-control input-lg" placeholder="Your Email" " />
                    <span class="input-group-addon"><span id="emailstatus"></span></span>
					</div></div></div>
					<div class="row">
                        <div class="col-xs-12">
					<div class="input-group">
					<input type="password" name="password1" value="" id="pwd1" class="form-control input-lg" placeholder="Password"  />
					<span class="input-group-addon"><span id="pwd1status"></span></span>
					</div></div></div>
					<div class="row">
                        <div class="col-xs-12">
					<div class="input-group">
					
					<input type="password" name="password2" value="" id="pwd2" class="form-control input-lg" placeholder="Retype Password"  onblur="process1()"/>
					<span class="input-group-addon"><span id="dis"></span></span>
					</div></div></div>
					<label>Semester</label>  
					<div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="sem" class = "form-control input-lg">
<option value="01" name="sem">01</option>
<option value="02" name="sem">02</option>
<option value="03" name="sem">03</option>
<option value="04" name="sem">04</option>
<option value="05" name="sem">05</option>
<option value="06" name="sem">06</option>
<option value="07" name="sem">07</option>
<option value="08" name="sem">08</option>

</select>                        </div></div>

                    </div>
                     
                    <br />
              <span class="help-block">By clicking submit button, a verification link will be sent to your email. </span>
                    <input class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit" id="submit" />
                       
            </form> 
</div>			
          </div>
</div>            
</div>
</div>
</div>
		</div> <!-- /.row -->
    </div> <!-- /.container -->
 </div>
 </div>
 
 </div>
 <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-7 col-xs-offset-4">
			
                <p>sdmcetconnect.in ©2015-2016</p>
            </div>
        </div>
    </div>
</footer>
 </div>
 </body>
 </html>