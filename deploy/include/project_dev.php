<div id="content" class="projectcontent">
	<section>
		<div class="projectdeco">
			<h2>Project</h2>
			<h2>Advancement</h2>
		</div>
		<ul class="thisul">
		<?php
			include_once("process/function.php");
			include_once("process/connect.php");

				try{
					$requete4  = (" SELECT * FROM `tonguer`.`project` WHERE id_crea = :id_crea AND delet = 0");
					$req_prep4 = $connect->prepare($requete4);
					$req_prep4 ->execute(array(':id_crea'=>$_SESSION['id']));
					$resultat4 = $req_prep4->fetchAll();

					echo(affiche_project_dev($resultat4));




				}catch(PDOException $e){
					echo 'Erreur : '.$e->getMessage();
				}

		 ?>
<!-- 			<li>
				<div class="centerli">
					<div class="linonderoul">
						<span class="projectdate">7-11-2014</span>
						<span class="projectname">One Piece</span>
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
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">French, Italian</span>
													<span class="projectinternsup">x</span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Lipelip</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">Mandarin</span>
													<span class="projectinternsup">x</span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Bob</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">French, Italian</span>
													<span class="projectinternsup">x</span>
												</li>
											</ul>

										</div>
										<div class="colloboratoraccorwait">
											<h3 class="h3special">Collaborator waiting</h3>
											<ul>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Jon Snow</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">German</span>
													<span class="projectinternsup">x</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="translatordiv2">
										<div class="colloborataddtanslator">
										<h3>Add a Translator</h3>
											<ul>
												<li class="activeclass_addtranslatorcontent">My Tonguerfriend</li>
												<li class="activeclass_addtranslatorcontent">Search a Translator</li>
											</ul>
										</div>
									</div>

								</div>




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
										<div class="colloboratoraccorwait">
											<h3>Remunerate Collaborator</h3>
											<ul>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternneedskills">French</span>
													<span class="projectevalandcom activeclass_evaluateandcommentcontent">Evaluate and Comment</span>
													<span class="projectprice">985€</span>
													<span class="projectpayd"><img src="img/paid.png" alt="Paid"></span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternneedskills">Italian</span>
													<span class="projectevalandcom activeclass_evaluateandcommentcontent">Evaluate and Comment</span>
													<span class="projectprice">929€</span>
													<span class="projectpayd"><img src="img/paid.png" alt="Paid"></span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Lipelip</span>
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
											<button>Upload ZIP</button>
											<button>Download ZIP</button>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="adminfurl">URL</h3>
											<a href="antonin-lambinet.be" rel="_bank">antonin-lambinet.be</a>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="admindelete">Delete Project</h3>
											<button>DELETE</button>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</li>
			<li>
				<div class="centerli">
					<div class="linonderoul">
						<span class="projectdate">13-5-2015</span>
						<span class="projectname">Namur en Mai</span>
						<div class="projectarrow"></div>
						<span class="projectnew anew">New</span>
						<div class="projectjauche"><img src="img/advancementjauche22.png" alt="advancement 22%"></div>
						<span class="projectpourcentage">22%</span>
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
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">French, Italian</span>
													<span class="projectinternsup">x</span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Lipelip</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">Mandarin</span>
													<span class="projectinternsup">x</span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Bob</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">French, Italian</span>
													<span class="projectinternsup">x</span>
												</li>
											</ul>

										</div>
										<div class="colloboratoraccorwait">
											<h3 class="h3special">Collaborator waiting</h3>
											<ul>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Jon Snow</span>
													<span class="projectinternsend"><img src="img/sendmail.png" alt="sendmail"></span>
													<span class="projectinternaddfriends"><img src="img/supsupfriends.png" alt="supfriends"></span>
													<span class="projectinternneedskills">German</span>
													<span class="projectinternsup">x</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="translatordiv2">
										<div class="colloborataddtanslator">
										<h3>Add a Translator</h3>
											<ul>
												<li class="activeclass_addtranslatorcontent">My Tonguerfriend</li>
												<li class="activeclass_addtranslatorcontent">Search a Translator</li>
											</ul>
										</div>
									</div>

								</div>




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
										<div class="colloboratoraccorwait">
											<h3>Remunerate Collaborator</h3>
											<ul>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternneedskills">French</span>
													<span class="projectevalandcom activeclass_evaluateandcommentcontent">Evaluate and Comment</span>
													<span class="projectprice">985€</span>
													<span class="projectpayd"><img src="img/paid.png" alt="Paid"></span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Kedis</span>
													<span class="projectinternneedskills">Italian</span>
													<span class="projectevalandcom activeclass_evaluateandcommentcontent">Evaluate and Comment</span>
													<span class="projectprice">929€</span>
													<span class="projectpayd"><img src="img/paid.png" alt="Paid"></span>
												</li>
												<li>
													<span class="projectinternname activeclass_profilimagecontent">Lipelip</span>
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
											<button>Upload ZIP</button>
											<button>Download ZIP</button>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="adminfurl">URL</h3>
											<a href="antonin-lambinet.be" rel="_bank">antonin-lambinet.be</a>
										</div>
										<div class="colloborataddtanslator ">
											<h3 class="admindelete">Delete Project</h3>
											<button>DELETE</button>
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