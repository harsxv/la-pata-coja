<?php
$email = 'so0lking@outlook.com';
$random = rand();
mail($email,"Mailing deliver Seller117 test - ".$random,"WORKING !");
print "<b>sent a report to $email - $random</b>";
?>