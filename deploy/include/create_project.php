<div id="content" class="createprojectcontent">
	<section>
		<div class="createprojecttitre">
			<h2>Create Project</h2>

		</div>
		<form method="POST" action="process/process_createproject.php" id="createprijectform" enctype="multipart/form-data" >
			<div class="createprojectlvl1">
				<label for="createprojectname">Project name *</label>
				<input id="createprojectname" name="createprojectname" type="text" placeholder="Name">
				<label for="createprojectupload" class="recenter">Upload the ZIP site *</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
				<input id="createprojectupload" name="createprojectupload" type="file" accept="application/zip" >
				<button id="createprojectuploadbutton">Upload .zip</button>
				<label for="createprojecturl">URL of the site</label>
				<input id="createprojecturl" name="createprojecturl" type="text" placeholder="http://" >

				<input type="submit" class="createprojectnext" value="Create">
			</div>
		</form>


	</section>
</div>