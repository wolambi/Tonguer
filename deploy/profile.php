<?php
header('Content-type: text/html; charset=UTF-8');
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Tonguer</title>
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
		<?php include("include/header_profile.php") ?>

		<?php
			if(isset($_SESSION['login'])){
				if (($_SESSION['job'])=="1") {
					include("include/profil_tra.php");
				}else if (($_SESSION['job'])=="2"){
					include("include/profil_dev.php");
				}
			}else{
				header('Location: index.php');//ne doit jamais arriver
			}
		?>
		<?php include("include/evaluationandcomment.php") ?>
		<?php include("include/profilfadein.php") ?>
		<?php include("include/shearetranslate.php") ?>
		<?php include("include/footer.php") ?>

	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.0.3.min.js"><\/script>')</script>
    <script src="js/main.min.js"></script>
</body>
</html>