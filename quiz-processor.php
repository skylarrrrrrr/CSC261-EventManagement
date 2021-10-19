 <!-- **********************************
     SECTION FOUR: thank the user in HTML;
     Below, there needs to be an HTML 
     webpage with a customized message 
     for the user
     ********************************** -->

<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
	<div class= "quizresult">

		<?php

				// connect to the database
     			include'connect-db.php';


	 			$Fruit = $_POST['fruit'];
	 			$Place = $_POST['place'];
	 			$Animal = $_POST['animal'];
	 			$Color = $_POST['color'];
	 			$Sport = $_POST['sport'];
	 			$City = $_POST['city'];

	 			$result = intval($Fruit) + intval($Place) + intval($Animal) + intval($Color) + intval($Sport) + intval($City);

	 			if ($result < 31) {
	 	?>		
	 			<!-- Here is for under 31 -->
	 			<div class="quizresulttitle">
	 				<?php 
	 					$Name = $_POST['name'];
	 					echo "<h2>Hi, ".$Name."</h2>";
	 				?>
	 				<p data-aos="fade-up" data-aos-duration="1500">Spontaneous, energetic and enthusiastic people - life is never boring around you. You like to make friends. Extraordinary caring, social and popular people, always eager to help. You enjoy supporting your friends and loved ones, organizing social gatherings and doing your best to make sure everyone is happy. We believe that events about Yoga, Music and Fun are great fits for you! Below are similar events avaliable in this month!</p>
	 			</div>

	 			<div class="eventDetails">
      				<?php
          				// connect to the database
          				include('connect-db.php');
          				// get results from database
          				$result1 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING (E_type = 'Yoga') OR (E_type = 'Music') OR (E_type = 'Fun') ORDER BY E_Name");
           			?>

     				<?php
          			// loop through results of database query, displaying them in the table
            			while($row1 = mysqli_fetch_array( $result1 ) ){
      				?>

   					<div class="eventCard resultCard" data-aos="fade-up" data-aos-duration="3000">

       					<h2><?php echo $row1['E_Name']; ?></h2>

            			<section class="infoContainer">
              				<h3>Event ID <span class="einfo"><?php echo $row1['E_ID']; ?></span></h3>
              				<h3>Type <span class="einfo"><?php echo $row1['E_type']; ?></span></h3>
              				<h3>Sponsor <span class="einfo"><?php echo $row1['O_Name']; ?></span></h3>
              				<h3>Date <span class="einfo"><?php echo $row1['Date']; ?></span></h3>
              				<h3>Time <span class="einfo"><?php echo $row1['Start']; ?><span> ~ </span> <?php echo $row1['End']; ?></span></h3>
              				<h3>Location <span class="einfo"><?php echo $row1['Campus']; ?><span> Campus, </span><?php echo $row1['Building']; ?><span>, </span><?php echo $row1['Room']; ?></span></h3>
              				<a href="register.php">Register now</a>
            			</section>
    				</div>

      				<?php
        				// close the loop
          				}
      				?>
    			</div>
	 			
	 	<?php
        // close the loop for under 31
          }elseif ($result > 30 && $result < 51) {
          		
      	?>
      		<div class="quizresulttitle">
	 				<?php 
	 					$Name = $_POST['name'];
	 					echo "<h2>Hi, ".$Name."</h2>";
	 				?>
	 				<p data-aos="fade-up" data-aos-duration="1500">You are a flexible and charming artist, always ready to explore and experience something new. You are enthusiastic, creative and sociable free spirits, who can always find a reason to smile. You take your job seriously but are not very interested in things other than what you are good at. You don’t like take risk or adventure. You like to stay in your comfort zone. We believe that events about Fitness, Dance, Sale and Environment are great fits for you! Below are similar events avaliable in this month!</p>
	 		</div>

      		<div class="eventDetails">
      				<?php
          				// connect to the database
          				include('connect-db.php');
          				// get results from database
          				$result1 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING (E_type = 'Fitness') OR (E_type = 'Dance') OR (E_type = 'Sale') OR (E_type = 'Environment') ORDER BY E_Name");
           			?>

     				<?php
          			// loop through results of database query, displaying them in the table
            			while($row1 = mysqli_fetch_array( $result1 ) ){
      				?>

   					 <div class="eventCard resultCard" data-aos="fade-up" data-aos-duration="3000">

       					<h2><?php echo $row1['E_Name']; ?></h2>

            			<section class="infoContainer">
              				<h3>Event ID <span class="einfo"><?php echo $row1['E_ID']; ?></span></h3>
              				<h3>Type <span class="einfo"><?php echo $row1['E_type']; ?></span></h3>
              				<h3>Sponsor <span class="einfo"><?php echo $row1['O_Name']; ?></span></h3>
              				<h3>Date <span class="einfo"><?php echo $row1['Date']; ?></span></h3>
              				<h3>Time <span class="einfo"><?php echo $row1['Start']; ?><span> ~ </span> <?php echo $row1['End']; ?></span></h3>
              				<h3>Location <span class="einfo"><?php echo $row1['Campus']; ?><span> Campus, </span><?php echo $row1['Building']; ?><span>, </span><?php echo $row1['Room']; ?></span></h3>
              				<a href="register.php">Register now</a>
            			</section>
    				</div>

      				<?php
        				// close the loop
          				}
      				?>
    		</div>

      	<?php
        // close the loop for under 51
          }elseif ($result > 50 && $result < 71) {
      	?>
      		<div class="quizresulttitle">
	 				<?php 
	 					$Name = $_POST['name'];
	 					echo "<h2>Hi, ".$Name."</h2>";
	 				?>
	 				<p data-aos="fade-up" data-aos-duration="1500">You are an innovative inventor with an unquenchable thirst for knowledge.Imaginative and strategic thinkers, with a plan for everything. You are curious about everything. You are an adventure player. You are good at discovering interesting things, but poor in patience, dare to take risks, but sometimes timid. We believe that events about General Member Meeting, Election, Sports and Reading are great fits for you! Below are similar events avaliable in this month!</p>
	 		</div>
      		<div class="eventDetails">
      				<?php
          				// connect to the database
          				include('connect-db.php');
          				// get results from database
          				$result1 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING (E_type = 'GMM') OR (E_type = 'Election') OR (E_type = 'Sports') OR (E_type = 'Reading') ORDER BY E_Name");
           			?>

     				<?php
          			// loop through results of database query, displaying them in the table
            			while($row1 = mysqli_fetch_array( $result1 ) ){
      				?>

   					 <div class="eventCard resultCard" data-aos="fade-up" data-aos-duration="3000">

       					<h2><?php echo $row1['E_Name']; ?></h2>

            			<section class="infoContainer">
              				<h3>Event ID <span class="einfo"><?php echo $row1['E_ID']; ?></span></h3>
              				<h3>Type <span class="einfo"><?php echo $row1['E_type']; ?></span></h3>
              				<h3>Sponsor <span class="einfo"><?php echo $row1['O_Name']; ?></span></h3>
              				<h3>Date <span class="einfo"><?php echo $row1['Date']; ?></span></h3>
              				<h3>Time <span class="einfo"><?php echo $row1['Start']; ?><span> ~ </span> <?php echo $row1['End']; ?></span></h3>
              				<h3>Location <span class="einfo"><?php echo $row1['Campus']; ?><span> Campus, </span><?php echo $row1['Building']; ?><span>, </span><?php echo $row1['Room']; ?></span></h3>
              				<a href="register.php">Register now</a>
            			</section>
    				</div>

      				<?php
        				// close the loop
          				}
      				?>
    		</div>
      	<?php
        // close the loop for under 71
          }elseif ($result > 70 && $result < 91) {
      	?>
      		<!-- Here is for under 91 AND above 70 -->
      		<div class="quizresulttitle">
	 				<?php 
	 					$Name = $_POST['name'];
	 					echo "<h2>Hi,".$Name."</h2>";
	 				?>
	 				<p data-aos="fade-up" data-aos-duration="1500">You have a strong willpower and strong career ambition. Bold, imaginative and strong-willed leaders, always finding a way-or making one. You won’t stop until the goal is achieved. You are willing to sacrifice for others. You are passionate for personal growth. You are self-sufficient and responsible. You won’t admit defeat. You have great critical thinking and keep improving yourself. There is no ‘quit’ in your dictionary. We believe that events about Leadership, Computer Science and Student Association are great fits for you! Below are similar events avaliable in this month!</p>
	 		</div>
      		<div class="eventDetails">
      				<?php
          				// connect to the database
          				include('connect-db.php');
          				// get results from database
          				$result1 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING (E_type = 'Leadership') OR (E_type = 'CS') OR (E_type = 'SA') ORDER BY E_Name");
           			?>

     				<?php
          			// loop through results of database query, displaying them in the table
            			while($row1 = mysqli_fetch_array( $result1 ) ){
      				?>

   					 <div class="eventCard resultCard" data-aos="fade-up" data-aos-duration="3000">

       					<h2><?php echo $row1['E_Name']; ?></h2>

            			<section class="infoContainer">
              				<h3>Event ID <span class="einfo"><?php echo $row1['E_ID']; ?></span></h3>
              				<h3>Type <span class="einfo"><?php echo $row1['E_type']; ?></span></h3>
              				<h3>Sponsor <span class="einfo"><?php echo $row1['O_Name']; ?></span></h3>
              				<h3>Date <span class="einfo"><?php echo $row1['Date']; ?></span></h3>
              				<h3>Time <span class="einfo"><?php echo $row1['Start']; ?><span> ~ </span> <?php echo $row1['End']; ?></span></h3>
              				<h3>Location <span class="einfo"><?php echo $row1['Campus']; ?><span> Campus, </span><?php echo $row1['Building']; ?><span>, </span><?php echo $row1['Room']; ?></span></h3>
              				<a href="register.php">Register now</a>
            			</section>
    				</div>

      				<?php
        				// close the loop
          				}
      				?>
    		</div>
      	<?php
        // close the loop
          }
      	?>

	</div> 

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

</body>

</html>
