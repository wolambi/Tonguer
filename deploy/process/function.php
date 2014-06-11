<?php
	function affiche_trad($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$userid		= $valeur['id'];
			$username	= $valeur['username'];
			$html.="<li>";
			$html.= "<span class='clickusername' data-userid='$userid' >$username</span>";
			$html.= "<span>English, German, Italian</span>";
			$html.= '<span><img src="img/starmoyen4.png" alt="star"></span>';
			$html.= "<span class='sendinvitation' data-userid='$userid' data-username='$username' >Send invitation</span>";
			$html.="</li>";
		}
		return $html;
	}
	function affiche_dev_invitation_accept($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$name_trad	= $valeur['name_trad'];
			$langue 	= $valeur['langue1'];

			$html.="<li>";
			$html.= "<span class='projectinternname activeclass_profilimagecontent clickusername'>$name_trad</span>";
			$html.= "<span class='projectinternsend'><img src='img/sendmail.png' alt='sendmail'></span>";
			$html.= "<span class='projectinternaddfriends'><img src='img/supsupfriends.png' alt='supfriends'></span>";
			$html.= "<span class='projectinternneedskills'>$langue</span>";
			$html.= "<span class='projectinternsup'>x</span>";
			$html.="</li>";
		}
		return $html;
	}
	function affiche_dev_invitation_wait($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$name_trad	= $valeur['name_trad'];
			$langue 	= $valeur['langue1'];

			$html.="<li>";
			$html.= "<span class='projectinternname activeclass_profilimagecontent clickusername'>$name_trad</span>";
			$html.= "<span class='projectinternsend'><img src='img/sendmail.png' alt='sendmail'></span>";
			$html.= "<span class='projectinternaddfriends'><img src='img/supsupfriends.png' alt='supfriends'></span>";
			$html.= "<span class='projectinternneedskills'>$langue</span>";
			$html.= "<span class='projectinternsup'>x</span>";
			$html.="</li>";
		}
		return $html;
	}

	function affiche_trad_invitation($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$name_dev		= $valeur['name_dev'];
			$date			= $valeur['date'];
			$name_project	= $valeur['name_project'];
			$deadline		= $valeur['deadline'];
			$name_trad 		= $valeur['name_trad'];
			$comment 		= $valeur['comment'];
			$langue1 		= $valeur['langue1'];
			$prix1	 		= $valeur['prix1'];
			$id_invitation	= $valeur['id_invitation'];

			$html.='<article><div class="titleinvit">';
			$html.='<p>Invitation <span class="activeclass_profilimagecontent clickusername" >'.$name_dev.'</span></p>';
			$html.='<p>'.$name_project.'</p><p>'.$date.'</p>';
			$html.='</div><div class="helloinvit"><p>Hello I invite you to work on my project,<br>my deadline <span>'.$deadline.'</span>.</p>';
			$html.='<p>'.$comment.'</p>';
			$html.='</div><div class="translateinvit"><p>Translate</p><ul><li>';
			$html.='<p>'.$langue1.'</p><p><strong>'.$prix1.'€</strong>/string</p>';
			$html.='</li></ul></div><div class="newprojectbutton"><button data-id_invitation="'.$id_invitation.'" class="newprojectdecline">Decline</button><button <button data-id_invitation="'.$id_invitation.'" class="newprojectaccept">Accept</button></div></article>';
		}
		return $html;
	}







	function affiche_project_trad($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$id			= $valeur['id'];
			$name 		= $valeur['name'];
			$url 		= $valeur['url'];
			$id_crea 	= $valeur['id_crea'];
			$date		= $valeur['date'];
			$prix		= $valeur[7];
			$langue		= $valeur[6];

			$html.='
			<li>
				<div class="centerli">
					<div class="linonderoul tradou">
						<span class="projectdate">'.$date.'</span>
						<span class="projectname">'.$name.'</span>
						<div class="projectarrow"></div>
						<span class="projectnew anew">New</span>
						<div class="projectjauche"><img src="img/advancementjauche22.png" alt="advancement 22%"></div>
						<span class="projectpourcentage">64%</span>
						<span class="gotonguer"><a data-projectid="'.$id.'" href="tonguer.php?projectid='.$id.'">Translate</a></span>
					</div>
						<div class="linonderoulsuite">
						<nav>
							<ul>
								<li><a class="lienprojectintern1 active" href="">Newsgroup</a></li>
								<li><a class="lienprojectintern2" href="">Administration</a></li>
							</ul>
						</nav>
						<div class="afternavcontent">
							<div class="conainerinterne">
								<div class="contentinterne class1 ">
									<ul>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
									</ul>
									<form action="#" method="POST">
										<input type="text">
										<input type="submit">
									</form>
								</div>
								<div class="contentinterne class2">
									<div class="translatordiv1">
										<div class="colloboratoraccorwait remutrad">
											<h3>Compensation by language</h3>
											<ul>



												<li>
													<span class="projectinternneedskills">'.$langue.'</span>
													<span class="projectstringprice">'.$prix.' / string</span>
													<span class="projectprice">797€</span>
												</li>




											</ul>
										</div>
									</div>
									<div class="translatordiv2">
										<div class="colloborataddtanslator ">
											<h3 class="adminfiles">Files</h3>
											<button>Upload ZIP</button>
											<button>Download ZIP</button>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="adminfurl">URL</h3>
											<a href="'.$url.'" rel="_bank">'.$url.'</a>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="admindelete">Leave Project</h3>
											<button>LEAVE</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			';

		}
		return $html;
	}






	function SiteMap($repertoire){
		$file = file_get_contents("$repertoire");
		preg_match_all('#\#: [a-zA-Z0-9/._]*:[0-9]*\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#', $file, $matches);
		//print_r($matches);
		foreach ($matches["0"] as $value) {
			$data1 = preg_replace('#\#: (.+):[0-9]*\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#i', '$1', $value);
			$data2 = preg_replace('#.*/([a-zA-Z0-9_-]*)\.[a-z]*#', '$1', $data1);
			echo '<li data-link="'.$data1.'">'.$data2.'</li>';
		}
	}


	function content($repertoire){
		$file = file_get_contents("$repertoire");
		preg_match_all('#\#: [a-zA-Z0-9/._]*:[0-9]*\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#', $file, $matches);
		$x = 0;
		foreach ($matches["0"] as $value) {
			$texte1 = preg_replace('#\#: [a-zA-Z0-9/._]*:[0-9]*\nmsgid \"(.+)\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#i', '$1', $value);
			$texte2 = preg_replace('#\#: [a-zA-Z0-9/._]*:[0-9]*\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"(.+)\"#i', '$1', $value);
			$data1  = preg_replace('#\#: (.+):[0-9]*\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#i', '$1', $value);
			$data2  = preg_replace('#(.+)\nmsgid \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"\nmsgstr \"[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*\"#i', '$1', $value);

			if (!($texte1 === $value)) {
				echo "<li class='divclass$x'>";
					echo '<label for="var'.$x.'" class="atraduire" >'.$texte1.'</label>';
					if ($texte2 == $value) {
						echo "<textarea id='var$x' data-datanav='$data1' data-datapo='$data2' name='name$x' class='traduit' ></textarea>";
					}else{
						echo "<textarea id='var$x' data-datanav='$data1' data-datapo='$data2' name='name$x' class='traduit' >$texte2</textarea>";
					}
				echo '<div class="tonguerflag"></div>';
				echo "</li>";
				$x++;

			}
		}
		echo "<li id='invisibledata' data-nombre='$x'></li>";
	}

	function remplissage($chemin, $dirname, $filename){
		if ( pathinfo($chemin, PATHINFO_EXTENSION) == "php" ) {
			$file = file("$chemin");
			foreach ($file as $lineNumber => $lineContent){
				preg_match_all('#[gettext|_]+[\(\"\']{2}[a-zA-Z0-9 \'\"\(\)\,\.\:\;\^\¨\$\€\@\`\£\+\=\-\&\é\§\è\!\ç\à\*]*[\)\"\']{2}#', $lineContent, $matches);
				foreach ($matches["0"] as $value) {
					$texte = preg_replace('#[gettext|_]+[\(\"\']{2}(.+)[\)\"\']{2}#isU', '$1', $value);
					$curent = "\n";
					$curent .= "\n"."#: /$chemin:$lineNumber";
					$curent .= "\n".'msgid "'.$texte.'"';
					$curent .= "\n".'msgstr ""';
					file_put_contents($dirname.$filename, $curent, FILE_APPEND );
				}
			}
		}
		if( is_dir($chemin) ){
			$me = opendir($chemin);
			while( $child = readdir($me) ){
				if( $child != '.' && $child != '..' && $child != "__MACOSX" ){
					remplissage( $chemin.DIRECTORY_SEPARATOR.$child, $dirname, $filename);
				}
			}
		}
	}






	function affiche_project_dev($resultat){
		$html = "";
		foreach($resultat as $valeur){
			$userid			= $valeur['id_crea'];
			$datedecreation = $valeur['date'];
			$projetcname 	= $valeur['name'];
			$projetcid 		= $valeur['id'];
			$urlsite		= $valeur['url'];
			$structure_local = "tonguer_files/$userid/$projetcid/locale/en_US/LC_MESSAGES/trad.po";

			$html.= '<li>
			<div class="centerli">
				<div class="linonderoul">
					<span class="projectdate">'.$datedecreation.'</span>
					<span class="projectname">'.$projetcname.'</span>
					<div class="projectarrow"></div>
					<span class="projectnew">New</span>
					<div class="projectjauche"><img src="img/advancementjauche64.png" alt="advancement 79%"></div>
					<span class="projectpourcentage">64%</span>
				</div>

				<div class="linonderoulsuite">
						<nav>
							<ul>
								<li><a class="lienprojectintern1 active" href="#">Translator</a></li>
								<li><a class="lienprojectintern2" href="">Newsgroup</a></li>
								<li><a class="lienprojectintern3" href="">Administration</a></li>
							</ul>
						</nav>
						<div class="afternavcontent">
							<div class="conainerinterne">
								<div class="contentinterne">
									<div class="translatordiv1">
										<div class="colloboratoraccorwait">
											<h3>Collaborator to accept</h3>
											<ul>
';

					include("process/connect.php");
					try{
						$requete5  = (" SELECT * FROM `tonguer`.`project_col` WHERE id_project = :id_project AND accept = 1");
						$req_prep5 = $connect->prepare($requete5);
						$req_prep5 ->execute(array(':id_project'=>$projetcid));
						$resultat5 = $req_prep5->fetchAll();

						//echo(affiche_project_dev($resultat5));

					}catch(PDOException $e){
						echo 'Erreur : '.$e->getMessage();
					}

						$html.= affiche_dev_invitation_accept($resultat5);


					$html.='
											</ul>
										</div>
										<div class="colloboratoraccorwait">
											<h3 class="h3special">Collaborator waiting</h3>
											<ul>



';

					try{
						$requete6  = (" SELECT * FROM `tonguer`.`project_col` WHERE id_project = :id_project AND accept = 0");
						$req_prep6 = $connect->prepare($requete6);
						$req_prep6 ->execute(array(':id_project'=>$projetcid));
						$resultat6 = $req_prep6->fetchAll();

					}catch(PDOException $e){
						echo 'Erreur : '.$e->getMessage();
					}

						$html.= affiche_dev_invitation_wait($resultat6);




					$html.='

											</ul>
										</div>
									</div>
									<div class="translatordiv2">
										<div class="colloborataddtanslator">
										<h3>Add a Translator</h3>
											<ul>
												<li class="activeclass_addtranslatorcontent" data-projectname="'.$projetcname.'" data-projectid="'.$projetcid.'">My Tonguerfriend</li>
												<li class="activeclass_addtranslatorcontent" data-projectname="'.$projetcname.'" data-projectid="'.$projetcid.'">Search a Translator</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="contentinterne class1 ">
									<ul>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername clickusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername clickusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
									</ul>
									<form action="#" method="POST">
										<input type="text">
										<input type="submit">
									</form>
								</div>
								<div class="contentinterne class2">
									<div class="translatordiv1">
										<div class="colloboratoraccorwait">
											<h3>Remunerate Collaborator</h3>
											<ul>




												<li>
													<span class="projectinternname clickusername activeclass_profilimagecontent">Lipelip</span>
													<span class="projectinternneedskills">Mandarin</span>
													<span class="projectevalandcom activeclass_evaluateandcommentcontent">Evaluate and Comment</span>
													<span class="projectprice">1 230€</span>
													<span class="projectpayd"><img src="img/paid.png" alt="Paid"></span>
												</li>





											</ul>


										</div>
									</div>
									<div class="translatordiv2">
										<div class="colloborataddtanslator ">
											<h3 class="adminfiles">Files</h3>
											<a href="'.$structure_local.'" class="dwnloadproject"  data-projectid="'.$projetcid.'">Download Files</a>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="adminfurl">URL</h3>
											<a href="'.$urlsite.'" rel="_bank">'.$urlsite.'</a>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="admindelete">Delete Project</h3>
											<button class="deletproject" data-projectid="'.$projetcid.'" >DELETE</button>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>


			';
			$html.="</li>";
		}
		return $html;
	}

?>