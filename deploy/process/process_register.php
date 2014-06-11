<?php
	header('Content-type: text/html; charset=UTF-8');
	extract($_POST);
	$success = false;
	$message = "PAS OK";
	$today = date("Y-m-d H:i:s");
	if (isset($iama,$registerusername,$registerpassword,$registeremail,$registerfullname,$registerpostalcode,$registercompany,$registertown,$registernumber,$registercountry,$registeraddress,$registerphone,$registermaternellanguage,$presentationregister)){
		$iama = trim(strip_tags($iama)) != '' ? $iama : null;
		$registerusername = trim(strip_tags($registerusername)) != '' ? $registerusername : null;
		$registerpassword = trim(strip_tags($registerpassword)) != '' ? $registerpassword : null;
		$registeremail = trim(strip_tags($registeremail)) != '' ? $registeremail : null;
		$registerfullname = trim(strip_tags($registerfullname)) != '' ? $registerfullname : null;
		$registerpostalcode = trim(strip_tags($registerpostalcode)) != '' ? $registerpostalcode : null;
		$registercompany = trim(strip_tags($registercompany)) != '' ? $registercompany : null;
		$registertown = trim(strip_tags($registertown)) != '' ? $registertown : null;
		$registernumber = trim(strip_tags($registernumber)) != '' ? $registernumber : null;
		$registercountry = trim(strip_tags($registercountry)) != '' ? $registercountry : null;
		$registeraddress = trim(strip_tags($registeraddress)) != '' ? $registeraddress : null;
		$registerphone = trim(strip_tags($registerphone)) != '' ? $registerphone : null;
		$registermaternellanguage = trim(strip_tags($registermaternellanguage));
		$presentationregister = trim(strip_tags($presentationregister));

		if(isset($iama,$registerusername,$registerpassword,$registeremail,$registerfullname,$registerpostalcode,$registercompany,$registertown,$registernumber,$registercountry,$registeraddress,$registerphone,$registermaternellanguage,$presentationregister)){
		  	include("connect.php");
		    $requete = " SELECT count(*) FROM `tonguer`.`user` WHERE username = ? ";
		    try{
		        $req_prep = $connect->prepare($requete);
		        $req_prep->execute(array(0=>$registerusername));
		        $resultat = $req_prep->fetchColumn();
		        if ($resultat == 0){
	                $insertion = "INSERT INTO `tonguer`.`user`(job, username, password, email, fullname, company, country, town, zip, address, presentation, maternal_language, phone, addressnumber, creatdate) VALUES ( :job, :username, :password, :email, :fullname, :company, :country, :town, :zip, :address, :presentation, :maternal_language, :phone, :addressnumber, :creatdate )";
	                $insert_prep = $connect->prepare($insertion);
	                $inser_exec = $insert_prep->execute(array(
	                	':job'					=>$iama,
	                	':username'				=>$registerusername,
	                	':password'	    		=>$registerpassword,
	                	':email'				=>$registeremail,
	                	':fullname'	    		=>$registerfullname,
	                	':zip'					=>$registerpostalcode,
	                	':company'	    		=>$registercompany,
	                	':country'	    		=>$registercountry,
	                	':town'	   				=>$registertown,
	                	':address'	    		=>$registeraddress,
	                	':presentation'			=>$presentationregister,
	                	':maternal_language'	=>$registermaternellanguage,
	                	':phone'	   			=>$registerphone,
						':addressnumber'	   	=>$registernumber,
						':creatdate'	   		=>$today
	            	));
					$success = true;
					$message = 'ok';
		        }else{
					$message = 'This name is already used.';
		        }
		    }catch (PDOException $e){
				$message = "Problème dans la requête d\'insertion";
		    }
		}else{
			$message = 'Please fill in all fields';
		}
	}else{
		$message = 'Bug';
	}
	echo json_encode(array("success" => $success, "message" => $message));
?>