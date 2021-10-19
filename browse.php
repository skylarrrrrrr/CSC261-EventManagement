<?php session_start(); ?>
<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
		<div class="topheading">
			
			<h1>Browse<span class="subh1">｜ Discover all events available on the campus</span></h1>
			
		</div>

	<!-- Table Section  -->
	<div class="eventDetails">
	 	     <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT E_Name, E_ID, O_Name, E_type, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End, Campus, Building, Room FROM EventType, Organization INNER JOIN (Organize INNER JOIN (EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID) ON EventsApproved.E_ID = Organize.Event_ID) ON Organization.O_ID = Organize.O_ID WHERE EventsApproved.E_ID = EventType.Event_ID ORDER BY E_Name");

          /*
            SELECT E_Name, E_ID, E_type, O_Name FROM EventsApproved, EventType WHERE EventsApproved.E_ID = EventType.Event_ID

            SELECT E_Name, E_ID, O_Name FROM EventsApproved INNER JOIN (Organization INNER JOIN Organize ON Organization.O_ID = Organize.O_ID) ON EventsApproved.E_ID = Organize.Event_ID ORDER BY E_Name

            SELECT E_Name, E_ID, Avaliable_Spot.Date, Avaliable_Spot.Start, Avaliable_Spot.End FROM EventsApproved INNER JOIN (Avaliable_Spot INNER JOIN Avaliable_Space ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID ORDER BY E_Name

            SELECT E_Name, E_ID, Campus, Building, Room FROM EventsApproved INNER JOIN (Avaliable_Space INNER JOIN (Avaliable_Spot INNER JOIN Space ON Avaliable_Spot.Space_ID = Space.Space_ID ) ON Avaliable_Spot.Spot_ID = Avaliable_Space.Spot_ID) ON EventsApproved.E_ID = Avaliable_Space.Event_ID ORDER BY E_Name
          */
           
        ?>

        <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result ) ){
        ?>

          <div class="eventCard">
            
            <h2><?php echo $row['E_Name']; ?></h2>

            <section class="infoContainer">
              <h3>Event ID <span class="einfo"><?php echo $row['E_ID']; ?></span></h3>
              <h3>Type <span class="einfo"><?php echo $row['E_type']; ?></span></h3>
              <h3>Sponsor <span class="einfo"><?php echo $row['O_Name']; ?></span></h3>
              <h3>Date <span class="einfo"><?php echo $row['Date']; ?></span></h3>
              <h3>Time <span class="einfo"><?php echo $row['Start']; ?><span> ~ </span> <?php echo $row['End']; ?></span></h3>
              <h3>Location <span class="einfo"><?php echo $row['Campus']; ?><span> Campus, </span><?php echo $row['Building']; ?><span>, </span><?php echo $row['Room']; ?></span></h3>
              <a href="register.php">Register now</a>
            </section>

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
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>
