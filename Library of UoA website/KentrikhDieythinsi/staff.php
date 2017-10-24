<?php session_start()?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Προσωπικό-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
		<style>
			

			/*-----------------------------------*/

			#staff_msg {
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
					  		<a href="#home" class="dropbutton">Υπηρεσίες</a>
					  		<div class="dropdown-content">
					  			<a href="../Yphresies/AnazhthshPhgwn.php">Αναζήτηση Πηγών</a>
						        <a href="../Yphresies/Amea.php">Για ΑμεΑ</a>
						        <a href="../Yphresies/Vivliothikonomoi.php">Για Βιβλιοθηκονόμους</a>
						        <a href="../Yphresies/Daneismos.php">Δανεισμός Βιβλίων</a>
						        <a href="#">Παραγγελία Άρθρων</a>
						        <a href="../Yphresies/ebooks.php">Ηλεκτρονικά Βιβλία</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton active">Κεντρική Διεύθυνση</a>
					  		<div class="dropdown-content">
					  			<a href="announcements.php">Ανακοινώσεις</a>
						        <a href="staff.php">Προσωπικό & Πληροφορίες</a>
						        <a href="links.php">Χρήσιμοι Σύνδεσμοι</a>
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

				<div id="staff_msg">

					<h4>Υπολογιστικό Κέντρο Βιβλιοθηκών Τμήμα Πληροφορικής και Τηλεπικοινωνιών Πανεπιστημιούπολη Ζωγράφου </h4>

					<pre>Τ.Κ. 157 84
email: ykb(at)lib.uoa.gr
ΦΑΞ: 210 727 5614</pre>

					<h5>Προσωπικό</h5>
					<pre>Κώστας Βίγλας (Πληροφορικός), 210 727 5617
Ειρήνη Λουρδή (Βιβλιοθηκονόμος), 210 727 5618
Παναγιώτα Μπουρογιάννη (Διοικητικός), 210 727 5659
Δημήτρης Αντωνίου (Πληροφορικός), 210 727 5609
Γιάννης Οικονόμου (Πληροφορικός), 210 727 5615
Σεβαστή Ζώη (Φιλόλογος-Ιστορικός, Διοικητικός), 210 727 5412 </pre>

					<h5>Γενικά</h5>
					<pre>Το Υπολογιστικό Κέντρο Βιβλιοθηκών (ΥΚΒ) του Εθνικού και Καποδιστριακού Πανεπιστημίου Αθηνών δημιουργήθηκε το 1997 στο πλαίσιο του
Έργου του Α' ΕΠΕΑΕΚ «Εκσυγχρονισμός Βιβλιοθηκών» του Β' ΚΠΣ και συνεχίζει τη λειτουργία του μέχρι σήμερα, μετά το πέρας και του έργου
του Β' ΕΠΕΑΕΚ «Εμπλουτισμός και Αναβάθμιση της Βιβλιοθήκης του Πανεπιστημίου Αθηνών».

To YKB επιβλέπεται από Επιστημονικό Υπεύθυνο και συνεργάζεται άμεσα με τη Διεύθυνση Βιβλιοθηκών και με την Επιτροπή Παρακολούθησης 
Βιβλιοθηκών του ΕΚΠΑ, που αποτελείται από τους:
</pre>

				<h6>Πρόεδρος</h6>
				<pre>Μ. Χατζόπουλος, Καθηγητής Τμήματος Πληροφορικής και Τηλεπικοινωνιών</pre>
				<h6>Αντιπρόεδρος</h6>
				<pre>Κ. Δημητρακόπουλος, Καθηγητής, Πρόεδρος Τμήματος ΜΙΘΕ</pre>
				<h6>Μέλη</h6>
				<pre>Χ. Παπαγεωργίου, Καθηγητής Τμήματος Μαθηματικών, Κοσμήτορας ΣΘΕ

Μ. Θωμαδάκη, Καθηγήτρια Γαλλικής Γλώσσας και Φιλολογίας, Κοσμήτορας Φιλοσοφικής Σχολής

Μ. Τσινισιζέλης, Καθηγητής, Κοσμήτορας Σχολής ΝΟΠΕ

Χ. Λυριντζής, Καθηγητής Τμήματος ΠΕΔΔ

Ι. Κοτρώνης, Επίκουρος καθηγητής Τμήματος Πληροφορικής και Τηλεπικοινωνιών</pre>

				<h6>Γραμματέας</h6>
				<pre>Κ. Βίγλας, Υπάλληλος Υπολογιστικού Κέντρου Βιβλιοθηκών </pre>
				<h6>Τεχνικός Σύμβουλος</h6>
				<pre>Ι. Μπαρμπαρέσος, Πολ. Μμηχανικός ΤΥΠΑ </pre>

				<h5>Υπηρεσίες</h5>
				<pre>Το ΥΚΒ παρέχει μια σειρά από υπηρεσίες, ηλεκτρονικές ή υποστηρικτικές, τόσο προς τις Βιβλιοθήκες του ΕΚΠΑ και το προσωπικό τους,
όσο και γενικότερα προς την Ακαδημαϊκή Κοινότητα του ΕΚΠΑ (μέλη ΔΕΠ, φοιτητές, προσωπικό) όσον αφορά στην ηλεκτρονική πρόσβαση
σε υλικό πληροφόρησης, καθώς και στην ανάπτυξη και υποστήριξη σχετικών εξειδικευμένων εφαρμογών.</pre>

				<h6>Προς την Ακαδημαϊκή Κοινότητα</h6>
				<pre>Κεντρική Διαχείριση των ηλεκτρονικών υπηρεσιών των Bιβλιοθηκών

    1)Πρόσβαση σε ηλεκτρονικά περιοδικά και βιβλιογραφικές βάσεις δεδομένων
    2)Πρόσβαση στον ενιαίο Ανοικτό Δημόσιο Κατάλογο των Βιβλιοθηκών (OPAC)
    3)Διαδανεισμός και Παραγγελία Βιβλίων και Άρθρων Περιοδικών

Ανάπτυξη και Υποστήριξη Ψηφιακών Συλλογών

    1)Σχεδιασμός, ανάπτυξη και υποστήριξη ψηφιακής βιβλιοθήκης για τη "γκρίζα βιβλιογραφία"
    2)Σχεδιασμός, ανάπτυξη και υποστήριξη του Συστήματος Ψηφιακής Βιβλιοθήκης "Πέργαμος" που περιλαμβάνει 
    τις ακόλουθες ψηφιακές συλλογές του ΕΚΠΑ:

        1)Ψηφιακή Συλλογή Ερευνητικού Υλικού / Λογισμικού για ΑΜΕΑ
        2)Ψηφιακή Συλλογή Εκλογικών αποτελεσμάτων
        3)Ψηφιακή Συλλογή Θεατρικών Παραστάσεων
        4)Ψηφιακή Συλλογή Αρχαίων Παπύρων
        5)Ψηφιακή Συλλογή Λαογραφικής Ύλης
        6)Ψηφιακή Συλλογή Ιατρικών Εικόνων
        7)Ψηφιακή Συλλογή Μουσείου Ορυκτολογίας
        8)Ψηφιακή Συλλογή Βυζαντινών χειρογράφων
        9)Ψηφιακή Συλλογή της Μαρασλείου Σχολής
        10)Ψηφιακή Συλλογή Ιστορικού Αρχείου ΕΚΠΑ
        11)Ψηφιακή Συλλογή Βυζαντινής Μουσικής της Βιβλιοθήκης Ψάχου

Ανάπτυξη και υποστήριξη Θεματικών Πυλών (web portals) με αντικείμενο:

    1)Ελληνορωμαϊκή Αρχαιότητα
    2)Θέατρο
    3)Κοινωνικές Επιστήμες
    4)Νομικά Θέματα

Παροχή ηλεκτρονικών υπηρεσιών πρόσβασης για άτομα με ειδικές ανάγκες
Ανάπτυξη και συντήρηση του παρόντος ιστοτόπου, "Βιβλιοθήκες και Υπηρεσιες Πληροφόρησης" του ΕΚΠΑ
Απομακρυσμένη εξυπηρέτηση χρηστών για πρόσβαση στις παρεχόμενες ηλεκτρονικές συνδρομητικές υπηρεσίες (περιοδικά, βιβλία, κλπ)
μέσω της υπηρεσίας VPN  σε συνεργασία με το Κέντρο Λειτουργίας και Διαχείρισης Δικτύου
Συνεργασία σε τεχνικό επίπεδο με το Σύνδεσμο Ελληνικών Ακαδημαϊκών Βιβλιοθηκών (ΣΕΑΒ / HEAL-Link) για την παροχή αντίστοιχων 
ηλεκτρονικών υπηρεσιών πληροφόρησης μέσω του Συνδέσμου.    
</pre>
				<h6>Προς Βιβλιοθηκονόμους</h6>
				<pre>
    1)Διαχείριση Βιβλιοθηκονομικών Εφαρμογών
    2)Ανάπτυξη εξειδικευμένων εφαρμογών για την αυτοματοποίηση των εσωτερικών ροών εργασίας των Βιβλιοθηκών του ΕΚΠΑ
    3)Τεχνική υποστήριξη των Βιβλιοθηκών του ΕΚΠΑ για τις παρεχόμενες Βιβλιοθηκονομικές Εφαρμογές
    4)Κεντρική διαχείριση της υπηρεσίας Διαδανεισμού και Παραγγελίας Βιβλίων και ’Αρθρων Περιοδικών
    5)Απομακρυσμένη εξυπηρέτηση χρηστών (γκρίζα βιβλιογραφία, εξ αποστάσεως παροχή τεχνικής υποστήριξης)
</pre>
				<h5>Δημοσιεύσεις</h5>
				<h6>Διεθνή Συνέδρια</h6>
				<pre>
    1)"Introducing Pergamos: A Fedora-based DL System Utilizing Digital Object Prototypes", G. Pyrounakis, K. Saidis, M. Nikolaidou,
	V. Karakoidas (Demo) Proc. 10th European Conference on Research and Advanced Technology for Digital Libraries (ECDL 2006),
	Alicante, Spain, September 2006.

    2)"Digital Object Prototypes: An Effective Realization of Digital Object Types", K. Saidis, G. Pyrounakis, M. Nikolaidou,
	Al. Delis. Proc. 10th European Conference on Research and Advanced Technology for Digital Libraries (ECDL 2006),
	Alicante, Spain, September 2006.

    3)"On the Effective Manipulation of Digital Objects: A Prototype-based Instantiation Approach". K. Saidis, G. Pyrounakis,
	M. Nikolaidou. Proc. 9th European Conference on Research and Advanced Technology for Digital Libraries (ECDL 2005),
	Vienna, Austria, September 2005.

    4)"Designing an Integrated Digital Library Framework to support Multiple Heterogeneous Collections". G. Pyrounakis, K. Saidis,
    M. Nikolaidou,Ir. Lourdi. Proc. 8th European Conference on Research and Advanced Technology for Digital Libraries (ECDL 2004),
	Bath, England, September 2004.
</pre>

				<h6>Ελληνικά Συνέδρια</h6>
				<pre>
    1)"Πολιτισμός, Ιστορία και Τεχνολογία στο σταυροδρόμι της «Περγάμου»: οι ψηφιακές συλλογές του Πανεπιστημίου Αθηνών",
    Ειρ. Λουρδή, Σ. Ζώη. Πανελλήνιο Συνέδριο Ιστορίας των Επιστημών και της Τεχνολογίας (Αθήνα, 28 - 29 Μαρτίου 2013).

    2)"Αναπαράσταση και Διαχείριση Ετερογενών Ψηφιακών Συλλογών στο Σύστημα Ψηφιακής Βιβλιοθήκης Πέργαμος". Γ. Πυρουνάκης,Κ. Σαΐδης,
    Κ. Βίγλας, Ειρ. Λουρδή, Μ. Νικολαΐδη. Πρακτικά 15ου Πανελλήνιου Συνέδριου Ακαδημαϊκών Βιβλιοθηκών, Πάτρα, Νοέμβριος 2006.

    3)"Πέργαμος: Ένα Προηγμένο Σύστημα Ψηφιακής Βιβλιοθήκης βασισμένο στο Fedora". Γ. Πυρουνάκης, Κ. Σαΐδης, M. Νικολαΐδη.
    Πρακτικά 14ου Πανελλήνιου Συνέδριου Ακαδημαϊκών Βιβλιοθηκών, Αθήνα, Δεκέμβριος 2005.

    4)"Κεντρική Υπηρεσία Διαχείρισης Παραγγελίας Άρθρων Πανεπιστήμιο Αθηνών" Ειρ. Λουρδή, Π. Μπουρογιάννη, Μ. Νικολαΐδη,
    Γ. Πυρουνάκης. Πρακτικά 13ου Πανελλήνιου Συνέδριου Ακαδημαϊκών Βιβλιοθηκών, Κέρκυρα, Οκτώβριος 2004.

    5)"Σχεδιασμός του Ολοκληρωμένου Συστήματος Ψηφιακής Βιβλιοθήκης του Πανεπιστημίου Αθηνών". Κ. Βίγλας, Ε. Λουρδή,
    Μ. Νικολαΐδη,Γ. Πυρουνάκης, Κ. Σαΐδης. Πρακτικά 13ου Πανελλήνιου Συνέδριου Ακαδημαϊκών Βιβλιοθηκών, Κέρκυρα, Οκτώβριος 2004.

    6)"Δομές κεντρικής διαχείρισης και αυτοματοποιημένες διαδικασίες για τις βιβλιοθήκες του Πανεπιστημίου Αθηνών". Κ. Βίγλας,
    Ε. Λουρδή,Π. Μπουρογιάννη, Μ. Νικολαΐδη, Γ. Πυρουνάκης, Κ. Σαΐδης. Πρακτικά 12ου Πανελλήνιου Συνέδριου Ακαδημαϊκών Βιβλιοθηκών,
    Σέρρες, Νοέμβριος 2003.
</pre>
				</div>

			</br>
			</br>

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