<div id="content" class="registercontent">
	<section>
		<article>
			<h2>Create your account</h2>
			<nav>
				<ol>
					<li class="navregister1">Tonguer information</li>
					<li class="navregister2">Business information</li>
					<li class="navregister3">Other Information</li>
				</ol>
			</nav>
			<div class="afternav">
				<form class="createacount" action="process/process_register.php" method="POST">
					<div>
						<label for="iama">Your Job</label>
						<select name="iama" id="iama">
							<option value="null">Select</option>
							<option value="1">Translator</option>
							<option value="2">Developer</option>
						</select>
						<label for="registerusername">Username</label>
						<input type="text" name="registerusername" id="registerusername" placeholder="Username" >
						<label for="registerpassword">Password</label>
						<input type="password" name="registerpassword" id="registerpassword" placeholder="Password" >
						<label for="registeremail">Email</label>
						<input type="email" name="registeremail" id="registeremail" placeholder="Email" >
						<button class="registernext">Next</button>
					</div>
					<div class="col">
						<label for="registerfullname">Your full name</label>
						<input type="text" name="registerfullname" id="registerfullname" placeholder="Your full name" >
						<label for="registerpostalcode">Postal code</label>
						<input type="text" name="registerpostalcode" id="registerpostalcode" placeholder="Postal code" >
						<label for="registercompany">Company</label>
						<input type="text" name="registercompany" id="registercompany" placeholder="Company" >
						<label for="registertown">Town</label>
						<input type="text" name="registertown" id="registertown" placeholder="Town" >
						<label for="registernumber">Number</label>
						<input type="text" name="registernumber" id="registernumber" placeholder="Number" >
						<label for="registercountry">Country</label>
						<input type="text" name="registercountry" id="registercountry" placeholder="Country" >
						<label for="registeraddress">Address</label>
						<input type="text" name="registeraddress" id="registeraddress" placeholder="Address" >
						<label for="registerphone">Phone number</label>
						<input type="text" name="registerphone" id="registerphone" placeholder="Phone number" >
						<button class="registeeprev">Prev</button>
						<button class="registernext">Next</button>
					</div>
					<div class="col selectspe">
						<div >
							<label for="registermaternellanguage">Maternal language</label>
							<select name="registermaternellanguage" id="registermaternellanguage">
								<option value="null">Maternal language</option>
								<option value="1">Arabic</option>
								<option value="2">English</option>
								<option value="3">French</option>
								<option value="4">German</option>
								<option value="5">Hindi</option>
								<option value="6">Italian</option>
								<option value="7">Mandarin</option>
								<option value="8">Nederlands</option>
								<option value="9">Portuguese</option>
								<option value="10">Russian</option>
								<option value="11">Spanish</option>
							</select>
							<label class="sidevsup" for="registerlanguageskill_1">Languages Skills and Level</label>
							<select name="registerlanguageskill_1" class="sidevsup languageskill" id="registerlanguageskill_1">
								<option value="null">Languages Skills</option>
								<option value="1">Arabic</option>
								<option value="2">English</option>
								<option value="3">French</option>
								<option value="4">German</option>
								<option value="5">Hindi</option>
								<option value="6">Italian</option>
								<option value="7">Mandarin</option>
								<option value="8">Nederlands</option>
								<option value="9">Portuguese</option>
								<option value="10">Russian</option>
								<option value="11">Spanish</option>
							</select>
							<input class="sidevsup lvlspecificity" type="text" name="levelandspecificity" placeholder="Level and Specificity" >
							<button class="sidevsup add">Add</button>
						</div>
						<label for="presentationregister">Presentation</label>
						<textarea name="presentationregister" id="presentationregister" placeholder="Presentation"></textarea>
						<p class="ajaxmessage_register"></p>
						<button class="registeeprev">Prev</button>
						<input id="submitregister" type="submit" value="Register">
						<div class="minifooter">
							<p>By clicking «REGISTER» I agree that:<br>- By signing up, you are agreeing to our <a href="#">Terms of use</a>.<br>- I am at least 18 years old.</p>
						</div>
					</div>
				</form>
			</div>
		</article>
		<aside>
			<h3>Already have an account?</h3>
			<form id="registerlogin" action="#" method="POST">
				<input type="text" name="username" id="username" placeholder="Username" >
				<input type="password" name="password" id="password" placeholder="Password" >
				<p class="ajaxmessage_login ajaxmessage_login2"></p>
				<input id="submit_registerlogin" type="submit" value="Login">
			</form>
			<a href="index.php?page=forget_log">Forgot your user ID or your Password?</a>
		</aside>
	</section>
</div>