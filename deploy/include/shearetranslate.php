<div class="addtranslatorcontent">
	<div class="content">
		<h2>Add a Translator</h2>
		<span class='delet_windows'>X</span>
	</div>
	<div class="addtransshare">
		<div class="addshareheader">
			<ul>
				<li><a class="invitetonguerfriend pasactif" href="#">My Tonguerfriend</a></li>
				<li><a class="invitetonguershear" href="#">Search a Translator</a></li>
			</ul>
			<input type="search">
			<span>Search name or skill</span>
			<div class="soutitrebis">
				<ul>
					<li>Username</li>
					<li>Skills</li>
					<li>Tonguer Evaluation</li>
				</ul>
			</div>
		</div>

		<ul class="invitetranslatorsuite">
		<?php
			include_once("process/function.php");
			include_once("process/connect.php");

				try{

				$requete3  = (" SELECT `id`,`username` FROM `tonguer`.`user` WHERE job = :job");
				$req_prep3 = $connect->prepare($requete3);
				$req_prep3 ->execute(array(':job'=>1));
				$resultat3 = $req_prep3->fetchAll();

				echo(affiche_trad($resultat3));

				}catch(PDOException $e){
					echo 'Erreur : '.$e->getMessage();
				}


		 ?>
		</ul>
	</div>
	<div class="addtransfriend displaynone">
		<div class="addshareheader">
			<ul>
				<li><a class="invitetonguerfriend" href="#">My Tonguerfriend</a></li>
				<li><a class="invitetonguershear pasactif" href="#">Search a Translator</a></li>
			</ul>
			<input type="search">
			<span>Search name or skill</span>
			<div class="soutitrebis">
				<ul>
					<li>Username</li>
					<li>Skills</li>
					<li>Tonguer Evaluation</li>
				</ul>
			</div>
		</div>
		<ul class="invitetranslatorsuite">
			<li>
				<span>Username</span>
				<span>English, German, Italian</span>
				<span><img src="img/starmoyen4.png" alt="star"></span>
				<span>Send invitation</span>
			</li>
			<li>
				<span>Username</span>
				<span>English, German, Italian</span>
				<span><img src="img/starmoyen4.png" alt="star"></span>
				<span>Send invitation</span>
			</li>
		</ul>
	</div>
</div>