<div id="content" class="projectcontent">
	<section>
		<div class="projectdeco">
			<h2>Project</h2>
			<h2>Advancement</h2>
		</div>
		<ul class="thisul">

		<?php
			include("process/function.php");
			include("process/connect.php");

				try{
					$requete6  = (" SELECT * FROM `tonguer`.`project_col` WHERE accept = :accept AND id_trad = :id_trad	 ");
					$req_prep6 = $connect->prepare($requete6);
					$req_prep6 ->execute(array(':accept'=>1, ':id_trad'=>$_SESSION['id']));
					$resultat6 = $req_prep6->fetchAll();

					foreach($resultat6 as $valeur){
						$id_project	= $valeur["id_project"];
						$langue1	= $valeur["langue1"];
						$prix1		= $valeur["prix1"];


						$requete7  = (" SELECT * FROM `tonguer`.`project` WHERE id = :id AND delet = 0");
						$req_prep7 = $connect->prepare($requete7);
						$req_prep7 ->execute(array(':id'=>$id_project));
						$resultat7 = $req_prep7->fetchAll();

						array_push($resultat7[0], $langue1, $prix1);


						echo(affiche_project_trad($resultat7));

					}


					}catch(PDOException $e){
						echo 'Erreur : '.$e->getMessage();
					}

		 ?>
			<!-- <li>
				<div class="centerli">
					<div class="linonderoul tradou">
						<span class="projectdate">13-5-2015</span>
						<span class="projectname">Namur en Mai</span>
						<div class="projectarrow"></div>
						<span class="projectnew anew">New</span>
						<div class="projectjauche"><img src="img/advancementjauche22.png" alt="advancement 22%"></div>
						<span class="projectpourcentage">64%</span>
						<span class="gotonguer"><a href="index.php?page=tonguer">Translate</a></span>
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
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
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
													<span class="projectinternneedskills">French</span>
													<span class="projectstringprice">0.12€ / string</span>
													<span class="projectprice">797€</span>
												</li>
												<li>
													<span class="projectinternneedskills">Italian</span>
													<span class="projectstringprice">0.15€ / string</span>
													<span class="projectprice">985€</span>
												</li>
												<li>
													<span class="projectinternneedskills">Mandarin</span>
													<span class="projectstringprice">0.11€ / string</span>
													<span class="projectprice">712€</span>
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
											<a href="antonin-lambinet.be" rel="_bank">antonin-lambinet.be</a>
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
			<li class="">
				<div class="centerli">
					<div class="linonderoul tradou">
						<span class="projectdate">13-5-2015</span>
						<span class="projectname">Namur en Mai</span>
						<div class="projectarrow"></div>
						<span class="projectnew anew">New</span>
						<div class="projectjauche"><img src="img/advancementjauche22.png" alt="advancement 22%"></div>
						<span class="projectpourcentage">64%</span>
						<span class="gotonguer"><a href="index.php?page=tonguer">Translate</a></span>
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
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
											<p class="ngtext">Heu jamais :)</p>
										</li>
										<li>
											<span class="ngusername">Wolambi</span>
											<p class="ngtext">Kookakola, quand penses tu avoir fini, la traduction en Mandarin?</p>
										</li>
										<li>
											<span class="ngusername">Kookakola</span>
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
													<span class="projectinternneedskills">French</span>
													<span class="projectstringprice">0.12€ / string</span>
													<span class="projectprice">797€</span>
												</li>
												<li>
													<span class="projectinternneedskills">Italian</span>
													<span class="projectstringprice">0.15€ / string</span>
													<span class="projectprice">985€</span>
												</li>
												<li>
													<span class="projectinternneedskills">Mandarin</span>
													<span class="projectstringprice">0.11€ / string</span>
													<span class="projectprice">712€</span>
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
											<a href="antonin-lambinet.be" rel="_bank">antonin-lambinet.be</a>
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
			</li> -->
		</ul>
	</section>
</div>