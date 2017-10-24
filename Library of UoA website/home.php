<?php session_start();?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Βιβλιοθήκη ΕΚΠΑ</title>
		 <link rel="stylesheet" href="css/style.css">
		<style>
			


			/*-----------------------------------*/

			#welcome_msg {
				width: 760px;
				height: 500px;
				position: relative;
				float: left;
				border: 1px rgb(89,89,89) solid;
				padding: 30px;
				margin: 20px;
				background: rgb(214, 203, 203);
				border-radius: 3px;
				box-shadow: 0 0 5px 2px rgba(0,0,0,.35)
			}

			#indent {
				 text-indent: 50px;
			}

			#follow_msg {
				width: 150px;
				height: 500px;
				float: right;
				position: relative;
				border: 1px rgb(89,89,89) solid;
				padding: 30px;
				margin-right: 20px;
				margin-top: 20px;
				margin-bottom: 20px;
				background: rgb(214, 203, 203);
				border-radius: 3px;
				box-shadow: 0 0 5px 2px rgba(0,0,0,.35)
			}

			#twitter img {
				width: 35px;
				padding: 5px;
				border: 0;
				box-shadow: 0;
				display: inline;
			}

			#follow_msg img {
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			}

			#announcement {
				width: 760px;
				min-height: 300px;
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

			#announcement table {
				border-collapse: collapse;
    			width: 100%;
			}

			#announcement th,td {
				text-align: left;
    			padding: 8px;
			}

			#announcement tr{background-color: #f2f2f2}

			#announcement th {
				background-color: #4CAF50;
    			color: white;
			}

		</style>
	</head>
	<body>

		<div id="wrapper">

			<!--The banner image-->
			<div id="banner">
				<a href="home.php">
					<center><img src="images.png" alt="Athens University Logo" width="296" height="160" border="0"></center>
				</a>
			</div>

			<!--The horizontal navigation bar-->
			<div id="navbar">
				<ul>

					  <li><a class="active" href="home.php">Αρχική Σελίδα</a></li>


					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Υπηρεσίες</a>
					  		<div class="dropdown-content">
					  			<a href="Yphresies/AnazhthshPhgwn.php">Αναζήτηση Πηγών</a>
						        <a href="Yphresies/Amea.php">Για ΑμεΑ</a>
						        <a href="Yphresies/Vivliothikonomoi.php">Για Βιβλιοθηκονόμους</a>
						        <a href="Yphresies/Daneismos.php">Δανεισμός Βιβλίων</a>
						        <a href="#">Παραγγελία Άρθρων</a>
						        <a href="Yphresies/ebooks.php">Ηλεκτρονικά Βιβλία</a>
						    </div>
					  </div>


					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Κεντρική Διεύθυνση</a>
					  		<div class="dropdown-content">
					  			<a href="KentrikhDieythinsi/announcements.php">Ανακοινώσεις</a>
						        <a href="KentrikhDieythinsi/staff.php">Προσωπικό & Πληροφορίες</a>
						        <a href="KentrikhDieythinsi/links.php">Χρήσιμοι Σύνδεσμοι</a>
						    </div>
					  </div>


					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Βιβλιοθήκες ΕΚΠΑ</a>
					  		<div class="dropdown-content">
					  			<a href="LibrariesEKPA/LibraryHistory.php">Ιστορικό Βιβλιοθήκης</a>
						        <a href="LibrariesEKPA/LibrarySearch.php">Αναζήτηση Βιβλιοθηκών</a>
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
							    <li><a href="logout.php">Logout</a></li>
							  </ul>
							</div>


							<div class="dropdown" style="float:right;">
							  <ul>
							    <li><a href="profile.php"><?php echo $_SESSION['name'];?></a></li>
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
							        	<form action="login_success.php" method="post">
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

				<div id="welcome_msg">
					<h4>Καλώς Ήλθατε,</h4>
					
					<p id="indent"> στον δικτυακό τόπο των Βιβλιοθηκών του Εθνικού και Καποδιστριακού Πανεπιστημίου Αθηνών.</p>

					</br>

					<p><strong>Υπηρεσίες:</strong> Στον ιστότοπο αυτό παρέχονται υπηρεσίες όπως η Αναζήτηση Πηγών από διάφορες βάσεις δεδομένων,ο Δανεισμός Βιβλίων και η Παραγγελία Άρθρων. Επίσης,γίνονται διαθέσιμα στη κοινότητα του ΕΚΠΑ άφθονα Ηλεκτρονικά Βιβλία και παρέχονται ειδικότερες υπηρεσίες για τα ΑμεΑ,τους Ερευνητές και τους Βιβλιοθηκονόμους.</p>

					<p><strong>Κεντρική Διεύθυνση:</strong> Όλες οι Ανακοινώσεις της κεντρικής διεύθυνσης της Βιβλιοθήκης του ΕΚΠΑ μπορούν να βρεθούν εδώ. Επιπλέον, είναι διαθέσιμες όλες η πληροφορίες για το Προσωπικό των βιβλιοθηκών του ΕΚΠΑ,καθώς και πολοί άλλοι Χρήσιμοι Σύνδεσμοι.</p>

					<p><strong>Βιβλιοθήκες ΕΚΠΑ:</strong> Το Ιστορικό της Βιβλιοθήκης του ΕΚΠΑ,αλλά και η Αναζήτηση Βιβλιοθηκών είναι διαθέσιμα συνεχώς σε αυτό τον ιστότοπο.</p>

					<p><strong>Βοήθεια/Συχνές Ερωτήσεις:</strong> Εδώ μπορεί να βρεθεί περαιτέρω βοήθεια για την ευκολότερη πλοήγηση στον ιστόχωρο αυτό.</p>
				</div>

				<div id="follow_msg">
					<p>Ακολουθήστε μας και στο Twitter:</p>
					<div id="twitter">
						 <a href="https://twitter.com/" target="_blank">
					        <img src="twitter.png" alt="Twitter" />
					    </a>
					</div>
				</div>

				<div id="announcement">
					<table>
						<tr><th><strong>Πρόσφατες Ανακοινώσεις:</strong></th></tr>
						<tr><td>1) Η βιβλιοθήκη του ΕΚΠΑ μόλις απέκτησε νέα ιστοσελίδα!</td></tr>
						<tr><td>2) Για να μαθαίνετε όλα τα νέα γρηγορότερα ακολουθήστε τον λογαριασμό της Βιβλιοθήκης στο Twitter.</td></tr>
						<tr><td>3) Νέες εκδηλώσεις προγραμματίζονται συνεχώς από την Κεντρική Διεύθυνση της Βιβλιοθήκης του ΕΚΠΑ.Μάθετε περισσότερα εδώ.</td></tr>
						<tr><td>4) Νέες θέσεις εργασίας για Βιβλιοθηκονόμους!Πατήστε εδώ για να μάθετε περισσότερα αλλά και για να υποβάλλετε τα στοιχεία σας.</td></tr>
					</table>
				</br>
					<a href="KentrikhDieythinsi/announcements.php">Όλες οι Ανακοινώσεις</a>
				</div>


			</div><!-- #content -->
			
			<div id="footer">
				<ul>
					<li><a href="home.php">Home</a>
					<li><a href="#home">Sitemap</a>
					<li><a href="#home">Contact</a>
				</ul>
			</div><!-- #footer -->

		</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>



       
    
		

	</body>
</html>