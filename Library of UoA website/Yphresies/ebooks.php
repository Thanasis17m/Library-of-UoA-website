<?php session_start()?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Ηλεκτρονικα Βιβλία-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
		<style>
			

			/*-----------------------------------*/

			#ebooks{
				width: 1000px;
				min-height: 100px;
				overflow: hidden;
				position: relative;
				float: left;
				border: 1px rgb(89,89,89) solid;
				padding: 30px;
				margin: 20px;
				background: rgb(214, 203, 203);
				border-radius: 3px;
				box-shadow: 0 0 5px 2px rgba(0,0,0,.35)
			}



		</style>
	</head>
	<body>

		<div id="wrapper">

			<!--The banner image-->
			<div id="banner">
				<a href="../home.php">
					<center><img src="images.png" alt="Athens University Logo" width="296" height="160" border="0"></center>
				</a>
			</div>

			<!--The horizontal navigation bar-->
			<div id="navbar">
				<ul>
					  <li><a href="../home.php">Αρχική Σελίδα</a></li>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton active">Υπηρεσίες</a>
					  		<div class="dropdown-content">
					  			<a href="AnazhthshPhgwn.php">Αναζήτηση Πηγών</a>
						        <a href="Amea.php">Για ΑμεΑ</a>
						        <a href="Vivliothikonomoi.php">Για Βιβλιοθηκονόμους</a>
						        <a href="Daneismos.php">Δανεισμός Βιβλίων</a>
						        <a href="#">Παραγγελία Άρθρων</a>
						        <a href="ebooks.php">Ηλεκτρονικά Βιβλία</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Κεντρική Διεύθυνση</a>
					  		<div class="dropdown-content">
					  			<a href="../KentrikhDieythinsi/announcements.php">Ανακοινώσεις</a>
						        <a href="../KentrikhDieythinsi/staff.php">Προσωπικό & Πληροφορίες</a>
						        <a href="../KentrikhDieythinsi/links.php">Χρήσιμοι Σύνδεσμοι</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home"class="dropbutton">Βιβλιοθήκες ΕΚΠΑ</a>
					  		<div class="dropdown-content">
					  			<a href="../LibrariesEKPA/LibraryHistory.php">Ιστορικό Βιβλιοθήκης</a>
						        <a href="../LibrariesEKPA/LibrarySearch.php">Αναζήτηση Βιβλιοθηκών</a>
						    </div>
					  </div>

					    <div class="help">
						  <ul>
						    <li><a href="#login">Βοήθεια</a></li>
						  </ul>
						</div>

						 <?php 
					  	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
					  		
					  		<div class="dropdown" style="float:right;">
							  <ul>
							    <li><a href="../logout.php">Logout</a></li>
							  </ul>
							</div>
					  		
							<div class="dropdown" style="float:right;">
							  <ul>
							    <li><a href="../profile.php"><?php echo $_SESSION['name'];?></a></li>
							  </ul>
							</div>

					  		
					  	<?php }

				  		else{ ?>

							<div style="float:right;">
							   <div class="dropdown">
							   <a href="#" id="loginform" class="dropbutton">Login</a> |
							    <div class="login">
							      <div class="arrow-up"></div>
							      <div class="formholder">
							        <div class="randompad">
							        	<form action="../login_success.php" method="post">
								            <fieldset>
									             <label name="email">Email</label>
									             <input name="email" type="email" placeholder="example@example.com" />
									             <label name="password">Password</label>
									             <input name = "password" type="password" />
									            
								        	 </fieldset>
								              <input type="submit" name="submit" value="Login" />
								           
								        </form>

							        </div>
							      </div>
							    </div>
							    </div>

							    <div class="dropdown">
							    	 <a href="#" class="dropbutton">Register</a>
							    </div>
							 </div>


				  		<?php }

					  	?>
				</ul>
			</div>

			<div id="content">

				<div id="ebooks">

					<h3>Ηλεκτρονικά Βιβλία,Λεξικά και Εγκυκλοπαίδειες</h3>

					<h4>Απευθείας Συνδρομές ΕΚΠΑ</h4>

					<p>Το Πανεπιστήμιο Αθηνών προσφέρει πρόσβαση στα ακόλουθα Ηλεκτρονικά Βιβλία, Λεξικά και Εγκυκλοπαίδειες:</p>


					<h5><a href="http://infotrac.galegroup.com" target="_blank">Eighteenth Century Collections Online</a></h5>
					<p>Η βάση παρέχει πρόσβαση στην ψηφιακή μορφή 150.000 βιβλίων, που εκδόθηκαν κατά το 18ο αι. Παρέχεται στους χρήστες του Πανεπιστημίου η δυνατότητα να αναζητήσουν το πλήρες κείμενο 26 εκατομμυρίων σελίδων σχετικά με την Ιστορία, τη Λογοτεχνία, τη Θεολογία, τη Νομική και άλλες επιστήμες. Η πρόσβαση στη βάση επιτυγχάνεται μέσω της πλατφόρμας του Thompson & Gale.</p>
					
					<h5><a href="http://infotrac.galegroup.com" target="_blank">Gale Virtual Reference Library</a></h5>
					<p>Η βάση παρέχει πρόσβαση σε ψηφιακό πληροφοριακό υλικό (εγκυκλοπαίδειες, βιβλία και άλλες πηγές)  σχετικά με τη Νομική, τις Κοινωνικές Επιστήμες κ.ά. Η πρόσβαση στη βάση επιτυγχάνεται μέσω της πλατφόρμας του Thompson & Gale.Συγκεκριμένα περιλαμβάνει τις εξής πηγές: 1)Gale Encyclopedia of Everyday Law, 2)Governments of the World: A Global Guide to Citizen's Rights and Responsibilities, 3)Philip's Atlas of the Universe, 4)World of Sports Science, 5)Child Development, 6)Encyclopedia of Crime and Justice, 7)Encyclopedia of Multicultural Psychology, 8)Gale Encyclopedia of Psychology</p>


					
					<h5><a href="http://infotrac.galegroup.com" target="_blank">The Times Digital Archive</a></h5>
					<p>Η βάση περιλαμβάνει όλη την έκδοση των "Times" του Λονδίνου (1785 - 1985) σε ψηφιακή μορφή. Με τη χρήση λέξεων κλειδιών μπορείτε να αναζητήσετε το πλήρες κείμενο και τις φωτογραφίες, είτε ενός άρθρου είτε ολόκληρης της σελίδας, ενώ παράλληλα υπάρχουν σχετικές κατηγορίες που μπορούν να βοηθήσουν στην αναζήτηση. Η πρόσβαση στη βάση επιτυγχάνεται μέσω της πλατφόρμας του Thompson & Gale.</p>
					


					<h5><a href="http://infotrac.galegroup.com" target="_blank">Times Literary Supplement Centenary Archive</a></h5>
					<p>Η βάση απευθύνεται σε όσους αναζητούν στοιχεία και κριτικές για την Αγγλική λογοτεχνία του 20ου αι. και άλλες Κοινωνικές επιστήμες. Διατίθενται σε ηλεκτρονική μορφή περισσότερες από 250.000 περιλήψεις, επιστολές, ποιήματα και άρθρα των Times.</p>
					
					</br>
					<h4>Πρόσβαση μέσω του Συνδέσμου Ελληνικών Ακαδημαικών Βιβλιοθηκών(ΣΕΑΒ)</h4>
					<p>O <a href="http://www.heal-link.gr/">Σύνδεσμος Ελληνικών Ακαδημαϊκών Βιβλιοθηκών (ΣΕΑΒ / HEAL- Link)</a> έχει προμηθευτεί και διαθέτει στα μέλη του περίπου 15000 ψηφιακά βιβλία από πλήθος διαφορετικών εκδοτικών οίκων.Για την καλύτερη διαχείριση των βιβλιογραφικών εγγραφών των ψηφιακών βιβλίων και την υποστήριξη της ομόσπονδης αναζήτησης σε αυτά, η ομάδα εργασίας του Συλλογικού Καταλόγου εγκατέστησε το ανοικτού κώδικα λογισμικό βιβλιοθηκών Koha.</p>
					
					</br>
					<hr>
					</br>

					<h3>Ηλεκτρονικά Περιοδικά</h3>

					<h4>Κατάλογος Συνδρομών του ΕΚΠΑ σε Περιοδικές Εκδόσεις</h4>
					<p>Ο Πλήρης Κατάλογος Συνδρομών του ΕΚΠΑ σε Περιοδικές Εκδόσεις μπορεί να βρεθεί <a href="http://efessos.lib.uoa.gr/applications/journals.nsf/fsAllJournals" target="_blank">εδώ</a>.Παρέχονται πληροφορίες (τίτλοι, έτη/τόμοι/τεύχη συνδρομής, κλπ.) για το σύνολο των περιοδικών εκδόσεων στις οποίες έχει ή είχε συνδρομή το ΕΚΠΑ (έντυπες ή ηλεκτρονικές). Παρέχεται η δυνατότητα αναζήτησης του επιθυμητού τίτλοι περιοδικού είτε αλφαβητικά είτε με βάση τη βιβλιοθήκη που σας ενδιαφέρει (συνιστάται η αναζήτηση να γίνεται με πεζά γράμματα, χωρίς τόνους ή με αποκοπή - χρήση του χαρακτήρα * αντί για ολόκληρες λέξεις, πχ. βιβλ* ώστε να αναζητούνται και να ανακτώνται τόσο η λέξη βιβλίο όσο και η λέξη βιβλιοθήκη και η λέξη ΒΙΒΛΙΟ). Πολλά από τα τεύχη των περιοδικών αυτών υπάρχουν και σε ηλεκτρονική μορφή (όπου αυτό είναι γνωστό παρέχεται ο σχετικός σύνδεσμος).</p>

					<h4>Συνδρομές Ηλεκτρονικών Περιοδικών μέσω του ΣΕΑΒ</h4>
					<p>Το ΕΚΠΑ παρέχει, μέσω του Δικτύου Ελληνικών Ακαδημαϊκών Βιβλιοθηκών (HEAL-Link), ηλεκτρονική πρόσβαση σε περισσότερους από 10000 τίτλους περιοδικών με ευρεία θεματική κάλυψη. Συγκεκριμένα:</p>
					<h5><a href="http://www.heal-link.gr/alpha.php" target="_blank">Κατάλογος Ηλεκτρονικών Περιοδικών HEAL-Link</a></h5>
					<p>Πρόσβαση στον αλφαβητικό κατάλογο των περιοδικών όλων των εκδοτικών οίκων με τους οποίους έχει συνάψει συμφωνία η HEAL-Link.</p>
					<h5><a href="http://www.heal-link.gr/subject.php" target="_blank">Αναζήτηση Άρθρων μέσω HEAL-Link (HEAL-Link Search)</a></h5>
					<p>Ταυτόχρονη αναζήτηση στις ηλεκτρονικές πηγές του Συνδέσμου, στο Συλλογικό Κατάλογο των Ελληνικών Ακαδημαϊκών Βιβλιοθηκών και σε επιλεγμένες ιστοσελίδες. Προσφέρεται θεματική αναζήτηση, καθώς και με χρήση ελεύθερων όρων.</p>
					<h5><a href="http://www.heal-link.gr/per_pub.php" target="_blank">Εκδοτικοί Οίκοι & Υπηρεσίες HEAL-Link</a></h5>
					<p>Αναζήτηση άρθρων και περιοδικών στη βάση δεδομένων κάθε εκδοτικού οίκου με τον οποίο έχει συνάψει συμφωνία η HEAL-Link.</p>

					</br>
					<hr>
					</br>
					<p><strong>Σημείωση:</strong> Η χρήση της υπηρεσίας ηλεκτρονικών βιβλίων υπόκειται στις διατάξεις της ισχύουσας νομοθεσίας περί Πνευματικής Ιδιοκτησίας και Συγγενικών Δικαιωμάτων (Ν. 2121/93, όπως έχει μεταγενέστερα τροποποιηθεί, ιδίως με το άρθρο 14 του Ν. 3049/2002 και το άρθρο 81 του Ν. 3057/2002 ). Τα τεκμήρια παρέχονται για προσωπική μελέτη. Απαγορεύεται η συστηματική αποθήκευση ή/και εκτύπωσή τους, καθώς και οποιαδήποτε εμπορική χρήση τους.</p>

				</br>

				</div>

			</div><!-- #content -->
			
			<div id="footer">
				<ul>
					<li><a href="../home.php">Home</a>
					<li><a href="#home">Sitemap</a>
					<li><a href="#home">Contact</a>
				</ul>
			</div><!-- #footer -->


		</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
	</body>
</html>