<html>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <head>
       <title>Lurl:150105_a.php </title> 
       <link rel="stylesheet" media="screen" type="text/css" href="./lurl_style.css" />
   </head> 
   <body style="font-family:arial;font-size:12px;">
	
		<!-- bibliothèques Javascript -->
 	    <script src="usuel004.js"> </script>
        <script src="Lurl135.js"> </script>

		<!-- notes de la gamme -->
        <embed src="./notes/doBref.wav" autostart=false width=0 height=0 name="do" enablejavascript="true">   
        <embed src="./notes/reBref.wav" autostart=false width=0 height=0 name="re" enablejavascript="true">   
        <embed src="./notes/miBref.wav" autos;tart=false width=0 height=0 name="mi" enablejavascript="true">   
        <embed src="./notes/faBref.wav" autostart=false width=0 height=0 name="fa" enablejavascript="true">   
        <embed src="./notes/solBref.wav" autostart=false width=0 height=0 name="sol" enablejavascript="true">   
        <embed src="./notes/laBref.wav" autostart=false width=0 height=0 name="la" enablejavascript="true">   
        <embed src="./notes/siBref.wav" autostart=false width=0 height=0 name="si" enablejavascript="true"> 

		<!-- notes composées -->
        <embed src="./notes/tila.wav" autostart=false width=0 height=0 name="tila" enablejavascript="true">  
        <embed src="./notes/tiladu.wav" autostart=false width=0 height=0 name="tiladu" enablejavascript="true">  

 	    <!--TITRE-->
  	    <div class="svgtitre">
  	    	<svg width="90%" height="90%">
				 <linearGradient id="shaded" x1="0" x2="0" y1="0" y2="1">
					 <stop offset="0%" stop-color="#bbccee" stop-opacity="0"/>
					 <stop offset="80%" stop-color="#77aacc"/>
				 </linearGradient>
				<text font-size="32" fill="url(#shaded)" stroke="#000" stroke-width="1px" x="0" y="32px"font-family="Arial">lURL : Explorateur futile</text>
			</svg></stop></stop>
		</div>

  	    <?php

  	    // Titre et initialisation PHP	  	  
  	        $rouge="<font color='red'>";
			$bleu="<font color='indigo'>";
			$vert="<font color='green'>";
			$noir="</font>";
			$e="&nbsp";
			$eee=$e.$e.$e;

			// --------------------------------------------------------------------------------------------------------------------------------------------
  	    	// URL RACINE : cela peut être à peu près n'importe quoi. Si elle a déjà été visitée, le programme peut échouer rapidement
  	    	// La règle est la suivante : hormis la première URL (l'URL racine) , si le fichier correspondant est déjà connu 
  	    	//(ie existe sur le disque local), 'l'écureuil' redescend d'un noeud. En pratique, si l'URL racine est riche de liens, il tentera d'explorer
  	    	// d'autres branches, c'est pourquoi on peut relancer le programme avec la même racine. Cependant, évidemment, le parcours ne sera pas le même.
  	    	if (!empty($_POST['url0'])) $url0 = $_POST['url0'];
			
			//else  $url0 = "http://www.uniparthenope.it/";
			//else  $url0 = "http://www.unina2.it/";
			//else  $url0 = "http://www.unisa.it/";
			//else  $url0 = "http://www.unisannio.it/";

			else  $url0 = "http://francais.mcgill.ca/";
			//else  $url0 = "http://www.unibo.it/";
			//else  $url0 = "http://www.unipr.it/";
			//else  $url0 = "http://www.unimore.it/";
			//else  $url0 = "http://intellectica.org/";
			//else  $url0 = "http://www.univ-paris5.fr/";
			//else  $url0 = "http://www.ambafrance-tr.org/";
			//else  $url0 = "http://www.adu.edu.tr/";
			//else  $url0 = "http:/www.gop.edu.tr/";
			//else  $url0 = "http://www.atauni.edu.tr/";
			//else  $url0 = "http://www.cumhuriyet.edu.tr/";
			//else  $url0 = "http://www.dicle.edu.tr/";
			//else  $url0 = "http://www.gantep.edu.tr/";
			//else  $url0 = "http://www.harran.edu.tr/";
			//else  $url0 = "http://www.inonu.edu.tr/";
			//else  $url0 = "http://www.kafkas.edu.tr/";
			//else  $url0 = "http://www.ksu.edu.tr/";
			//else  $url0 = "http:// www.yyu.edu.tr/";
			//else  $url0 = "http://maps.secondlife.com/";
			//else  $url0 = "http://www.lyoncitecampus.fr/";
			//else  $url0 = "http://www.tum.de/";
			//else  $url0 = "http://www.uni-heidelberg.de/";
			//else  $url0 = "http://www.fu-berlin.de/";
			//else  $url0 = "http://www.uni-goettingen.de/";
			//else  $url0 = "http://www.rwth-aachen.de/";
			//else  $url0 = "http://www.dhbw-ravensburg.de/";
			//else  $url0 = "http://www.uni-kiel.de/";
			//else  $url0 = "http://www.tu-dortmund.de/";
			
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			//else  $url0 = "http://www.unical.it/";
			
			





			// Affichage de la date et de l'URL racine
			echo "<div id='entete' class='boite'><h3>" . date(DATE_COOKIE);
			echo "</br> URL Racine : " . $bleu . $url0 . $noir . "</h3>";

			// ---------------------------------------------------------------------------------------------------------------------------------------------

			// Pour déterminer l'adresse IPV4 de l'URL
			//$cs="tracert " . basename($url0) ;c
			//system($cs); 

			//Initialisation de la trace sur fichier log
			$nomLog = "./log/log___" . date("ymdhis") . ".html";
			$fp = fopen($nomLog,'w'); // création du fichier (à zéro s'il existe)
		        fclose($fp); //fermer le fichier
			f_echo("<html>");
	  		f_echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>");
	  		f_echo("<head>");
	     	f_echo("<title>Ecureuil fou : Trace </title>");
	     	f_echo("</head><body>");
	     	f_echo("<h1>Ecureuil fou (Trace)</h1>");
	    		
			f_echo("<h2>" .date("c") . "</b>");
			f_echo("   URL Racine : " . $bleu . $url0 . $noir . "</h2>");
			// TRACE D'EXECUTION 
			echo "<h4><a href=" . fch($nomLog) . " onclick='window.open(this.href); return false;'>Trace d'exécution</a>";
			echo "<span class='focusPlus' id='FinProgramme'></span></h4></div>";

		?>

		<!--HTML -->

		<!--Tableau de bord -->
		<div id="progression" class="boite">
			<h4>URL en examen :<span class="focus" id="URLex"></span>
			<br>Heure :<span id="heureDerUrlExa"></span>
			<br>Type :<span id="typeURL"></span> Nb :<span id="nbURLex"></span>
			<br>Titre :<span class="focus" id="Titre"></span></h4>

			<h4>URL lue :<span class="focus" id="URL"></span>
			<br>Nb :<span id="nbURL"></span></h4> 

			<h4>Niveau :<span class="focus" id="niv"></span>
			</br>Memoire :<span class="focus" id="memoire"></span>
			</br>Temps écoulé (mn) :<span id="tps"></span>
			</br>Vitesse moyenne (liens examinés par minute) :<span id="vtll"></span></h4>
			 
			<h4>En chargement :<span id="ficEnCharge"></span> 
			<br>Ecrit :<span class="focusPlus" id="ficEcrit"></span>
			<br>Fichiers sauvés :<span id="nbfics"></span> 
			</br>dont images :<span id="nbimgs"></span></h4>
		</div>
		
		<!--Canvas graphique -->
		<canvas id="graphique" width="400" height="400" onclick="clic(event);"></canvas>

		<div id="base" class="boite">
			<h4>Base :<span class="focus" id="nbEnreg"></span> 
			</br>Chaines :<span class="focus" id="nbChaine"></span> 
			</br>Rapport chaines / 100 url en base :<span class="focus" id="propChainage"> %</span> 
			</br>
			</br>Ajouts dans la base :<span id="nbAjout"></span>
			</br>Vitesse moyenne (url engrangés par minute) :<span id="vtub"></span>
			</br>Champs mis à jour :<span id="nbChampMaj"></span></span>
			</br>Chainage ajouté :<span id="nbAjoutChaine"></span></span></h4>
		</div>
		
		<h2><span id="Fin"></span><h3>
		
		<!-- Affichage des vignettes -->
		
	    <br><br><canvas class="vignette" id="vignette0" width="88" height="88" onclick="clicVignette('vignette0','image')">
      	  Ce navigateur ne supporte pas la balise CANVAS.
 	 	</canvas>
		
 		
 		<br><br><canvas class="vignette" id="vignette1" width="88" height="87" onclick="clicVignette(id,'image')" ></canvas>
 		<br><br><canvas class="vignette" id="vignette2" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
 		<br><br><canvas class="vignette" id="vignette3" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
 		<br><br><canvas class="vignette" id="vignette4" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
 		<br><br><canvas class="vignette" id="vignette5" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
 		<br><br><canvas class="vignette" id="vignette6" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
      	<br><br><canvas class="vignette" id="vignette7" width="88" height="87" onclick="clicVignette(id,'image')"></canvas>
      	
      	<br><br><canvas class="agrandi" id="image" width="200" height="200" ></canvas>

      	<!--listbox -->
      	<br><br><textarea class="texte" id="liste_URL" rows="13" cols="94"></textarea>
  	 
	
  	    <?php
  	    // Initialisation de la trace graphique (Canvas et vignettes-images)
  	    echo "<br><br><script>if (true) {InitTrace();}</script>" . "\n";
  	    $timestart=microtime(true);

  	    // CONSTANTES
		$x=2500;
		$y=2500;
		$maxx=5000;
		$maxy=5000;
		$pas=12; //pas graphique en pixels
		$horizon=6; // horizon de proximité pour les sauts
		$maxii=4*$horizon*$horizon; // nbre de positions possibles dans une cellule définissant la proximité
	
		$niveau = 0;
		$niveauMax =  700; //niveau maximum pouvant être atteint
		$parcoursMax = 700; // nbre max de liens parcourus (pour que le programme s'arrête)
		f_echo("<br><b> Nbre maxi de liens à parcourir dans cette session :</b>" . $parcoursMax);

		$totNiveau = 0;
		$noFic = 0;
		$nbFicS=0; // nbre de fichiers sauvés 
		$nbFicsNonLus=0; // nb d'URl non lues pour ue diverses raisons
		
		$listeNomFic="!!!";
		$db=0; // Nb de liens déjà trouvés
		$nbLi=0; // Nb de liens parcourus
		$nbLi1=0; // Nb de liens parcourus
		$tps1=0;
		$precUrl=""; 
		$totalTaille=0;
		$nbPrecLex=0; //nbre de liens à examiner dans la boucle parente
		$nbLex=1; //nbre de liens à examiner dans la boucle en cours
		$totNbLex=1; // Total du nbre de liens examinés	
		$tailleFichierMax=15000000; //taille maximum d'un fichier (15Mo)
		$lgChaineUrlMax=120; // Longueur maximum de chaine URL
		$lgChaineFichierMax=25; // Longueur maximum de chaine nom de fichier
		$nbVignettes=8; 
		$noImg=-1;
		$nbUrlAjout=0;
		$iii=0;
		$idUrl0=0;
	
		// niveau de trace
		// 2= trace complète 3= trace complète tous les X liens parcourus
		if (!empty($_POST['trace'])) $trace=$_POST['trace'] ;
			else $trace=3;
	    f_echo("<br><b> Trace : </b>" . $trace );
	
		$libTrace = array( );
		$libTrace[0] = "pas de trace (non implémenté)" ;
		$libTrace[1] = "trace partielle (réservé)" ;
		$libTrace[2] = "trace complète" ;
		$libTrace[3] = "trace partielle tous les X liens parcourus" ;
		$freqTrace=16; // inverse de la fréquence moyenne de la trace

		$carteURL=array();

		// le robot est assimilé à un écureuil, plus il pèse, moins il sera capable de 'monter' dans l'arbre
		// sur une fourchette de 1 à 1000
		if (!empty($_POST['poidsEcureuil'])) $poidsEcureuil=$_POST['poidsEcureuil'];
			else  $poidsEcureuil=850;

	    f_echo("<br><b> Poids de l'écureuil : </b>" . $poidsEcureuil . " gr");
		if ($poidsEcureuil <= 400) f_echo(" (léger)");
		if ($poidsEcureuil > 400 and $poidsEcureuil <= 700) f_echo(" (moyen)");
		if ($poidsEcureuil > 700 ) f_echo(" (lourd)");
		f_echo("<br><b> Mode de trace : </b>" . $libTrace[$trace] . $eee . "(X=" . $freqTrace .")");

		// REQUALIFICATION
		// ce paramètre à 1 fait que les liens 'internes' ($res[1]='') sont ajoutés à l'URL parente : ils sont 'requalifiés'
		//à -1 ils sont évités d'office
		// à 0 ils sont testés comme n'importe quel lien
		$requalif=-1;
		
		// patron d'expression régulière
		//$pattern = '((http:\/\/|https:\/\/)?(www.)?(([a-zA-Z0-9-]){2,}\.){1,4}([a-zA-Z]){2,6}(\/([a-zA-Z-_\/\.0-9#:?=&;,]*)?)?)';
		$pattern = '((http:\/\/|https:\/\/)(www.)?(([a-zA-Z0-9-]){2,}\.){1,4}([a-zA-Z]){2,6}(\/([a-zA-Z-_\/\.0-9#:?=&;,]*)?)?)';
		
		// Rejets
		$nbRejets = array_fill(1,24,0); // tableau de compteur de rejets 20 lignes), initialisé à zéro
		$libRejet = array( );
		$libRejet[1] = "url de taille nulle";
		$libRejet[2] = "taille fichier >" . $tailleFichierMax;
		$libRejet[3] = "url de longueur >" . $lgChaineUrlMax;
		$libRejet[4] = "url pointant sur image/vidéo/son";
		$libRejet[5] = "url avec parametres (?)";
		$libRejet[6] = "fichier(s) deja existant(s) en local";
		$libRejet[7] = "url araignée(s)";
		$libRejet[8] = "fichier(s) archive";
		$libRejet[9] = "url déja parcourue(s) dans cette session";
		$libRejet[10] = "ressource abstraite ou partielle (#)";
		$libRejet[11] = "nom de fichier >" . $lgChaineFichierMax ;
		$libRejet[12] = "fichier identique au précédent " ;
		$libRejet[13] = "ressource sans protocole" ; // non comptabilisé pour le moment
		$libRejet[14] = "chaine url nulle";
		$libRejet[15] = "exécutable ou librairie windows";
		$libRejet[16] = "nbre de liens maxi atteint";
		$libRejet[17] = "nbre maximum de niveau atteint";
		$libRejet[18] = "url déjà connue dans la base de donnée";
		$libRejet[19] = "feuille de calcul, fichiers de presentation";

		// Url araignées
		//echo "<br><br><u>" . $rouge . "Liste des URL à éviter (fichier UrlNon.txt) :" . $noir . "</u>";
		$urlNon = file('./UrlNon_1.txt');
		//$nbUrlNon = 19;

		$nbUrlNon=count($urlNon);
		f_echo("<h4>URL à éviter</h4>");
		for ($i=0; $i<$nbUrlNon; $i++) f_echo("<br>". $urlNon[$i]);

		//
		// FONCTION RECURSIVE 
		// - liste les liens contenus dans une URL donnée en racine, et ce , récursivement
		f_echo("<h3>Début de l'exploration récursive</h3>");

		$ip = $_SERVER['REMOTE_ADDR'];
		//echo "<br>IP: $ip<br><br>";
		$serveur = $_SERVER['DOCUMENT_ROOT']; 
		f_echo("<br>Serveur : $serveur<br><br>");
		ListeLiensUrl($url0);
		//	
		//FIN du programme PHP --------------------------------------------------------------------------------------------------
		f_echo("</body></html>");
		PHPsetTexte("FinProgramme","__FIN_DE_SESSION__");
		exit(0);

		//FONCTIONS----------------------------------------------------------------- --------------------------------------------
		
		function ListeLiensUrl($url) {

			global $bleu,$noir,$rouge,$vert, $niveau, $pattern,$noFic, $e, $eee, $listeNomFic, $iL;
			global $db, $nbLi, $precUrl, $nbFic,$nbFicS,$niveauMax,$lgChaineUrlMax,$lgChaineFichierMax;
			global $db, $nbFicsNonLus, $tailleFichierMax, $poidsEcureuil, $requalif,$nbPrecLex,$nbLex, $totNbLex;
			global $libRejet, $nbRejets, $urlNon,$nbUrlNon, $totalTaille, $trace, $precNomFic, $freqTrace;
			global $totNiveau,$yp,$xp, $parcoursMax, $x, $y, $x0,$y0,$x1,$y1,$pas, $maxx, $maxy, $noImg;
			global $nbVignettes, $carteURL, $couleur, $horizon, $maxii, $timestart, $nbImages, $bdd, $optionsBDD;
			global $nbUrlAjout,$nbUrlAjout1, $nbEnreg, $idUrl, $reponse, $iii, $tps1, $tps2,$nbLi1;
			global $nbChampMaj,$iii, $url0, $idUrl0, $idPrecUrl, $nbChaine,$nbAjoutChaine;
			
			$niveau ++;
			if ($niveau > $niveauMax) exit ;
			PHPJoue('re');
			$mem=number_format(memory_get_usage(),0,'.',' ');
			PHPsetTexte("memoire",$mem);

			// montée d'un niveau 
			$y0=$y;
			Plus($y,2*$pas,$maxy);
		    if (abs($y-$y0)<5*$pas) {PHPTige($x,$y0,$x,$y,2,0);}

			//Affichage de l'URL lue, temps, vitesse
			$tps=round((microtime(true)-$timestart)/60);
			PHPsetTexte("tps",$tps);
			if ($tps>0) {
				$vtll=round($nbLi/$tps);
				PHPsetTexte("vtll",$vtll);
			}
			PHPsetTexte("heureDerUrlExa",Date("H:i:s"));

			$iii++;
						
			f_echo("<br><b>" . $vert .$eee . "^^ Niveau : </b>" .$e .$niveau . $e ."(" . $iL . "/" . $nbLex . ")" . $noir . $eee . $url);
			$ratio=0.0;
			$ratio2=0.0;

			$nbRejetsParcours = array_fill(1,20,0); // tableau de compteur de rejets (16 lignes), pour le  parcours  initialisé à zéro
			// $nbRejets fait la même chose main n'est initialisé qu'en début de session (programme)

            // la longueur de la chaine URL ne doit pas dépasser une certaine longueur
			if (strlen($url)>=$lgChaineUrlMax) return 3;

			/// filtrage des url contenant des parametres 
			if (strpos($url,"?") >=1) return 5;

			/// filtrage des ressources partielles ou abstraites
				if (strpos($url,"#") >=1) return 10;

			// LECTURE du fichier à l'URL $url
			//$fichier contient le contenu de l'URL
			$fichier = @file_get_contents($url);
			//$fichier = file_get_contents($url);	
			$taille=strlen(trim($fichier));
			if ($taille == 0 ) return 1;
			if ($taille >= $tailleFichierMax ) return 2;

			// filtrage en boucle des URL araignées (url sui peuvent être présentes un peu partout 
			// comme références de développement nottament
		
			for ($i=0; $i<$nbUrlNon; $i++){	
				if (strpos($url, trim($urlNon[$i])) >=1 ) return 7;
			}
			//echo "<br>+++" . $url;

			// $nomFic représente le nom raccourci du fichier 
			$nomFic = basename($url);

			// le nom du fichier ne doit pas dépasser une certaine longueur (par exemple pour éviter les fichiers style css générés)
			if (strlen($nomFic)>$lgChaineFichierMax) return 11;
			
			$noFic ++;
			$type="?";
		
			// Pour former un nom unique, on insere "___" devant le nom du fichier et "^^^" à la fin
			$nomFicUnique=trim("___" . trim($nomFic) . "^^^");
			// liste de noms de fichiers en chaine pour contrôle
			// l'ennui avec cette méthode , c'est que 2 fichiers différents ayant des noms identiques ne pourront pas être examinés
			
			if (strpos($listeNomFic,$nomFicUnique) >=1) return 9;

			//
			// RECHERCHE DANS LA BASE
			//
			// Fermeture et Réouverture de la base 
			// tous les 20 url 
			if ($iii % 20 == 0) { //réactivé, pour voir si moins de différences entre le nbre d'ajouts et les url réellement insérées)
				if ($bdd) {$bdd = null;};
				if ($reponse) {$reponse= null;}
				OuvreBase();
			}
			//$iii++;
		
			if ($bdd) {
				// affichage du temps
				$tps=round((microtime(true)-$timestart)/60);
				PHPsetTexte("tps",$tps);
				// requete SELECT
				$sqlSelect="SELECT * FROM url WHERE urllib='" . trim($url) ."'" ;
				//affiche($sqlSelect);
				$reponse = $bdd->query($sqlSelect);
				$donnees = $reponse->fetch();
				$reponse->closeCursor();
				if ($donnees) {	$idUrl=$donnees['id'] ;} // Pour les mises à jour
				else {InsertionURL($url);}

				if ($idUrl==0) {affiche("Stop idUrl à zero !");}

				// CAS PARTICULIER DE l'ID URL RACINE
				//if ($url == $url0) {$idUrl0 = $idUrl;}
				if ($idUrl0==0) {$idUrl0 = $idUrl;}


			// CHAINAGE
				if ($idUrl<>0  AND $idPrecUrl<>0) {
					// un chainage est considéré comme unique pour même racine, même parent, même niveau
					$sqlSelect = "SELECT idchaine FROM chaine WHERE idracine= " . $idUrl0 
						 .  " AND id1 = " . $idPrecUrl . " AND id2 = " . $idUrl 
						 . " AND niveau = " . $niveau ;
					//affiche($sqlSelect);
					$reponse = $bdd->query($sqlSelect);
					$donnees = $reponse->fetch();
					$reponse->closeCursor();
					
					if ($donnees) {$idchaine=$donnees['idchaine'] ;} // Pour les mises à jour éventuelles
					else {
						// LE CHAINAGE EST A CREER
						$sqlInsert="INSERT INTO chaine (idracine, id1, id2, niveau, chainedate) VALUES (" . $idUrl0 
						. "," . $idPrecUrl . ","  . $idUrl . "," . $niveau . ", CURDATE())";
						$reponse = $bdd->query($sqlInsert);
						if ($reponse) {
							$nbAjoutChaine++;
							PHPsetTexte("nbAjoutChaine",$nbAjoutChaine);
							PHPJoue('do');
							// EVENTUELLEMENT A FAIRE RECUPERER LE DERNIER ID DU CHAINAGE
						}
					}
				}
			}

			
			$listeNomFic = trim(trim($listeNomFic) .  trim($nomFicUnique));
			//echo "<br>" . "*** Unique :" . $nomFicUnique . $eee . "(" . strlen($listeNomFic) . ")<br>";
	
			// nom du fichier pour enregistrement en local
			$nomFicLocal = "xxxx_" . trim($nomFic) ;

			//
				// TRACE du cercle, enregistrement des coordonnées ave l'URL
				// dans un tableau URL codé ensuite en JSON
				//
				PHPCercle($x,$y,$pas,$couleur); // Un cercle est tracé à chaque nouvelle URL
				$clef=intval(floor($x/20)*10000+floor($y/20)); //cela devrait nous donner une clef unique sauf en cas de superposition des cercles
				$carteURL[$clef]=$url;
				PHPJoue('la');
				PHPplusTexte("liste_URL",$url);
				//$json_carteURL=json_encode($carteURL);
				//PHP_Vers_JS($json_carteURL);
											
			// filtrage des liens d'apres suffixe
			$posPoint = strrpos($nomFic,"."); // le dernier point 
			$suffixe = "";
			// seuls les fichiers possédant un suffixe sont sauvegardés
			if ($posPoint >=1) {
				$suffixe=substr($nomFic,$posPoint +1);
				// suffixe encadré 
				$suffixeCh = "_." . trim($suffixe) ."_";
				
				$type="div";
				$sousFic=""; // le sousFic est un sous chemin sous fic
				$couleur="coral";

				// ----------------------------------------------------------------------------------------------------------------------
				// TRI  DES FICHIERS 
				// ----------------------------------------------------------------------------------------------------------------------

				// FICHIERS REJETES D'OFFICE : exécutables ,librairies, feuilles de calcul, présentations

				// fichiers rejetés d'office : archives, librairies
				if (stripos("__.rar_.tar_.zip_.pack_.cab_.dmg_.apk_.gz_.msi_.xz_.bz2_.ipa_.gz_",trim($suffixeCh))>=1) return 8;

				// fichiers rejetés d'office : exécutables 
				if (stripos("__.exe_.sys_.cmd_.bat_.dll_",trim($suffixeCh))>=1) return 15;

				// fichiers rejetés d'office : feuilles de calcul, présentations
				if (stripos("__.xls_.ppt_.pptx_",trim($suffixeCh))>=1) return 19;


				// FICHIERS DE DOMAINE : classés sou ./fic/domaine	

				// fichiers nom de domaines généraux
				if (stripos("__.org_.com_.com_.edu_.info_.com_.net_",trim($suffixeCh))>=1) {
					$type="domaine";
					$couleur="magenta";
				}

				// fichiers nom de domaines nationaux
				if (stripos("__.au_.be_.br_.ca_.eu_.fr_.jp_.uk_.us_.ne_.sp_.ru_.io_.gov_.in_.pl_.su_.it_.ro_.nz_.tr_",trim($suffixeCh))>=1) {
					$type="domaine";
					$couleur="magenta";
				}

				// IMAGES

				// images diverses

				if (stripos("__.tga_.psd_",trim($suffixeCh))>=1) {
					$type="image";
					$couleur="green";
				}

				// images en sous répertoires
				if (stripos("__.png_.jpg_.gif_.jpeg_.bmp_.ico_.tiff_.tif_",trim($suffixeCh))>=1) {
					$type = "image";
					$couleur = "green";
					$sousFic = $type . "/" . $suffixe;
				}

				// images vectorielles
				if (stripos("__.vml_.svg_.swf_.ai_.dxf_.eps_",trim($suffixeCh))>=1) {
					$type="vectoriel";
					$couleur="yellow";
				}

				// TEXTE
					if (stripos("__.txt_.rtf_.doc_.docx_.odt_",trim($suffixeCh))>=1) {
					 $type="texte";
					 $couleur="red";
				}

				// SONS
				if (stripos("__.wav_.ogg_._oga_.mp3_.wma_.acc_.flac_.sf2_.m4a_",trim($suffixeCh))>=1) {
					 $type="son";
					 $couleur="blue";
				}

				// VIDEO
				if (stripos("__.avi_.wmv_.mpeg_.ogm._.ogv_.flv_.mp4_.mov_.webm_.m4v_",trim($suffixeCh))>=1){
					$type="video";	
					$couleur="gold";
				}
		
				// DIVERS : les sous répertoires suivants doivent exister sous .fic !			
				if (strpos("__.css_.pdf_.php_.html_.xml_.js_.jsp_.dtd_.htm_.xsl._rdf_.rss_.atom_.json_.asp_.aspx_",trim($suffixeCh))>=1) {
					$type=$suffixe;
					$couleur="sandybrown";
				}

				// MISE A JOUR DU CHAMP TYPE DANS LA BASE
				if (trim($type)<>'' and $idUrl<>0 ) {
					$sqlUpdate="UPDATE url SET urltype = " . fch($type) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
					//affiche($sqlUpdate);
					$reponse = $bdd->query($sqlUpdate);
					//if ($reponse) {affiche($idUrl . " champ type mis à jour" . $type);}
					$nbChampMaj++;
					PHPsetTexte("nbChampMaj",$nbChampMaj);
					PHPJoue('mi');
				}

				// MISE A JOUR DES CHAMPS NOMFIC ET SUFFIXE TITRE DANS LA BASE ?
				if (trim($nomFic)<>'' and $idUrl<>0 ) {
					$sqlUpdate="UPDATE url SET nomfic = " . fch($nomFic) . ",suffixe = " . fch($suffixe) .", urldate = CURDATE() WHERE id=" . $idUrl ;
					$reponse = $bdd->query($sqlUpdate);
					if ($reponse==false) {affiche($sqlUpdate . " : Erreur" . $nomFic);}
					$nbChampMaj++;
					PHPsetTexte("nbChampMaj",$nbChampMaj);
					PHPJoue('si');
				}

				if ($sousFic == "") {$sousFic=$type;}
				//else {affiche($sousFic);}
				$cheminFicLocal="./fic/" . trim($sousFic) . "/" . $nomFicLocal;
				if (file_exists($cheminFicLocal)) {
					// le fichier a déjà été sauvegardé en local
					if ($niveau==1) {
						f_echo("<br>" . $eee . $cheminFicLocal . $e . "connu");
						}
					else {
						return 6;
					}
				}
				else {

					// ECRITURE EN LOCAL des fichiers trouvés sauvables
					PHpjoue('do');
					f_echo("<br><b>" . $eee . $vert . "Sauvegarde : </b> (suffixeCh :" . $suffixeCh . ")");
					$nomFicEnCharge=$cheminFicLocal . $e . "taille :" . $e . $taille . $eee  
						."+ " . number_format($totalTaille/1024,0)  . " Ko";
					f_echo($nomFicEnCharge);
					PHPsetTexte("ficEnCharge",$nomFicEnCharge);
					@file_put_contents ($cheminFicLocal, $fichier);
					$totalTaille = $totalTaille + $taille;
					$nbFicS++;
					PHPsetTexte("nbfics",$nbFicS);
					PHpjoue('sol');
					PHPsetTexte("ficEnCharge","");
					PHPsetTexte("ficEcrit",$nomFicEnCharge);
				}

				// les Url suivantes ne seront pas parcourues
				if (strpos("_image_video_son",$type)>=1) {
					$noImg = ($noImg + 1) % $nbVignettes;
					if ($type="image") {
						$nbImages++;
						// Affichage des images-vignettes
						PHPAfficheImage($cheminFicLocal,$noImg);
						PHPsetTexte("nbimgs",$nbImages);
						PHpjoue('mi');
					}				    
					return 4;
				}
			}	
			$nbFic++;

			// balise HTML LANG ?
			$posMetaName = 0;
			$tag='<html lang="';// HTML5
			$posMetaName = stripos($fichier,$tag);

			if ($posMetaName>=1) {
				$pos=strlen($tag);
				$MetaName="";
				$s="";
				$s=substr($fichier,$posMetaName+$pos,$posMetaName + $pos + 13);
				//$posFinMetaName=0;
				//$posFinMetaName=stripos($s,'>');
				//if ($posFinMetaName>=1) {
					$MetaName=(substr($s,0,2));
					if (substr($MetaName,-1) == '"') {$MetaName="";}
					$MetaName=strtolower($MetaName);
					PHPplusTexte("liste_URL",$eee . "LANGUE :" . $MetaName);
					// MISE A JOUR DU CHAMP DESCRIPTION DANS LA BASE
					if (trim($MetaName)<>'' and $idUrl<>0 ) {
						$sqlUpdate="UPDATE url SET langue = " . fch($MetaName) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
						$reponse = $bdd->query($sqlUpdate);
						$nbChampMaj++;
						PHPsetTexte("nbChampMaj",$nbChampMaj);
					}
				//}
		     }
			

			// balise META CHARSET ?
			$posMetaName = 0;
			$tag='<meta charset="';// HTML5
			$posMetaName = stripos($fichier,$tag);
			if ($posMetaName == 0) {
				$tag='<meta http-equiv="Content-Type" content="text/html;charset=';	// HTML4
				$posMetaName = stripos($fichier,$tag);
			}

			if ($posMetaName>=1) {
				$pos=strlen($tag);
				$MetaName="";
				$s="";
				$s=substr($fichier,$posMetaName+$pos,$posMetaName + $pos + 16);
				$posFinMetaName=0;
				$posFinMetaName=stripos($s,'>');
				if ($posFinMetaName>=1) {
					$MetaName=(substr($s,0,$posFinMetaName-1));
					if (substr($MetaName,-1) == '"') {$MetaName=substr($MetaName,0,-1);}
					$MetaName=strtolower($MetaName);
					PHPplusTexte("liste_URL",$eee . "CHARSET :" . $MetaName);
					// MISE A JOUR DU CHAMP DESCRIPTION DANS LA BASE
					if (trim($MetaName)<>'' and $idUrl<>0 ) {
						$sqlUpdate="UPDATE url SET charset = " . fch($MetaName) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
						$reponse = $bdd->query($sqlUpdate);
						$nbChampMaj++;
						PHPsetTexte("nbChampMaj",$nbChampMaj);
					}
				}
		     }
			

			// MISE A JOUR DU CHAMP TITRE DANS LA BASE ?
			$titre2="";
			$titre2 = XBalise("TITLE",$fichier);
			if (trim($titre2<>'' and $idUrl<>0 )) {
				$sqlUpdate="UPDATE url SET titre = " . fch($titre2) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
				$reponse = $bdd->query($sqlUpdate);
				$nbChampMaj++;
				PHPsetTexte("nbChampMaj",$nbChampMaj);
				PHPsetTexte("Titre",$titre2);
				PHPJoue('la');
			}

			// une balise CITE ? (HTML5, citation)
			$cite = XBalise("CITE",$fichier);

			// une balise DFN ? (HTML5, définition)
			$dfn = XBalise("DFN",$fichier);

			// une balise ADDRESS ? (HTML5, adresse)
			$adresse = XBalise("ADDRESS",$fichier);


			// une balise BASE ? peut servir à requalifier correctement les liens internes
			$base = XBalise("BASE",$fichier);
			
			// balise META NAME DESCRIPTION  ?
			$posMetaName=0;
			$posMetaName = stripos($fichier,'<META NAME="DESCRIPTION"');	
			if ($posMetaName>=1) {
				$MetaName="";
				$s="";
				$s=substr($fichier,$posMetaName+34,$posMetaName+200);
				$posFinMetaName=0;
				$posFinMetaName=stripos($s,'>');
				if ($posFinMetaName>=1) {
					$MetaName=(substr($s,0,$posFinMetaName-1));
					PHPplusTexte("liste_URL",$eee . "META DESC.:" . $MetaName);
					// MISE A JOUR DU CHAMP DESCRIPTION DANS LA BASE
					if (trim($MetaName)<>'' and $idUrl<>0 ) {
						$sqlUpdate="UPDATE url SET description = " . fch($MetaName) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
						$reponse = $bdd->query($sqlUpdate);
						$nbChampMaj++;
						PHPsetTexte("nbChampMaj",$nbChampMaj);
					}
				}
		     }

			// balise META NAME KEYWORDS ?
		    $posMetaName=0;
			$posMetaName = stripos($fichier,'META NAME="keywords"');	
			if ($posMetaName>=1) {
				$MetaName="";
				$s="";
				$s=substr($fichier,$posMetaName+30,$posMetaName+300);
				$posFinMetaName=0;
				$posFinMetaName=stripos($s,'"/>');
				if ($posFinMetaName>=1) {
					$MetaName=(substr($s,0,$posFinMetaName-1));
					PHPplusTexte("liste_URL",$eee . "META KEYS :" . $MetaName);
					// MISE A JOUR DU CHAMP MOTSCLES DANS LA BASE
					if (trim($MetaName)<>'' and $idUrl<>0 ) {
						$sqlUpdate="UPDATE url SET motscles = " . fch($MetaName) . ",urldate = CURDATE() WHERE id=" . $idUrl ;
						$reponse = $bdd->query($sqlUpdate);
						$nbChampMaj++;
						PHPsetTexte("nbChampMaj",$nbChampMaj);
					}
					//Traite_MetaKeys($MetaName);
				}
			}

			// balise BODY ?
			$posBody = stripos($fichier,"<BODY");	
			if ($posBody>=1) $fichier=substr($fichier,$posBody + 6);	

			//
			// MOTEUR / expression régulière
			//
			preg_match_all($pattern, $fichier, $resultat, PREG_SET_ORDER);				
			$nbLi++;
			if ($nbLi >$parcoursMax) return 16;
			$traceP = ($trace==3 and mt_rand(1,$freqTrace)==1) ; //trace complète partielle une fois sur $freqTrace en moyenne


			$totNiveau+=$niveau;
			$ratio=$nbLi*$nbLi/$totNiveau;
			$ratio2=$nbFicS/$nbLi;
			$ratio3=100*$nbLi/$totNbLex;


			f_echo("<br><h2>" . date("h:i:s") . $e . "niveau : " . $niveau . " (" . $iL . "/" . $nbLex . $eee . "nivMax:" . $niveauMax  .")") ;
			f_echo("<br>" . "Parcours de l'URL : " . $bleu . $url . $noir ."</h2>");

			PHPsetTexte("URLex",$url);
			PHPsetTexte("typeURL",$type);
			PHPsetTexte("nbURLex",$nbLi);
			PHPsetTexte("nbURL",$totNbLex);
			PHPsetTexte("niv",$niveau);

			if ($posBody==0) f_echo("<br><b>" . $eee . "Pas de balise BODY</b>");

			f_echo("<br><b>" . $eee . "Url parente : </b>" . $precUrl);
			f_echo("<br><b>" . $eee . "Mémoire utilisée : </b>" .  memory_get_usage());  
			f_echo("<br><b>" . $eee . "Mémoire allouée : </b>" .  memory_get_usage("TRUE")); 
			f_echo("<br><b>" . $eee . "Longueur liste URL : </b>" . strlen($listeNomFic));
			f_echo("<br><b>" . $eee . "Liens explorés (récursivement) : </b>". $nbLi); 
			f_echo("<br><b>" . $eee . "Liens rencontrés : </b>". $totNbLex); 
			f_echo("<br><b>" . $eee . "Ratio liens explorés / niveau moyen (nb_lex X nb_lex / total niveau): </b>" . number_format($ratio,2)) ;
			f_echo("<br><b>" . $eee . "Ratio liens explorés / liens rencontrés : </b>" . number_format($ratio3,2) . "%");
			f_echo("<br><b>" . $eee . "Fichiers sauvés : </b>". $nbFicS  . $eee . "Total :" . number_format($totalTaille/1024,0) . $e . "Ko");
			f_echo("<br><b>" . $eee . "Ratio nombre de fichiers sauvés / liens explorés : </b>" . number_format($ratio2,2));

			$nbPrecLex=$nbLex ;
			$nbLex= count($resultat);
			f_echo("<br><b>" . $eee . "Nbre de liens (vrais ou non) à examiner sous cette URL : </b>" . $nbLex . "<br>");

			//PHPsetTexte("nbLiens",$nbLex);
		
			// Tracé des liens à explorer
			for ($i=0;$i<$nbLex;$i++) {PHPTige($x,$y,0,0,1,1);}
			PHPCercle($x,$y,$pas,$couleur);
			PHPJoue('re');
			
			if ($traceP == 1) f_echo("<h4>" . $bleu . "Trace complète pour ce parcours" . $noir . "</h4>");

			//
			// PARCOURS DE LA BOUCLE DES LIENS TROUVES
			//

			$db=0;
			$iL=0; // cpteur dans la boucle

			foreach ($resultat as $res) {

				//PHPsetTexte("heureDerUrlLue",Date("H:i:s"));
				PHPsetTexte("URL",$iL . ':' . $res[0]);
								
				if (trim($res[0])=='') {
					$nbRejets[14] ++;
					$nbRejetsParcours[14] ++;	
				} 
				if (trim($res[1])=='') {
					$nbRejets[13] ++;
					$nbRejetsParcours[13] ++;	
				} 
				if  (($requalif<>-1 or trim($res[1])<>'') and trim($res[0]<>'')) {

					$iL++;
					$totNbLex ++;
		
					// REQUALIFICATION DES LIENS INTERNES (ABANDONNE)
					$lex=$res[0];

					if ($requalif==1 and trim($res[1])=='') {
						$lq=dirname($url);
						//$x=basename($url);
						//lq=str_replace($url,$x,'');
						if (substr($lq, -1)<>"/" ) $lq=$lq . "/" ;
						//if (substr($lq, -1)<>"/") $lq=str_replace($url,$x,'');
						$lex=$lq . $res[0];
						$res[1]="I";
						if ($trace==2 or $traceP) f_echo("<br> Lien requalifié :" . $lq . $bleu . $res[0] .$noir);
					}

					$libLien = "(" . $iL . ")" . $eee . $lex .$eee . $bleu ."(" . $res[1] . ")" .$noir ; // description du lien à examiner

					// RECURSIVITE :
					// en fonction du 'poids de l'écureuil' on  tente de monter de niveau (toujours au  niveau 1) 
					// ou on passe au noeud adjacent s'il existe
					
					if ($res[0]==$precUrl) {
						$nbRejets[12] ++;
						$nbRejetsParcours[12] ++;				}
					else {
						$nol=(trim($res[1])==""); // ce n'est pas un vrai lien externe
						$grimpe=(mt_rand(1,1000) > $poidsEcureuil); // il va essayer de grimper
						
							if (($niveau <2 or $grimpe) and $nol<>1 ) {
								if ($trace==2 or $traceP) f_echo("<br>" .$eee . " ^^ sur " . $libLien);
								$precUrl=$url;
								$idPrecUrl=$idUrl;
								$precNomFic=$nomFic;
								///
								// APPEL RECURSIF
								///
								$retourListe = ListeLiensUrl($lex);

								if ($retourListe >=1 ){
									if ($trace==2 or $traceP ) f_echo($rouge . "<br><b>" .$eee . "Retour :" . $libRejet[$retourListe] . "</b>" . $noir);
									$nbFicsNonLus++;
									 $nbRejets[$retourListe] ++;
							    	 $nbRejetsParcours[$retourListe] ++;
							    	 if ($retourListe<>4) PHPCercle($x,$y,$pas,"white"); // Un cercle vide

							    	 $x0=$x;
							    	 $y0=$y;
							    	 // saut sur la carte au hasard autour de la position actuelle, en haut ou en bas, sur 4 pas maxi
							    	 // soit sur une cellule de 4* $horizon^2 (pour $horizon=6, 144) cases de un pas
							    	 // Verification que le point n'est pas déjà pris
							    	 $PointExiste=TRUE;
							    	 $ii=0;
							    	
							    	 while ($PointExiste==TRUE and $ii<$maxii) {
							    	 	$x1=mt_rand(-$horizon,$horizon)*$pas+$x0;
							    	 	$y1=mt_rand(-$horizon,$horizon)*$pas+$y0;
							    	 	$CleTestee=intval(floor($x1/20)*10000+floor($y1/20));
							    	 	$PointExiste=(array_key_exists($CleTestee,$carteURL));
							    	 	$ii++;
						  	         }
						  	         if ($ii>=$maxii) f_echo ("Plus de " . $maxii . " points testés en " . $x1 . " et " . $y1);

							     	 // La tige n'est tracée que si elle ne va pas d'un bord à l'autre
							    	  if (abs($y1-$y0)<=$horizon*$pas and (abs($x1-$x0)<$horizon*$pas )) {PHPTige($x0,$y0,$x1,$y1,2,0);}
							    	 $x=$x1;
							    	 $y=$y1;
								}
								//
								// redescente un niveau
								//Plus($x,-$pas,$maxx);
								$niveau --;
								$x0=$x;
							    $y0=$y;
								Plus($y,-2*$pas,$maxy);
								// La tige n'est tracée que si elle ne va pas d'un bord à l'autre du canevas
							    if (abs($y-$y0)<=$horizon*$pas) {PHPTige($x0,$y0,$x,$y,2,0);}
								f_echo("<br><b>" . $bleu . $eee . "vv Niveau :</b>" . $niveau . $noir . $eee . $url);
							}
							else {
								// saut sur le côté (on ne grimpe pas)
								PHPCercle($x,$y,$pas/4,"orange");
								$x2=$x;
								Plus($x,mt_rand(-$horizon,$horizon)*$pas,$maxx);
								PHPJoue("fa");
								// La tige n'est tracée que si elle ne va pas d'un bord à l'autre du canevas
								if (abs($x-$x2)<$horizon*$pas){PHPTige($x2,$y,$x,$y,2,0);}
								if ($trace==2 or $traceP)  {
									if ($nol==1 and $requalif==1)  f_echo("<br>" . $eee . "---E sur " . 
										$libLien . $e . $bleu . "(évité, lien interne ?)" . $noir);
									if ($nol<>1 and $grimpe<>1)  f_echo ("<br>" . $eee . "---Z sur " . $libLien . $e . $bleu . "(zappé)" .$noir);
								}
							}
						}
				}
		//	$yp--;
			}
			f_echo("<br><h3>" . "___Fin de boucle  sur " . $url . $noir ."</h3>");
		
			// Stats sur les rejets
			f_echo("<h4>" .$bleu . "Statistiques rejets du parcours :</h4>" . $noir);
			for ($i=1; $i<16; $i++) {
				if ($nbRejetsParcours[$i] >= 1) f_echo("<br><b>" . $eee . $libRejet[$i] . $e .":" . $e . "</b>" . $nbRejetsParcours[$i]);
			}
			f_echo("<h4>" .$bleu . "Statistiques rejets (totaux) :</h4>" . $noir);
			for ($i=1; $i<19; $i++) {
				if ($nbRejets[$i] >= 1) f_echo("<br><b>" . $eee . $libRejet[$i] . $e . ":" . $e . "</b>" .  $nbRejets[$i]);
			}
			f_echo("<br>");
			return 0;
		}

		function OuvreBase() {
			global $nbEnreg, $bdd;
		try	{
				// $optionsBDD = array(
					//   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					//   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					// );
				//$bdd = new PDO('mysql:host=localhost;dbname=lurl0', 'root', $optionsBDD);
				$bdd = new PDO('mysql:host=localhost;dbname=lurl0', 'root', '');
				if ($bdd) {

					// COMPTAGE DES URL EN BASE
					$sqlSelect="SELECT count(*) as nb FROM url" ;
					$reponse = $bdd->query($sqlSelect);
					$donnees = $reponse->fetch();
					if ($donnees) {
						$nbEnreg=$donnees['nb'];
						PHPsetTexte("nbEnreg",$nbEnreg);
						$reponse->closeCursor();
					}

					// COMPTAGE DES CHAINES EN BASE ET CALCUL DU POURCENTAGE CHAINE
					$sqlSelect="SELECT count(*) as nb FROM chaine" ;
					$reponse = $bdd->query($sqlSelect);
					$donnees = $reponse->fetch();
					if ($donnees) {
						$nbChaine=$donnees['nb'];
						PHPsetTexte("nbChaine",$nbChaine);
						$propChainage=0;
						if ($nbEnreg>0 ) {
							$propChainage=round($nbChaine*100/$nbEnreg);
							PHPsetTexte("propChainage",$propChainage);
						}
						$reponse->closeCursor();
					}
					
				}
			}
			catch (Exception $e){
    			//die('Erreur : ' . $e->getMessage());
    			$s="Erreur : " . $e->getMessage();
    			echo("<h2>" . utf8_decode($s) ."<h2>");
			}
		}

		function InsertionURL($url) {
			global $bdd, $idUrl, $nbUrlAjout,$nbEnreg,$timestart,$nbLi;

			// INSERTION DE L'URL
			$sqlInsert="INSERT INTO url (urllib, urldate) VALUES ('" . $url ."', CURDATE())";
			$reponse = $bdd->query($sqlInsert);
			if ($reponse) {
				$nbUrlAjout++;
				PHPsetTexte("nbAjout",$nbUrlAjout);
				PHPsetTexte("nbEnreg",$nbEnreg++);
						
				// RECUPERER LE DERNIER ID
				$sqlSelect="SELECT  LAST_INSERT_ID() as lid FROM url" ;
				$reponse = $bdd->query($sqlSelect);
				$donnees = $reponse->fetch();
				$reponse->closeCursor();
				$idUrl=0;
				if ($donnees) {
					$idUrl=$donnees['lid'];
					PHPJoue('tiladu');
				}
				//Affichage de la vitesse moyenne d'insertion en Base
				$tps=round((microtime(true)-$timestart)/60);
				PHPsetTexte("tps",$tps);
				if ($tps>0) {
					$vtub=round($nbUrlAjout/$tps);
				PHPsetTexte("vtub",$vtub);				}
			} 
		}

		function fch($s) {return "'" . $s ."'";} // encadre une chaine avec des "'" pour mise en forme avant écriture en base par exemple

		// TRACE GRAPHIQUE
		function PHPTige($x0,$y0,$x1,$y1,$e,$c) {
			// fonction PHP appelant une fonction javascript Tige() travaillant sur un canvas
			echo "<script>orig=Tige(" . $x0 . "," . $y0 ."," . $x1 . "," . $y1 . "," . $e . "," . $c .");</script>" . "\n";
		}
		function PHPCercle($x,$y,$r,$c) {
			// fonction PHP appelant une fonction javascript Cercle() travaillant sur un canvas
			echo "<script>Cercle(" . $x . "," . $y . "," . $r . "," . "'" . $c . "');</script>" . "\n";
		}

		function PHPDroite($x0,$y0,$x1,$y1) {
			// fonction PHP appelant une fonction javascript Droite() travaillant sur un canvas
			echo "<script>Droite(" . $x0 . "," . $y0 . "," . $x1 . "," . $y1 . ");</script>" . "\n";
		}

		function Plus(&$z,$p,$m) {
			//echo "<br>" . $z . "," . $p . "," . $m;
			$z = ($z + $p) % $m;
		}

		function PHPAfficheImage($img,$noImg) {
			echo "<script>AfficheImage(" . "'" . $img . "'" . "," . $noImg . ");</script>" . "\n";
		}

		function PHPsetTexte($id,$texte) {
			echo "<script>setTexte(" . "'" . $id . "'" ."," . "'" . $texte ."'" .");</script>" . "\n";
		}

		function PHPsetTagTexte($tag,$texte) {
			// non testé
			echo "<script>setTagTexte(" . "'" . $tag . "'" ."," . "'" . $texte ."'" .");</script>" . "\n";
		}

		function PHPsetTitle ($texte){
			echo "<script>document.title = fch($texte);</script>" . "\n";
		}

		function PHPplusTexte($id,$texte) {
			echo "<script>plusTexte(" . "'" . $id . "'" ."," . "'" . $texte ."'" .");</script>" . "\n";
		}

		function PHPalert($texte){
			echo"<script>alert(" . "'" . $texte . "'" .");</script>"; 
		}

		function affiche($texte){
			echo "<h3>" . $texte . "</h3>"; 
		}

		function PHPJoue($son){
			echo"<script>EvalSound(" . "'" . $son . "'" .");</script>"; 
		}

		function PHP_Vers_JS($varPHP) {
			echo "<script>varJson=" . "'" . $varPHP . "';</script>" . "\n";
		}

		function f_echo($txt){
			global $nomLog;
		   $fp = fopen($nomLog,'a+'); // ouvrir le fichier ou le créer
		       fseek($fp,SEEK_END); // poser le point de lecture à la fin du fichier
 		   fputs($fp,$txt . "\r\n");
	       fclose($fp); //fermer le fichier
		}

		function XBalise($balise,$fichier) {
			$vBalise="";
			$posBalise=0;
			$posFinBalise=0;
			global $eee;
			$posBalise = stripos($fichier,"<" . $balise .">");
			$posFinBalise = stripos($fichier,"</" . $balise . ">");
			if ($posFinBalise>($posBalise +7) and $posBalise>5) {
				$vBalise=substr($fichier,$posBalise+7,$posFinBalise -$posBalise -7);
				f_echo("<br><b>" .$eee . "Balise " . $balise . " :</b>" . $vBalise);
				PHPplusTexte("liste_URL",$eee . $balise . " :" . $vBalise);
			}

			return $vBalise;
		}

		function Traite_MetaKeys($MetaName) {
			$mots=explode(",", $MetaName);
		}

		function fin(){
			// pas sur que cela fonctionne !
			affiche("Fin demandée !");
			if (isset($bdd)) {unset ($bdd);}
		}
 	?>
   </body>
</html>