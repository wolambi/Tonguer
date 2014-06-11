<div id="content" class="tonguercontent">
<?php

		$requete1  = (" SELECT * FROM `tonguer`.`project_col` WHERE id_trad = :id_trad AND accept = 1");
		$req_prep1 = $connect->prepare($requete1);
		$req_prep1 ->execute(array(':id_trad'=>$_SESSION['id']));
		$resultat1 = $req_prep1->fetchAll();

		$projectid = $_GET['projectid'];

		$user_id = $resultat1[0][3];
		$id_de_project = $projectid;
		$structure_local = "tonguer_files/$user_id/$id_de_project/locale";
		$languecode = "en_US";
		$dirname = $structure_local."/$languecode/LC_MESSAGES/";
		$filename = "trad.po";
		$filename_binnaire = "trad.mo";


		// require('process/php_mo.php');
		// phpmo_convert($dirname.$filename, $dirname.$filename_binnaire);

 ?>
	<section>
		<aside>
			<h3>
			<?php echo $resultat1[0][6];?>
			 </h3>
			<p>
				<span>1579/4851 strings</span>
				<span>29%</span>
			</p>
			<div class="decorationborder"></div>
			<h2>Sitemap</h2>
			<ul class="fuckscroll">
			<?php SiteMap($dirname.$filename); ?>
			<!--
				<li class="end">footer</li>
				<li class="end">header</li>
				<li class="tongactif">index</li>
				<li>pages404</li>
				<li class="dossier">class</li>
				<li>
					<ul>
						<li class="end">class</li>
						<li class="end">commentaire</li>
						<li>tache</li>
						<li>user</li>
					</ul>
				</li>
				<li class="dossier">pages</li>
				<li>
					<ul>
						<li>project</li>
						<li>filtre</li>
						<li>login</li>
					</ul>
				</li> -->
			</ul>
		</aside>
		<div class="tonguerinformation">
			<select name="tonguerchoselang" id="tonguerchoselang">
				<option value="French">French</option>
				<option value="Italian">Italian</option>
			</select>
			<p>
				<span>159/551 strings</span>
				<span>37%</span>
			</p>
			<select name="tonguerdisplay" id="tonguerdisplay">
				<option value="viewall">View all</option>
				<option value="hide">Hide translated</option>
				<option value="color">Color translated</option>
			</select>
			<button data-projectid_ajax="<?php echo "$projectid";  ?>" class="tonguersave">Save</button>
			<div class="decorationborder"></div>
		</div>
		<div class="contenttonguer">
			<form action="#" method="POST">
				<ul>
					<?php content($dirname.$filename); ?>
				</ul>
				<input class="submitpo" type="submit">
			</form>
		</div>
	</section>
</div>