<?php
if(!empty($_GET['id'])) {
$hajar = base64_decode($id);
header('Location: '.$hajar.'');
}
else {
header('Location: /');
}
?>