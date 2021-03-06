<?php session_start()?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Ιστορικό-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
		<style>
			

			/*-----------------------------------*/

			#history_msg {
				width: 980px;
				min-height: 120px;
				overflow: hidden;
				position: relative;
				float: left;
				border: 1px rgb(89,89,89) solid;
				padding: 30px;
				margin: 20px;
				background: rgb(214, 203, 203);
				border-radius: 3px;
				box-shadow: 0 0 5px 2px rgba(0,0,0,.35)
				word-wrap: break-word;
			}

			.indent{
				text-indent: 50px;
			}

			.indentx2{
				text-indent: 100px;
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
					  		<a href="#home" class="dropbutton">Κεντρική Διεύθυνση</a>
					  		<div class="dropdown-content">
					  			<a href="../KentrikhDieythinsi/announcements.php">Ανακοινώσεις</a>
						        <a href="../KentrikhDieythinsi/staff.php">Προσωπικό & Πληροφορίες</a>
						        <a href="../KentrikhDieythinsi/links.php">Χρήσιμοι Σύνδεσμοι</a>
						    </div>
					  </div>

					  <div class="dropdown">
					  		<a href="#home" class="dropbutton active">Βιβλιοθήκες ΕΚΠΑ</a>
					  		<div class="dropdown-content">
					  			<a href="LibraryHistory.php">Ιστορικό Βιβλιοθήκης</a>
						        <a href="LibrarySearch.php">Αναζήτηση Βιβλιοθηκών</a>
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

				<div id="history_msg">
					<h4>Ιστορικό της Βιβλιοθήκης:</h4>
					<p class="indent">Τον Οκτώβριο του 1998 θεσμοθετείται η Διεύθυνση Βιβλιοθηκών και τον Οκτώβριο του 2005 ιδρύεται ενιαία Κεντρική Βιβλιοθήκη, που λειτουργεί ως αυτοτελής και αποκεντρωμένη μονάδα σε επίπεδο Διεύθυνσης, με τίτλο «Βιβλιοθήκη και Κέντρο Πληροφόρησης του ΕΚΠΑ».
					Η Διεύθυνση Βιβλιοθηκών λειτουργεί από τον Ιανουάριο του 2008 υπό τη Διεύθυνση της κ. Αικατερίνης Ασημακοπούλου. Έργο της Διεύθυνσης είναι ο συντονισμός των λειτουργιών των βιβλιοθηκών του ΕΚΠΑ.Στη Διεύθυνση Βιβλιοθηκών υπάγονται έξι κεντρικές Βιβλιοθήκες:</p>
	
					<p class="indentx2">1)Βιβλιοθήκη των Επιστημών Υγείας, η οποία καλύπτει τις ανάγκες και τις απαιτήσεις της Ιατρικής Σχολής και των Τμημάτων Οδοντιατρικής και Νοσηλευτικής.</p>
					<p class="indentx2">2)Βιβλιοθήκη της Θεολογικής Σχολής, η οποία καλύπτει τις ανάγκες και απαιτήσεις των Τμημάτων της Θεολογικής Σχολής.</p>
					<p class="indentx2">3)Βιβλιοθήκη των Νομικών, Οικονομικών και Πολιτικών Επιστημών, η οποία καλύπτει τις ανάγκες και τις απαιτήσεις των τμημάτων της Νομικής Σχολής και του ανεξάρτητου Τμήματος Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης.</p>
					<p class="indentx2">4)Βιβλιοθήκη των Παιδαγωγικών Επιστημών, η οποία καλύπτει τις ανάγκες και τις απαιτήσεις των ανεξάρτητων Τμημάτων Επιστήμης Φυσικής Αγωγής και Αθλητισμού, Δημοτικής Εκπαίδευσης και Εκπαίδευσης της Προσχολικής Ηλικίας. Επιπλέον, σε αυτήν εντάσσονται τα Φοιτητικά Αναγνωστήρια της Πανεπιστημιακής Λέσχης, που εκπροσωπούνται στο Εφορευτικό Συμβούλιο από τον Πρόεδρο της Πανεπιστημιακής Λέσχης.</p>
					<p class="indentx2">5)Βιβλιοθήκη της Σχολής Θετικών Επιστημών, η οποία καλύπτει τις ανάγκες και τις απαιτήσεις των τμημάτων της Σχολής Θετικών Επιστημών και των ανεξάρτητων Τμημάτων Φαρμακευτικής και Μεθοδολογίας Ιστορίας και Θεωρίας της Επιστήμης.</p>
					<p class="indentx2">6)Βιβλιοθήκη της Φιλοσοφικής Σχολής, η οποία καλύπτει τις ανάγκες και τις απαιτήσεις των Τμημάτων της Φιλοσοφικής Σχολής.</p>

					<p class="indent">Προτεραιότητα στο συντονισμό και τη διαχείριση της λειτουργίας δόθηκε στη Βιβλιοθήκη της Σχολής Θετικών Επιστημών, λόγω ολοκλήρωσης των εργασιών του κτηρίου και της καταγραφής και ενοποίησης των συλλογών όλων των τμημάτων της Σχολής. Η μεταφορά της Βιβλιοθήκης της Σχολής Θετικών Επιστημών πραγματοποιήθηκε τον Φεβρουάριο του 2009.Tο Πανεπιστήμιο Αθηνών συμμετέχει ενεργά στην Οριζόντια Δράση των Ελληνικών Ακαδημαϊκών Βιβλιοθηκών (HealLink), που αποτελείται από όλα τα Α.Ε.Ι. και Τ.Ε.Ι. της χώρας και στοχεύει στην αποδοτικότερη συνεργασία των Ιδρυμάτων μέσω της ηλεκτρονικής πρόσβασης στις πληροφοριακές πηγές των ακαδημαϊκών βιβλιοθηκών. Μετά από διαπραγματεύσεις με το Υπουργείο Παιδείας και τους εκδοτικούς οίκους, συμφωνήθηκε η ενιαία προμήθεια περιοδικών απο τα Ιδρύματα που συμμετέχουν στη HealLink. Η επέκταση της Οριζόντιας Δράσης στο πλαίσιο του ΕΣΠΑ 2008-2013 διατήρησε και την συμφωνία αυτή.</p>

					<h5>Βιβλιοθήκη: έννοια, σκοπός και ρόλος της</h5>

					<p class="indent">Ο όρος «βιβλιοθήκη» χρησιμοποιήθηκε αρχικά για ιδιωτικές συλλογές, στη συνέχεια για συλλογές «κλειστής πρόσβασης» (μοναστηριακές ή κάποιων πανεπιστημίων), έως ότου να φτάσει να χρησιμοποιείται με τη σημερινή έννοια του όρου, ο οποίος περιλαμβάνει και το κτήριο και τη συλλογή βιβλίων. Ωστόσο αυτό που διαπιστώνεται και ιστορικά είναι ότι ανέκαθεν ο ρόλος της βιβλιοθήκης ήταν αυτός του ενδιάμεσου ανάμεσα στον άνθρωπο και το βιβλίο.Σκοπός μιας βιβλιοθήκης ήταν και παραμένει η προώθηση και η διάδοση της γνώσης. Σήμερα ωστόσο, οι βιβλιοθήκες αλλάζουν. Οι υπηρεσίες εξελίσσονται χάρη στη τεχνολογική πρόοδο, ένα μεγάλο μέρος του υλικού συναντάται πλέον και σε ηλεκτρονική μορφή και όλο και περισσότερες πηγές είναι πλέον μόνο ηλεκτρονικές. Ο νέος ρόλος της βιβλιοθήκης είναι αυτός ενός κέντρου διαχείρισης της γνώσης, που όχι μόνο παρέχει πρόσβαση σε συλλογές βιβλίων και περιοδικών, αλλά συλλέγει, διαχειρίζεται και διαδίδει πληροφορίες και γνώση.</p>

					<h5>Βιβλιοθήκες ΕΚΠΑ</h5>
					
					<p class="indent">Στις 14 Απριλίου του 1837 εκδόθηκε διάταγμα που αφορούσε στη σύσταση Πανεπιστημίου με σκοπό αυτό να αποτελέσει το πρώτο Πανεπιστήμιο όχι μόνο του Ελληνικού κράτους, αλλά και της ευρύτερης περιοχής της Βαλκανικής και της Ανατολικής Μεσογείου.Έτσι, στις 2 Ιουλίου του 1839 ο Όθωνας έθεσε το θεμέλιο λίθο για την ανέγερση του Ελληνικού Πανεπιστημίου και δυο χρόνια αργότερα, το Νοέμβριο του 1841, άρχισαν τα μαθήματα.Ενώ ακόμη συνεχίζονταν οι εργασίες ανοικοδόμησης στο χώρο των Προπυλαίων, υπήρξε παράλληλα και η φροντίδα για τη δημιουργία Βιβλιοθήκης και ειδικών συλλογών, απαραίτητων για τη διδασκαλία και την επιστημονική συγκρότηση των φοιτητών. Το 1866 η πανεπιστημιακή και η δημόσια βιβλιοθήκη συγχωνεύθηκαν και αποτέλεσαν την Εθνική Βιβλιοθήκη, που στεγάστηκε στον άνω όροφο του Πανεπιστημίου έως το 1903, οπότε και μεταφέρθηκε στο διπλανό νεοκλασικό κτήριο.</p>

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