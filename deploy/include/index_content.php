<div id="content" class="indexcontent">
	<section class="index1">
		<h2><span>Tonguer allows you to translate your site</span><br>by professional translators</h2>
	 	<div>
			<div class="ecrou1"></div>
			<div class="ecrou2"></div>
			<div class="ecrou3"></div>
			<div class="decoration1"></div>
			<div class="decoration2"></div>
			<div class="decoration3"></div>
		</div>
	</section>
	<section class="index2">
		<div>
			<div>
				<ul>
					<li><a href="https://plus.google.com" rel="_blank"></a></li>
					<li><a href="https://www.facebook.com" rel="_blank"></a></li>
					<li><a href="https://twitter.com" rel="_blank"></a></li>
				</ul>
			</div>
		</div>
		<div class="index_sec">
			<article>
				<h2>developer</h2>
				<p>The <span>developer</span> creates a project</p>
				<p>TONGUER give you access to the list of register <span class="vert">translator</span> with their references</p>
				<p>The <span class="vert">translators</span> use TONGUER translation platform</p>
				<p>After the translation the <span>developer</span> receive the translation file</p>
			</article>
			<article>
				<h2>translator</h2>
				<p>The <span class="vert">translator</span> receive an invitation to work on a project</p>
				<p>If he accepts he uses TONGUER</p>
				<p>TONGUER is specially study to facilitate translations </p>
				<ul>
					<li>- no software</li>
					<li>- intuitive translation, simple and efficient </li>
					<li>- no translation out of context</li>
				</ul>
			</article>
		</div>
	</section>
	<section class="index3">
		<div class="index3titre">
			<h2>Testimonials from users</h2>
		</div>
		<div class="index3content">
			<article>
				<div></div>
				<h3>fbourgaux</h3>
				<p>"I love it. It’s exactly what I was looking for. User-friendly, easy to set up, professional and has all the functions I need. I’m very happy."</p>
			</article>
			<article>
				<div></div>
				<h3>lipelip</h3>
				<p>"Thank you – I LOVE the Tonguer platform. It is simply amazing. I researched and tried several other platform but Tonguer is the best! Keep up the good work!"</p>
			</article>
			<article>
				<div></div>
				<h3>pixeline</h3>
				<p>"As a Translator, I find that your product is in very good condition, logical, and organized with everything that I need."</p>
			</article>
		</div>
		<aside>
			<div>
				<p>So, what are you waiting for?</p>
				<span><a href="index.php">Sign Up Free</a></span>
				<p>It only takes few minutes.</p>
			</div>
		</aside>
	</section>
	<section class="index4">
		<div class="nav">
			<div class="index4titre">
				<h2>Developer  Docs</h2>
				<nav>
					<ul>
						<li><a id="tutodev1" class="actif" href="#">Install Gettext</a></li>
						<li><a id="tutodev2" href="#">PHP app</a></li>
						<li><a id="tutodev3" href="#">Gettext Files</a></li>
						<li><a id="tutodev4" href="#">Locales</a></li>
						<li><a id="tutodev5" href="#">Manual</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="content">
			<div class="section">
				<div class="center">
					<div class="info">
						<p><strong>6</strong> step, quick and easy!</p>
					</div>
					<div class="contenu">
						<ol>
							<li>Download <a href="ftp://ftp.gnu.org/pub/gnu/gettext/gettext...t-0.12.1.tar.gz">gettext (.zip)</a></li>
							<li>Unzip the file.</li>
							<li>«<strong>cd</strong>» to the directory containing the package's source code and type «<strong>./configure</strong>» to configure the package for your system.</li>
							<li>Type «<strong>make</strong>» to compile the package.</li>
							<li>Type «<strong>make install</strong>» to install the programs and any data files and documentation.</li>
							<li>You can remove the program binaries and object files from the source code directory by typing «<strong>make clean</strong>».</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="center">
					<div class="info">
						<p>Using gettext to get translated strings couldn’t be easier.</p>
						<p>Just call <strong>gettext(“Title”)</strong> and you get a localized version of “Text to be translated” if available, or “Title” otherwise. </p>
						<p>You can use <strong>_()</strong> instead of <strong>gettext()</strong>.</p>
					</div>
					<div class="contenu">
						<code>
							&lt;h2&gt; <span>&lt;?php echo_('</span> Title<span>');?&gt;</span> &lt;/h2&gt;<br><br>
							&lt;p&gt; <span>&lt;?php echo _('</span>Enter your intro text here<span>'); ?&gt;</span> &lt;/p&gt;
						</code>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="center">
					<div class="info">
						<p>Must imperatively repecter the following structure</p>
					</div>
					<div class="contenu">
						<p>local</p>
						<ul>
							<li>en_US</li>
							<li>
								<ul>
									<li>/LC_MESSAGES</li>
									<li>
										<ul>
											<li>messages.po</li>
											<li>messages.mo</li>
										</ul>
									</li>

								</ul>
							</li>
							<li>fr_FR</li>
							<li>
								<ul>
									<li>/LC_MESSAGES</li>
									<li>
										<ul>
											<li>messages.po</li>
											<li>messages.mo</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="center">
					<div class="info">
					<ol>
						<li>Create a new file named locale.php with the following contents:</li>
						<li>Include the new locale.php</li>
						<li>Change the URL</li>
					</ol>
					</div>
					<div class="contenu">
						<pre>
// use sessions
session_start();
 
// get language preference
if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
}
else if (isset($_SESSION["lang"])) {
    $language  = $_SESSION["lang"];
}
else {
    $language = "en_US";
}
 
// save language preference for future
$_SESSION["Language"]  = $language;
 
$folder = "Locale";
$domain = "messages";
$encoding = "UTF-8";
 
putenv("LANG=" . $language);
setlocale(LC_ALL, $language);
 
bindtextdomain($domain, $folder);
bind_textdomain_codeset($domain, $encoding);
 
textdomain($domain);
						</pre>
						<pre>
// Include I18N support
require_once "locale.php";

echo _("Hello World!"), "&lt;br&gt;";
echo _("Testing Translation...");
						</pre>
						<p>Change the URL to pass in one of the locales created earlier, for example :</p>
						<ul class="espace">
							<li>test-locale.php?lang=fr_FR</li>
							<li>test-locale.php?lang=en_US</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="center">
					<div class="info">
						<p>If you encounter a problem or want more information</p>
					</div>
					<div class="contenu">
						<p><a href="http://www.gnu.org/software/gettext/manual/gettext.html" target="_bank">Gettext manual</a></p>
						<p><a href="http://www.php.net/manual/fr/ref.gettext.php" target="_bank">PHP gettext manual</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
