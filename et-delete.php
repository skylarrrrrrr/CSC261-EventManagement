<?php
// Initialize the session
session_start();

?>
<?php
// connect to the database
include('connect-db.php');

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	// get id value
	$id = $_GET['id'];

	// delete the entry
	$result = mysqli_query($connection, "DELETE FROM EventType WHERE Event_ID=$id");

	// redirect back to the homepage to see the results
	header("Location: welcome.php");

} else {
	// if id isn't set, or isn't valid, redirect back to homepage
	header("Location: welcome.php");
}
?>