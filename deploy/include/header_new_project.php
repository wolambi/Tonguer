<header>
	<a href="index.php"><h1>Tonguer</h1></a>
	<nav>
		<ul>
			<?php
				echo '<li><a href="index.php">Home</a></li>';
				if(isset($_SESSION['login'])){
					if (($_SESSION['job'])=="1") {
						echo '<li><a href="project.php">Current project</a></li>';
						echo '<li class="actif"><a href="new_project.php">Invitation</a></li>';
					}else if (($_SESSION['job'])=="2"){
						echo '<li><a href="project.php">My projects</a></li>';
						echo '<li class="actif"><a href="new_project.php">Create project</a></li>';

					}
				}
			 ?>
		</ul>
		<ul>
			<?php
				if(isset($_SESSION['login'])){
					$usernameheader = $_SESSION['login'];
					if (($_SESSION['job'])=="1") {
						echo '<li class="headerusername" ><a href="profile.php">'.$usernameheader.'</a></li>';
					}else if (($_SESSION['job'])=="2"){
						echo '<li class="headerusername" ><a href="profile.php">'.$usernameheader.'</a></li>';
					}
					echo '<li><a href="process/process_logout.php">Logout</a></li>';
				}else{
					echo '<li><a href="login.php">Login</a></li>';
					echo '<li class="singforfree"><a href="register.php">Sign Up Free</a></li>';
				}
		 	?>
		</ul>
	</nav>
</header>