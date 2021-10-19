<?php
// creates the edit record form
function renderForm($id, $firstname, $mname, $lastname, $sex, $cyear, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add a Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="header-container">
	<h1>Add a Record</h1>
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
		<label>Student ID: *</label>
		<input class="form-control" placeholder="Enter Student ID" type="text" name="id" value="<?php echo $id; ?>"/><br>
	</div>
	<div class="form-group">
		<label>First Name: *</label> 
		<input class="form-control" placeholder="Enter First Name" type="text" name="firstname" value="<?php echo $firstname; ?>"/><br>
	</div>
	<div class="form-group">
		<label>Middle Initial: </label> 
		<input class="form-control" placeholder="Enter Middle Initial" type="text" name="mname" value="<?php echo $mname; ?>"/><br>
	</div>
	<div class="form-group">
		<label>Last Name: *</label> 
		<input class="form-control" placeholder="Enter Last Name" type="text" name="lastname" value="<?php echo $lastname; ?>"/><br>
	</div>
	<div class="form-group">
		<label>Sex: </label> 
		<input class="form-control" placeholder="Enter Sex" type="text" name="sex" value="<?php echo $sex; ?>"/><br>
	</div>
	<div class="form-group">
		<label>Class Year: </label> 
		<input class="form-control" placeholder="Enter Class Year" type="text" name="cyear" value="<?php echo $cyear; ?>"/><br>
	</div>
	<div class="form-group">
		<label>Email Address: </label> 
		<input class="form-control" placeholder="Enter Email Address" type="text" name="email" value="<?php echo $email; ?>"/><br>
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