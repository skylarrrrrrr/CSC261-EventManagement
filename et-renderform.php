<?php
// creates the edit record form
function renderForm($id, $firstname, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit a Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="header-container">
	<h1>Edit a Record</h1>
	<p>Don't worry info is secured.</p>
</div>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label>Event ID:</label> <?php echo $id; ?><br>
	</div>
	<div class="form-group">
		<label>Event Type: *</label> 
		<input class="form-control" placeholder="Enter new Event Type" type="text" name="firstname" value="<?php echo $firstname; ?>"/><br>
	</div>
	<div class="form-group">* required</div>
	<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">
</form>

<div>
	<br>
	<a href=".">Cancel</a>
</div>
</div>
</body>
</html>
<?php
}
?>