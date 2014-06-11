<?php
header('Content-type: text/html; charset=UTF-8');
session_start();
// if(isset($_SESSION['login'])){

// }
$success = false;
$message = "PAS OK";
extract($_POST);
if (isset($username,$password)){
	$username_ok = trim(strip_tags($username)) != '' ? $username : null;
	$password_ok = trim(strip_tags($password)) != '' ? $password : null;
	if(isset($username_ok,$password_ok)){
	    include("connect.php");
	    $requete = "SELECT * FROM `tonguer`.`user` WHERE username = :nom_v AND password = :pass_v";
	    try{
            $req_prep = $connect->prepare($requete);
            $req_prep->execute(array(':nom_v'=>$username_ok,':pass_v'=>$password_ok));
            $resultat = $req_prep->fetchAll();
            $nb_result = count($resultat);
            if ($nb_result > 0){
                if ($nb_result == 1){
                    if (!session_id()) session_start();

	    			$requete2 = "SELECT `id`,`job` FROM `tonguer`.`user` WHERE username = :username";
					 try{
			            $req_prep2 = $connect->prepare($requete2);
			            $req_prep2->execute(array(':username'=>$username_ok));
			            $resultat2 = $req_prep2->fetchAll();

			            $_SESSION['login'] = $username_ok;
			            $_SESSION['id'] = $resultat2[0][0];
			            $_SESSION['job'] = $resultat2[0][1];
				    }catch (PDOException $e){
				            $message = 'Problème dans la requête de sélection id job';
				    }
					$success = true;
					$message = "ok";
                }else if ($nb_result > 1){
					$message = 'Contact administrator';
                }
            }else{
                    $message = "Username or password are incorrect ";
            }
	    }catch (PDOException $e){
	            $message = 'Problème dans la requête de sélection';
	    }
	}else{
	        $message = 'Please fill in all fields.';
	}
	echo json_encode(array("success" => $success, "message" => $message));
}
?>