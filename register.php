<?php include "inc/html-top.php";?>
	
	<!-- Navigation -->
	<?php include "inc/nav.php";?>

	<!-- Top section -->
		<div class="topheading">
			
			<h1>Register<span class="subh1">｜ Reserve your spot now </span></h1>
			
		</div>

	<!-- Table Section  -->
	<div class="surveyContainer" id="surveyContainer">

      <h2>Researve A Spot</h2>

    <form method="post" action="form-processor.php">

      <fieldset>

        <legend>Personal Information</legend>
        <section class="field">
        <label for="StudentID">Student ID</label><br><input type="text" name="StudentID" id="StudentID" required><br>
        </section>
        <section class="field">
        <label for="Fname">First Name</label><br><input type="text" name="Fname" id="Fname" required><br>
        </section>
        <section class="field">
        <label for="Minit">Middle Initial</label><br><input type="text" name="Minit" id="Minit"><br>
        </section>
        <section class="field">
        <label for="Lname">Last Name</label><br><input type="text" name="Lname" id="Lname" required><br>
        </section>
        <section class="field">
        <label for="Year">Class Year</label><br><input type="text" name="Year" id="Year"><br>
        </section>
        <section class="field">
        <label for="Email">Email</label><br><input type="Email" name="Email" id="Email"><br>
        </section>
        <section class="radio">
        <h3>Sex</h3>
        <input type="radio" name="Sex" id="S-Female" value="F"><label for="S-Female">Female</label>
        <input type="radio" name="Sex" id="S-Male" value="M"><label for="S-Male">Male</label><br>
        </section>

        <legend>Event Information</legend>
        <label for="Event_ID">Event ID</label><br><input type="text" name="Event_ID" id="Event_ID" required>

        
      </fieldset>

       <div class="submit">
         <button name="send" type="submit" value="Book Now!" onclick="required()">Book Now!</button>
       </div>

    </form>
		
	</div>

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

</body>

</html>