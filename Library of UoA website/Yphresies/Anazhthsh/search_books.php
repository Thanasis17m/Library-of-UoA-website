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

			#book_search {
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

			.hidden_info {
				display:none;
			}

			.clickable:hover{
				color:blue;
				cursor:pointer;
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
			<div id="content">


				<div id="book_search">
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
						
						$query = "SELECT * FROM books WHERE "  ;
						$flag = 0;
						if($_POST['Συγγραφέας'] != ""){
							$query = $query." author LIKE'%".$_POST['Συγγραφέας']."%'";
							$flag = 1;
						}

						if($_POST['Τίτλος'] != ""){
							if($flag==1){
								$query = $query." AND title LIKE '%".$_POST['Τίτλος']."%'";
							}
							else{
								$query = $query." title LIKE '%".$_POST['Τίτλος']."%'";
								$flag = 1;
							}

						}

						if($_POST['Εκδόσεις'] != ""){
							if($flag==1){
								$query = $query." AND publisher LIKE '%".$_POST['Εκδόσεις']."%'";
							}
							else{
								$query = $query." publisher LIKE '%".$_POST['Εκδόσεις']."%'";
								$flag = 1;
							}

						}

						if($_POST['Βιβλιοθήκη'] != ""){
							if($flag==1){
								$query = $query." AND library LIKE '%".$_POST['Βιβλιοθήκη']."%'";
							}
							else{
								$query = $query." library LIKE '%".$_POST['Βιβλιοθήκη']."%'";
								$flag = 1;
							}

						}

						
						if($query == "SELECT * FROM books WHERE "){
							echo "please give at least one search parameter";
						}

						else{

							$res = mysqli_query($connection,$query);
							//$num_of_rows = mysqli_num_rows($res); 
							
							
							$all_results = mysqli_fetch_all($res);
							$num_of_rows = count($all_results);

							for($i=0; $i < $num_of_rows; $i++){
								$book_found = 0;
								$libraries = array();
								$quantities = array();
								for($j=0; $j < $i; $j++){
									if($all_results[$j][1] == $all_results[$i][1]){
										$book_found = 1;
									}
								}
								if($book_found != 1){	
								
									for($j = 0; $j < $num_of_rows; $j++){
										if($all_results[$j][1] == $all_results[$i][1]){
											$libraries[] = $all_results[$j][4];
											$quantities[] = $all_results[$j][5];
										}
									}?>
									<h3 class="clickable">
									&#x25BE	<?php echo "Τίτλος Βιβλίου: ".$all_results[$i][1]; ?> 
									</h3>
								
									<h4 class="extra_info hidden_info"> 
										<?php echo "Συγγραφέας: ".$all_results[$i][2];?><br /> 
										<?php echo "Εκδόσεις: ".$all_results[$i][3];?><br /> 
										 
										<?php 
										$libraries_num = count($libraries);?>

										<form action="rent.php" method="post">
										<label>Βιβλιοθήκες:	<select name="rental_value">	
												<option value = "Επιλέξτε Βιβλιοθήκη για δανεισμό">Επιλέξτε Βιβλιοθήκη για δανεισμό</option>
											<?php

										for($j = 0; $j < $libraries_num; $j++){ 
											?>

										<option value = <?php echo "'".$libraries[$j]?>-<?php echo $all_results[$i][1]."'"?>> <?php	echo $libraries[$j]." (Διαθέσιμα: ".$quantities[$j].")";?></option> <br /> 
											<?php 
										}
										
										?>	
											</select>
											<input type="submit" value="Δανείσου το">
											</label>
											
										</form>
										<br />

									</h4> 
					<?php		}
						 	}



							
							
							
					  }  ?>

			
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