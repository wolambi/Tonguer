<?php
	header('Content-type: text/html; charset=UTF-8');
	session_start();
	extract($_POST);
	$success = false;
	$message = "PAS OK";
	$today = date("Y-m-d");
	include("function.php");
	if (isset($createprojectname,$createprojecturl)){
		$createprojectnameok = trim(strip_tags($createprojectname)) != '' ? $createprojectname : null;
		if(isset($createprojectnameok)){
		  	include("connect.php");
			$insertion = "INSERT INTO `tonguer`.`project`(name, url, id_crea, date) VALUES ( :name, :url, :id_crea, :date )";
			$insert_prep = $connect->prepare($insertion);
			$inser_exec = $insert_prep->execute(array(
				':name'		=>$createprojectnameok,
				':url'		=>$createprojecturl,
				':id_crea'	=>$_SESSION['id'],
				':date'		=>$today
			));
			$success = true;
			$message = 'project cree';

			$requete2 = "SELECT `id` FROM `tonguer`.`project` WHERE name = :name";
			try{
		        $req_prep2 = $connect->prepare($requete2);
		        $req_prep2->execute(array(':name'=>$createprojectnameok));
		        $resultat2 = $req_prep2->fetchAll();

				$user_id = $_SESSION['id'];
				$id_de_project = $resultat2[0][0];
				$structure = "../tonguer_files/$user_id/$id_de_project/site";
				$structure_local = "../tonguer_files/$user_id/$id_de_project/locale";
				$langue = "en";
				$languecode = "en_US";
				$dirname = $structure_local."/$languecode/LC_MESSAGES/";
				$filename = "trad.po";
				$filename_binnaire = "trad.mo";


				//-------------------cree les dossier-------------------

				mkdir($structure, 0777, true);
				mkdir($structure_local."/en_US/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/fr_FR/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/en_GB/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/nl_NL/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/zh_CN/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/ar_YE/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/de_DE/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/it_IT/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/pt_PT/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/ru_RU/LC_MESSAGES", 0777, true);
				mkdir($structure_local."/es_ES/LC_MESSAGES", 0777, true);


				//-------------------deziper le fichier-------------------

				$dossier = "../tonguer_files/$user_id/$id_de_project/site/";
				$fichier = basename($_FILES['createprojectupload']['name']);
				$taille_maxi = 1000000000;
				$taille = filesize($_FILES['createprojectupload']['tmp_name']);
				$extensions = array('.zip');
				$extension = strrchr($_FILES['createprojectupload']['name'], '.');
				//Début des vérifications de sécurité...
				if(!in_array($extension, $extensions)){
					$erreur = 'Vous devez uploader un fichier de type ZIP';
				}
				if($taille>$taille_maxi){
					$erreur = 'Le fichier est trop gros...';
				}
				if(!isset($erreur)){
				//On formate le nom du fichier ici...
				$fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
					if(move_uploaded_file($_FILES['createprojectupload']['tmp_name'], $dossier . $fichier)){
						$file = $dossier.$fichier;
						$zip = new ZipArchive;
						if ($zip->open($file) === TRUE) {
							$zip->extractTo($dossier);
							$zip->close();
							$message = 'ok';
							$success = true;
							unlink($file);

						}else{
							$message = 'PAS ok';
						}
					}else{
						echo 'Echec de l\'upload !';
					}
				}else{
					echo $erreur;
				}
				$fichierouvert = fopen ($dirname.$filename, "a+");
				fclose ($fichierouvert);

				$current = 'msgid ""';
				$current .= "\n".'msgstr ""';
				$current .= "\n".'"Project-Id-Version: '.$id_de_project.'\n"';
				$current .= "\n".'"POT-Creation-Date: 2014-05-31 13:24+0100\n"';
				$current .= "\n".'"PO-Revision-Date: 2014-05-31 13:25+0100\n"';
				$current .= "\n".'"Last-Translator: \n"';
				$current .= "\n".'"Language-Team: \n"';
				$current .= "\n".'"Language: '.$langue.'\n"';
				$current .= "\n".'"MIME-Version: 1.0\n"';
				$current .= "\n".'"Content-Type: text/plain; charset=UTF-8\n"';
				$current .= "\n".'"Content-Transfer-Encoding: 8bit\n"';
				$current .= "\n".'"X-Generator: Poedit 1.6.4\n"';
				$current .= "\n".'"X-Poedit-Basepath: .\n"';
				$current .= "\n".'"Plural-Forms: nplurals=2; plural=(n > 1);\n"';
				$current .= "\n".'"KeywordsList: _;gettext\n"';
				$current .= "\n".'"X-Poednit-SearchPath-0: '.$structure.'\n"';
				$current .= "\n";

				file_put_contents($dirname.$filename, $current);

				remplissage($structure, $dirname, $filename);

				require('php_mo.php');
				phpmo_convert($dirname.$filename, $dirname.$filename_binnaire);

		    }catch (PDOException $e){
		            $message = 'Problème dans la requête de sélection id job';
		    }
		}else{
			$message = 'Please fill in all fields';
		}
	}else{
		$message = 'Bug';
	}
 	header('Location: ../project.php');
?>