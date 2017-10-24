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
			#box {
				width: 760px;
				min-height: 650px;
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
				<a href="home.php">
					<center><img src="images.png" alt="Athens University Logo" width="296" height="160" border="0"></center>
				</a>
			</div>

			<!--The horizontal navigation bar-->
			<div id="navbar">
				<ul>

					  <li><a href="home.php">Αρχική Σελίδα</a></li>


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
							    <li><a class="active" href="profile.php"><?php echo $_SESSION['name'];?></a></li>
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

				<div id="box">

					<h3>
						Ιστορικό Δανεισμών:
					</h3>

					<?php 

						$host="localhost";
						$username="eamuser32";
						$password="8f4406d8";
						$database="eamuser32";

						$connection = mysqli_connect($host,$username,$password);

						$selection = mysqli_select_db($connection,$database);

						if(!$connection || !$selection){
							echo "connection to database failed!!!";
						}

						mysqli_query($connection,"SET NAMES 'utf8'");

						$query = "SELECT book_id,expiration_date FROM rented_books WHERE user_id=".$_SESSION['id'];
						$res = mysqli_query($connection,$query);

						$array = mysqli_fetch_all($res);

						$num_of_rows = count($array);

						for($i = 0; $i < $num_of_rows; $i++){
							$query2 = "SELECT title FROM books WHERE idbooks=".$array[$i][0];
							$book_res = mysqli_query($connection,$query2);
							$book_name = mysqli_fetch_all($book_res);?>
							<h4>
								
								<form action="update_rental.php" method="post">
								<label><?php echo "Τίτλος Βιβλίου: ".$book_name[0][0].", Λήξη Δανεισμού : ".$array[$i][1];?>	<select name="update" style="visibility:hidden;">
										<option value = <?php echo "'".$array[$i][0]."'" ?> selected > </option>
									</select>
									<input type="submit" value="Ανανέωση δανεισμού">
									</label>
								</form>
							</h4>
							
							<?php
						}
					?>

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