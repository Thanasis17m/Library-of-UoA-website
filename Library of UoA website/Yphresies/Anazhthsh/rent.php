<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Library of University of Athens">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Me">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<script type="text/javascript">
			$(function(){
				$(".clickable").click(function(){
				$(this).next('.extra_info').toggleClass('hidden_info');
				});
			});
		</script>


		<title>Αναζήτηση Βιβλίων-Βιβλιοθήκη ΕΚΠΑ</title>
		<link rel="stylesheet" href="../../css/style.css">
		<style>

			/*-----------------------------------*/
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
				<a href="../../home.php">
					<center><img src="images.png" alt="Athens University Logo" width="296" height="160" border="0"></center>
				</a>
			</div>

			<!--The horizontal navigation bar-->
			<div id="navbar">
				<ul>

					  <li><a class="active" href="../../home.php">Αρχική Σελίδα</a></li>


					  <div class="dropdown">
					  		<a href="#home" class="dropbutton">Υπηρεσίες</a>
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
			<div id="content">

				<div id="box">
					<?php 
						date_default_timezone_set('Europe/Athens');

						
						//$date = date_create('16-7-5');
						//$diff = date_diff($today, $date);
						//echo $diff->format('%R%a days');


						if(isset($_SESSION['loggedin']) && isset($_SESSION['id']) && $_SESSION['loggedin'] == true){

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

							if($_POST['rental_value'] == "Επιλέξτε Βιβλιοθήκη για δανεισμό"){
								echo "Παρακαλούμε επιλέξτε από ποιά βιβλιοθήκη θέλετε να δανειστείτε";
							}

							else{
								$str_array = explode("-",$_POST["rental_value"]);
								//echo $str_array[0];
								//echo "!!!!    ".$str_array[1];
								
								$today1 =  date("y-m-d"); 
								$today = date_create($today1);
								$today2 = $today;

								$query = "INSERT INTO rented_books SET ";

								$query2 = "SELECT idbooks FROM books WHERE title = '".$str_array[1]."'"." AND library='".$str_array[0]."'";
								$book_res = mysqli_query($connection,$query2);
								$book = mysqli_fetch_all($book_res);
								//echo "book id = ".$book[0][0];

								$check_query = "SELECT * FROM rented_books WHERE book_id = ".$book[0][0]." AND user_id = ".$_SESSION['id'];
								$check_res = mysqli_query($connection,$check_query);
								$check_array = mysqli_fetch_all($check_res);
								$check_count = count($check_array);

								if($check_count != 0){
									echo "Σφάλμα στο δανεισμό του βιβλίου.Έχετε ήδη δανειστεί το βιβλίο αυτό.";
								}

								else{
									$query3 = "SELECT rental_duration FROM library WHERE name='".$str_array[0]."'";
									$lib_res = mysqli_query($connection,$query3);
									$rent_duration = mysqli_fetch_all($lib_res);

									
									//echo "duration =".$rent_duration[0][0];



									$query = $query."user_id =".$_SESSION['id']." ,rental_date='".$today->format("y-m-d")."' ,book_id=".$book[0][0]." ,expiration_date='";
									date_add($today2,date_interval_create_from_date_string("7 days"));
									$query = $query.$today2->format("y-m-d")."'";
									

									$rent_book_res = mysqli_query($connection,$query);
									if($rent_book_res == FALSE){
										echo "σφάλμα στη βάση κατά το δανεισμό του βιβλίου";
									}

									else{?>

										<h4>
											<?php echo "Ο Δανεισμός ολοκληρώθηκε με επιτυχία.";?>
										</h4>
							<?php	}
								}
								}
							}
							else{?>
							<h4>
								<?php echo "Συνδεθείτε για να έχετε πρόσβαση στην υπηρεσία δανεισμού.";?>
							</h4>

						<?php	}


						?>

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