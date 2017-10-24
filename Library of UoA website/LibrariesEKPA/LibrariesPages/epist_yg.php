<?php session_start()?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Αναζήτηση Βιβλιοθηκών-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../../css/style.css">
		<style>
			
			/*-----------------------------------*/

			#lib_search {
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
				<a href="../../home.html">
					<center><img src="images.png" alt="Athens University Logo" width="296" height="160" border="0"></center>
				</a>
			</div>

			<!--The horizontal navigation bar-->
			<div id="navbar">
				<ul>
					  <li><a href="../../home.php">Αρχική Σελίδα</a></li>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Υπηρεσίες</a>
					  		<div class="dropdown-content">
					  			<a href="../../Yphresies/AnazhthshPhgwn.php">Αναζήτηση Πηγών</a>
						        <a href="../../Yphresies/Amea.php">Για ΑμεΑ</a>
						        <a href="../../Yphresies/Vivliothikonomoi.php">Για Βιβλιοθηκονόμους</a>
						        <a href="../../Yphresies/Daneismos.php">Δανεισμός Βιβλίων</a>
						        <a href="#">Παραγγελία Άρθρων</a>
						        <a href="../../Yphresies/ebooks.php">Ηλεκτρονικά Βιβλία</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Κεντρική Διεύθυνση</a>
					  		<div class="dropdown-content">
					  			<a href="../../KentrikhDieythinsi/announcements.php">Ανακοινώσεις</a>
						        <a href="../../KentrikhDieythinsi/staff.php">Προσωπικό & Πληροφορίες</a>
						        <a href="../../KentrikhDieythinsi/links.php">Χρήσιμοι Σύνδεσμοι</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton active">Βιβλιοθήκες ΕΚΠΑ</a>
					  		<div class="dropdown-content">
					  			<a href="../LibraryHistory.php">Ιστορικό Βιβλιοθήκης</a>
						        <a href="../LibrarySearch.php">Αναζήτηση Βιβλιοθηκών</a>
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
							    <li><a href="../../logout.php">Logout</a></li>
							  </ul>
							</div>
					  		
							<div class="dropdown" style="float:right;">
							  <ul>
							    <li><a href="../../profile.php"><?php echo $_SESSION['name'];?></a></li>
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
							        	<form action="../../login_success.php" method="post">
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

				<div id="lib_search">

				</br>
				<h4>Βιβλιοθήκη Επιστημών Υγείας</h4>

				<h5>Προσωπικό</h5>
				<pre>Ανατρέξτε στην νέα μας ιστοσελίδα:
http://health.lib.uoa.gr (Ελληνικά)
http://en.health.lib.uoa.gr (Αγγλικά)
Βλάμη Αργυρώ
Βλαχάκη Ασημίνα (avlaxaki@lib.uoa.gr)
Βουτσινάς Θοδωρής
Κίτσου Μαρία (mkitsou@lib.uoa.gr)
Κίττα Μυρτώ (mkitta@lib.uoa.gr)
Κοκκινέα Σταυρούλα - Ειρήνη (skokkin@lib.uoa.gr)
Σταυρίδου Μαρία (mstavrid@lib.uoa.gr)
Τσελέκου Πολυξένη (ptselek@lib.uoa.gr)
Τσιμπερδώνη Παρασκευή (ptsiberd@lib.uoa.gr)
Φασούλη Τατιάνα (tfasouli@lib.uoa.gr) </pre>

				<h5>Γενικές Πληροφορίες</h5>
				<pre>Διεύθυνση: Μικράς Ασίας και Δήλου 1 ,Τ.Κ. 115 27 Γουδή 1ος όροφος
Τηλέφωνο: 210 - 7461400
Ώρες Λειτουργίας: Δευτέρα - Παρασκευή: 08:30 - 20:30
FAX: 210 - 7461459

Ιστορικό:
Η Βιβλιοθήκη Επιστημών Υγείας λειτούργησε τον Ιανουάριο του 1997 και στεγάζεται σε ένα μοντέρνο κτίριο απέναντι από την Ιατρική Σχολή Αθηνών. 

Ιστορικό:
Η Βιβλιοθήκη διαθέτει δίκτυο Wi-fi </pre>

				<h5>Συλλογή</h5>
				<pre> Γνωστικό Αντικείμενο:
Ιατρική, Νοσηλευτική, Οδοντιατρική και άλλες σχετικές επιστήμες όπως Ανατομία, Φυσιολογία, Βιοχημεία, Φαρμακολογία, Μικροβιολογία,
Ανοσολογία, Παρασιτολογία, Κλινική Παθολογία, Παθολογική Ανατομία.

Βιβλία:
Η Βιβλιοθήκη διαθέτει  ελληνικά και ξενόγλωσσα βιβλία η ταξιθέτηση και η θεματική επεξεργασία των οποίων γίνεται σύμφωνα με το 
ταξινομικό σύστημα  και τις θεματικές επικεφαλίδες της National Library of Medicine της Αμερικής αντίστοιχα.

Περιοδικά:
Η συλλογή των περιοδικών αποτελείται απο 279 τίτλους οι οποίοι είναι ταξιθετημένη αλφαβητικά  κατά τίτλο. Ενώ, σημαντικός αριθμός 
ηλεκτρονικών περιοδικών διατίθεται μέσω της HEAL-Link.

Το μεγαλύτερο μέρος της συλλογής της Βιβλιοθήκης Επιστημών Υγείας έχει καταχωριστεί στο HORIZON και είναι προσβάσιμο, απο οποιοδήποτε
έχει πρόσβαση στο διαδίκτυο,  μέσω του OPAC στην ιστοσελίδα του Πανεπιστημίου Αθηνών , διεύθυνση : http://www.lib.uoa.gr.

Λοιπό Υλικό:
Επιπλέον, περιλαμβάνονται διδακτορικές διατριβές, καθώς και άτλαντες σε μορφή CD-ROMS.

</pre>

				<h5>Υπηρεσίες</h5>
				<pre> Λειτουργία Αναγνωστηρίου:
Δευτέρα - Παρασκευή : 08:30 - 20:30

Πολιτική Δανεισμού:
Δεν είναι δανειστική.

Άλλες Υπηρεσίες:
Η Βιβλιοθήκη προσφέρει υπηρεσίες διαδανεισμού στους χρήστες της, δηλαδή παρέχει την δυνατότητα παραγγελίας άρθρων τόσο απο την Ελλάδα 
όσο και από το Εξωτερικό.

Επιπροσθέτως, οι χρήστες μπορούν να φωτοτυπήσουν το υλικό της βιβλιοθήκης χρησιμοποιώντας τα δύο φωτοτυπικά μηχανήματα που υπάρχουν στο χώρο.

Δυνατή είναι  η σάρωση και αποθήκευση εικόνων σε CD-ROMS μετά απο αίτηση των αναγνωστών.

Τέλος,  υπολογιστές παρέχονται για έρευνα και αναζήτηση βιβλιογραφίας σε βάσεις δεδομένων και σε άλλες πηγές επιστημονικής πληροφόρησης 
όπως η MEDLINE και η HEAL- Link. </pre>

			
				</br>
				<a href="../LibrarySearch.php">Νέα Αναζήτηση</a>
				</div>






			</div><!-- #content -->
			
			<div id="footer">
				<ul>
					<li><a href="../../home.php">Home</a>
					<li><a href="#home">Sitemap</a>
					<li><a href="#home">Contact</a>
				</ul>
			</div><!-- #footer -->

		</div>

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../../js/index.js"></script>
	</body>
</html>