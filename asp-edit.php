<?php
include('asp-renderform.php');

// connect to the database
include('connect-db.php');

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
		$tdate = mysqli_real_escape_string($connection, htmlspecialchars($_POST['tdate']));
		$start = mysqli_real_escape_string($connection, htmlspecialchars($_POST['start']));
		$end = mysqli_real_escape_string($connection, htmlspecialchars($_POST['end']));
		$date = date("Y-m-d", strtotime($tdate));
		$tstart = date("H:i:s", strtotime($start));
		$tend = date("H:i:s", strtotime($end));


		// check that firstname/lastname fields are both filled in
		if ($firstname == '' || $tdate = "" || $start = "" || $end = "") {
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
			renderForm($id, $firstname, $tdate, $start, $end, $error);

		} else {
			// save the data to the database
			$result = mysqli_query($connection, "UPDATE Avaliable_Spot SET Space_ID='$firstname', `Date` ='$date', Start = '$tstart', `End` = '$tend' WHERE Spot_ID='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: welcome.php");
		}
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM Avaliable_Spot WHERE Spot_ID='$id'");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$firstname = $row['Space_ID'];
			$tdate = $row['Date'];
			$start = $row['Start'];
			$end = $row['End'];

			// show form
			renderForm($id, $firstname, $tdate, $start, $end, '');
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>