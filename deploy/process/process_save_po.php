<?php
	extract($_POST);
	session_start();
	include("connect.php");
	$success = false;
	$message = "PAS OK";
	$requete1  = (" SELECT * FROM `tonguer`.`project_col` WHERE id_trad = :id_trad AND accept = 1");
	$req_prep1 = $connect->prepare($requete1);
	$req_prep1 ->execute(array(':id_trad'=>$_SESSION['id']));
	$resultat1 = $req_prep1->fetchAll();

	$projectid = $_GET['projectid'];

	$langue = "en";
	$user_id = $resultat1[0][3];
	$id_de_project = $projectid;
	$structure_local = "../tonguer_files/$user_id/$id_de_project/locale";
	$structure = "../tonguer_files/$user_id/$id_de_project/site";
	$languecode = "en_US";
	$dirname = $structure_local."/$languecode/LC_MESSAGES/";
	$filename = "trad.po";
	$filename_binnaire = "trad.mo";
	$atraduire = stripslashes($atraduire);
	$traduit = stripslashes($traduit);

	if (isset($atraduire, $traduit, $datanav, $datapo, $superx)){

		if ($superx === "0") {
			$fichierouvert = fopen ($dirname.$filename, "a+");
			ftruncate($fichierouvert, 0);
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
		}
		$curent = "\n";
		$curent .= "\n"."$datapo";
		$curent .= "\n".'msgid "'.$atraduire.'"';
		$curent .= "\n".'msgstr "'.$traduit.'"';
		file_put_contents($dirname.$filename, $curent, FILE_APPEND );
		$success = "ok";
		$message = "ok";
	}


	echo json_encode(array("success" => $success, "message" => $message));

?>