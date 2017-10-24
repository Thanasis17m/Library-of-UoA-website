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
				<a href="../../home.php">
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
				<h4>Βιβλιοθήκη Οδοντιατρικής Σχολής</h4>

				<h5>Προσωπικό</h5>
				<pre>Διευθύντρια : Καθηγήτρια  Ουρανία Νικολάτου-Γαλίτη

Συντονιστική Επιτροπή:

Φουρμούζης Ιωάννης- Επίκ. Καθηγητής
Δερέκα Ξανθίπη- Λέκτορας
Ραχιώτης Χρήστος-Λέκτορας
Σταματάκης Χαράλαμπος-Λέκτορας
Χατζηστάμου-Κιάρη Ιουλία-Λέκτορας
                     

Προσωπικό :
Κασίμη Σπυριδούλα - Βιβλιοθηκονόμος (skassimi@lib.uoa.gr)
Κατή Νίκη - Διοικητικός Υπάλληλος ( nkati@lib.uoa.gr)
Καλέση Θεοδώρα - Βιβλιοθηκονόμος ( tkalesi@lib.uoa.gr)
Ντόκα Λαμπρινή - Βιβλιοθηκονόμος (lntoka@lib.uoa.gr) </pre>

				<h5>Γενικές Πληροφορίες</h5>
				<pre>Διεύθυνση: Θηβών 2, 115 27 - Γουδή
Τηλέφωνο: 210-7461154 , 7461150, 7461151
Ώρες Λειτουργίας: Δευτέρα - Παρασκευή 09:00 - 19:00
FAX: 210-7461188

Ιστορικό:
Η Βιβλιοθήκη ιδρύθηκε το 1977 ( Π. Δ. 557-77 ). Στεγάζεται στον 5ο όροφο της Νέας Πτέρυγας του Κτηρίου της     Οδοντιατρικής Σχολής και διαθέτει αναγνωστήριο 90 θέσεων.
</pre>

				<h5>Συλλογή</h5>
				<pre> Γνωστικό Αντικείμενο:
Οδοντιατρική  (με όλες τις επιμέρους ειδικότητες),  Γενική Ιατρική,  Ανατομία,  Μικροβιολογία,   Βιοχημεία, Βασικές Επιστήμες.

Βιβλία:
Η συλλογή βιβλίων περιλαμβάνει περίπου 2.500 τόμους.

Περιοδικά:
Η συλλογή των επιστημονικών περιοδικών ανέρχεται στους 200 τίτλους,    από τους οποίους οι 99 είναι τρέχοντες.

Λοιπό Υλικό:
Συλλογή διδακτορικών διατριβών και διπλωματικών μεταπτυχιακών εργασιών,οδοντιατρικού περιεχομένου,
η οποία ανέρχεται σε 600 περίπου τίτλους. 
</pre>

				<h5>Υπηρεσίες</h5>
				<pre> Λειτουργία Αναγνωστηρίου:
Δευτέρα - Παρασκευή 09: 00 - 19:00

Πολιτική Δανεισμού:
Δικαίωμα δανεισμού βιβλίων έχουν όλα τα άτομα που συμμετέχουν στην εκπαιδευτική δραστηριότητα της Σχολής, δηλαδή μέλη ΔΕΠ, επιστημονικοί συνεργάτες, φοιτητές (μεταπτυχιακοί, προπτυχιακοί), υποψήφιοι διδάκτορες κτλ.
Ο δανεισμός γίνεται  με  την φοιτητική ταυτότητα ή την κάρτα δανεισμού, η οποία εκδίδεται  από τη Βιβλιοθήκη.
Ο χρόνος δανεισμού  είναι 5 ημέρες για τα βιβλία που υπάρχουν σε περισσότερα του ένος αντιτύπου, ενώ για βιβλία που υπάρχουν σε ένα μόνο αντίτυπο, ο χρόνος δανεισμού περιορίζεται σε 2 ημέρες.  Ο μέγιστος αριθμός βιβλίων που μπορεί να δανειστεί κάποιος ταυτόχρονα είναι τρία .

Άλλες Υπηρεσίες:
Υποβολή  Διδακτορικών Διατριβών και Μεταπτυχιακών Διπλωματικών Εργασιών στην Ψηφιακή Βιβλιοθήκη "Γκρίζας Βιβλιογραφίας" του Πανεπιστημίου Αθηνών (http://efessos.lib.uoa.gr/greylit.nsf).
Η Βιβλιοθήκη διαθέτει  2 φωτοτυπικά μηχανήματα.  Για τη χρήση τους απαιτείται η προμήθεια ειδικής κάρτας από το Ταμείο της  Σχολής (ώρες λειτουργίας Ταμείου : 8π.μ. - 2,30μ.μ.).  Η χρήση των φωτοτυπικών επιτρέπεται μόνο για το έντυπο υλικό που διαθέτει η Βιβλιοθήκη.
</pre>

			
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