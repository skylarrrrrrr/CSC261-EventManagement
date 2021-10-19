 <?php

// connect to the database
     include'connect-db.php';

	 $StudentID = $_POST['StudentID'];
	 $Fname = $_POST['Fname'];
	 $Minit = $_POST['Minit'];
	 $Lname = $_POST['Lname'];
	 $Sex = $_POST['Sex'];
	 $Year = $_POST['Year'];
	 $Email = $_POST['Email'];
	 $Event_ID = $_POST['Event_ID'];

     
     $result = mysqli_query($connection, "INSERT INTO Participants (StudentID, Fname, Minit, Lname, Sex, Year, Email) VALUES ('$StudentID', '$Fname', '$Minit', '$Lname', '$Sex', '$Year', '$Email')");
           
?>



<?php

// connect to the database
     include'connect-db.php';


     $StudentID = $_POST['StudentID'];
     $Event_ID = $_POST['Event_ID'];

     // save the data to the database
	 $result = mysqli_query($connection, "INSERT INTO Com_register (S_ID, Event_ID) VALUES ('$StudentID','$Event_ID')");

?>

  

<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "yzeng16@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = $_POST['Email'];
$subject = "U of R Event Reservation Confirmation";
// $txt = "Dear,";


// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$Fname = Trim(stripslashes($_POST['Fname'])); 
$Event_ID = Trim(stripslashes($_POST['Event_ID'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
// notice: no matter how many radio buttons, there's only one answer

// // this is from the TEXTAREA field...
// $_____________ = Trim(stripslashes($_POST['_____________'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

// $body = "Information"; // initialize the variable, then start concatenating
//             // backslash-n means new-line in emails

$body .= "Hi "; //...a label
$body .= $Fname;      //...a variable
$body .= ",\n\n";              //...a new line
$body .= "Thank you for using University of Rochester Event!\n";
$body .= "This is a confirmation email to confirm your booking for Event "; //...a label
$body .= $Event_ID;      //...a variable
$body .= ".\n\n";              //...a new line
 
 //...a label
// $body .= $address;      //...a variable             //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
// $body .= "_____________: \n";       // a heading for your checkbox section

// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// $body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...

// $favorite1=$_POST['favorite1'];
// $message1="You selected".$favorite1.".";


// $favorite2=$_POST['favorite2'];
// $message2="You selected".$favorite2.".";

// $favorite3=$_POST['favorite3'];
// $message3="You selected".$favorite3.".";

// $favorite4=$_POST['favorite4'];
// $message4="You selected".$favorite4.".";

// $score=$_POST['score'];
// $message5="You selected".$score.".";

// This is for your TEXTAREA
// $body .= "_____________: \n";       // a heading for your text area
// $body .= $_____________;            // the variable for your text area
// $body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>


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
		<div class="topheading">
			
			<h1>Reserved!<span class="subh1">｜ Let the fun begin </span></h1>
			
		</div>


<div class= "thankyou">


	 	<p>Return to <a href="index.php">index page</a></p>
	 	<p>Click <a href="retrieve.php" class="rhere">here </a> to retrieve your reservation.</p>


</div>

<?php include "inc/footer.php";?>


</body>

</html>
