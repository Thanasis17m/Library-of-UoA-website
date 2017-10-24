<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../css/style.css">
		<title>Αναζήτηση Βιβλίων-Βιβλιοθήκη ΕΚΠΑ</title>

		<style>
			
			/*-----------------------------------*/

			#book_search_form {
				width: 350px;
				height: 350px;
				position: relative;
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
					  		<a href="#home" class="dropbutton active">Υπηρεσίες</a>
					  		<div class="dropdown-content">
					  			<a href="../AnazhthshPhgwn.php">Αναζήτηση Πηγών</a>
						        <a href="../Amea.php">Για ΑμεΑ</a>
						        <a href="../Vivliothikonomoi.php">Για Βιβλιοθηκονόμους</a>
						        <a href="../Daneismos.php">Δανεισμός Βιβλίων</a>
						        <a href="#">Παραγγελία Άρθρων</a>
						        <a href="../ebooks.php">Ηλεκτρονικά Βιβλία</a>
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
					  		<a href="#home" class="dropbutton">Βιβλιοθήκες ΕΚΠΑ</a>
					  		<div class="dropdown-content">
					  			<a href="../../LibrariesEKPA/LibraryHistory.php">Ιστορικό Βιβλιοθήκης</a>
						        <a href="../../LibrariesEKPA/LibrarySearch.php">Αναζήτηση Βιβλιοθηκών</a>
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

			<div id="content" align="center">

				<div id="book_search_form">

						<h3>Αναζήτηση Βιβλίων</h3>
						<h5>(Συμπληρώστε τουλάχιστον ένα)</h5>
						<form action="search_books.php" method="post">
							  Συγγραφέας:</br><input type="text" name="Συγγραφέας" placeholder="Search by author..."></br></br>
							  Τίτλος:</br><input type="text" name="Τίτλος" placeholder="Search by title..."></br></br>
							  Εκδόσεις:</br><input type="text" name="Εκδόσεις" placeholder="Search by publisher..."></br></br>
							  Βιβλιοθήκη:</br><input type="text" name="Βιβλιοθήκη" placeholder="Search by library..."></br></br>
							  <input type="submit" value="Αναζήτηση">
						</form>



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