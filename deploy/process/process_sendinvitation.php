<?php
	header('Content-type: text/html; charset=UTF-8');
	session_start();
	extract($_POST);
	$success = false;
	$message = "PAS OK";
	$today = date("Y-m-d H:i:s");
	if (isset($deadline,$langue,$prix,$username,$userid,$projectname,$projectid,$comment)){

		$deadline = trim(strip_tags($deadline)) != '' ? $deadline : null;
		$langue = trim(strip_tags($langue)) != '' ? $langue : null;
		$prix = trim(strip_tags($prix)) != '' ? $prix : null;
		$username2 = trim(strip_tags($username)) != '' ? $username : null;
		$userid = trim(strip_tags($userid)) != '' ? $userid : null;
		$projectname = trim(strip_tags($projectname)) != '' ? $projectname : null;
		$projectid = trim(strip_tags($projectid)) != '' ? $projectid : null;


		if(isset($deadline,$langue,$prix,$username2,$userid,$projectname,$projectid,$comment)){
		  	include("connect.php");
			$insertion = "INSERT INTO `tonguer`.`project_col`(id_project, id_trad, id_dev, name_dev, name_trad, name_project, deadline, comment, accept, langue1, prix1, date) VALUES ( :id_project, :id_trad, :id_dev, :name_dev, :name_trad, :name_project, :deadline, :comment, :accept, :langue1, :prix1, :date)";
			$insert_prep = $connect->prepare($insertion);
			$inser_exec = $insert_prep->execute(array(
				':id_project'	=>$projectid,
				':id_trad'		=>$userid,
				':id_dev'	    =>$_SESSION['id'],
				':name_dev'		=>$_SESSION['login'],
				':name_trad'	=>$username2,
				':name_project'	=>$projectname,
				':deadline'	    =>$deadline,
				':comment'	    =>$comment,
				':accept'	   	=>"0",
				':langue1'	 	=>$langue,
				':prix1'		=>$prix,
				':date'			=>$today
			));
			$success = true;
			$message = 'ok';
		}else{
			$message = 'Please fill fields: deadline, Chose language and price';
		}
	}else{
		$message = 'Bug';
	}
	echo json_encode(array("success" => $success, "message" => $message));
?>