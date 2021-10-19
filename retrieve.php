<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
		<div class="topheading">
			
			<h1>Retrieve<span class="subh1">｜ To manage your bookings </span></h1>
			
		</div>

		<div class="surveyContainer">
			
			<h2>Manage your reservations</h2>

			<form method="post" action="retrieve-processor.php">

				<section class="field">
					<label for="StudentID">Student ID</label><br><input type="text" name="StudentID" id="StudentID" required>
				</section>

				<div class="submit submitr">
         			<button name="send" type="submit" value="Book Now!" onclick="required()">Retrieve</button>
      			</div>

			</form>

		</div>

</div>

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

</body>

</html>