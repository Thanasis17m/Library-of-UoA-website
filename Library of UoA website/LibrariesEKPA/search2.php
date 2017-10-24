<?php session_start()?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<title>Αναζήτηση Βιβλιοθηκών-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../css/style.css">
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

				<div id="lib_search">
					
					</br>


					


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

						if($_GET["search_parameter2"]=="---Επιλέξτε Βιβλιοθήκη---"){
							echo "Επιλέξτε μία Βιβλιοθήκη για να γίνει η Αναζήτηση";
						}

						else{

							$query="SELECT * FROM library";

							if($_GET["search_parameter2"]=="Όλες οι Βιβλιοθήκες"){ ?>

								<h3>Εμφάνιση Όλων των Βιβλιοθηκών του ΕΚΠΑ:</h3>
								</br>
							<?php }

							else{

								$query=$query." WHERE central_library LIKE '%".$_GET["search_parameter2"]."%'"; ?>

								<h3>Αναζήτηση Βιβλιοθηκών ΕΚΠΑ ανα Κεντρική Βιβλιοθήκη:</h3>
								</br>
								<h4><?php echo $_GET["search_parameter2"].":";?></h4>
							<?php }

							$res = mysqli_query($connection,$query) or die("Error: ".mysqli_error($connection));

							$all_results = mysqli_fetch_all($res);
							$num_of_rows = count($all_results);

							$result_num=0;

							for($i=0; $i < $num_of_rows; $i++){ 

								$result_num++;?>

								<h4><?php echo $result_num.")";?><a href="<?php echo $all_results[$i][5];?>"><?php echo $all_results[$i][1];echo "<br>"; ?></a></h4>
								<pre>Διεύθυνση: <?php echo $all_results[$i][2]."\n";?>
Ώρες Λειτουργίας: <?php echo $all_results[$i][7]."\n";?>
E-mail: <?php echo $all_results[$i][8]."\n";?></pre>



							<?php }

							} ?>



					</br>
					<a href="LibrarySearch.php">Νέα Αναζήτηση</a>


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