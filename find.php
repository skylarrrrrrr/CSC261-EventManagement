<?php session_start(); ?>
<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
		<div class="topheading">
			
			<h1>Find<span class="subh1">｜ Search for events that tailor to your needs</span></h1>
			
		</div>

	<!-- Search Section  -->
	<div class = "Search">

     <h2>What are you looking for ?</h2>
     <sub>Click and see</sub>

     <div class="eventTypes">

      <ul>
        <li class="tag" onclick="myfunction('CS'); myfunction2('CST');" id="CST">Computer Science</li>
        <li class="tag" onclick="myfunction('Dance'); myfunction2('DT');" id="DT">Dance</li>
        <li class="tag" onclick="myfunction('Election'); myfunction2('ET');" id="ET">Election</li>
        <li class="tag" onclick="myfunction('Environment'); myfunction2('ENT');" id="ENT">Environment</li>
        <li class="tag" onclick="myfunction('Fitness'); myfunction2('FT');" id="FT">Fitness</li>
        <li class="tag" onclick="myfunction('Fun'); myfunction2('FUT');" id="FUT">Fun</li>
        <li class="tag" onclick="myfunction('GMM'); myfunction2('GT');" id="GT">General Member Meeting</li>
        <li class="tag" onclick="myfunction('Leadership'); myfunction2('LT');" id="LT">Leadership</li>
        <li class="tag" onclick="myfunction('Music'); myfunction2('MT');" id="MT">Music</li>
        <li class="tag" onclick="myfunction('Reading'); myfunction2('RT');" id="RT">Reading</li>
        <li class="tag" onclick="myfunction('SA'); myfunction2('SAT');" id="SAT">Student Association</li>
        <li class="tag" onclick="myfunction('Sale'); myfunction2('ST');" id="ST">Sale</li>
        <li class="tag" onclick="myfunction('Sports'); myfunction2('SPT');" id="SPT">Sports</li>
        <li class="tag" onclick="myfunction('Yoga'); myfunction2('YT');" id="YT">Yoga</li>
      </ul>
    
    </div>

  </div>

  <!-- Result Section -->
  <div class="resultSec">

    <!-- CS -->
    <div class="eventDetails" id="CS">
      <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result1 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'CS' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row1 = mysqli_fetch_array( $result1 ) ){
      ?>

    <div class="eventCard CS resultCard">

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
    
    <!-- Dance -->
    <div class="eventDetails" id="Dance">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result2 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Dance' ORDER BY E_Name");
           
    ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row2 = mysqli_fetch_array( $result2 ) ){
      ?>

    <div class="eventCard Dance resultCard">

       <h2><?php echo $row2['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row2['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row2['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row2['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row2['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row2['Start']; ?><span> ~ </span> <?php echo $row2['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row2['Campus']; ?><span> Campus, </span><?php echo $row2['Building']; ?><span>, </span><?php echo $row2['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>  

    <!-- Election -->
    <div class="eventDetails" id="Election">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result3 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Election' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row3 = mysqli_fetch_array( $result3 ) ){
      ?>

    <div class="eventCard Election resultCard">

       <h2><?php echo $row3['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row3['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row3['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row3['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row3['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row3['Start']; ?><span> ~ </span> <?php echo $row3['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row3['Campus']; ?><span> Campus, </span><?php echo $row3['Building']; ?><span>, </span><?php echo $row3['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Environment -->
    <div class="eventDetails" id="Environment">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result4 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Environment' ORDER BY E_Name");
           
    ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row4 = mysqli_fetch_array( $result4 ) ){
      ?>

    <div class="eventCard Environment resultCard">

       <h2><?php echo $row4['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row4['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row4['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row4['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row4['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row4['Start']; ?><span> ~ </span> <?php echo $row4['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row4['Campus']; ?><span> Campus, </span><?php echo $row4['Building']; ?><span>, </span><?php echo $row4['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Fitness -->
    <div class="eventDetails" id="Fitness">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result5 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Fitness' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row5 = mysqli_fetch_array( $result5 ) ){
      ?>

    <div class="eventCard Fitness resultCard">

       <h2><?php echo $row5['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row5['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row5['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row5['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row5['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row5['Start']; ?><span> ~ </span> <?php echo $row5['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row5['Campus']; ?><span> Campus, </span><?php echo $row5['Building']; ?><span>, </span><?php echo $row5['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Fun -->
    <div class="eventDetails" id="Fun">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result6 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Fun' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row6 = mysqli_fetch_array( $result6 ) ){
      ?>

    <div class="eventCard Fun resultCard">

       <h2><?php echo $row6['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row6['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row6['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row6['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row6['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row6['Start']; ?><span> ~ </span> <?php echo $row6['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row6['Campus']; ?><span> Campus, </span><?php echo $row6['Building']; ?><span>, </span><?php echo $row6['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- GMM -->
    <div class="eventDetails" id="GMM">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result7 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'GMM' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row7 = mysqli_fetch_array( $result7 ) ){
      ?>

    <div class="eventCard GMM resultCard">

       <h2><?php echo $row7['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row7['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row7['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row7['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row7['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row7['Start']; ?><span> ~ </span> <?php echo $row7['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row7['Campus']; ?><span> Campus, </span><?php echo $row7['Building']; ?><span>, </span><?php echo $row7['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Leadership -->
    <div class="eventDetails" id="Leadership">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result8 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Leadership' ORDER BY E_Name");
           
      ?>
    
      <?php
          // loop through results of database query, displaying them in the table
            while($row8 = mysqli_fetch_array( $result8 ) ){
      ?>

    <div class="eventCard Leadership resultCard" >

       <h2><?php echo $row8['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row8['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row8['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row8['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row8['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row8['Start']; ?><span> ~ </span> <?php echo $row8['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row8['Campus']; ?><span> Campus, </span><?php echo $row8['Building']; ?><span>, </span><?php echo $row8['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Music -->
    <div class="eventDetails" id="Music">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result9 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Music' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row9 = mysqli_fetch_array( $result9 ) ){
      ?>

    <div class="eventCard Music resultCard">

       <h2><?php echo $row9['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row9['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row9['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row9['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row9['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row9['Start']; ?><span> ~ </span> <?php echo $row9['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row9['Campus']; ?><span> Campus, </span><?php echo $row9['Building']; ?><span>, </span><?php echo $row9['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Reading -->
    <div class="eventDetails" id="Reading">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result10 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Reading' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row10 = mysqli_fetch_array( $result10 ) ){
      ?>

    <div class="eventCard Reading resultCard">

       <h2><?php echo $row10['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row10['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row10['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row10['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row10['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row10['Start']; ?><span> ~ </span> <?php echo $row10['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row10['Campus']; ?><span> Campus, </span><?php echo $row10['Building']; ?><span>, </span><?php echo $row10['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- SA -->
    <div class="eventDetails" id="SA">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result11 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'SA' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row11 = mysqli_fetch_array( $result11 ) ){
      ?>

    <div class="eventCard SA resultCard">

       <h2><?php echo $row11['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row11['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row11['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row11['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row11['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row11['Start']; ?><span> ~ </span> <?php echo $row11['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row11['Campus']; ?><span> Campus, </span><?php echo $row11['Building']; ?><span>, </span><?php echo $row11['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Sale -->
    <div class="eventDetails" id="Sale">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result12 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Sale' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row12 = mysqli_fetch_array( $result12 ) ){
      ?>

    <div class="eventCard Sale resultCard">

       <h2><?php echo $row12['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row12['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row12['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row12['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row12['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row12['Start']; ?><span> ~ </span> <?php echo $row12['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row12['Campus']; ?><span> Campus, </span><?php echo $row12['Building']; ?><span>, </span><?php echo $row12['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Sports -->
    <div class="eventDetails" id="Sports">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result13 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Sports' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row13 = mysqli_fetch_array( $result13 ) ){
      ?>

    <div class="eventCard Sports resultCard">

       <h2><?php echo $row13['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row13['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row13['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row13['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row13['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row13['Start']; ?><span> ~ </span> <?php echo $row13['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row13['Campus']; ?><span> Campus, </span><?php echo $row13['Building']; ?><span>, </span><?php echo $row13['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>

    <!-- Yoga -->
    <div class="eventDetails" id="Yoga">
    <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result14 = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID HAVING E_type = 'Yoga' ORDER BY E_Name");
           
      ?>

      <?php
          // loop through results of database query, displaying them in the table
            while($row14 = mysqli_fetch_array( $result14 ) ){
      ?>

    <div class="eventCard Yoga resultCard">

       <h2><?php echo $row14['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row14['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row14['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row14['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row14['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row14['Start']; ?><span> ~ </span> <?php echo $row14['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row14['Campus']; ?><span> Campus, </span><?php echo $row14['Building']; ?><span>, </span><?php echo $row14['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>
    </div>

      <?php
        // close the loop
          }
      ?>
    </div>



  </div>

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

<script>
  
  function myfunction(elementID){
    document.getElementById("CS").style.display = "none";
    document.getElementById("Dance").style.display = "none";
    document.getElementById("Election").style.display = "none";
    document.getElementById("Environment").style.display = "none";
    document.getElementById("Fitness").style.display = "none";
    document.getElementById("Fun").style.display = "none";
    document.getElementById("GMM").style.display = "none";
    document.getElementById("Leadership").style.display = "none";
    document.getElementById("Music").style.display = "none";
    document.getElementById("Reading").style.display = "none";
    document.getElementById("SA").style.display = "none";
    document.getElementById("Sale").style.display = "none";
    document.getElementById("Sports").style.display = "none";
    document.getElementById("Yoga").style.display = "none";
    document.getElementById(elementID).style.display = "grid";
  }

  function myfunction2(elementID1){
    document.getElementById("CST").style.border= "none";
    document.getElementById("DT").style.border = "none";
    document.getElementById("ET").style.border= "none";
    document.getElementById("ENT").style.border = "none";
    document.getElementById("FT").style.border = "none";
    document.getElementById("FUT").style.border = "none";
    document.getElementById("GT").style.border = "none";
    document.getElementById("LT").style.border= "none";
    document.getElementById("MT").style.border = "none";
    document.getElementById("RT").style.border= "none";
    document.getElementById("SAT").style.border = "none";
    document.getElementById("ST").style.border= "none";
    document.getElementById("SPT").style.border= "none";
    document.getElementById("YT").style.border = "none";
    document.getElementById(elementID1).style.border = "double 8px #CE9F35";
  }


</script>

</body>

</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>