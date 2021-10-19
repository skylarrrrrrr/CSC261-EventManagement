<?php
include('ae-newrenderform.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$id = $_POST['id'];
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$contact = mysqli_real_escape_string($connection, htmlspecialchars($_POST['contact']));
	$cost = mysqli_real_escape_string($connection, htmlspecialchars($_POST['cost']));
	$audience = mysqli_real_escape_string($connection, htmlspecialchars($_POST['audience']));
	$sid = mysqli_real_escape_string($connection, htmlspecialchars($_POST['sid']));

	// check to make sure both fields are entered
	if ($firstname == '' || $id == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $contact, $cost, $audience, $sid, $error);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO EventsApproved (E_ID, E_Name, Contact, Cost, Audience, Mgr_ID) VALUES ('$id', '$firstname', '$contact', '$cost', '$audience', '$sid')");

		// once saved, redirect back to the view page
		header("Location: welcome.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','');
}
?>