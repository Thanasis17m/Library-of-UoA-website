<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Υπηρεσίες για ΑμεΑ-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
		<style>
			

			/*-----------------------------------*/

			#ypodomes{
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

				<div id="ypodomes">

					<h3>Υπηρεσίες για Άτομα με Ειδικές Ανάγκες(ΑμεΑ)</h3>

					<h4>Υποδομές:</h4>
					<p>Στο πλαίσιο του Έργου "Εμπλουτισμός και Αναβάθμιση της Βιβλιοθήκης του Πανεπιστημίου Αθηνών" του ΕΠΕΑΕΚ ΙΙ, οι βιβλιοθήκες του ΕΚΠΑ εξοπλίζονται με σταθμούς εργασίας ή εξειδικευμένα βοηθήματα για την υποστήριξη Ατόμων με Αναπηρίες (ΑμεΑ) και συγκεκριμένα για φοιτητές με τυφλότητα, μειωμένη όραση και εκείνους με κινητικές αναπηρίες στα άνω άκρα. Οι σταθμοί αυτοί επιτρέπουν στα ΑμεΑ την πρόσβαση στις συλλογές των βιβλιοθηκών σε οποιαδήποτε μορφή είναι αυτές (έντυπη, ηλεκτρονική, ακουστική) καθώς επίσης και στις υπηρεσίες του Διαδικτύου αλλά και τις κοινές εφαρμογές αυτοματισμού γραφείου.Μάθετε περισσότερα στον παρακάτω σύνδεσμο:</p>
					<br />
					<a href="http://speech.di.uoa.gr/libaccess/" target="_blank">Περισσότερες Πληροφορίες</a>
					<br /><br />
					<hr>
					<br />
					<h4>Μονάδα Προσβασιμότητας για φοιτητές του ΕΚΠΑ:</h4>
					<p>Από το 2006, λειτουργεί στο ΕΚΠΑ μονάδα προσβασιμότητας για φοιτητές με αναπηρίες.Μάθετε περισσότερα στον παρακάτω σύνδεσμο:</p>
					<br />
					<a href="http://access.uoa.gr/" target="_blank">Περισσότερες Πληροφορίες</a>
					<br /><br />
					<hr>
					<br />
					<h4>Ψηφιακό νομικό περιεχόμενο για φοιτητές νομικής με προβλήματα όρασης:</h4>
					<p>Ο Τομέας Α΄ Ιδιωτικού Δικαίου του Τμήματος Νομικής του ΕΚΠΑ, παρέχει δωρεάν πρόσβασης σε ψηφιακό νομικό περιεχόμενο σε φοιτητές (προπτυχιακούς, μεταπτυχιακούς και υποψήφιους διδάκτορες) με προβλήματα όρασης του Τμήματος Νομικής του ΕΚΠΑ. Οι υπηρεσίες  επετεύχθησαν  με πρωτοβουλία της Βιβλιοθήκης του Τομέα  «Νομικό Σπουδαστήριο» η οποία βρήκε ευμενή ανταπόκριση από τους εκδότες,  τις πρυτανικές αρχές και το τμήμα νομικής. Οι ενδιαφερόμενοι φοιτητές, για πληροφορίες, μπορούν να απευθύνονται στην κυρία Β. Στρακαντούνα (τηλ.: 2103688355 , email: vstrakan@lib.uoa.gr).Ειδικότερα παρέχεται πιλοτικό πρόγραμμα πρόσβασης: </p>

					<p>Α) Στις υπηρεσίες της ψηφιακής νομικής βιβλιοθήκης (<a href="http://www.nbonline.gr" target="_blank">www.nbonline.gr</a>) των εκδόσεων Νομική Βιβλιοθήκη η οποία είναι εφικτή με τη δημιουργία ατομικού λογαριασμού με χρήση του προσωπικού υπολογιστή των εν λόγω φοιτητών. Περιεχόμενο της nbonline: 1)Επιθεώρηση Νομολογίας (1981 μέχρι σήμερα), 2)Δίκαιο επιχειρήσεων και εταιρειών (1995 μέχρι σήμερα), 3)Ποινική δικαιοσύνη (1998 μέχρι σήμερα), 4)Εφαρμογές Αστικού δικαίου (2008 μέχρι σήμερα), 5)Θεωρία και πράξη Διοικητικού Δικαίου (2008 μέχρι σήμερα), 6)Περιβάλλον και Δίκαιο (1997 μέχρι σήμερα), 7)Δίκαιο μέσων ενημέρωσης και επικοινωνίας (2004 μέχρι σήμερα), 8)Χρηματοπιστωτικό δίκαιο (2007 μέχρι σήμερα), 9)Επιχείρηση (2005 μέχρι σήμερα), 10)Ιόνιος Επιθεώρηση (2001 μέχρι σήμερα), 11)Δίκη (1997 μέχρι σήμερα), 12)4 Κώδικες συν 10</p>

					<p>Β) Στις υπηρεσίες της βάσης νομικών πληροφοριών NOMOS  (<a href="http://lawdb.intrasoftnet.com" target="_blank">http://lawdb.intrasoftnet.com/</a>) της εταιρείας 
					"INTRACOM IT SERVICES" η οποία διέθεσε κωδικό δωρεάν χρόνου πρόσβασης (30 ώρες),  σε μεταπτυχιακούς 
					φοιτητές του τμήματος νομικής. Τη διαχείριση του εν λόγω κωδικού αναλαμβάνει η βιβλιοθήκη του Τομέα 
					σε συνεργασία με τους ενδιαφερόμενους φοιτητές.</p>

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