<?php
include('asp-newrenderform.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$id = $_POST['id'];
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$tdate = mysqli_real_escape_string($connection, htmlspecialchars($_POST['tdate']));
	$start = mysqli_real_escape_string($connection, htmlspecialchars($_POST['start']));
	$end = mysqli_real_escape_string($connection, htmlspecialchars($_POST['end']));
	$date = date("Y-m-d", strtotime($tdate));
	$tstart = date("H:i:s", strtotime($start));
	$tend = date("H:i:s", strtotime($end));

	// check to make sure both fields are entered
	if ($firstname == '' || $id == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname,$tdate, $start, $end, $error);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO Avaliable_Spot (Spot_ID, Space_ID, `Date`, Start, `End`) VALUES ('$id', '$firstname', '$date', '$tstart', '$tend')");

		// once saved, redirect back to the view page
		header("Location: welcome.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','');
}
?>