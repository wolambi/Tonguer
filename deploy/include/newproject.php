
<div id="content" class="newprojectcontent">
	<div class="newprojectdecoration"></div>
	<section>
		<h2>Project invitation</h2>

		<?php
			include("process/function.php");
			include("process/connect.php");

				try{
					$requete4  = (" SELECT * FROM `tonguer`.`project_col` WHERE id_trad = :id_trad AND accept = 0");
					$req_prep4 = $connect->prepare($requete4);
					$req_prep4 ->execute(array(':id_trad'=>$_SESSION['id']));
					$resultat4 = $req_prep4->fetchAll();

					echo(affiche_trad_invitation($resultat4));




				}catch(PDOException $e){
					echo 'Erreur : '.$e->getMessage();
				}

		 ?>
		<!-- <article>
			<div class="titleinvit">
				<p>Invitation <span class="activeclass_profilimagecontent" >Wolambi</span></p>
				<p>L'eau à la bouche</p>
				<p>24-04-2014</p>
			</div>
			<div class="helloinvit">
				<p>Hello I invite you to work on my project,<br>my deadline <span>20-09-14</span>.</p>
				<p>Bonjour Jon Snow, j'ai remarqué que tu te specialisais dans la traduction de site d'entrepreneur .Justement j'ai un site sur la construction de "mur" à traduir. Je serais heureux que tu participes a l'internationalisation de mon site.</p>
			</div>
			<div class="translateinvit">
			<p>Translate</p>
				<ul>
					<li>
						<p>French</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Italian</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Mandarin</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
				</ul>
			</div>
			<div class="newprojectbutton">
				<button class="newprojectdecline">Decline</button>
				<button class="newprojectaccept">Accept</button>
			</div>
		</article>
		<article>
			<div class="titleinvit">
				<p>Invitation <span class="activeclass_profilimagecontent" >Wolambi</span></p>
				<p>L'eau à la bouche</p>
				<p>24-04-2014</p>
			</div>
			<div class="helloinvit">
				<p>Hello I invite you to work on my project,<br>my deadline <span>20-09-14</span>.</p>
				<p>Bonjour Jon Snow, j'ai remarqué que tu te specialisais dans la traduction de site d'entrepreneur .Justement j'ai un site sur la construction de "mur" à traduir. Je serais heureux que tu participes a l'internationalisation de mon site.</p>
			</div>
			<div class="translateinvit">
			<p>Translate</p>
				<ul>
					<li>
						<p>French</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Italian</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Mandarin</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
				</ul>
			</div>
			<div class="newprojectbutton">
				<button class="newprojectdecline">Decline</button>
				<button class="newprojectaccept">Accept</button>
			</div>
		</article>
		<article>
			<div class="titleinvit">
				<p>Invitation <span class="activeclass_profilimagecontent" >Wolambi</span></p>
				<p>L'eau à la bouche</p>
				<p>24-04-2014</p>
			</div>
			<div class="helloinvit">
				<p>Hello I invite you to work on my project,<br>my deadline <span>20-09-14</span>.</p>
				<p>Bonjour Jon Snow, j'ai remarqué que tu te specialisais dans la traduction de site d'entrepreneur .Justement j'ai un site sur la construction de "mur" à traduir. Je serais heureux que tu participes a l'internationalisation de mon site.</p>
			</div>
			<div class="translateinvit">
			<p>Translate</p>
				<ul>
					<li>
						<p>French</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Italian</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
					<li>
						<p>Mandarin</p>
						<p><strong>0.15€</strong>/string,  <strong>3674</strong> string,  <strong>1180 €</strong></p>
					</li>
				</ul>
			</div>
			<div class="newprojectbutton">
				<button class="newprojectdecline">Decline</button>
				<button class="newprojectaccept">Accept</button>
			</div>
		</article> -->
	</section>
</div>