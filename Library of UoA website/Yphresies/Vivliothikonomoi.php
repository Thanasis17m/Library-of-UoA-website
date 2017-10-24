<?php session_start()?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Υπηρεσίες για Βιβλιοθηκονόμους-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
		<style>
			

			/*-----------------------------------*/

			#yphresies{
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

				<div id="yphresies">

					<h3>Υπηρεσίες για Βιβλιοθηκονόμους</h3>
					<p>Παρακάτω μπορείτε να βρείτε διάφορες βάσεις δεδομένων που μπορουν να χρησιμοποιηθούν για αναζήτηση από τους βιβλιοθηκονόμους:</p>

					<h4><a href="http://search.ebscohost.com/" target="_blank">EBSCO - Library, Information Science & Technology Abstracts (LISTA)</a></h4>
					<p>Η βάση Library, Information Science & Technology Abstracts ευρετηριάζει πάνω από 500 περιοδικά, βιβλία, ερευνητικές αναφορές και πρακτικά συνεδριάσεων σχετικά με τη βιβλιοθηκονομία, την ταξινόμηση, την καταλογογράφηση, την ανάκτηση πληροφοριών και τη διαχείριση από τα μέσα του 1960.</p>
					<h4><a href="http://www.booksinprint.com" target="_blank">Books in Print</a></h4>
					<p>Πρόκειται για βιβλιογραφική βάση με 5.000.000 τίτλους ξενόγλωσσων τεκμηρίων. Οι χρήστες έχουν τη δυνατότητα να δουν τα βιβλιογραφικά στοιχεία των τεκμηρίων, χωρίς όμως να είναι δυνατή στην πλειοψηφία τους η πρόσβαση στο πλήρες κείμενο αυτών (σε περίπτωση που διατίθεται το πλήρες κείμενο υπάρχει το ανάλογο εικονίδιο στην οθόνη των αποτελεσμάτων)</p>
					<h4><a href="http://ulrichsweb.serialssolutions.com" target="_blank">Ulrich΄s Periodicals Directory</a></h4>
					<p>Η βάση παρέχει πρόσβαση σε διάφορους τίτλους περιοδικών, στους πίνακες περιεχομένων αυτών, στις ηλεκτρονικές τους διευθύνσεις και στις περιλήψεις άρθρων, ενώ όπου είναι δυνατό παρέχεται το πλήρες κείμενο. Η θεματική περιοχή που καλύπτεται είναι ευρεία και μπορεί να γίνει αναζήτηση των περιοδικών βάσει του θέματος.</p>
					<h4><a href="http://dewey.org" target="_blank">WebDewey</a></h4>
					<p>Η υπηρεσία WebDewey είναι το πρόγραμμα περιήγησης στη βάση Dewey Decimal Classification (DDC), η οποία ενημερώνεται κάθε τετράμηνο. Είναι αρκετά εύκολη στη χρήση και δίνει πρόσβαση στην τελευταία έκδοση του DDC 23.</p>
					<h4><a href="http://argo.ekt.gr/" target="_blank">ΑΡΓΩ: Περιβάλλον πρόσβασης πηγών πληροφόρησης</a></h4>
					<p>Παρέχεται η δυνατότητα πρόσβασης σε βιβλιογραφικές πηγές πληροφοριών που διατίθενται στην Ελλάδα και σε όλο τον κόσμο.</p>
					<h4><a href="http://efessos.lib.uoa.gr/Applications/unimarc.nsf" target="_blank">Σύστημα Ταξιθέτησης για τους ταξινομικούς αριθμούς DDC της Κεντρικής Βιβλιοθήκης Φιλοσοφικής Σχολής</a></h4>
					<p>Εδώ παρατίθενται οι οδηγίες ταξιθετικού συστήματος για τους ταξινομικούς αριθμούς DDC, οι οποίες προς το παρόν εφαρμόζονται στην Φιλοσοφική Σχολή και στη Σχολή Θετικών Επιστημών (από τον Αύγουστο του 2007) καθώς και σε μεμονωμένα Σπουδαστήρια του Πανεπιστημίου μας.Επίσης, εδώ παρέχονται επεξηγήσεις πάνω σε θέματα καταλογογράφησης, ταξινόμησης, ταξιθέτησης και θεματικής ευρετηρίασης που προέκυψαν από την επεξεργασία των βιβλίων της Φιλοσοφικής Σχολής.</p>

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