<?php session_start(); ?>
<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
		<div class="topheading">
			
			<h1>Retrieve<span class="subh1">｜ To manage your bookings </span></h1>
			
		</div>

		<div class="surveyContainer">
			
			<h2>Manage your reservations</h2>

			<form>

				 <?php
          			// connect to the database
          			include('connect-db.php');

          			$StudentID = $_POST['StudentID'];

          			// get results from database
          			// $result = mysqli_query($connection, "SELECT Com_register.Event_ID, EventsApproved.E_Name FROM Com_register, EventsApproved WHERE EventsApproved.E_ID = Com_register.Event_ID HAVING Com_register.S_ID = '$StudentID'");
          			$result = mysqli_query($connection, "SELECT ReservationID, Event_ID, E_Name FROM Com_register, EventsApproved WHERE EventsApproved.E_ID = Com_register.Event_ID AND S_ID = '$StudentID'");
          		?>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">EventID </th>
                <th scope="col">Event Name</th>
                <th scope="col" colspan="1"><em>Modify</em></th>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['Event_ID']; ?></td>
              <td><?php echo $row['E_Name']; ?></td>
              <td><a onclick="return confirm('Are you sure you want to cancel this reservation: <?php echo $row["Event_ID"]; ?>?')" href="retrieve-delete.php? id=<?php echo $row['ReservationID']; ?>">Delete</a></td>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
            <a href="register.php">Register a new event!</a>        
        </div>

				
			</form>

		</div>

</div>

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

</body>

</html>

<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>